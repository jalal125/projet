²
<?php include('header.php'); ?>

<!--Interface-->
<section id="interface">
    
   <?php include('navigation.php'); ?>

    <!--Title-->
    <h3 class="i-name">Store Sales</h3>


   <div class="container-fluid w-50 my-5">    
    <form method="POST" enctype="multipart/form-data" action="store_sales.php"> 
        <div class="mb-2 form-group">
         <label>Employee id</label>
         <input type="number" class="form-control" placeholder="employee id" name="employee_id" id="employee_id" />
        </div>

        <div class="mb-2 form-group">
         <label>Product id</label>
         <input type="number" class="form-control" placeholder="product id" name="product_id" id="product_id" />
        </div>

        <div class="mb-2 form-group">
            <label>Employee Name</label>
            <input type="text" class="form-control" placeholder="employee name" name="employee_name" id="employee_name" />
        </div>


        <div class="mb-2 form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" placeholder="product name" name="product_name" id="product_name" />
        </div>

        <div class="mb-2 form-group">
            <label>Price</label>
            <input type="text" class="form-control" placeholder="price" name="price" id="price" />
        </div>

        <div class="mb-2 form-group">
            <label>Quantity</label>
            <input type="number" class="form-control" placeholder="quantity" name="quantity" id="quantity" />
        </div>


    

        <div class="mb-3 form-group">
            <label>Date</label>
            <input type="datetime-local" min="" class="form-control" placeholder="date" name="date" id="date" />
        </div>
        

     <div class="mb-2 text-center">
         <input type="submit" class="btn btn-primary mt-3" value="Add Sales" name="add_sales_btn" id="add_sales_btn"/>
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













