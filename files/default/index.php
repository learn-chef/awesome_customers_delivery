<?php
require_once('customer.php');

// Generate a JSON-formatted string that holds the name and location of each customer.
$places .= '\'{"type": "FeatureCollection","features": [';

// Append data from each row
$comma = "";
foreach (get_sample_customers() as $customer) {
  $places .= $comma.'{ "type": "Feature", "properties": { "name": "'.$customer->first_name." ".$customer->last_name.'" }, "geometry": { "type": "Point", "coordinates": [ '.$customer->longitude.', '.$customer->latitude.' ] } }';
  $comma = ",";
}

$places .= ']}\'';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/queue-async/1.0.7/queue.min.js"></script>
  <script src="http://d3js.org/topojson.v0.min.js"></script>
  <script src="vis.js"></script>
  <script type="text/javascript">
    function show_customers() {
      create_map(JSON.parse(<?php echo $places; ?>));
    }
    window.onload = show_customers;
  </script>
</body>
</html>
