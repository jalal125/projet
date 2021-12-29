<?php

include('connection.php');




$stmt1 = $conn->prepare("select count(*) as total_products from product");
$stmt1->execute();
$stmt1->bind_result($total_products);
$stmt1->store_result();
$stmt1->fetch();


$stmt2 = $conn->prepare("select count(*) as total_users from employee");
$stmt2->execute();
$stmt2->bind_result($total_users);
$stmt2->store_result();
$stmt2->fetch();


$stmt3 = $conn->prepare("select sum(quantity) as total_quantity from sales");
$stmt3->execute();
$stmt3->bind_result($total_quantity);
$stmt3->store_result();
$stmt3->fetch();



$stmt4 = $conn->prepare("select sum(total) as total_money from sales");
$stmt4->execute();
$stmt4->bind_result($total_money);
$stmt4->store_result();
$stmt4->fetch();






?>