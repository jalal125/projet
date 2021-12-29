<?php

include('connection.php');


if( isset($_POST['add_product_btn'] )){


    $title = $_POST['title']; 
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];

    //image file
    $image = $_FILES['image']['tmp_name'];

    //image name
    $image_name = $title . ".jpeg";

    //upload image

    move_uploaded_file($image,"assets/imgs/".$image_name);

    $stmt = $conn->prepare("INSERT INTO product (name,description,price,quantity,category,image)
                            VALUES (?,?,?,?,?,?)");

    $stmt->bind_param("sssiss",$title,$description,$price,$quantity,$category,$image_name);
    
    if($stmt->execute()){
        header("location: products.php?success_message=Product was created successfully");
    }else{
        header("location: products.php?error_message=Error, product was not created");
    }

}else{

    header("location: products.php?error_message=Error, try again");

}



?>