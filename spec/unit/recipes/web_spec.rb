#
# Cookbook Name:: awesome_customers_delivery
# Spec:: default
#
# Copyright (c) 2016 The Authors, All Rights Reserved.

require 'spec_helper'

describe 'awesome_customers_delivery::web' do
  context 'When all attributes are default, on Ubuntu 14.04' do
    let(:chef_run) do
      runner = ChefSpec::ServerRunner.new(platform: 'ubuntu', version: '14.04')
      runner.converge(described_recipe)
    end

    it 'converges successfully' do
      expect { chef_run }.to_not raise_error
    end

    it "creates httpd_service['customers']" do
      expect(chef_run).to create_httpd_service('customers')
        .with(
          mpm: 'prefork'
        )
    end

    it "creates httpd_config['customers']" do
      expect(chef_run).to create_httpd_config 'customers'
    end

    it "creates directory['/var/www/customers/public_html']" do
      expect(chef_run).to create_directory('/var/www/customers/public_html')
        .with(
          recursive: true
        )
    end

    %w(customer.php index.php).each do |file|
      full_path = File.join('/var/www/customers/public_html', file)
      it "creates cookbook_file[#{full_path}]" do
        expect(chef_run).to create_cookbook_file(full_path)
          .with(
            mode: '0644',
            owner: 'web_admin',
            group: 'web_admin'
          )
      end
    end

    it "installs httpd_module['php5']" do
      expect(chef_run).to create_httpd_module('php5')
    end
  end
end
