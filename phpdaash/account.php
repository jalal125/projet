

<?php include('header.php'); ?>


<!--Interface-->
<section id="interface">
 
  <?php include('navigation.php'); ?>

    <!--Title-->
    <h3 class="i-name">Account</h3>


   <div class="container-fluid w-50 my-5">    

      <p>Hello, <?php echo $_SESSION['admin_name']; ?></p>
      <p>Your email: <?php echo $_SESSION['admin_email']; ?></p>
      <p><a href="logout.php">Logout</a></p>
    
   </div>




</section>





<script>
    $('#menu-btn').click(function(){
        $('#menu').toggleClass('active');
    })
</script>

</body>
</html>













