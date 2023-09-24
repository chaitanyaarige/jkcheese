<div>
    <?php include 'Header.php';?>
</div>



<div id="menuleft">
    <h2 class="ui huge header" id="cartpage_fontH1">Cart Page </h2>
      <div class="ui divider"> <br> </div>
         <?php $cart_content = $this->cart->contents();
                        
                        ?>

                        <?php foreach ($cart_content as $items){ ?>
        <div class="ui stackable grid container">
            <!-- first column -->
            <div class="two wide column">
                <img id="myaccount-product-padding" src="<?php echo $items['options']['pro_image']?>" alt="About us" style="width:100px;height:100px">
            </div>
            <!-- Second column -->
            <div class="three wide column">
                <h4> <br> <br> <a id="cartpage_fontH2" href="#"> <?php echo $items['name']?> </a> </h4>
            </div>
            <div class="three wide column">
                <h4 id="cartpage_font">Quantity:</h4>
              <form class="ui form" style="width:50px;" action="<?php echo base_url()?>update-cart-qty" method="post">
                   
                    <input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty']?>" autocomplete="off" size="2">
                    <input  type="hidden" name="rowid" value="<?php echo $items['rowid']?>">
                    
                   <!--  <input class="explore_to_cart" type="submit" id="cartpage_font" style="    padding: 9px 68px 16px 71px;
    margin-top: -35px;"value="Update"/> -->
    <input  type="submit"  style="margin: -42px 95px;
    padding: 11px 14px 11px 15px;"value="Update"/>
                </form>
            </div>
            <div class="two wide column">
                <h4 id="cartpage_font">Price: &emsp; <br> <br> <?php echo $items['price']?> </h4>
            </div>
            
            <div class="one wide column">
                <br> 
                <a href="<?php echo base_url()?>delete-to-cart/<?php echo $items['rowid']?>"><i class="window close big icon"></i></a> <br>
            </div>
        </div>
        <div class="ui divider"> <br> </div>

           <?php } ?> 
    <div class="three wide column">
                <br> 
                <a href="checkoutpage.php" class="cart_checkouts">
                <!-- <i class="fa fa-cart-plus" aria-hidden="true"></i> -->
                 
                


                <?php 
                $cart_total = $this->cart->total();
                                $bdata = array();
                                    $bdata['b_total'] = $cart_total;
                                    $this->session->set_userdata($bdata);
                                    
                                    
              ?>
              Cart Total = &emsp; <?php echo $cart_total;?> Rs</a>
            
                           <?php $g_total = $cart_total;?>
                            
                            <form action="<?php echo base_url()?>update-cart-qty-payment" method="post" >   
                            
                            </form>
            </div>
            <br>
            <form action="<?php echo base_url()?>place-order" method="post" style="    padding: 12px -27px 19px 15px;
    margin: 9px -2102px;">
               <div class="ui form" id="radios_payment">
  <label id="cartpage_fonts">How do you want to pay?</label> <br> <br>
  <div class="inline fields">
     <div class="field">
    <textarea name="payment_message"  placeholder="Notes about your order, Special Notes for Delivery" rows="10" columns="10"></textarea>
</div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="payment_gateway" value="cash_on_delivery" checked="checked">
        <label id="cartpage_fonts">Cash On Delivery</label>
      </div>
    </div>

<!-- <div class="field">
      <div class="ui radio checkbox">
        <input type="radio"  name="payment_gateway" value="paypal_payment">
        <label id="cartpage_fonts">Paypal</label>
      </div>
    </div> -->
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio"  name="payment_gateway" value="payu_money">
        <label id="cartpage_fonts">Pay U Money</label>
      </div>
    </div>
    <div class="three wide column">
      <input type="submit" value="Complete Payment" id="checkout_submit" >
        
    </div>
  </div>
</div>
</form>

    

 </div>

<div class="ui hidden divider"> <br> </div>
<style>
    #cartpage_font {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 20px;
    }
    
        #cartpage_fonts {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 20px;
    }


    #cartpage_fontH1 {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 35px;
        padding-left: 8%;
    }

    #cartpage_fontH2 {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 25px;

    }

    .cart_checkout {
        color: grey;
        border-bottom: 1px grey solid;
        font-family: 'Cormorant Garamond',
            serif;
        font-weight: bold;
        margin-left: 45%;
    }

      .cart_checkouts {
        color: grey;
        font-family: 'Cormorant Garamond',
            serif;
        font-weight: bold;
        margin-left: 45%;
         font-size: 20px;
    }
    
    #special_notes{
        margin-left: 40%;
        width: 300px; 
        height:100px; 
    }

        #radios_payment{
        margin-left: 45%;
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

<div>
    <?php include 'Footer.php';?>
</div>

