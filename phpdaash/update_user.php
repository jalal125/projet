<?php

include('connection.php');

if(isset($_POST['update_user_btn'])){

    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $role = $_POST['role'];
    $status = $_POST['status'];
   


    $stmt = $conn->prepare("UPDATE employee SET  email=?, title=?, role=?, status=? 
                            WHERE id=?");

        $stmt->bind_param("ssssi",$email,$title,$role,$status,$user_id);

        if($stmt->execute()){
           header("location: index.php?success_message=User was updated successfully");
        }else{
           header("location: index.php?error_message=Error, user was not updated");
        }


}else{

    header("location: index.php?error_message=Error, try again");

}



?>