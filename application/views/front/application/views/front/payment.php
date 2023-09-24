<div>
    <?php include 'Header.php';?>
</div>

<div style="padding-top:100px"> </div>




<div class="ui container">
    <div class="ui stackable grid container">
        <div class="centered three wide column">
            <h2 class="ui centered huge header" id="cartpage_fontH1">My Bag</h2>
        </div>
        <div class="ui column">
            <!--  <div class="css_button">Proceed To Checkout <i class="fa fa-arrow-right"> </i></div>  -->

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
                <img id="cartpage-image" src="<?php echo $items['options']['pro_image']?>" alt="About us"
                    style="width:120px;height:120px">
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
                    <input style="width: 50px; text-align: center; margin: 0px;    margin: -4px 10px;" type="text"
                        name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2">
                    <input type="hidden" name="rowid" value="<?php echo $items['rowid']?>">
                    <input type="submit" class="css_button2" value="Update Bag">
                </form>
            </div>

            <div class="two wide column"> <br>
                <p class="explore_price">
                    Rs: <?php echo $items['subtotal']?> </p>
            </div>
            <div class="one wide column"> <br>
                <a href="<?php echo base_url()?>delete-to-cart/<?php echo $items['rowid']?>"><i
                        class="close right floated big icon"></i></a> <br>
            </div>
        </div>
        <?php } ?>
        <hr class="cartpage1">
        <hr class="cartpage2">

        <!-- ============ New columns ================-->

        <div class="ui stackable grid container">
            <!-- first column -->
            <div class="four wide column">
                <div class="css_button2"><a href="<?php echo base_url()?>home" style="color:white">Continue Shopping</a>
                </div>
                <!-- <div class="css_button2">Gift Wrap Order</div> -->
                <!-- <br> -->
                <h4 id="cartpage_font">Delivering To:</h4>
                <p>
                    <strong for="">Name</strong> : <?php echo $customer->cus_name;  ?><br>
                    <strong for="">Mobile</strong> : <?php echo $customer->cus_email;  ?><br>
                    <strong for="">Email</strong> : <?php echo $customer->cus_mobile;  ?><br>
                    <strong for="">Address</strong> : <?php echo $customer->cus_address;  ?><br>
                    <strong for="">City</strong> : <?php echo $customer->cus_city;  ?><br>
                    <strong for="">Country</strong> : <?php echo $customer->cus_country;  ?><br>
                    <strong for="">ZIP</strong> : <?php echo $customer->cus_zip;  ?><br>
                    <a href="/billing">Change Address</a>
                </p>
            </div>
            <!-- Second column -->
            <div class="four wide column">
                <form action="<?php echo base_url()?>place-order" method="post">
                    <div class="ui form">
                        <div class="grouped fields">
                            <h4 id="cartpage_font">Special Notes</h4>
                            <div class="field">
                                <textarea name="payment_message" placeholder="Special Notes for Delivery" rows="2"
                                    columns="6"></textarea>
                            </div>

                        </div>
                    </div>
            </div>
            <hr style=" border-left: 2px solid grey;height: 30%; margin:0px; margin-top:10px;padding:0px;">
            <div class="four wide column">
                <div class="ui form">
                    <div class="grouped fields">
                        <h4 id="cartpage_font">Payment Options</h4>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input id="showvisa" type="radio" name="payment_gateway" value="cash_on_delivery">
                                <label id="cartpage_fonts">Cash On Delivery</label>
                                <p class="menu1 hidden"> Thank you for spending your valuable time on online
                                    shopping.</p>

                            </div>
                        </div>

                        <div class="field">
                            <div class="ui radio checkbox">
                                <input id="showcash" type="radio" name="payment_gateway" value="cc_avenue">
                                <label id="cartpage_fonts">Pay Online</label>
                                <img class="menu0 hidden" src="assets/images/ccavenue.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="three wide column">
                <?php
                     $cart_total = $this->cart->total();
                 ?>
                <h4 id="cartpage_font">Grand Total <br>
                    <span id="cartpage_font"> Rs. <?php echo $cart_total;?>.00</span> </h4>

                <input type="submit" value="Complete Payment" class="css_button2">
            </div>
            </form>
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
        <?php $cart_content = $this->cart->contents();  ?>

        <?php foreach ($cart_content as $items){ ?>
        <div class='ui grid'>
            <div class="row">
                <div class="six wide column">
                    <h4 id="cartpage_font"><?php echo $items['name']?> </h4>
                </div>
                <div class="five wide right aligned column">
                    <h4 id="cartpage_font"> Rs <?php echo $items['subtotal']?> </h4>
                </div>
                <div class="four wide right aligned column">
                    <h4 id="cartpage_font">Rs <?php echo $items['subtotal']?> </h4>
                </div>
            </div>
            <!-- <input type="text" style="width: 50px; text-align: center; margin: 0px;" value="1">
          <div class="css_button2"> <small>Edit</small></div> -->
        </div>
        <?php } ?>
        <hr class="cartpage1">
        <hr class="cartpage2"> <br>
        <form action="<?php echo base_url()?>place-order" method="post">
            <div class="four wide column">
                <div class="ui form">
                    <div class="grouped fields">
                        <label id="cartpage_fonts">Special Notes</label>
                        <div class="field">
                            <textarea name="payment_message"
                                placeholder="Notes about your order, Special Notes for Delivery" rows="2"
                                columns="5"></textarea>
                        </div>
                        <h4 id="cartpage_font">Payment Options</h4>
                        <div class="field">
                            <div class="ui radio checkbox">
                                <input id="showvisa" type="radio" name="payment_gateway" value="cash_on_delivery">
                                <label id="cartpage_fonts">Cash On Delivery</label>
                                <p class="menu1 hidden"> Thank you for spending your valuable time on online
                                    shopping.</p>
                            </div>
                        </div>

                        <div class="field">
                            <div class="ui radio checkbox">
                                <input id="showcash" type="radio" name="payment_gateway" value="cc_avenue">
                                <label id="cartpage_fonts">Pay Online</label>
                                <img class="menu0 " src="assets/images/ccavenue.png">
                            </div>
                        </div>


                        <div class="three wide column">
                            <?php
                     $cart_total = $this->cart->total();
                 ?>
                            <h4 id="cartpage_font">Grand Total 
                                <span id="cartpage_font"> Rs. <?php echo $cart_total;?>.00</span> </h4>

                            <input type="submit" value="Complete Payment" class="css_button2">
                        </div>
                        <!-- <div class="three wide column">
                            <input type="submit" value="Complete Payment" class="button10">
                        </div> -->
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


<div class="ui hidden divider"> <br> </div>



<div>
    <?php $this->load->view('front/Footer.php');?>
</div>

<style>
.hidden {
    display: none;
}

.vl {
    border-left: 2px solid grey;
    height: 25%;
}

/* .explore_price {
    font-size: 15px;
    font-family: 'Josefin Sans',
        sans-serif;
    font-weight: 400;
    font-weight: bold;
} */

.button10 {
    background-color: #0b4f93;
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

.css_button2 {
    background-color: #0b4f93;
    color: white;
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
$(document).ready(function() {
    $('#showcash').click(function() {
        $('.menu0').show("1000");
        $('.menu1').hide("1000");
    });

    $('#showvisa').click(function() {
        $('.menu1').show("1000");
        $('.menu0').hide("1000");
    });
});


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