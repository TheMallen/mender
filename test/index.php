<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mender Demo</title>
<?php

use mender\Mender;

require_once "../vendor/autoload.php";
$mender = new Mender(array(
        'path' => '',
    ));

$mender->enqueue( "assets/css/bootstrap.css" );
$mender->enqueue( "assets/css/bootstrap-theme.css" );
$mender->enqueue( "assets/js/jquery-1.10.2.js" );
$mender->enqueue( "assets/js/bootstrap.js" );
echo $mender->output( "cache/stylesheet.css" );
?>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="jumbotron">
            <div class="container">
                <h1>Hello, world!</h1>
                <p>This is a Mender demo</p>
                <p><a class="btn btn-primary btn-lg" href="https://github.com/TheMallen/Mender">Learn more &raquo;</a></p>
            </div>
        </div>
    </div>
</div>
<?php
echo $mender->output( "cache/javascript.js" );
?>
</body>
</html>
