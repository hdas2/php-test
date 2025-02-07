<?php
  // Start the session (optional, if needed)
  session_start();

  // Define a title
  $title = "Welcome to My Website";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>This is a simple PHP index page.</p>
    <p>The current server time is: <?php echo date('Y-m-d H:i:s'); ?></p>
</body>
</html>
