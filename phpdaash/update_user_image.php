<?php


include('connection.php');


if(isset($_POST['update_user_image_btn'])){

    $user_id = $_POST['user_id'];
    $image = $_FILES['image']['tmp_name'];

    $image_name = strval($user_id). strval(time()). ".jpeg";

    move_uploaded_file($image,"assets/imgs/".$image_name);



    $stmt = $conn->prepare("UPDATE employee SET  image=?   WHERE id=?");

        $stmt->bind_param("si",$image_name,$user_id);

        if($stmt->execute()){
           header("location: index.php?success_message=User image was updated successfully");
        }else{
           header("location: index.php?error_message=Error, user image was not updated");
        }



}else{

      header("location: index.php?error_message=Error, try again");

}


?>