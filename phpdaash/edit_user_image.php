
<?php include('header.php'); ?>

    <!--Interface-->
    <section id="interface">
        
      <?php include('navigation.php'); ?>

        <!--Title-->
        <h3 class="i-name">Update User Image</h3>



        <?php
         
           if(!isset($_GET['user_id'])){
               header('location: index.php?error_message=user id was not given');
               exit;
           }
        
        ?>


       <div class="container-fluid w-50 my-5">    
        <form method="POST" enctype="multipart/form-data" action="update_user_image.php">
            <div class="mb-2 form-group">
                <label>User Id</label>
                <p class="form-control"><?php echo $_GET['user_id']; ?></p>
                <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>"/>
            </div>
           
 
        

            <div class="mb-2 form-group">
                <label>Image</label>
                <input type="file" class="form-control" placeholder="image" name="image" id="image" />
            </div>



         <div class="mb-2 text-center">
             <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_user_image_btn" id="update_user_image_btn"/>
         </div>
        
        </form>
    </div>




    </section>





    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass('active');
        })
    </script>

</body>
</html>













