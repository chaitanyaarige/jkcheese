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


<div class="icon-bar-review">
    <div id="link-menu">
        <a href="#aboutus-stripes" class="review"> <i class="fa fa-star"></i> REVIEWS</a>
    </div>
</div>
<style>
    #link-menu a:hover {
        background: white;
        color: black;
    }

    .icon-bar-review {
        position: fixed;
        top: 50%;
        z-index: 2;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        padding-left: -100px;
    }

    .fa-star {
        color: gold;
    }

    .icon-bar-review a {
        display: block;
        text-align: center;
        padding: 10px;
        transition: all 0.3s ease;
        color: white;
        font-size: 12px;
        font-family: 'Josefin Sans',
            sans-serif;
        scroll-behavior: smooth;
    }


    .review {
        background: #0b4f93;
        color: white;
        /* width:1px;
        word-wrap: break-word;
        font-family: monospace; */
        -webkit-transform: rotate(-90deg);
        margin: -28px;
    }

    /*.carousel-control-prev-icon-explore,*/
    /*.carousel-control-next-icon-explore {*/
    /*    height: 40px;*/
    /*    width: 40px;*/
    /*    background-image: none;*/
    /* padding-right: 150px; */
    /*}*/
    /*.carousel-control-next-icon-explore:after {*/
    /*    content: '>';*/
    /*    font-size: 50px;*/
    /*    color: black;*/
    /*    padding-bottom: 50px;*/
    /*     padding-left: 30px; */

    /*}*/

    /*.carousel-control-prev-icon-explore:after {*/
    /*    content: '<';*/
    /*    font-size: 50px;*/
    /*    color: black;*/
    /*}*/
</style>

<!--  <div class="fourteen wide column">
        <div class="computer_our_clients" id="column_1">
            <div class="explore_comp_moveup">
                <h1 class="ui centered header" id="header-size40"> Recent Top Sellers </h1>
                <div id="slideExplore" class="carousel slide" data-ride="carousel">
                    <div class="container carousel-inner no-padding">
                        <div class="carousel-item active">
    
                            <div style="padding-left:50px;" class="ui grid">
    
                               <?php foreach ($recommended1 as $value) {?>
    
        <?php if($value->pro_status==1){?>
    
                                <div class="three wide column">
                                   <form class="ui form" action="<?php echo base_url()?>/add-to-cart"  method="post">
                                    <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
                                        <div class="zoom-effect-container">
                                            <div class="image-card">
                                                <img class="ui medium image centered" src="<?php echo base_url().$value->pro_image?>"
                                                    alt="image" alt="image" style="width:200px;height:200px">
                                            </div>
                                        </div>
                                    </a>
                                     <input type="hidden" value="1" name="noOfRoom"/>
                                <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                                    <div class="categories_explore"> <?php echo $value->pro_title?> <br>
                                        <p class="explore_price"> Price &emsp;
                                            Rs: <?php echo $value->pro_price?><br>
                                         <input  type="submit" value='Add to Cart' class="explore_to_cart" ></p>
    
                                    </div>
                                       </form>
                                </div>
    
                              <?php }?>
                            <?php }?>
    
    
    
                            </div>
    
                        </div>
    
    
                        <div class="carousel-item">
                            <div style="padding-left:50px;" class="ui grid">
    
                              <?php foreach ($recommended as $value) {?>
    
        <?php if($value->pro_status==1){?>
                                <div class="three wide column">
                                   <form class="ui form" action="<?php echo base_url()?>add-to-cart"  method="post">
                                    <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
                                        <div class="zoom-effect-container">
                                            <div class="image-card">
                                                <img class="ui medium image centered" src="<?php echo base_url().$value->pro_image?>"
                                                    alt="image" alt="image" style="width:200px;height:200px">
                                            </div>
                                        </div>
                                    </a>
    
                                       <input type="hidden" value="1" name="noOfRoom"/>
                                <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                                    <div class="categories_explore"> <?php echo $value->pro_title?> <br>
                                  <p class="explore_price"> Price &emsp;
                                            Rs: <?php echo $value->pro_price?><br>
                                         <input  type="submit" value='Add to Cart' class="explore_to_cart" ></p>
                                    </div>
                                    </form>
                                </div>
    
                               <?php }?>
                            <?php }?>
    
                            </div>
                        </div>
                    </div>
    
    
                <a class="carousel-control-prev" href="#slideExplore" data-slide="prev">
                     <span style="padding-top:16px;margin-right:62px;padding-bottom:13px;"class="carousel-control-prev-icon-explore"><i class="fa fa-5x fa-angle-left"></i></span>
                </a>
                <a class="carousel-control-next" href="#slideExplore" data-slide="next">
                     <span style="padding-top:16px;right:-33px;padding-left:18px;padding-bottom:13px" class="carousel-control-next-icon-explore"><i class="fa fa-5x fa-angle-right"></i></span>
                </a>
            </div>
             </div>
        </div>
    </div> -->

<!-- <div class="computer_our_clients">
        <div class="explore_comp_moveup">
          <h1 class="ui centered header" id="header-size40">SEASONAL GIFT IDEAS</h1>  -->
<!-- Past is Over & It is Past -->
<!--   <div id="slideExplore" class="carousel slide" data-ride="carousel"> -->
<!-- The slideshow -->
<!--  <div class="container carousel-inner no-padding">
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
    
    
              </div> -->


<!--   <div class="carousel-item">
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
                    <p class="explore_price"> Price &emsp; <i class="fa fa-0.5x fa-inr" aria-hidden="true"></i> <?php echo $value->pro_price?>
                      <input  type="submit" value="Add to Basket" class="checkout_submit" > </p>
                  </div>
                </div>
    
    
                  <?php }} ?>
                   </form>
    
    
    
              </div> -->

<!--  </div> -->

<!-- Left and right controls -->
<!--   <a class="carousel-control-prev" href="#slideExplore" data-slide="prev"> -->
<!-- <span class="carousel-control-prev-icon"></span> -->
<!--    </a>
            <a class="carousel-control-next" href="#slideExplore" data-slide="next"> -->
<!-- <span class="carousel-control-next-icon"></span> -->
<!-- </a>
          </div>
        </div>
      </div>
     -->

<!--  <div class="mobile_recommendations">
        <br>
        <h4 class="ui centered header" id="header-size34">Recent Top Sellers</h4> <br> <br>
        <div class="ui stackable fluid grid container">
            <?php foreach (array_merge($recommended,$recommended1) as $value) {?>
    
        <?php if($value->pro_status==1){?>
    
            <div class="four wide column">
                 <form class="ui form" action="<?php echo base_url()?>/add-to-cart"  method="post">
                    <input type="hidden" value="1" name="noOfRoom"/>
                    <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                   <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>"> <img class="sellContinue" src="<?php echo base_url().$value->pro_image?>" alt="image" style="width:200px;height:200px" alt="image" style="width:200px;height:200px"></a>
                    <div class="categories_explore"><?php echo $value->pro_title?> <br>
    
                    <p class="explore_price">  Price &emsp; <i class="fa fa-0.5x fa-inr" aria-hidden="true"></i> <?php echo $value->pro_price?> <br>
                    <input  class="explore_to_cart" type="submit"  value="Add to Cart"></p>
               </div>
                </form>
            </div>
    
              <?php }} ?>
        </div>
    </div> -->





<div class="ui hidden divider"> <br> </div>
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
<div class="computer_our_clients">
<div id="sellContinueBg" class="mb-5">
    <!-- <div class="extra_paddingtop120"></div> -->

    <h1 class="ui centered header" id="header-size40"> What's In The Box </h1>
    <div class="ui hidden divider"> <br> </div>

    <div class="ui centered stackable fluid grid" >
        <div class="zoom-effect-containe">
            <div class="four wide column image-car">
                <a href="http://jkcheesenmore.com/imported-cheese">
                    <img draggable="false" class="sellContinue" src="assets/images/endowment1.png" alt="image"
                        style="width:300px;height:300px">
                    <div id="opaque_all_four" class="textOverlay_all_four"> Goodness of Cheese <br> <br> Made Easy
                    </div>
                </a> <br>
                <!-- <p class="categories_titles"> Salmon Fish </p> -->
            </div>
        </div> <br>

        <div class="zoom-effect-containe">
            <div class="four wide column image-car">
                <a href="http://jkcheesenmore.com/meat/salmon-fish">
                    <img draggable="false" class="sellContinue" src="assets/images/endowment2.jpg" alt="image"
                        style="width:300px;height:300px">
                    <div id="opaque_all_four" class="textOverlay_all_four"> Welcome to <br> <br> Deliciousness </div>
                </a> <br>
                <!-- <p class="categories_titles"> Salmon Fish </p> -->
            </div>
        </div> <br>

        <div class="zoom-effect-containe">
            <div class="four wide column image-car">
                <a href="http://jkcheesenmore.com/meat/salmon-fish">
                    <img draggable="false" class="sellContinue" src="assets/images/endowment3.jpg" alt="image"
                        style="width:300px;height:300px">
                    <div id="opaque_all_four" class="textOverlay_all_four"> Just Like <br> <br> You Like It! </div>
                </a> <br>
                <!-- <p class="categories_titles"> Salmon Fish </p> -->
            </div>
        </div> <br>

        <div class="zoom-effect-containe">
            <div class="four wide column image-car">
                <a href="http://jkcheesenmore.com/more/pasta">
                    <img draggable="false" class="sellContinue" src="assets/images/endowment4.png" alt="image"
                        style="width:300px;height:300px">
                    <div id="opaque_all_four" class="textOverlay_all_four"> Choose Your <br> <br> Taste </div>
                </a> <br>
                <!-- <p class="categories_titles"> Salmon Fish </p> -->
            </div>
        </div> 
    </div>
</div>
</div>

<!-- End of Categories -->

<div class="mobile_our_clients">
<div id="sellContinueBg" class="mb-5">
    <!-- <div class="extra_paddingtop120"></div> -->

    <h1 class="ui centered header" id="header-size40"> What's In The Box </h1>
    <div class="ui hidden divider"> <br> </div>

    <div class="ui centered stackable fluid grid container" >
        <div class="zoom-effect-containe">
            <div class="four wide column image-car">
                <a href="http://jkcheesenmore.com/imported-cheese">
                    <img draggable="false" class="sellContinue" src="assets/images/endowment1.png" alt="image"
                        style="width:300px;height:300px">
                    <div id="opaque_all_four" class="textOverlay_all_four"> Goodness of Cheese <br> <br> Made Easy
                    </div>
                </a> <br>
                <!-- <p class="categories_titles"> Salmon Fish </p> -->
            </div>
        </div> <br>

        <div class="zoom-effect-containe">
            <div class="four wide column image-car">
                <a href="http://jkcheesenmore.com/meat/salmon-fish">
                    <img draggable="false" class="sellContinue" src="assets/images/endowment2.jpg" alt="image"
                        style="width:300px;height:300px">
                    <div id="opaque_all_four" class="textOverlay_all_four"> Welcome to <br> <br> Deliciousness </div>
                </a> <br>
                <!-- <p class="categories_titles"> Salmon Fish </p> -->
            </div>
        </div> <br>

        <div class="zoom-effect-containe">
            <div class="four wide column image-car">
                <a href="http://jkcheesenmore.com/meat/salmon-fish">
                    <img draggable="false" class="sellContinue" src="assets/images/endowment3.jpg" alt="image"
                        style="width:300px;height:300px">
                    <div id="opaque_all_four" class="textOverlay_all_four"> Just Like <br> <br> You Like It! </div>
                </a> <br>
                <!-- <p class="categories_titles"> Salmon Fish </p> -->
            </div>
        </div> <br>

        <div class="zoom-effect-containe">
            <div class="four wide column image-car">
                <a href="http://jkcheesenmore.com/more/pasta">
                    <img draggable="false" class="sellContinue" src="assets/images/endowment4.png" alt="image"
                        style="width:300px;height:300px">
                    <div id="opaque_all_four" class="textOverlay_all_four"> Choose Your <br> <br> Taste </div>
                </a> <br>
                <!-- <p class="categories_titles"> Salmon Fish </p> -->
            </div>
        </div> 
    </div>
</div>
</div>


<div class="ui  divider"> </div>

<div class="mobile_our_clients">
    <h4 class="ui centered header" id="header-size40">International Brands</h4>
    <div class="ui stackable fluid grid">

        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/4.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/5.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/6.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>


        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/7.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/8.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/9.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>


        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/10.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/11.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/12.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>



        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/13.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/14.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/15.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/16.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/17.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/18.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/19.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/20.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/21.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/22.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/23.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/24.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/25.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/26.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/27.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/28.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/29.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/30.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/31.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/32.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/33.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/34.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/35.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/36.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>
		
		
		        <div class="four wide column">
            <a>
                <img class="sellContinue" src="assets/images/brands/37.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/38.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a> <br>
        </div>
		
		
        <div class="four wide column">
		<h4 class="ui centered header" id="header-size40">Indian Brands</h4>
            <a>
                <img class="sellContinue" src="assets/images/brands/1.png" alt="image"
                    style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/2.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a>
                <img class="sellContinue" src="assets/images/brands/3.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>
			<a>
                <img class="sellContinue" src="assets/images/brands/39.png" alt="image"
                    style="margin-left: 10px; width:80px;height:80px">
            </a>			<br>
        </div>

    </div>
</div>





<!-- computer only -->
<div class="computer_our_clients">
    <h4 class="ui centered header" id="header-size40">International Brands</h4>
    <div class="ui centered stackable grid container">
    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/4.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/5.png"  >
  </div>
  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/6.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/7.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/8.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/9.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/10.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/11.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/12.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/13.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/14.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/15.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/16.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/17.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/18.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/19.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/20.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/21.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/22.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/23.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/24.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/25.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/26.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/27.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/28.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/29.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/30.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/31.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/32.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/33.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/34.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/35.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/36.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/37.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/38.png"  >
  </div>


</div>


<h4 class="ui centered header" id="header-size40">Indian Brands</h4>
    <div class="ui centered stackable grid container">
    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/1.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/2.png"  >
  </div>
  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/3.png"  >
  </div>
  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/brands/39.png"  >
  </div>
</div>


    </div>






<div class="ui divider"></div>
<!-- new about us -->

<!-- How     It Works -->
<!-- 
     <br>
    <div>
        <h1 class="ui centered header" id="header-size40">How It Works</h1> <br> <br>
        <div class="ui three column stackable grid container">
            <div class="centered column">
                <div class="ui centered small header"><i class="fa fa-comments-o fa-3x  fa-cog" aria-hidden="true"></i>
                </div>
                <h4 class="ui centered header" id="coro"> <b> Chat With An Expert </b></h4>
                <p class="centered_para">Our 24/7 customer support teams give full high priority to all needs and demands
                    of our customers.
                </p>
            </div>
            <div class="centered column">
                <div class="ui centered small header"><i class="fa fa-balance-scale fa-3x  fa-cog" aria-hidden="true"></i></div>
                <h4 class="ui centered header" id="coro"> <b> Free Delivery </b></h4>
                <p class="centered_para">We offer free delivery to provide great value for our online shoppers making them
                    easier than
                    ever.
                </p>
            </div>
            <div class="centered column">
                <div class="ui centered small header"><i class="fa fa-circle-thin  fa-3x  fa-cog" aria-hidden="true"></i></div>
                <h4 class="ui centered header" id="coro"> <b> Fresh Products </b></h4>
                <p class="centered_para">We have a huge collection of various fresh cheese and other food products for our
                    customers to choose
                    from.
                </p>
            </div>
            <div class="extra_spaceafter60"></div>
        </div>
    </div>
    
    Start of How  It Works -->




<!-- about us -->

<!-- Start of  CLIENT List -->
<!-- mobile only -->
<div class="ui hidden divider"> <br> </div> <br>
<div class="mobile_our_clients">
    <h4 class="ui centered header" id="header-size40">Our Clients</h4>
    <!-- <h4 class="ui centered header"> Top Star Hotels </h4> -->
    <div class="ui stackable fluid grid container">
        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/1.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/2.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/3.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/4.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/5.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/6.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/7.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/8.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/9.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/10.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/11.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/12.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/13.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/14.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/15.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <!-- <h4> <span style="border-bottom: 2px solid #000; text-align: center; padding-bottom: 6px;" >Top</span> Retail </h4> -->

        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/16.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/17.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/18.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>

            <br>
        </div>


        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/19.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/20.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/21.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>

        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/22.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/23.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/24.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>


        <div class="four wide column">
            <a href="#new">
                <img src="assets/images/clients/25.png" alt="image" style="margin-left:-10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/26.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a>
            <a href="#new">
                <img src="assets/images/clients/27.png" alt="image" style="margin-left: 10px; width:80px;height:80px">
            </a> <br>
        </div>



    </div>
</div>




<!-- computer only -->
<div class="computer_our_clients">
    <h4 class="ui centered header" id="header-size40">Our Clients</h4>
    <div class="ui centered stackable grid container">
    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/4.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/5.png"  >
  </div>
  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/6.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/7.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/8.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/9.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/10.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/11.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/12.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/13.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/14.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/15.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/16.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/17.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/18.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/19.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/20.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/21.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/22.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/23.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/24.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/25.png"  >
  </div>

  <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/26.png"  >
  </div>    <div class="two wide column" style="border:1px solid white">
             <img class="ui fluid image" src="assets/images/clients/27.png"  >
  </div>



</div>
    </div>




<div class="ui hidden divider"> <br> </div> <br>
<!-- <div class="extra_spaceafter120"></div> -->

<!-- END OF CLIENT LIST -->

<br>



<!-- about us -->


<!-- How     It Works -->
<!-- Start of How  It Works -->

<!-- Subscribe Image banner -->
<!-- <div class="subscribe">
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
                        <div class="ui huge fluid grey button" id="subscribe-button">SUBMIT</div> -->
<!--<div class="ui hidden divider"> </div>
                        <a href="#" class="item"> <i id="subscribe-icons" class="facebook f large icon"></i> </a>
                        <a href="#" class="item"> <i id="subscribe-icons" class="instagram large icon"></i> </a>
                        <a href="#" class="item"> <i id="subscribe-icons" class="linkedin large icon"></i> </a>
                    </div>
                </form>
                </div>
    
            </div>
        </div>
    </div> -->
<div class="ui divider" id="aboutus-stripes"></div>


<!-- Testimonial -->
<h4 class="ui centered header" id="header-size40">From Our Clients</h4> <br>
<div id="testimonials" class="ui stackable grid container">
    <div class="eight wide left aligned column">
        <img class="ui small left floated circular image" style="height:100px; width:100px;margin-top: -5px;"
            src="assets/images/avatar.png">
        <p id="reviews_para">I was excited for choice and flavour you guys serve in cheese.
            Thanks a lot Cheese & more for this wonderful thing</p>

        <p class="aboutus_titles"> Jenne</p>
        <p id="reviews_para2">Operation Director, Taj Hotels </p>
    </div>

    <div class="eight wide left aligned column">
        <img class="ui small left floated circular image" style="height:100px; width:100px;margin-top: -5px;"
            src="assets/images/avatar.png">
        <p id="reviews_para">Great products making my little ones happier as they love their platter to be always full
            of varieties.
        </p>
        <p class="aboutus_titles">Abrahim</p>
        <p id="reviews_para2">Managing Director, ITC Hotels </p>
    </div>

    <div class="eight wide left aligned column">
        <img class="ui small left floated circular image" style="height:100px; width:100px;margin-top: -5px;"
            src="assets/images/avatar.png">
        <p id="reviews_para">All commodities fulfilled my kitchen and made a special
            welcome to my regular guests to try out something new than ever.</p>

        <p class="aboutus_titles"> Sandy John</p>
        <p id="reviews_para2">Chief Chef, Trident Hotels </p>
    </div>

    <div class="eight wide left aligned column">
        <img class="ui small left floated circular image" style="height:100px; width:100px;margin-top: -5px;"
            src="assets/images/avatar.png">
        <p id="reviews_para">Wow! It is Just wonderful! all the foodstuffs to purchase at one place.
            Love to shop more and more kinds of foodstuff from here.</p>
        <p class="aboutus_titles">Santa Brinne</p>
        <p id="reviews_para2">Manager, Radisson Hotels </p>
    </div>
</div>

<br>
<br>
<!-- Subscribe Image banner -->
<div class="subscribe">
    <div class="parallaxFooter">
        <div class="thin-opaque">
            <div class="subscribe-block stackable">
                Join Our Newsletter </div>
            <div class="subscribe-blockText">  
			<div  class="emailFooterC"> 
            Sign up to hear about new products and promotions from <br> Cheese n More
                and
                get
                20% of your first purchase in the shop </div>
                <div class="emailFooterM centered"> 
            Sign up to hear about new products and promotions from Cheese n More
                and
                get
                20% of your first purchase in the shop </div>
                <hr class="subscribeHr">

                <form class="ui form" method="post" action="<?php echo base_url()?>news-letter">
                    <div class="emailFooterC">
                        <input type="text" name="email" style="width:300px;" placeholder="Email@example.com"> <button
                            style="background-color:#0d5690;color: white;" type="submit" class="ui button">Sign
                            Up</button>
                    </div>
                </form>
                <form class="ui form" method="post" action="<?php echo base_url()?>news-letter">
                    <div class="emailFooterM">
                        <input type="text" name="email" style="width:163px;height:28px" placeholder="Email@example.com">
                        <button style="background-color:#0d5690;color: white;" type="submit"
                            class="ui compact tiny button">Sign
                            Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- <div class="ui hidden divider"> <br> </div> -->
<div>
    <?php $this->load->view('front/Footer.php');?>
</div>


<style scoped>
    .carousel-control-prev-icon-explore,
    .carousel-control-next-icon-explore {
        /* background-image: none; */
        position: relative;
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #000000 260%),
            linear-gradient(to top, rgba(255, 255, 255, 0) 0, #000000 260%);

    }

    .carousel-control-next-icon-explore:after {
        content: '';
        font-size: 50px;
        color: #0d5690;
        width: 60px;
        padding-left: 8px;
        padding-right: 8px;


    }

    .carousel-control-prev-icon-explore:before {
        content: '';
        padding-left: 8px;
        padding-right: 8px;
    }

    .carousel-control-prev-icon-explore:after {
        content: '';
        font-size: 50px;
        color: #0d5690;
        height: 70px;
        width: 60px;
        padding-left: 8px;
        padding-right: 8px;
    }

    hr {
        background-color: lightgrey !important;
        color: lightgrey !important;
        border: solid 1px lightgrey !important;
        height: 1px !important;
        margin-bottom: 30px;
        width: 20% !important;
    }

    hr.subscribeHr {
        background-color: grey !important;
        color: grey !important;
        border: solid 1px grey !important;
        height: 1px !important;
        margin-bottom: 20px;
        width: 20% !important;
    }



    .col-md-3 {
        display: inline-block;
        margin-left: -4px;
        width: 100%;
        height: auto;
    }

    .bootstrap_three {
        /* display: flex; */
        flex-wrap: wrap;
        justify-content: center;
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
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }

     @media only screen and (max-width: 600px) {
    .zoom-effect-containe {
        position: relative;
        height: 300px;
        margin: 6px 0px;
        text-align: center;
    }
	 }
	
	    @media only screen and (min-width: 601px) {
	    .zoom-effect-containe {
        position: relative;
        width: 300px;
        height: 300px;
        margin: 6px 0px;
        overflow: hidden;
        text-align: center;
    }
    }


    .image-car img {
        -webkit-transition: 0.4s ease;
        transition: 0.3s ease;
    }

    .zoom-effect-containe:hover .image-car img {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }


    .thin-opaque {
        width: 100%;
        margin: auto;
        padding-top: 8%;
    }


    .thin-opaque::after {
        z-index: 0;
        display: block;
        position: relative;
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #fff 160%),
            linear-gradient(to top, rgba(255, 255, 255, 0) 0, #fff 160%);
        height: 50%;
        width: 100%;
        content: '';
    }
	
	    @media only screen and (max-width: 600px) {
    .thin-opaque::after {
        height: 78%;
        position: absolute;
    }
    }

    .zoom-effect-containe:hover .textOverlay_all_four {
        opacity: 0;
    }

    .opaque_all_four:hover {
        display: none;
    }

    #opaque_all_four {
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, #fff 100%),
            linear-gradient(to top, rgba(255, 255, 255, 0) 0, #fff 100%);
        padding-top: 30px;
        padding-bottom: 22px;
    }

    /* over css for all 4 images */


    .thin-opaque {
        width: 100%;
        margin: auto;
        padding-top: 8%;
    }

    /* only for text  */
    .textOverlay_all_four {
        position: absolute;
        opacity: 1;
        transition: all .3s ease-in;
        color: #0d5690;
        font-size: 32px;
        font-family: 'adobe-caslon-pro',
            serif;
        /* font-weight: bold; */
        font-style: italic;
        margin-top: -125px;
        width: 300px;
    }


    /* Hide our clients slide in mobile */
    /* d-none d-md-block */
    @media only screen and (max-width: 600px) {
        .computer_our_clients {
            display: none ! important;
        }
    }

    .mobile_our_clients {
        text-align: center;
        width: 100%;
    }

    @media only screen and (min-width: 601px) {
        .mobile_our_clients {
            display: none ! important;
        }
    }

    /* end computer & mobile only clients */
</style>

<script>
    $(function () {
        $('#slideClientsComp.slide').carousel({
            interval: 2000,
            pause: "hover"
        });

        $('input').focus(function () {
            $("#slideClientsComp").carousel('pause');
        }).blur(function () {
            $("#slideClientsComp").carousel('cycle');
        });
        $('#slideBoth.slide').carousel({
            interval: 2000,
            pause: "hover"
        });

        $('input').focus(function () {
            $("#slideBoth").carousel('pause');
        }).blur(function () {
            $("#slideBoth").carousel('cycle');
        });

        $('#slide2ClientsComp.slide').carousel({
            interval: 2000,
            pause: "hover"
        });

        $('input').focus(function () {
            $("#slide2ClientsComp").carousel('pause');
        }).blur(function () {
            $("#slide2ClientsComp").carousel('cycle');
        });

        $('#slide2Both.slide').carousel({
            interval: 2000,
            pause: "hover"
        });

        $('input').focus(function () {
            $("#slide2Both").carousel('pause');
        }).blur(function () {
            $("#slide2Both").carousel('cycle');
        });


    });
</script>