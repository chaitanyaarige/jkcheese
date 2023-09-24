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
     <div class="twelve wide column">

     <h1> My Orders </h1>
     <table width="100%" >
         <thead>
            <tr>
                <th>S.NO</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Price</th>
                <th>Status</th>
            </tr>
         </thead>
          <tbody>
            <?php 
                $total=0;
            foreach ($order_details as $order) {?>
            <tr class="odd gradeX center">
                <td><?php echo $total = $total + 1; ?></td>
                <td><?php echo $order->product_name?></td>
                <td><?php echo $order->sales_quantity?></td>
                <td>Rs.<?php echo $order->product_price;?></td>
                <td>Rs.<?php echo $order->sales_quantity * $order->product_price;?></td>  
                <td><?php echo $order->order_status;?></td>
            </tr>
            <?php 
            // $total = $total+$order->sales_quantity * $order->product_price;
                
                } ?>
        </tbody>

     </table>
        <!-- empty space between -->
    </div>
    <!-- Second column -->
   
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


