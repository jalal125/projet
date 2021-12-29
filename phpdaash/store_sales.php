<?php

include('connection.php');


if( isset($_POST['add_sales_btn'] )){


    $employee_name = $_POST['employee_name']; 
    $employee_id = $_POST['employee_id'];
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total = $quantity * $price;
    $date = $_POST['date'];



    $stmt = $conn->prepare("INSERT INTO sales (user_id,product_id,employee_name,product_name,quantity,price,total,date)
                            VALUES (?,?,?,?,?,?,?,?)");

    $stmt->bind_param("iississs",$employee_id,$product_id,$employee_name,$product_name,$quantity,$price,$total,$date);
    
    if($stmt->execute()){
        header("location: sales.php?success_message=Sales were stored successfully");
    }else{
        header("location: sales.php?error_message=Error, could not store sales");
    }

}else{

    header("location: sales.php?error_message=Error, try again");

}



?>