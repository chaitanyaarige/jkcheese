<div>
    <?php include 'Header.php';?>
</div>

<div id="menuleft">
    <div class="ui hidden divider"> <br> </div>


    <div class="ui primary compact basic button">
        <a href="loginpage.php">login</a>
    </div>

    <h2 class="ui huge header">My Account Details: </h2>
    <p> <small>Products you have ordered</small> </p> <br>
   
   
    <div class="ui segment">
        <div class="ui stackable grid container">
            <!-- first column -->
            <div class="two wide column">
                <img class="polaroid" id="myaccount-product-padding" src="assets/images/coulommiers_lait.jpg" alt="About us"
                    style="width:100px;height:100px">
            </div>
            <!-- Second column -->
            <div class="ten wide column">
                <h4>Product Name: <a href="#"> {{Product Cheese}} </a> </h4>
                <h4>Quantity: {{2}} </h4>
                <h4>Price: <i class="fa fa-inr" aria-hidden="true"></i> 100 </h4>
                </h4>
                <h4>Order Date: {{2}} </h4>
            </div>
        </div>
    </div>

    <!-- second row  -->
    <div class="ui segment">
        <div class="ui stackable grid container">
            <!-- first column -->
            <div class="two wide column">
                <img class="polaroid" id="myaccount-product-padding" src="assets/images/coulommiers_lait.jpg" alt="About us"
                    style="width:100px;height:100px">
            </div>
            <!-- Second column -->
            <div class="ten wide column">
                <h4>Product Name: <a href="#"> {{Product Cheese}} </a> </h4>
                <h4>Quantity: {{2}} </h4>
                <h4>Price: <i class="fa fa-inr" aria-hidden="true"></i> 100 </h4>
                </h4>
                <h4>Order Date: {{2}} </h4>
            </div>
        </div>
    </div>
</div>


<div class="ui hidden divider"> <br> </div>




<div>
    <?php include 'Footer.php';?>
</div>