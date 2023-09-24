<div>
    <?php include 'Header.php';?> 
</div>

<div class="productpage-computer-menuleft">
    <?php // include 'MenuLeft.php';?>
</div>


<!-- Computer ONLY content -->
<div class="productpage-computer">
    <!-- Product List One -->
    
    <h4 style=" padding-top: 120px;" class="ui centered  header" id="header-size40"> Horeca Products</h4>
  
 
    <!-- product description start -->
    <div class="ui stackable grid" id="align-description">

  
        <!-- Second column -->
        <?php
                                $i = 0;
                                if(isset($post_by_brand_id)){
                                  foreach ($post_by_brand_id as $value){
                                    $i++;

                                ?>
        <div  class="four wide column zoom-effect-containe">
            <a href="<?php echo base_url()?>horeco-contact" class="image-car">
                <img id="product_image_tablet"  src="<?php echo base_url().$value->image;?>" alt="About us">
                <div class="ui hidden divider"> </div>
                <h4 id="product_page_font" class="ui left floated header"><?php echo $value->name;?></h4>
                
            </a> <br> <br>
            <p id="product_page_font" class="justified_para"><?php echo $value->type;?> </p>
           
           
            <!-- <a class="product_to_cart" href="productpage.php">Save to List </a>  -->
        </div> 
       <?php }} ?>
    </div>


</div>

<br> <br>

<!-- Mobile ONLY content -->
<div class="productpage-mobile" id="menuleft">

    <h1 class="ui centered header" id="header-size40"> Horeca Products</h1>
    <div class="ui hidden divider"> <br> </div>
    <div class="ui stackable fluid grid container">
  <?php
                                $i = 0;
                                if(isset($post_by_brand_id)){
                                  foreach ($post_by_brand_id as $value){
                                    $i++;

                                ?>
        <div class="column">
            <a href="<?php echo base_url()?>horeco-contact">
                <img src="<?php echo base_url().$value->image;?>" alt="About us" style="width:250px;height:200px; margin-left:15% ">
                <div class="ui hidden divider"> </div>
                <h4 id="Productmobile-textH" class="ui left floated header"><?php echo $value->name;?></h4>
                
            </a> <br> <br>
            <p id="Productmobile-text"><?php echo $value->type;?> </p>
          
          
         <!-- <h4 id="Productmobile-text" class="ui right floated flat compact grey button">Add to Basket</h4>  -->
            <!-- <h4 class="ui right floated flat compact grey button">Save to List</h4> -->
        </div>

       <?php }} ?>

  

        <div class="ui hidden divider"> <br> </div>
    </div>
</div>


<div>
    <?php $this->load->view('front/Footer.php');?>
</div>

<style scoped>

         /* Computer----------- */
         @media only screen and (min-width : 1025px) {
       #product_image_tablet{
    width:200px;
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
           
        margin-left: 30px;
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


    .image-car img {
        -webkit-transition: 0.4s ease;
        transition: 0.3s ease;
    }

    .zoom-effect-containe:hover .image-car img {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
    }
     .pagination {
  display: block;
  margin-bottom: 25px;
  margin-top: 0;
  padding-left: 900px;
}

.pagination  li:first-child  a, .pagination  li:first-child  span {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
  margin-left: 0;
}

.pagination  li:last-child  a, .pagination  li:last-child  span {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}

.pagination  .active  a, .pagination  .active  span, .pagination  .active  a:hover, .pagination  .active  span:hover, .pagination  .active  a:focus, .pagination  .active  span:focus {
  background-color: #9ebbd2;
  border-color: #FE980F;
  color: #FFFFFF;
  cursor: default;
  z-index: 2;
}

.pagination  li  a, .pagination  li  span {
  background-color: #f0f0e9;
  border: 0;
  float: left;
  line-height: 1.42857;
  margin-left: -1px;
  padding: 6px 12px;
  position: relative;
  text-decoration: none;
  margin-right: 5px;
  color:#000;
}

.pagination  li  a:hover{
    background:#9ebbd2;
    color:#fff;
}
</style>