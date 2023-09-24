<div>
    <?php include 'Header.php';?>
</div>

<div class="productpage-computer-menuleft">
    <?php include 'MenuLeft.php';?>
</div>


<!-- Computer ONLY content -->
<div class="productpage-computer">
     <!-- Product List One -->

    <h4 class="ui centered  header" id="header-size40">Products</h4>
    <div class="ui hidden divider"> </div>

    <!-- product description start -->
    <div class="ui stackable grid" id="align-description">
        <!-- Second column -->
        <?php foreach ($post_by_brand_id as $value) {?>

  <?php if($value->pro_status==1){?>
        <div  class="four wide column">
          <form action="<?php echo base_url()?>add-to-cart"  method="post">
            <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
                <img id="product_image_tablet" src="<?php echo base_url().$value->pro_image?>" alt="About us">
                <div class="ui hidden divider"> </div>
                <h4 id="product_page_font" class="ui  header"><?php echo $value->pro_title?></h4>
                <input type="hidden" value="1" name="noOfRoom"/>
                <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                <!--<h4 id="product_page_font" class="ui right floated header"> <?php echo $value->pro_quantity?>  </h4>-->

            </a> <br>
            
            <p  class="justified_para" style="margin-top: -30px;">(<?php echo $value->pro_quantity?>)</p>
            <p id="product_page_font" class="justified_para">Country: <?php echo $value->pro_country; ?></p>

             <p class="explore_price">  Price &emsp;
                <!-- <i class="fa fa-0.5x fa-inr" aria-hidden="true"></i>  -->
                Rs: <?php echo $value->pro_price?> <br>
                <input style="padding-left:0px" class="explore_to_cart" type="submit" value="Add to Cart"> </p>
          </form>
            <!-- <a class="product_to_cart" href="productpage.php">Save to List </a>  -->
        </div>
         <?php }} ?>
    <?php if($post_by_brand_id!=NUll){?>
      <?php echo $this->pagination->create_links();?>
  <?php }else{?>
  <p>There are no product available......please check other category or brand</p>
  <?php }?>
        <!-- Second of Second column -->
    </div>
</div>

<br> <br>
 
<!-- Mobile ONLY content -->
<div class="productpage-mobile mobile_cart" id="menuleft">
    <h1 class="ui centered header" id="header-size40"> Products</h1>
    <div class="ui hidden divider"> <br> </div>
    <div class="ui stackable fluid grid container">
<?php foreach ($post_by_brand_id as $value) {?>

  <?php if($value->pro_status==1){?>
    
    <form action="<?php echo base_url()?>add-to-cart"  method="post">
        <div class="column">
            <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
                <img src="<?php echo base_url().$value->pro_image?>" alt="About us" style="width:250px;height:200px; margin-left:15% ">
                
                <h4 id="Productmobile-textH" class="ui header" style="margin-top:0px"><?php echo $value->pro_title?></h4>
                <input type="hidden" value="1" name="noOfRoom"/>
                <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>  
				
            </a> 
			 <p  class="justified_para" style="color:black;line-height:0;">(<?php echo $value->pro_quantity?>)</p>
            <p id="product_page_font" class="justified_para" style="margin:0;">Country: <?php echo $value->pro_country; ?></p>
			
             <p class="explore_price">  Price &emsp;
                Rs: <?php echo $value->pro_price?> <br>
                <input style="padding-left:0px" class="explore_to_cart" type="submit" value="Add to Cart"> </p> <br> <br>

        </div>
      </form>
        <?php }} ?>
    <?php if($post_by_brand_id!=NUll){?>
      <?php echo $this->pagination->create_links();?>
  <?php }else{?>
  <p>There are no product available......please check other category or brand</p>
  <?php }?>






        <div class="ui hidden divider"> <br> </div>
    </div>
</div>


<div>
    <?php $this->load->view('front/Footer.php');?>
</div>
<style scoped>
/* Hide categories in mobile */
@media screen and (max-width: 1201px) {
    .productpage-computer-menuleft {
        display: none ! important;
    }
}


         /* Computer----------- */
@media only screen and (min-width : 1025px) {
       #product_image_tablet{
    width:250px;
    height:200px;
    }
}

     /* iPads (portrait and landscape) ----------- */
@media only screen and (min-width : 768px) and (max-width : 1024px) {
    #product_image_tablet{
    width:180px;
    height:180px;
    }
}


     /* Computer ----------- */
@media only screen and (min-width : 1025px) {
    #align-description {
            padding-top: 10px;
        margin-left: 18%;
		min-height: 800px;
    }
}

     /* iPads (portrait and landscape) ----------- */
@media only screen and (min-width : 768px) and (max-width : 1024px) {
    #align-description {
               padding-top: 30px;
        margin-left: 15px;
        margin-right: 15px;
    }
}

    #checkout_submit {
      background:none!important;
      border:none;
        color: grey;
        border-bottom: 1px grey solid;
           font-family: 'Josefin Sans',
        sans-serif;
        line-height: 2;
        font-weight: bold;
        font-size: 16px;
        margin-left:32%;
    }
</style>
