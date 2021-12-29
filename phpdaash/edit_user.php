<?php include('header.php'); ?>


    <!--Interface-->
    <section id="interface">
        

      <?php include('navigation.php'); ?>


        <!--Title-->
        <h3 class="i-name">Update User</h3>



        <?php
         
           if(!isset($_GET['user_id'])){
               header('location: index.php?error_message=user id was not given');
               exit;
           }
        
        ?>


       <div class="container-fluid w-50 my-5">    
        <form method="POST" action="update_user.php">
            <div class="mb-2 form-group">
                <label>User Id</label>
                <p class="form-control"><?php echo $_GET['user_id']; ?></p>
                <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>"/>
            </div>
            <div class="mb-2 form-group">
             <label>Name</label>
             <p class="form-control">John</p>
            </div>
 

            <div class="mb-2 form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="email" name="email" id="email" />
            </div>


            <div class="mb-2 form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="title" name="title" id="title" />
            </div>

            <div class="mb-2 form-group">
                <label>Role</label>
                <input type="text" class="form-control" placeholder="role" name="role" id="role" />
            </div>


            <select class="form-select mb2" name="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

         <div class="mb-2 text-center">
             <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_user_btn" id="update_user_btn"/>
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













