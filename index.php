<?php
//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("heroku_b25adc18ca2502d"));
// $cleardb_server = $cleardb_url["us-cdbr-east-06.cleardb.net"];
// $cleardb_username = $cleardb_url["b527b1d3ff4ae8"];
// $cleardb_password = $cleardb_url["238f33a5"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>My PHP Website</title>
</head>
<body >
  <!-- You can output PHP including variables, etc -->
  <h1>Hello </h1>
  <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
  <h1>Hello heroku from PHP </h1>
</body>
</html>