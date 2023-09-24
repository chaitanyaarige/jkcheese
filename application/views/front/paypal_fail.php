
<div>
    <?php include 'Header.php';?>
</div>
<div id="menuleft">
<section id="cart_items">
		<div class="container">
			<h3>Dear <?php echo $this->session->userdata("cus_name");?></h3>
<h4>Sorry Your Order was Cancelled....</h4><hr/>
			


<h5 style="text-align: justify;"><a href="<?php echo base_url()?>home" style="color:black">Continue Shopping.</a></h5>
			
		</div>
	</section>
</div>
	<div>
    <?php $this->load->view('front/Footer.php');?>
</div> 