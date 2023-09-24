<div>
    <?php include 'Header.php';?>
</div>

<div style="padding-top:150px"> </div>




<div class="ui container">
    <div class="ui stackable grid container">
        <div class="centered three wide column">
            <h2 class="ui centered huge header" id="cartpage_fontH1">My Bag</h2>
        </div>
        <div class="ui column">
            <!--  <div class="css_button">Proceed To Checkout <i class="fa fa-arrow-right"> </i></div>  -->
              <form action="<?php echo base_url()?>update-cart-qty" method="post" >    

                            <!-- <input type="submit" class="btn btn-default update"  value="Update" /> -->
                            <?php $customer_id = $this->session->userdata('cus_id');?>
                            <?php $shipping_id = $this->session->userdata('shipping_id');?>
                            <?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){?>
                            <div class="css_button_bottom" style="    margin: 9px -216px;"><a   href="<?php echo base_url()?>payment" style="color:black">Proceed To Checkout</a></div>
                            <?php } elseif($customer_id!=NULL && $this->cart->total_items()!=Null){?>
                            <div class="css_button_bottom" style="    margin: 9px -216px;"><a  href="<?php echo base_url()?>billing" style="color:black">Proceed To Checkout</a></div>
                            <?php }elseif($this->cart->total_items()!=Null){ ?>
                            <div class="css_button_bottom" style="    margin: 9px -216px;"><a   href="<?php echo base_url()?>checkout" style="color:black">Proceed To Checkout</a></div>
                            <?php } ?>
                            </form> 

        </div>
    </div>

    <hr class="cartpage1">
    <hr class="cartpage2">

    <!-- computer only column -->
    <div class="computer_cart">
        <!-- First row only titles -->
        <div class="ui stackable grid container">
            <!-- first column -->
            <div class="two wide column">
            </div>
            <!-- Second column -->
            <div class="five wide column">
                <h4 id="cartpage_font"> Product Name </a> </h4>
            </div>
            <div class="two wide column">
                <h4 id="cartpage_font">Unit Price:</h4>
            </div>
            <div class="three wide column">
                <h4 id="cartpage_font">Quantity:</h4>
            </div>
            <div class="three wide column">
                <h4 id="cartpage_font">Subtotal</h4>
            </div>
        </div>

        <hr class="cartpage1">
        <hr class="cartpage2">

<?php $cart_content = $this->cart->contents();  ?>

                        <?php foreach ($cart_content as $items){ ?>
        <!-- second row with product details -->
        <div class="ui stackable grid container">
            <!-- first column -->
            <div class="two wide column">
                <img id="cartpage-image" src="<?php echo $items['options']['pro_image']?>" alt="About us" style="width:120px;height:120px">
            </div>
            <!-- Second column -->
            <div class="five wide column">
                <h4> <a id="cartpage_fontH2" href="#"> <?php echo $items['name']?> </a> </h4>
                <!-- <small>1 x Product</small> <br>
                <small>1 x Product</small> <br> -->

            </div>

            <div class="two wide column">
                <p class="explore_price"> <br> Rs: <?php echo $items['subtotal']?> </p>
            </div> 

            <div class="three wide column"> <br>
                <form class="ui form" action="<?php echo base_url()?>update-cart-qty" method="post">
                    <!-- <input type="text" style="width: 50px; text-align: center; margin: 0px;" value="1"> -->
                     <input style="width: 50px; text-align: center; margin: 0px;    margin: -4px 10px;"  type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2">
                    <input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">
                     <input type="submit" class="css_button2" value="Update Bag">
                </form>
            </div>

            <div class="two wide column"> <br>
                <p class="explore_price"> 
                    Rs: <?php echo $items['subtotal']?> </p> 
            </div>
            <div class="one wide column"> <br>
             <a href="<?php echo base_url()?>delete-to-cart/<?php echo $items['rowid']?>"><i class="close right floated big icon"></i></a> <br>
            </div>
        </div>
<?php } ?> 
        <hr class="cartpage1">
        <hr class="cartpage2">

        <div class="css_button2"><a href="<?php echo base_url()?>home" style="color:black">Continue Shopping</a></div>
        <!-- <div class="css_button2">Gift Wrap Order</div> -->
       


        <!-- bottom discount section -->
        <div class="ui grid">
            <div class="four column row">
                <div class="right floated column">

                    <!-- <form class="ui form">
                        <div class="field">
                        <input type="text" style="width: 150px; text-align: center; border-radius: 1px; " value="Enter coupon code">
                        </div>
                        <button style="margin-top:-48px;margin-left:163px;" class="css_button2">Update Bag</button>
                    </form> -->
                    <p style="text-align:right">Subtotal <span style="text-align:right"> &emsp; Rs. <?php echo $items['subtotal']?> </span> </p>
                   <!--  <p style="text-align:right"> Delivery <span style="text-align:right"> &emsp; Rs. 0.00</p> -->
                    <?php 
                                $cart_total = $this->cart->total();
                            ?>
                    <p style="text-align:right"> <b> Grand Total Excl. Tax </b> &emsp;Rs. <?php echo $cart_total;?>.00 </p>
                    <!-- <p style="text-align:right"> <b> Grand Total Incl. Tax </b> &emsp;Rs. 0.00</p> -->
                    
                    <div class="ui hidden divider"> </div>

                       <form action="<?php echo base_url()?>update-cart-qty" method="post" >    

                            <!-- <input type="submit" class="btn btn-default update"  value="Update" /> -->
                            <?php $customer_id = $this->session->userdata('cus_id');?>
                            <?php $shipping_id = $this->session->userdata('shipping_id');?>
                            <?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){?>
                            <div class="css_button_bottom"><a   href="<?php echo base_url()?>payment" style="color:black">Proceed To Checkout</a></div>
                            <?php } elseif($customer_id!=NULL && $this->cart->total_items()!=Null){?>
                            <div class="css_button_bottom"><a  href="<?php echo base_url()?>billing" style="color:black">Proceed To Checkout</a></div>
                            <?php }elseif($this->cart->total_items()!=Null){ ?>
                            <div class="css_button_bottom"><a   href="<?php echo base_url()?>checkout" style="color:black">Proceed To Checkout</a></div>
                            <?php } ?>
                            </form> 
                   <!--  <div style="font-size:14px;" class="css_button_bottom">Check Out With Multiple Addresses<i class="fa fa-arrow-right">
                        </i></div> -->
                </div>
            </div>
        </div>
    </div>


    <!-- mobile only column -->

    <div class="mobile_cart">
        <div class='ui grid'>

            <div class="row">
                <div class="six wide column">
                    <h4 id="cartpage_font">Product Name:</h4>

                </div>
                <div class="six wide right aligned column">
                    <h4 id="cartpage_font">Unit Price:</h4>
                </div>
                <div class="fluid right aligned column">
                    <h4 id="cartpage_font">Subtotal</h4>
                </div>
            </div>
        </div>
        <hr class="cartpage1">
        <hr class="cartpage2">
        <div class='ui grid'>
            <div class="row">
                <div class="six wide column">
                    <h4 id="cartpage_font">Cheese and Ham</h4>
                </div>
                <div class="five wide right aligned column">
                    <h4 id="cartpage_font"> Rs 67</h4>
                </div>
                <div class="four wide right aligned column">
                    <h4 id="cartpage_font">Rs 67</h4>
                </div>
            </div>
          <input type="text" style="width: 50px; text-align: center; margin: 0px;" value="1">
          <div class="css_button2"> <small>Edit</small></div>
        </div>
        
              <hr class="cartpage1">
        <hr class="cartpage2">  <br>
 
                <!-- bottom discount section -->
        <div class="ui grid">
            <div class="column row">
                <div class="right floated column">
                    <!-- <form class="ui form">
                        <div class="field">
                        <input type="text" style="width: 150px; text-align: center; border-radius: 1px; " value="Enter coupon code">
                        </div>
                        <button style="margin-top:-48px;margin-left:163px;" class="css_button2">Update Bag</button>
                    </form> -->
                    <p style="text-align:right">Subtotal  &emsp; Rs. 69.00  </p>
                    <p style="text-align:right"> Delivery <span style="text-align:right"> &emsp; Rs. 0.00</p>
                    <p style="text-align:right"> <b> Grand Total Excl. Tax </b> &emsp;Rs. 69.00 </p>
                    <p style="text-align:right"> <b> Grand Total Incl. Tax </b> &emsp;Rs. 0.00</p>
                    
                    <div class="ui hidden divider"> </div>
                    <div style="font-size:14px;" class="css_button_bottom">Check Out With Multiple Addresses<i class="fa fa-arrow-right">
                        </i></div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="ui hidden divider"> <br> </div>




<div>
    <?php include 'Footer.php';?>
</div>

<style>

    /* .explore_price {
    font-size: 15px;
    font-family: 'Josefin Sans',
        sans-serif;
    font-weight: 400;
    font-weight: bold;
} */


    .css_button2 {
        background-color: #999;
        cursor: pointer;
        border: none;
        padding: 6px 6px;
        display: inline-block; 
        height: 30px;
        margin-right: 10px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(000, 000, 000, 0.11);

          font-size: 15px;
    font-family: 'Josefin Sans',
        sans-serif;
    font-weight: 400;
    /* font-weight: bold; */

    
        /* font-family: 'brandon-grotesque',
            sans-serif;
        color: white;
        font-size: 13px;
        font-weight: 300; */
    }

    hr.cartpage1 {
        border-style: inset;
        display: block;
        margin-bottom: 1px;
    }

    hr.cartpage2 {
        border-style: inset;
        display: block;
        margin-top: 2px;
    }

    .css_button_bottom {
        background-color: #20466654; 
        cursor: pointer;
        border: none;
        padding: 15px;
        display: inline-block;
        height: 50px;

        text-align: center;
        text-shadow: 0 1px 0 rgba(000, 000, 000, 0.11);
        font-family: 'brandon-grotesque',
            sans-serif;
        color: white;
        font-size: 19px;
        font-weight: 300;
    }

    /* computer */
    @media (min-width: 601px) {
        .css_button_bottom {
            /* margin-left: -110px; */
            width: 270;

        }
    }

    @media (max-width: 600px) {
        .css_button_bottom {
            width: 100%;
        }
    }





    .css_button {
        background-color: #20466654;
        cursor: pointer;
        border: none;
        padding: 15px 32px;
        display: inline-block;
        height: 50px;

        text-align: center;
        text-shadow: 0 1px 0 rgba(000, 000, 000, 0.11);
        font-family: 'brandon-grotesque',
            sans-serif;
        color: white;
        font-size: 19px;
        font-weight: 300;
    }

    /* computer */
    @media (min-width: 601px) {
        .css_button {
            margin-left: -210px;
            width: 270;

        }
    }

    @media (max-width: 600px) {
        .css_button {
            width: 100%;
        }
    }


    #cartpage_font {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 20px;
    }

    /* computer */
    @media (min-width: 601px) {
        #cartpage_font {
            font-size: 20px;

        }
    }

    @media (max-width: 600px) {
        #cartpage_font {
            font-size: 14px;
        }
    }

    #cartpage_fontH1 {
        /* font-family: 'adobe-caslon-pro',
            serif; */
        /*font-family: 'Josefin Sans',*/
        /*    sans-serif;*/
        font-family: 'brandon-grotesque',
            sans-serif;
        font-size: 24px;
        font-weight: 300;
        line-height: 68px;
    }

    #cartpage_fontH2 {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 25px;
        color: black;

    }

    .cart_checkout {
        color: grey;
        border-bottom: 1px grey solid;
        font-family: 'Cormorant Garamond',
            serif;

        line-height: 2;
        font-weight: bold;
    }



    @media (max-width: 600px) {
        .computer_cart {
            display: none ! important;
        }
    }


    @media (min-width: 601px) {
        .mobile_cart {
            display: none ! important;
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