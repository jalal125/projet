




<?php include('header.php'); ?>

<!--Interface-->
<section id="interface">
    
<?php include('navigation.php'); ?>

    <!--Title-->
    <h3 class="i-name">Products</h3>


   <?php include('messages.php'); ?>






        <?php

                    include('connection.php');


                 
                    if(isset($_POST['search_input'])){
                        $_SESSION['search_input'] = $_POST['search_input'];
                        $search_input = $_SESSION['search_input'];
                    }else{
                        //2,3,4
                        $search_input = $_SESSION['search_input'];
                    }


                    //1. determine page no
                    if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
                        $page_no = $_GET['page_no'];


                    }else{
                    $page_no = 1;

                    }


                    //2. return number of products
                    $stmt1 = $conn->prepare("select count(*) as total_products from product");
                    $stmt1->execute();
                    $stmt1->bind_result($total_products);
                    $stmt1->store_result();
                    $stmt1->fetch();


                    //3 products per page
                    $total_products_per_page = 5;

                    $offset = ($page_no-1) * $total_products_per_page;

                    $total_no_of_pages = ceil($total_products/$total_products_per_page); 



                    //4. get products

                    
                    $stmt2 = $conn->prepare("select * from product where name like ? limit $offset,$total_products_per_page");
                    $stmt2->bind_param("s",strval("%".$search_input."%"));
                    $stmt2->execute();
                    $products = $stmt2->get_result();


             



    ?>











   


    <!--Table-->
    <div class="board">
        <table width="100%">
            <thead>
                <tr>
                    <td>Title</td>
                    <td>Category</td>
                    <td>Quantity</td>
                    <td>Price</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>

            <?php foreach($products as $product){ ?>
                <tr>
                    <td class="people"> 
                        <p><img src="assets/imgs/<?php echo $product['image']; ?>"/></p>
                        <div class="people-description">
                            <h5><?php echo $product['name']; ?></h5>
                        </div>
                    </td>

                    <td class="people-des">
                        <h5><?php echo $product['category']; ?></h5>
                       
                    </td>

                    <td class="active">
                        <p><?php echo $product['quantity']; ?></p>
                    </td>

                    <td class="role">
                        <p>$<?php echo $product['price']; ?></p>
                    </td>


                    <td class="edit">
                        <p><a href="<?php echo "edit_product.php?product_id=".$product['id'];?>">Edit</a></p>
                    </td>


                    <td class="edit">
                        <p><a href="<?php echo "edit_product_image.php?product_id=".$product['id'];?>">Edit Image</a></p>
                    </td>


                    <td class="edit">
                        <p><a href="#">Delete</a></p>
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
       

          <li class="page-item">
              <a class="page-link" href="?page_no=1">1</a>
          </li>


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















