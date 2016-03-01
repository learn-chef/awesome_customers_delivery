<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers</title>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        font-family: sans-serif;
        padding: 5px;
      }
      table tr:nth-child(even) td {
        background-color: #95c7ea;
      }
    </style>
</head>
<body>
<?php
  require_once('customer.php');
  echo "<table>\n";
  foreach (get_sample_customers() as $customer) {
    echo "\t<tr>\n";
    echo "\t\t<td>$customer->id</td>\n";
    echo "\t\t<td>$customer->first_name</td>\n";
    echo "\t\t<td>$customer->last_name</td>\n";
    echo "\t\t<td>$customer->email</td>\n";
    echo "\t</tr>\n";
  }
  echo "</table>";
?>
</body>
</html>
