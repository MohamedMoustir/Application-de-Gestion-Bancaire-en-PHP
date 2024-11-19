
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'nouvealogin');
if ($con->connect_error) {
    die("Error: " . $con->connect_error);
};

?> 
</body>
</html>