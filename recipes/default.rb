#
# Cookbook Name:: awesome_customers_delivery
# Recipe:: default
#
# Copyright (c) 2016 The Authors, All Rights Reserved.
include_recipe 'awesome_customers_delivery::package_cache'
include_recipe 'awesome_customers_delivery::firewall'
include_recipe 'awesome_customers_delivery::user'
include_recipe 'awesome_customers_delivery::web'
