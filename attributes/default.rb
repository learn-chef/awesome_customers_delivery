default['firewall']['allow_ssh'] = true
default['awesome_customers_delivery']['open_ports'] = [80, 443]

default['awesome_customers_delivery']['user'] = 'web_admin'
default['awesome_customers_delivery']['group'] = 'web_admin'

default['awesome_customers_delivery']['document_root'] = '/var/www/customers/public_html'
default['awesome_customers_delivery']['content_files'] = %w(customer.php index.php styles.css vis.js world-110m.json)
