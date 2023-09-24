<div>
    <?php include 'Header.php';?>
</div>

<div class="productpage-computer">
    <?php // include 'MenuLeft.php';?>
</div>


<!-- product description start -->
<div class="ui stackable grid container" id="align-description">
    <div class="ui hidden divider"> <br> </div>
    <!-- first column -->
     <div class="two wide column">
        <!-- empty space between -->
    </div>
    <!-- Second column -->
    <div class="four wide column">
            <div class="zoom-effect-container">
                <div class="image-card">
                    <img class="description-image" src="<?php echo base_url().$product_info->pro_image?>" alt="About us">
                </div>
            </div>
    </div>
    <!-- Second of Second column -->
    <div class="two wide column">
        <!-- empty space between -->
    </div>
    <div class="six wide column">
        <h2 class="ui header" id="productD_header"><?php echo $product_info->pro_title?> </h2>
        <div class="red-divider1"></div> <br>

        <div class="two column row">
            <div class="left floating column" style="margin-left:21px;">
                <h3 id="product_page_font" class="ui left floated header">MRP: &emsp;
                   Rs <?php echo $product_info->pro_price?> </h3>
                <h5 id="product_de_font" class="ui header"> Availability: <a id="product_de_font" class="ui green header"> <?php if($product_info->pro_quantity>0){
                    echo "<a class='ui green header' id='product_de_font'>In Stock</a>";
                }elseif($product_info->pro_availability==3){
                    echo "Up Coming";
                }else{
                    echo "<a class='ui red header' id='product_de_font'>Out Of Stock</a>";
                }?></a>
                </h5>
                <!-- <h5 id="product_de_font" class="ui disabled header"> Availability: <a id="product_de_font" class="ui red header">
                        Out of Stock</a> </h5> -->
            </div>

            <div class="right floated column">
                <label id="product_de_font" style="font-size: 14px;"> <b> QUANTITY </b></label>
                <!-- <form class="ui form" action="<?php echo base_url()?>add-to-cart"  method="post">
                    <input type="button" value="-" id="subs" class="ui mini button pull-left" style="margin-right: 10px" />&nbsp;
                    <input type="text" style="width: 50px; height:28px; text-align: center; margin: 0px;" class="onlyNumber form-control pull-left"
                     id="noOfRoom" value="1" name="noOfRoom" />&nbsp;
                     <input type="hidden" value="1" name="qty"/>
                     <input type="hidden" value="<?php echo $product_info->pro_id?>" name="pro_id"/>
                    <input type="button" value="+" id="adds" class="ui mini button" />
                    <input type="submit" value="ADD TO BASKET"  id="description_basket" > 
                </form> -->

                <form class="ui form" action="<?php echo base_url()?>add-to-cart"  method="post">
          <input type="button" value="-" id="subs" class="ui mini button pull-left" style="margin-right: 10px" />&nbsp;
          <input type="text" style="width: 50px; height:28px; text-align: center; margin: 0px;" class="onlyNumber form-control pull-left"
            id="noOfRoom" value="1" name="noOfRoom" />&nbsp;
            <input type="hidden" value="1" name="qty"/>
                     <input type="hidden" value="<?php echo $product_info->pro_id?>" name="pro_id"/>
          <input type="button" value="+" id="adds" class="ui mini button" />  <br> <br>
          <input type="submit" value="ADD TO CART" id="description_basket">
          <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> -->
        </form> 

                    
                <!-- <a id="description_basket" href="cartpage.php"> <b> SAVE TO LIST </b></a> -->
            </div>
        </div>
        <div class="ui hidden divider"><br> </div>
        <div class="red-divider"></div>
        <div class="ui hidden divider"><br> </div>
        <p id="product_de_font" style="line-height:150%"> <b> Description: </b> <br>
            <b> Weight:</b> <?php echo $product_info->pro_quantity?> <br>
            <b> Brand : </b> <?php echo $product_info->brand_name?> <br>
            <b> Product ID: </b> <?php echo $product_info->pro_id?> <br>
            <b> Temperature:</b> <?php echo $product_info->pro_temp?> <br>
			<b> Country:</b> <?php echo $product_info->pro_country; ?> <br>
            </b><?php echo $product_info->pro_desc?></p>

    </div>
</div>


<br><br>
  

<div>
    <?php $this->load->view('front/Footer.php');?>
</div>

<style scoped>
    .zoom-effect-container {
        float: left;
        position: relative;
    
        margin: 0 auto;
        overflow: hidden;
    }

    .image-card img {
        -webkit-transition: 0.4s ease;
        transition: 0.3s ease;
    }

    .zoom-effect-container:hover .image-card img {
        -webkit-transform: scale(1.3));
        transform: scale(1.3);
    }

             /* Computer----------- */
@media only screen and (min-width : 1025px) {
  #align-description { 
        padding-top: 120px;
    }
}

     /* iPads (portrait and landscape) ----------- */
@media only screen and (min-width : 768px) and (max-width : 1024px) {
    #align-description { 
        padding-top: 120px;
    }
}
  
    .red-divider {
        border-bottom: 1.5px red dotted;
        width: 100%;
    }

    .red-divider1 {
        border-bottom: 1.2px red dotted;
        width: 100%;
    }

    #productD_header {
        font-size: 28px;
        font-family: 'Raleway', sans-serif;
        font-weight: 300;
    }


    .description-image {
        padding: 5px;
        width: 150px;
    }

    /* description image mobile */
    @media screen and (max-width: 601px) {
        .description-image {
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-top: 70px;
        }
    }
 
    /*description image tablet */
  @media only screen and (min-width : 768px) and (max-width : 1024px) {
        .description-image {
            width: 250px;
            height: 250px;
        }
        .description-image:hover {
            transform: scale(1.5);
        }
    }


    /*description image computer */
    @media screen and (min-width: 1205px) {
        .description-image {
            width: 350px;
            height: 350px;
        }
        .description-image:hover {
            transform: scale(1.5);
        }
    }
</style>

<script>
    $('#adds').click(function add() {
        var $rooms = $("#noOfRoom");
        var a = $rooms.val();

        a++;
        $("#subs").prop("disabled", !a);
        $rooms.val(a);
    });
    $("#subs").prop("disabled", !$("#noOfRoom").val());

    $('#subs').click(function subst() {
        var $rooms = $("#noOfRoom");
        var b = $rooms.val();
        if (b >= 1) {
            b--;
            $rooms.val(b);
        } else {
            $("#subs").prop("disabled", true);
        }
    });
</script>

