<div>
    <?php include 'Header.php';?>
</div>
<div class="productpage-computer">
    <?php include 'MenuLeft.php';?>
</div>
<!-- Computer ONLY content -->
<div class="productpage-computer">
    

    <!-- Product List One -->
    <div class="ui hidden divider"> </div>
    <h4 class="ui centered  header" id="header-size40">Products</h4>
    <div class="ui hidden divider"> </div>

    <!-- product description start -->
       
    <div class="ui stackable grid" id="align-description">
        <!-- Second column -->
        <?php foreach ($search_data as $value) {?>

        <div  class="four wide column">
          <form action="<?php echo base_url()?>add-to-cart"  method="post">
            <a href="<?php echo base_url()?>product-details/<?php echo $value->pro_id?>">
                <img  src="<?php echo base_url().$value->pro_image?>" alt="About us" style="width:250px;height:200px">
                <div class="ui hidden divider"> </div>
                <h4 id="product_page_font" class="ui left floated header"><?php echo $value->pro_title?></h4>
                <input type="hidden" value="1" name="qty"/>
                <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                <h4 id="product_page_font" class="ui right floated header"> <?php echo $value->pro_quantity?> grams </h4>
            </a> <br> <br>
            <p id="product_page_font" class="justified_para">Lorem ipsum description </p>
            <h4 id="product_page_font" class="ui left floated header">MRP: &emsp;
                <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $value->pro_price?> </h4>
             
            <input type="submit" value="   ADD TO BASKET"  id="checkout_submit" >
          </form>
            <!-- <a class="product_to_cart" href="productpage.php">Save to List </a>  -->
        </div> 
       <?php } ?>
    <?php if($search_data!=NUll){?>
      <?php echo $this->pagination->create_links();?>
  <?php }else{?>
  <p>There are no product available......please check other category or brand</p>
  <?php }?>
        <!-- Second of Second column -->
      
    </div>
    
    

        


</div>

<br> <br>

<!-- Mobile ONLY content -->
<div class="productpage-mobile" id="menuleft">
    <h1 class="ui centered header" id="header-size40"> Products</h1>
    <div class="ui hidden divider"> <br> </div>
    <div class="ui stackable fluid grid container">
<?php foreach ($search_data as $value) {?>

    <?php if($value->pro_status==1){?>
    <form action="<?php echo base_url()?>add-to-cart"  method="post">
        <div class="column">
            <a href="ProductDescription.php">
                <img src="<?php echo base_url().$value->pro_image?>" alt="About us" style="width:250px;height:200px; margin-left:15% ">
                <div class="ui hidden divider"> </div>
                <h4 id="Productmobile-textH" class="ui left floated header"><?php echo $value->pro_title?></h4>
                <input type="hidden" value="1" name="noOfRoom"/>
                <input type="hidden" value="<?php echo $value->pro_id?>" name="pro_id"/>
                <h4 id="Productmobile-text" class="ui right floated header"> <?php echo $value->pro_quantity?> grams </h4>
            </a> <br> <br>
            <p id="Productmobile-text"><?php echo $value->pro_desc?></p>
            <h4 id="Productmobile-text" class="ui left floated header">MRP: &emsp;
                <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $value->pro_price?> </h4>
            <input type="submit" value="   ADD TO BASKET"  id="checkout_submit" >
         <!-- <h4 id="Productmobile-text" class="ui right floated flat compact grey button">Add to Basket</h4>  -->
            <!-- <h4 class="ui right floated flat compact grey button">Save to List</h4> -->
        </div>
      </form>
        <?php }} ?>
    <?php if($search_data!=NUll){
       
    	?>
      <?php echo $this->pagination->create_links();?>
  <?php }else{?>
  <p>There are no product available......please check other category or brand</p>
  <?php }?>

        

        


        <div class="ui hidden divider"> <br> </div>
    </div>
</div>


<div>
    <?php include 'Footer.php';?>
</div>

<style scoped>
    #align-description {
        padding-top: 10px;
        margin-left: 18%;
    }
    #checkout_submit {
      background:none!important;
      border:none;
        color: grey;
        border-bottom: 1px grey solid;
        font-family: 'Cormorant Garamond',
            serif;
        line-height: 2;
        font-weight: bold;
        font-size: 20px;
        margin-left:32%;
    }
</style>