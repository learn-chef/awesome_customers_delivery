#
# Cookbook Name:: awesome_customers
# Spec:: default
#
# Copyright (c) 2016 The Authors, All Rights Reserved.

require 'spec_helper'

describe 'awesome_customers::firewall' do
  context 'When all attributes are default, on Ubuntu 14.04' do
    let(:chef_run) do
      runner = ChefSpec::ServerRunner.new(platform: 'ubuntu', version: '14.04')
      runner.converge(described_recipe)
    end

    it 'converges successfully' do
      allow_any_instance_of(Chef::Recipe).to receive(:include_recipe)
      allow_any_instance_of(Chef::Recipe).to receive(:include_recipe).with('chef-sugar').and_return(true)
      expect { chef_run }.to_not raise_error
    end
  end
end
