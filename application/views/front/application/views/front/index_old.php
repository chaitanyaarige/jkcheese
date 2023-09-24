<!-- Top Navigation Bar -->
<div>
    <?php include 'Header.php';?>
</div>
<!-- image slideshow -->
<div>
    <?php include 'slideshow.php';?>
</div>
<div>
  <?php include 'CheeseFinder.php';?>
</div>
<!-- body starts -->
<div class="fourteen wide column" id="column_1">
<!-- <div class="computer_our_clients">
    <div class="ui segment"> <br> <br>
        <h1 class="ui centered header" id="header-size40">Explore</h1> <br> <br>
        <div class="ui stackable fluid grid container">
<?php foreach ($recommended1 as $value) {?>

    <?php if($value->pro_status==1){?>
            <div class="four wide column">
                <form class="ui form" action="<?php echo base_url()?>add-to-cart"  method="post">
                <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
                    <div class="zoom-effect-container">
                        <div class="image-card">
                            <img class="ui medium image centered" src="<?php echo base_url().$value->pro_image?>" alt="image" style="width:200px;height:200px">
                            <input type="hidden" value="1" name="qty"/>
                            <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                        </div>
                    </div>
                </a>
                <div class="categories_explore"> <?php echo $value->pro_title?> <br>
                    <p class="explore_price"> Price &emsp; <i class="fa fa-0.5x fa-inr" aria-hidden="true"></i> <?php echo $value->pro_price?> <br>
                        <input  type="submit" value="Add to Basket" class="checkout_submit" >
                       
                </div>
            </form>
            </div>
            <?php }} ?>

           
            <div class="extra_spaceafter120"></div>
        </div>
    </div>
</div> -->

<div class="computer_our_clients">
    <div class="explore_comp_moveup">
      <h1 class="ui centered header" id="header-size40">SEASONAL GIFT IDEAS</h1> 
      <!-- Past is Over & It is Past -->
      <div id="slideExplore" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="container carousel-inner no-padding">
          <div class="carousel-item active">
 <form class="ui form" action="<?php echo base_url()?>add-to-cart"  method="post">
    <?php foreach ($recommended1 as $value) {?>

    <?php if($value->pro_status==1){?>
            <div class="col-xs-3 col-sm-3 col-md-3">
                
       
                <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
              <div class="zoom-effect-container">
                <div class="image-card">
                  <img class="ui medium image centered" src="<?php echo base_url().$value->pro_image?>" alt="image" style="width:200px;height:200px">
                  <input type="hidden" value="1" name="qty"/>
                            <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                </div>
              </div>
              </a>
              <div class="categories_explore"> <?php echo $value->pro_title?> <br>
                <p class="explore_price"> Price &emsp; <i class="fa fa-0.5x fa-inr" aria-hidden="true"></i>  <?php echo $value->pro_price?> <br>
                   <input  type="submit" value="Add to Basket" class="checkout_submit" > </p>
              </div>
              
               
            </div>
            <?php }} ?>
        </form>
  
        
          </div>


          <div class="carousel-item">
            <form class="ui form" action="<?php echo base_url()?>add-to-cart"  method="post">
              <?php foreach ($recommended as $value) {?>

    <?php if($value->pro_status==1){?>
        
            <div class="col-xs-3 col-sm-3 col-md-3">
               <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
              <div class="zoom-effect-container">
                <div class="image-card">
                  <img class="ui medium image centered" src="<?php echo base_url().$value->pro_image?>" alt="image" style="width:200px;height:200px">
                </div>
              </div>
              </a>
              <div class="categories_explore"> <?php echo $value->pro_title?> <br>
                <p class="explore_price"> Price &emsp; <i class="fa fa-0.5x fa-inr" aria-hidden="true"></i> <?php echo $value->pro_price?> <br>
                  <input  type="submit" value="Add to Basket" class="checkout_submit" > </p> 
              </div>
            </div>
       

              <?php }} ?>
               </form>



          </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slideExplore" data-slide="prev">
          <!-- <span class="carousel-control-prev-icon"></span> -->
        </a>
        <a class="carousel-control-next" href="#slideExplore" data-slide="next">
          <!-- <span class="carousel-control-next-icon"></span> -->
        </a>
      </div>
    </div>
  </div>

  <div class="ui divider"> </div>

  <!-- What we sell First part-->
  <!-- <h1 class="ui centered header" id="header-size40">What We Sell</h1>  -->
  <div> <br> 
    <div class="ui three column stackable grid container">

      <div class="centered column zoom-effect-containe">
        <div class="ui fluid image-car">
          <a href="productpage.php">
            <img src="assets/images/mainCheese.png" alt="Meat image" style="width:100%;height:300px">
          </a>
        </div>
      </div>

      <div class="centered column zoom-effect-containe">
        <div class="ui fluid image-car">
          <a href="productpage.php">
            <img src="assets/images/mainMeat.png" alt="Meat image" style="width:100%;height:300px">
          </a>
        </div>
      </div>

      <div class="centered column zoom-effect-containe">
        <div class="ui fluid image-car">
          <a href="productpage.php">
            <img src="assets/images/mainAmbient.png" alt="Meat image" style="width:100%;height:300px">
          </a>
        </div>
      </div>

         <!-- <div class="extra_spaceafter120"></div> --> 
    </div>
  </div>
  <br>
  

    <div class="ui  divider"> </div> 
    <!-- Our shop Image banner -->
    <!-- <div class='ourshop'>
        <div class="parallax">
            <div class="crisscross">
                <div class="ourshop-block">
                    Our Shop
                </div>
            </div>
        </div>
    </div> -->



 <!-- Categories-->
  <div id="sellContinueBg" style="padding: 0px 27px;">
    <!-- <div class="extra_paddingtop120"></div> -->
     
    <h1 class="ui centered header" id="header-size40"> Our Other Popular Products</h1>
    <div class="ui hidden divider"> <br> </div>

    <div class="ui stackable fluid grid">
     <div class="zoom-effect-containe">
      <div class="four wide column image-car">
        <a href="#">
          <img draggable="false" class="sellContinue" src="assets/images/categoryf1.png" alt="image" style="width:300px;height:300px">
        </a> <br>
        <!-- <p class="categories_titles"> Imported Cheese </p> -->
        <P class="categories_titles">Gruyere</P>
      </div>
      </div>

    <div class="zoom-effect-containe">
      <div class="four wide column image-car">
        <a href="#">
          <img draggable="false" class="sellContinue" src="assets/images/categoryg1.png" alt="image" style="width:300px;height:300px">
        </a> <br>
        <p class="categories_titles"> Prosciutto Crudo </p>
      </div>
      </div>

     <div class="zoom-effect-containe">
      <div class="four wide column image-car">
        <a href="#">
          <img draggable="false" class="sellContinue" src="assets/images/categoryh1.png" alt="image" style="width:300px;height:300px">
        </a> <br>
        <p class="categories_titles"> Salmon Fish </p>
      </div>
      </div>

     <div class="zoom-effect-containe">
      <div class="four wide column image-car">
        <a href="#">
          <img draggable="false" class="sellContinue" src="assets/images/categoryi1.png" alt="image" style="width:300px;height:300px">
        </a> <br>
        <p class="categories_titles"> Straccetti Greme Grano </p>
      </div>
      </div>
      <!-- <div class="extra_spaceafter120"></div> -->
    </div>
    <div class="ui hidden divider"></div><br>
  </div>

<div class="mobile_recommendations">
    <div class="ui divider"> <br> </div>
    <h4 class="ui centered header" id="header-size34">Explore</h4> <br> <br>
    <div class="ui stackable fluid grid container">
        <?php foreach ($recommended as $value) {?>

    <?php if($value->pro_status==1){?>
       
        <div class="four wide column">
             <form class="ui form" action="<?php echo base_url()?>add-to-cart"  method="post">
            <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
                <input type="hidden" value="1" name="qty"/>
                <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                <img class="sellContinue" src="<?php echo base_url().$value->pro_image?>" alt="image" style="width:200px;height:200px" alt="image" style="width:200px;height:200px">
                <p class="categories_explore"><?php echo $value->pro_title?> <br> Price &emsp; <i class="fa fa-0.5x fa-inr" aria-hidden="true"></i> <?php echo $value->pro_price?> <br> </p>
                <input  class="explore_to_cart" type="submit" id="checkout_submit" value="ADD TO BASKET"   >
            <!--  <p class="mobile_explore_price"> <a style="color:black;" href="productpage.php">Add to Basket </a> </p>   -->
            </a>
            </form>
        </div>
    
          <?php }} ?>
 
     
    </div>
    <div class="ui divider"> </div>
</div>




   <div class="ui  divider"> </div>

<div class="mobile_our_clients">
    <h4 class="ui centered header" id="header-size40">Our Brands</h4> <br> <br>
    <div class="ui stackable fluid grid">
        <div class="four wide column">
            <a href="#new">
                <img class="sellContinue" src="assets/images/brands/1.png" alt="image" style="width:150px;height:150px">
            </a> 
            <a href="#new">
                <img class="sellContinue" src="assets/images/brands/2.png" alt="image" style="width:150px;height:150px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img class="sellContinue" src="assets/images/brands/3.png" alt="image" style="width:150px;height:150px">
            </a>
            <a href="#new">
                <img class="sellContinue" src="assets/images/brands/4.png" alt="image" style="width:150px;height:150px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img class="sellContinue" src="assets/images/brands/5.png" alt="image" style="width:150px;height:150px">
            </a>
            <a href="#new">
                <img class="sellContinue" src="assets/images/brands/6.png" alt="image" style="width:150px;height:150px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img class="sellContinue" src="assets/images/brands/7.png" alt="image" style="width:150px;height:150px">
            </a>
            <a href="#new">
                <img class="sellContinue" src="assets/images/brands/8.png" alt="image" style="width:150px;height:150px">
            </a> <br>
        </div>

    </div>
</div>

<!-- computer only -->

<div class="computer_our_clients">
  <h4 class="ui centered header" id="header-size40">Our Brands</h4> <br> <br>

  <div id="slideBoth" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="container carousel-inner no-padding">
      <div class="carousel-item active">

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/1.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/2.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/3.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/4.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>
      </div>

      <!-- SECOND TIME -->
      <div class="carousel-item">
        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/5.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/6.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/7.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/8.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>
      </div>
      <!-- THIRD TIME -->
      <div class="carousel-item">
        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/9.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/10.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/11.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/12.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>
      </div>
      <!-- Fourth time -->
      <div class="carousel-item">
        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/13.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/14.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">
          <a href="new">
            <img class="ui medium image centered" src="assets/images/brands/15.png" alt="image" style="width:150px;height:150px">
          </a>
        </div>

        <!-- <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/brands/2.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div> -->
      </div>

    </div> <br> <br>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#slideBoth" data-slide="prev">
      <!-- <span class="carousel-control-prev-icon"></span> -->
    </a>
    <a class="carousel-control-next" href="#slideBoth" data-slide="next">
      <!-- <span class="carousel-control-next-icon"></span> -->
    </a>
  </div>
</div>


<!-- END OF OUR BRANDS LIST -->
<!-- new about us -->

    <div id="aboutus-stripes" class="ui stackable grid">
              <h4 id="about_header">About Us</h4>
        <p class="ui container" id="about_para2">Founded in August 2010, JK Enterprises existed to create a world where anyone can belong anywhere, providing as one of the best cheese suppliers rapidly expanding its broad range of products of cheese including frozen meats and cold cuts, seafood, syrups, pasta, chocolates, and other special provisions. Our uniquely leverages technology has economically increase millions of people around the world to unlock and monetize their spaces, passions and their likes for Cheese, meat and other food products. <br> <br> </p> <br> <br>
        </div> 
 



  <!-- about us -->

<!-- Client List -->
<!-- mobile only -->
<div class="ui hidden divider"> <br> </div> <br> <br>
<div class="mobile_our_clients">
    <h4 class="ui centered header" id="header-size40">Our Clients</h4> <br> <br>
    <div class="ui stackable fluid grid container">
        <div class="four wide column">
            <a href="#new">
                <img src="<?php echo base_url()?>assets/images/client1.jpg" alt="image" style="width:150px;height:150px">
            </a>
            <a href="#new">
                <img src="assets/images/client4.jpg" alt="image" style="width:150px;height:150px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/client4.jpg" alt="image" style="width:150px;height:150px">
            </a>
            <a href="#new">
                <img src="assets/images/client3.jpg" alt="image" style="width:150px;height:150px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/client1.jpg" alt="image" style="width:150px;height:150px">
            </a>
            <a href="#new">
                <img src="assets/images/client2.jpg" alt="image" style="width:150px;height:150px">
            </a> <br>
        </div>

    </div>
</div>

<!-- computer only -->

<div class="computer_our_clients">
    <h4 class="ui centered header" id="header-size40">Our Clients</h4> <br> <br>

    <div id="slideClientsComp" class="carousel slide" data-ride="carousel">
<!-- The slideshow -->
<div class="container carousel-inner no-padding">
            <div class="carousel-item active">

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/1.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/2.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/3.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/4.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>
            </div>

<!-- second row -->
            <div class="carousel-item">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/5.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/6.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/7.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/8.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>
            </div>
<!-- third row -->
          <div class="carousel-item">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/9.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/10.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/11.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/12.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>
            </div>
<!-- Fourth row -->
          <div class="carousel-item">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/13.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/14.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/15.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <a href="new">
                        <img class="ui medium image centered" src="assets/images/clients/16.png" alt="image"
                            style="width:150px;height:150px">
                    </a>
                </div>
            </div>
        </div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#slideClientsComp" data-slide="prev">
            <!-- <span class="carousel-control-prev-icon"></span> -->
        </a>
        <a class="carousel-control-next" href="#slideClientsComp" data-slide="next">
            <!-- <span class="carousel-control-next-icon"></span> -->
        </a>
    </div>
</div>



<!-- about us -->


<!-- How     It Works -->
<div class="ui  divider"> </div>
<div class="ui hidden divider"> <br> </div> <br>
<h1 class="ui centered header" id="header-size40">How It Works</h1> <br> <br>
<div class="ui three column stackable grid container">
    <div class="centered column">
        <div class="ui centered small header"><i class="fa fa-comments-o fa-3x  fa-cog" aria-hidden="true"></i></div>
        <h4 class="ui centered header" id="coro">Chat With An Expert</h4>
        <br>
        <p class="centered_para">Our 24/7 customer support teams give full high priority to all needs and demands of our customers.
        </p>
    </div>
    <div class="centered column">
        <div class="ui centered small header"><i class="fa fa-balance-scale fa-3x  fa-cog" aria-hidden="true"></i></div>
        <h4 class="ui centered header" id="coro">Free Delivery</h4>
        <br>
        <p class="centered_para">We offer free delivery to provide great value for our online shoppers making them easier than ever.
        </p>
    </div>
    <div class="centered column">
        <div class="ui centered small header"><i class="fa fa-circle-thin  fa-3x  fa-cog" aria-hidden="true"></i></div>
        <h4 class="ui centered header" id="coro">Fresh Products</h4>
        <br>
        <p class="centered_para">We have a huge collection of various fresh cheese and other food products for our customers to choose from.
        </p>
    </div>
</div>

<div class="ui hidden divider"> <br> </div> <br> <br>
<!-- Subscribe Image banner -->
<div class="subscribe">
    <div class="parallaxFooter">
        <div class="subscribe-block stackable">
            Contact Us </div>
        <div class="subscribe-blockText"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
            <div class="ui hidden divider"> <br> </div>
            <div>
                <?php echo $this->session->flashdata("flash_msg");?>
                        <div class="status alert alert-success" style="display: none"></div>
                <form class="ui form" method="post" action="<?php echo base_url()?>contact-form">
                <div class="ui big form">
                <div class="field">
                        <input placeholder="Name" type="text" name="contact_name">
                    </div>
                    <div class="field">
                        <input placeholder="Phone Number" type="number" name="contact_number">
                    </div>
                    <div class="field">
                        <input placeholder="Email" type="text" name="contact_email">
                    </div>
                    <input type = "submit" value = "SUBMIT" class="ui huge fluid grey button" id="subscribe-button">
                    <!-- <div class="ui huge fluid grey button" id="subscribe-button">SUBMIT</div> -->
                    <div class="ui hidden divider"> </div>
                    <a href="#" class="item"> <i id="subscribe-icons" class="facebook f large icon"></i> </a>
                    <a href="#" class="item"> <i id="subscribe-icons" class="instagram large icon"></i> </a>
                    <a href="#" class="item"> <i id="subscribe-icons" class="linkedin large icon"></i> </a>
                </div>
            </form>
            </div>

        </div>
    </div>
</div>
</div>


<!-- <div class="ui hidden divider"> <br> </div> -->
<div>
    <?php include 'bottom.php';?>
</div>


<style scoped>
    .col-md-3 
    {
        display: inline-block;
        margin-left: -4px;
        width: 100%;
        height: auto;
    }

    .bootstrap_three 
    {
        flex-wrap: wrap;
        justify-content: center;
    }
     .checkout_submit {
        background:none!important;
        border:none;
        color: black;
       /* border-bottom: 1px grey solid;*/
        font-family: 'Cormorant Garamond',
            serif;
            font-weight:500;
        line-height: 2;
  /*      font-weight: bold;*/
        font-size: 18;
        margin-left:-3%;
    text-align: left;
    }
        .zoom-effect-containerH {
        position: relative;
        width: 200px;
        height: 200px;
        margin: 0 auto;
        overflow: hidden;
    }

    .image-card img {
        -webkit-transition: 0.4s ease;
        transition: 0.3s ease;
    }

    .zoom-effect-container:hover .image-card img {
        -webkit-transform: scale(1.05));
        transform: scale(1.05);
    }


     .zoom-effect-containerP {
        position: relative;
        width: 200px;
        height: 200px;
        margin: 0 auto;
        overflow: hidden;
    }

    .image-car img {
        -webkit-transition: 0.4s ease;
        transition: 0.3s ease;
    }

    .zoom-effect-containe:hover .image-car img {
        -webkit-transform: scale(1.05));
        transform: scale(1.05);
    }


</style>