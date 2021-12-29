<?php

include('connection.php');

if(isset($_POST['update_product_btn'])){

    $product_id = $_POST['product_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];


    $stmt = $conn->prepare("UPDATE product SET name=?, description=?, price=?, quantity=?, category=? 
                            WHERE id=?");

        $stmt->bind_param("sssisi",$title,$description,$price,$quantity,$category,$product_id);

        if($stmt->execute()){
           header("location: products.php?success_message=Product was updated successfully");
        }else{
           header("location: products.php?error_message=Error, product was not updated");
        }


}else{

    header("location: products.php?error_message=Error, try again");

}



?>