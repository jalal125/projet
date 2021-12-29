<div class="navigation">
            <!--Search-->
            <div class="n1">
               <div>
                   <i id="menu-btn" class="fas fa-bars"></i>
               </div>
                <div class="search">
                  
                    <form method="POST" action="search_products.php">
                    <input type="text" name="search_input" placeholder="search"/>
                        <button type="submit" name="search_btn" class="btn">
                           <i class="far fa-search"></i>
                        </button>
                    </form>

                </div>
            </div>

            <!--Profile-->
            <div class="profile">
               <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
               <a href="account.php"><i class="fas fa-user"></i></a>
            </div>
</div>