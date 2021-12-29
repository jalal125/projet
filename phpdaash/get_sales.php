<?php

include('connection.php');



//1. determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];


}else{
   $page_no = 1;

}


//2. return number of products
$stmt1 = $conn->prepare("select count(*) as total_sales from sales");
$stmt1->execute();
$stmt1->bind_result($total_sales);
$stmt1->store_result();
$stmt1->fetch();


//3 products per page
$total_sales_per_page = 3;

$offset = ($page_no-1) * $total_sales_per_page;

$total_no_of_pages = ceil($total_sales/$total_sales_per_page); 



//4. get products

$stmt2 = $conn->prepare("select * from sales limit $offset,$total_sales_per_page");
$stmt2->execute();
$sales = $stmt2->get_result();





?>