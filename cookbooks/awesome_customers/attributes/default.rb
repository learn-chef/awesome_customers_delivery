default['firewall']['allow_ssh'] = true
default['awesome_customers']['open_ports'] = [80, 443]

default['awesome_customers']['user'] = 'web_admin'
default['awesome_customers']['group'] = 'web_admin'

default['awesome_customers']['document_root'] = '/var/www/customers/public_html'
default['awesome_customers']['content_files'] = %w(customer.php index.php styles.css vis.js world-110m.json)
