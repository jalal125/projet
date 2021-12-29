<?php include('header.php'); ?>

    <!--Interface-->
    <section id="interface">
      

      <?php include('navigation.php'); ?>

      
        <!--Title-->
        <h3 class="i-name">Update Product</h3>


        <?php
         
           if(!isset($_GET['product_id'])){
               header('location: products.php?error_message=product id was not given');
               exit;
           }
        
        ?>

       <div class="container-fluid w-50 my-5">    
        <form method="POST" action="update_product.php">
            <div class="mb-2 form-group">
                <label>Product Id</label>
                <p class="form-control"><?php echo $_GET['product_id'];?></p>
                <input type="hidden" name="product_id" value="<?php echo $_GET['product_id'];?>"/>
            </div>
            <div class="mb-2 form-group">
             <label>Title</label>
             <input type="text" class="form-control" placeholder="title" name="title" id="title" />
            </div>
 

            <div class="mb-2 form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="description" name="description" id="description" />
            </div>


            <div class="mb-2 form-group">
                <label>Price</label>
                <input type="text" class="form-control" placeholder="price" name="price" id="price" />
            </div>

            <div class="mb-2 form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" placeholder="quantity" name="quantity" id="quantity" />
            </div>


            <select class="form-select mb-2" name="category">
                <option value="shoes">Shoes</option>
                <option value="bags">Bags</option>
                <option value="clothes">Clothes</option>
                <option value="shirts">Shirts</option>
            </select>

         <div class="mb-2 text-center">
             <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_product_btn" id="update_product_btn"/>
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













