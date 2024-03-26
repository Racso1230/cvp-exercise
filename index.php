<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  type="text/css"rel="stylesheet" href="static/static.css">
    <title>CVP Exercise</title>
</head>
<body>

<div class= "nav">
    <a href="https://cvp.com/"><img  class = "logo "data-pagespeed-no-transform="" data-pagespeed-no-defer="" alt="CVP Homepage" src="https://cvp.com/img/assets/cvp_logo_2021.svg"></a>
    <div class= "nav-items">
        <a class="active" href="https://cvp.com/department/cameras">Cameras</a>
    <a href="https://cvp.com/department/lenses">Lenses</a>
    <a href="https://cvp.com/department/accessories">Accessories</a>
    <a href="https://cvp.com/department/audio">Audio</a>
    <a href="https://cvp.com/department/monitoring">Monitoring</a>
    <a href="https://cvp.com/department/lighting">Lighting</a>
    <a href="https://cvp.com/department/support-motion">Support and Motion</a>
    <a href="https://cvp.com/department/studio">Studio</a>
    </div>
</div>
    <h1>CVP Product Catalogue</h1>
</body>
</html>





<?php
$serverName = "localhost";
$userName = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=cvp_exercise", $userName, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("Connected");
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>