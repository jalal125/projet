<?php


session_start();

//if admin is not logged in
if(!isset($_SESSION['admin_logged_in'])){
    header('location: login.php');
    exit;

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="assets/css/style.css"/>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
  


    <!--SideMenu-->
    <section id="menu">
        <div class="logo">
            <img src="assets/imgs/logo.jpeg"/>
            <h2>Dashboard</h2>
        </div>

        <div class="items">
            <li><i class="fas fa-chart-pie"></i><a href="index.php">Dashboard</a></li>
            <li><i class="fab fa-uikit"></i><a href="index.php">Users</a></li>
            <li><i class="fas fa-th-large"></i><a href="products.php">Products</a></li>
            <li><i class="fas fa-edit"></i><a href="sales.php">Sales</a></li>
            <li><i class="fab fa-cc-visa"></i><a href="add_product.php">Add Product</a></li>
            <li><i class="fab fa-cc-visa"></i><a href="add_sales.php">Add Sales</a></li>
            <li><i class="fas fa-hamburger"></i><a href="contact.php">Contact</a></li>
            <li><i class="fas fa-chart-line"></i><a href="help.php">Help</a></li>
        </div>
    </section>