<?php
include_once 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        <?php
         include 'style.css';
         ?>
    </style>
</head>
<body>
<header class="header">
    <a href="index.php"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" alt=""></a>
    <a href="index.php?action=cars_list">Show cars</a>
    <a href="index.php?action=add_car">New entry</a>
</header>