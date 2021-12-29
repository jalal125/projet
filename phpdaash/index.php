

<?php include('header.php'); ?>


    <!--Interface-->
    <section id="interface">
       

         <?php include('navigation.php'); ?>

        <!--Title-->
        <h3 class="i-name">Dashboard</h3>


        <?php include('messages.php');?>


        <?php include('get_stats.php'); ?>

        <!--Cards-->
        <div class="values">
            <div class="val-box">
                <i class="fas fa-users"></i>
                <div>
                    <h3><?php if($total_users != null){ echo $total_users;}?></h3>
                    <span>Users</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fas fa-shopping-cart"></i>
                <div>
                    <h3><?php if($total_products != null){ echo $total_products;}?></h3>
                    <span>Products</span>
                </div>
            </div>


            <div class="val-box">
                <i class="fas fa-corn"></i>
                <div>
                    <h3><?php if($total_quantity != null){ echo $total_quantity;}?></h3>
                    <span>Sold</span>
                </div>
            </div>


            <div class="val-box">
                <i class="fas fa-dollar-sign"></i>
                <div>
                    <h3>$<?php if($total_money != null){ echo $total_money;}?></h3>
                    <span>Profit</span>
                </div>
            </div>
        </div>


       




        <!--Table-->
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Title</td>
                        <td>Status</td>
                        <td>Role</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>




                <?php include('get_users.php'); ?>

                <?php foreach($users as $user){ ?>
                    <tr>
                        <td class="people"> 
                            <p><img src="assets/imgs/<?php echo $user['image']; ?>"/></p>
                            <div class="people-description">
                                <h5><?php echo $user['name']; ?></h5>
                                <p><?php echo $user['email']; ?></p>
                            </div>
                        </td>

                        <td class="people-des">
                            <h5><?php echo $user['title']; ?></h5>
                          
                        </td>

                        <td class="active">
                            <p><?php echo $user['status']; ?></p>
                        </td>

                        <td class="role">
                            <p><?php echo $user['role']; ?></p>
                        </td>


                        <td class="edit">
                            <p><a href="<?php echo "edit_user.php?user_id=".$user['id']; ?>">Edit</a></p>
                        </td>

                        <td class="edit">
                            <p><a href="<?php echo "edit_user_image.php?user_id=".$user['id']; ?>">Edit Image</a></p>
                        </td>

                    </tr>


                <?php } ?>   


                   
                </tbody>
            </table>
        </div>




        <nav class="container mx-3" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?php if($page_no<=1){echo 'disabled';}?>">
                      <a class="page-link" href="<?php if($page_no<=1){echo'#';}else{echo '?page_no='.($page_no-1);}?>">Previous</a>
               </li>
              <li class="page-item"><a class="page-link" href="?page_no=1">1</a></li>
              <li class="page-item">
                  <a class="page-link" href="?page_no=2">2</a>
              </li>
              <?php if($page_no >= 3){ ?>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo "?page_no=". $page_no;?>"><?php echo $page_no;?></a>
                    </li>
              <?php } ?>
              <li class="page-item <?php if($page_no>= $total_no_of_pages){echo 'disabled';}?>">
                      <a class="page-link" href="<?php if($page_no>=$total_no_of_pages){echo'#';}else{echo '?page_no='.($page_no+1);}?>">Next</a>
               </li>
        
            </ul>
        </nav>









    </section>





    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass('active');
        })
    </script>

</body>
</html>













