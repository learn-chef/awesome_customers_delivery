#
# Cookbook Name:: awesome_customers_delivery
# Recipe:: web
#
# Copyright (c) 2016 The Authors, All Rights Reserved.
# Install Apache and start the service.
httpd_service 'customers' do
  mpm 'prefork'
  action [:create, :start]
end

# Add the site configuration.
httpd_config 'customers' do
  instance 'customers'
  source 'customers.conf.erb'
  notifies :restart, 'httpd_service[customers]'
end

# Create the document root directory.
directory node['awesome_customers_delivery']['document_root'] do
  recursive true
end

# Deploy content.
node['awesome_customers_delivery']['content_files'].each do |file|
  cookbook_file File.join(node['awesome_customers_delivery']['document_root'], file) do
    source file
    mode '0644'
    owner node['awesome_customers_delivery']['user']
    group node['awesome_customers_delivery']['group']
  end
end

# Install the mod_php5 Apache module.
httpd_module 'php5' do
  instance 'customers'
end
