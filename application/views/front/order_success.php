
<div>
    <?php include 'Header.php';?>
</div>
<div id="menuleft">
<section id="cart_items">
		<div class="container">
			<h3>Dear <?php echo $this->session->userdata("cus_name");?></h3>
			<h3> Thank You ! </h3>
<h4>Your order is successful....</h4><hr/>
			

            
<h6>Total payable amount : Rs<?php echo $this->session->userdata("b_total");?></h6>

<h5 style="text-align: justify;">We Received your order. We will contact you ASAP with delivery details. <!-- For more details please check your registration mail. --></h5>
			
		</div>
	</section> 
</div><!--/#cart_items-->


<div>
    <?php $this->load->view('front/Footer.php');?>
</div>
	
