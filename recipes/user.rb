#
# Cookbook Name:: awesome_customers_delivery
# Recipe:: web_user
#
# Copyright (c) 2016 The Authors, All Rights Reserved.
group node['awesome_customers_delivery']['group']

user node['awesome_customers_delivery']['user'] do
  group node['awesome_customers_delivery']['group']
  system true
  shell '/bin/bash'
end
