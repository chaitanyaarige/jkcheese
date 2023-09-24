<div>
  <?php include 'Header.php';?>
</div>

<div>
  <?php include 'MenuLeft.php';?>
</div>


<div class="ui container">
  <div class="productpage_align">
    <!-- Product List One -->

    <div class="ui  divider"> </div>
    <h4 class="ui centered  header" id="header-size40">Product List</h4>
    <div class="ui hidden divider"> </div>

    <div id="slidecheese" class="carousel slide" data-ride="carousel">
      <div class="container carousel-inner">
        <div class="carousel-item active">
          
          <div class="ui three column doubling stackable grid container">
              <?php foreach ($products as $value) {?>

    <?php if($value->pro_status==1){?>
            <div class="column">
              <a href="#new">
                <img class="polaroid-productpage" src="<?php echo base_url().$value->pro_image?>" alt="About us" style="width:200px;height:200px">
                <div class="ui hidden divider"> </div>
                <h4 class="ui left floated header"><?php echo $value->pro_title?></h4>
                <h4 class="ui right floated header"> <?php echo $value->pro_quantity?>gms </h4>
              </a> <br> <br>
              <p class="justified_para">Lorem ipsum description </p>
              <h4 class="ui left floated header">MRP: &emsp;
                <i class="fa fa-inr" aria-hidden="true"></i> <?php echo $value->pro_price?> </h4>
              <h4 class="ui right floated flat compact primary button">Add to Cart</h4>
            </div>
 <?php }} ?>
 <?php if($products!=NUll){?>
            <?php echo $this->pagination->create_links();?>
    <?php }else{?>
    <p>There are no product available......please check other category or brand</p>
    <?php }?>
            <!-- <div class="column">
              <a href="#new">
                <img class="polaroid-productpage" src="<?php echo base_url()?>assets/images/cheese-varieties.jpg" alt="About us" style="width:200px;height:200px">
                <div class="ui hidden divider"> </div>
                <h4 class="ui left floated header">Cheese</h4>
                <h4 class="ui right floated header"> 850 grams </h4>
              </a> <br> <br>
              <p class="justified_para">Lorem ipsum description </p>
              <h4 class="ui left floated header">MRP: &emsp;
                <i class="fa fa-inr" aria-hidden="true"></i> 100 </h4>
              <h4 class="ui right floated flat compact primary button">Add to Cart</h4>
            </div>

            <div class="column">
              <a href="#new">
                <img class="polaroid-productpage" src="<?php echo base_url()?>assets/images/cheese-varieties.jpg" alt="About us" style="width:200px;height:200px">
                <div class="ui hidden divider"> </div>
                <h4 class="ui left floated header">Cheese</h4>
                <h4 class="ui right floated header"> 850 grams </h4>
              </a> <br> <br>
              <p class="justified_para">Lorem ipsum description </p>
              <h4 class="ui left floated header">MRP: &emsp;
                <i class="fa fa-inr" aria-hidden="true"></i> 100 </h4>
              <h4 class="ui right floated flat compact primary button">Add to Cart</h4>
            </div> -->
          </div>

        </div>

        <!-- <div class="carousel-item">
          <div class="ui three column doubling stackable grid container">
            <div class="column">
              <a href="#new">
                <img class="polaroid-productpage" src="<?php echo base_url()?>assets/images/cheese-varieties.jpg" alt="About us" style="width:270px;height:200px">
                <div class="ui hidden divider"> </div>
                <h4 class="ui left floated header">Cheese</h4>
                <h4 class="ui right floated header"> 850 grams </h4>
              </a> <br> <br>
              <p class="justified_para">Lorem ipsum description </p>
              <h4 class="ui left floated header">MRP: &emsp;
                <i class="fa fa-inr" aria-hidden="true"></i> 100 </h4>
              <h4 class="ui right floated flat compact primary button">Add to Cart</h4>
            </div>

            <div class="column">
              <a href="#new">
                <img class="polaroid-productpage" src="<?php echo base_url()?>assets/images/cheese-varieties.jpg" alt="About us" style="width:270px;height:200px">
                <div class="ui hidden divider"> </div>
                <h4 class="ui left floated header">Cheese</h4>
                <h4 class="ui right floated header"> 850 grams </h4>
              </a> <br> <br>
              <p class="justified_para">Lorem ipsum description </p>
              <h4 class="ui left floated header">MRP: &emsp;
                <i class="fa fa-inr" aria-hidden="true"></i> 100 </h4>
              <h4 class="ui right floated flat compact primary button">Add to Cart</h4>
            </div>


            <div class="column">
              <a href="#new">
                <img class="polaroid-productpage" src="<?php echo base_url()?>assets/images/cheese-varieties.jpg" alt="About us" style="width:270px;height:200px">
                <div class="ui hidden divider"> </div>
                <h4 class="ui left floated header">Cheese</h4>
                <h4 class="ui right floated header"> 850 grams </h4>
              </a> <br> <br>
              <p class="justified_para">Lorem ipsum description </p>
              <h4 class="ui left floated header">MRP: &emsp;
                <i class="fa fa-inr" aria-hidden="true"></i> 100 </h4>
              <h4 class="ui right floated flat compact primary button">Add to Cart</h4>
            </div>
          </div>
        </div> -->
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#slidecheese" data-slide="prev">
        <span class=""></span>
      </a>
      <a class="carousel-control-next" href="#slidecheese" data-slide="next">
        <span class=""></span>
      </a>
    </div>
    <!-- End of product listing one -->


    <!-- Product Recommendation Listing Starts -->
  
    <!-- End of Product Recommendation Listing -->


    
<br><br>


<div>
    <?php include 'Footer.php';?>
</div>

  </div>
</div>



