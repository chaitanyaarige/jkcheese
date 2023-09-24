<div>
    <?php include 'Header.php';?>
</div>


<div id="menuleft">
    <h2 class="ui huge header" id="checkoutpage_fontH1">Enter Delivery Address</h2>
    <div class="ui segment">
        <div class="ui stackable grid container">
            <!-- first column -->
            <div class="two wide column">
            </div>
            <h5 style='color:red'> <?php echo validation_errors();?></h5>
            <!-- Second column -->
            <div class="six wide column">
                <form class="ui form" action="<?php echo base_url()?>update-billing" method="post">
                    <div  class="field">
                        <label id="checkoutpage_font">Name</label>
                        <input type="text" placeholder="Name" name="cus_name" value="<?php echo $cus_info->cus_name?>" required >
                        <input type="hidden" name="cus_id" value="<?php echo $cus_info->cus_id?>">
                    </div>
                    <div class="field">
                        <label id="checkoutpage_font">Mobile Number</label>
                        <input type="text"  pattern=".{10}" title="Only 10 numbers"  name="cus_mobile" placeholder="Mobile Number" value="<?php echo $cus_info->cus_mobile?>" required >
                    </div>
                     <div class="field">
                        <label id="checkoutpage_font">Email</label>
                        <input type="text" name="cus_email" placeholder="Email" value="<?php echo $cus_info->cus_email?>" required>
                    </div>
                    <div class="field">
                        <label id="checkoutpage_font">Flat, House no., Building, Company, Apartment: </label>
                        <input type="text" name="cus_address" placeholder="Address" value="<?php echo $cus_info->cus_address?>" required>
                    </div>
				     <div class="field">
                        <label id="checkoutpage_font">Town/City:  </label>
                        <input type="text" name="cus_city"   value="<?php echo $cus_info->cus_city?>" required>
                    </div>   
                    <div class="field">
                       <label id="checkoutpage_font">Pincode: </label>
                        <input type="text" name="cus_zip" pattern=".{6}" title="Only 6 numbers"  placeholder="Pin code" value="<?php echo $cus_info->cus_zip?>" required>
                    </div> 
                 <!--   <div class="field">
                        <label id="checkoutpage_font">Landmark: </label>
                        <input type="text" name="last-name" placeholder="Mobile Number">
                    </div>  --> 

                    <!-- <div class="field">
                        <label id="checkoutpage_font">State:   </label>
                        <input type="text" name="last-name" placeholder="Mobile Number">
                    </div>   --> 
                        <div class="field">
                    <select name="cus_country" value="<?php echo $cus_info->cus_country?>" required>
										
						
									<option value="India">India</option>
				
									</select>
									</div>     
								 	<div class="field">
										<label id="checkoutpage_font">Accept Terms and Conditions </label> 
									<input type="checkbox" name="shipping_info" value="on" required> 
								</div> 
                    <input type="submit" value="Save & Continue"  class="css_button_bottom"  >
					 
                </form>
            </div>
        </div>

    </div>
</div>

<div class="ui hidden divider"> <br> </div>

<style>
    .css_button_bottom {
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
 
    /* computer */
    @media (min-width: 601px) {
        .css_button_bottom {
            /* margin-left: -110px; */
            width: 270;
 
        }
    }
	

    #checkoutpage_font {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 18px;
    }

    
#checkoutpage_fontH1 {
        font-family: 'Cormorant Garamond',
            serif;
        font-size: 35px;
        padding-left:8%;
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


<div>
    <?php include 'Footer.php';?>
</div>