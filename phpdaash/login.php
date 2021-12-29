<?php

session_start();


//check if admin is logged in
if(isset($_SESSION['admin_logged_in'])){
    header("location: index.php");
    exit;
}


include('connection.php');

if(isset($_POST['login_btn'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT id,name,email,password from admin WHERE 
                             email=? AND password=? LIMIT 1");

    $stmt->bind_param("ss",$email,$password); 

    if($stmt->execute()){
          $stmt->bind_result($id,$name,$email,$password);
          $stmt->store_result();
          

          if($stmt->num_rows() == 1){
              $stmt->fetch();

              //store admin info in session
              $_SESSION['admin_id'] = $id;
              $_SESSION['admin_email'] = $email;
              $_SESSION['admin_name'] = $name;
              $_SESSION['admin_logged_in'] = true;

              //send admin to dashboard
              header("location: index.php?success_message=Welcome Back");

          }else{

            header("location: login.php?error_message=Wrong email/password, try again");

          }

    }else{

        header("location: login.php?error_message=Error, try again");

    }
    




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
  

   <div class="container-fluid w-50 mt-5 mb-5">
       <div class="my-5 text-center">
           <img src="assets/imgs/logo.jpeg"/>
           <h3 class="mt-3">Admin Dashboard</h3>
       </div>

       <?php include('messages.php');?>

       <form method="POST" action="login.php">
           <div class="mb-2 form-group">
               <label>Email</label>
               <input type="email" class="form-control" placeholder="email" name="email" id="email" />
           </div>
           <div class="mb-2 form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="password" name="password" id="password" />
        </div>

        <div class="mb-2 text-center">
            <input type="submit" class="btn btn-primary mt-3" value="Login" name="login_btn" id="login_btn"/>
        </div>
       
       </form>
   </div>
   

</body>
</html>













