
       <!--  page-wrapper -->
        <div id="page-wrapper" style="background:#fff">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Order Page</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Billing Address
                        </div>
                        <div class="panel-body">
                          <h4><b>Name:</b><?php echo $cus_info->cus_name?></h4>
                          <h4><b>Email:</b><?php echo $cus_info->cus_email?></h4>
                          <h4><b>Mobie:</b><?php echo $cus_info->cus_mobile?></h4>
                          <h4><b>Address:</b><?php echo $cus_info->cus_address?></h4>
                          <h4><b>City:</b><?php echo $cus_info->cus_city?></h4>
                          <h4><b>Country:</b><?php echo $cus_info->cus_country?></h4>
                          <h4><b>Zip:</b><?php echo $cus_info->cus_zip?></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Shipping Address
                        </div>
                        <div class="panel-body">
                          <h4><b>Name:</b><?php echo $ship_info->cus_name?></h4>
                          <h4><b>Email:</b><?php echo $ship_info->cus_email?></h4>
                          <h4><b>Mobie:</b><?php echo $ship_info->cus_mobile?></h4>
                          <h4><b>Address:</b><?php echo $ship_info->cus_address?></h4>
                          <h4><b>City:</b><?php echo $ship_info->cus_city?></h4>
                          <h4><b>Country:</b><?php echo $ship_info->cus_country?></h4>
                          <h4><b>Zip:</b><?php echo $ship_info->cus_zip?></h4>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                     <div class="col-lg-12">
                         <div class="panel panel-default">
                            <div class="panel-heading">
                               Invoice # Inv <?php echo $order_info->order_id?>
                            </div>
                         <h5>
                             Invoice Date: <?php $date=  $order_info->order_date;
                               echo date('m-d-Y h:i:s a',strtotime($date));
                             ?>
                         </h5>
                         </div>
                     </div>
                </div>
               <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Order Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $total=0;
                                        foreach ($order_details_info as $order) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $order->product_name?></td>



                                            <td><?php echo $order->sales_quantity?></td>
                                            <td>Rs. <?php echo $order->product_price;?></td>
                                            <td class="center"><?php echo $order->sales_quantity * $order->product_price;?></td>

                                        </tr>
                                        <?php
                                        $total = $total+$order->sales_quantity * $order->product_price;

                                         } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Amount Calcutation
                        </div>
                        <div class="panel-body">
                           <h4><strong>Sub-Total: </strong>Rs. <?php echo $total?></h4>
                           <h4><strong>Vat 5%: </strong>Rs. <?php echo $vat = $total*5/100;?></h4>
                           <h4><strong>Grand-Total: </strong>Rs. <?php echo $vat+$total;?></h4>
                        </div>
                        <!-- <div class="panel-footer">
                            Panel Footer
                        </div> -->
                    </div>
                </div>
            </div>
            <div id="print_area" style="display: none;">
                <div style="margin-bottom: 20px;display: flex;">
                <div style="width: 50%;float: left;">
                    <strong>
                        Invoice # Inv <?php echo $order_info->order_id?>
                        </strong>
                        <br>
                    <strong>
                        Invoice Date: <?php $date=  $order_info->order_date;
                        echo date('m-d-Y h:i:s a',strtotime($date));
                        ?>
                    </strong>
                </div>
            </div>
              <div style="margin-bottom: 20px;display: flex;">
                <div style="width: 50%;float: left;">
                  <strong>Billing Address :</strong> <br>
                    <strong>Name:</strong><?php echo $ship_info->cus_name?></br>
                    <strong>Email:</strong><?php echo $ship_info->cus_email?></br>
                    <strong>Mobie:</strong><?php echo $ship_info->cus_mobile?></br>
                    <strong>Address:</strong><?php echo $ship_info->cus_address?></br>
                    <strong>City:</strong><?php echo $ship_info->cus_city?></br>
                    <strong>Country:</strong><?php echo $ship_info->cus_country?></br>
                    <strong>Zip:</strong><?php echo $ship_info->cus_zip?></br>
                </div>
                <div style="width: 50%;float: left;">
                  <strong>Shipping Address : </strong> <br>
                    <strong>Name:</strong><?php echo $ship_info->cus_name?><br>
                    <strong>Email:</strong><?php echo $ship_info->cus_email?><br>
                    <strong>Mobie:</strong><?php echo $ship_info->cus_mobile?><br>
                    <strong>Address:</strong><?php echo $ship_info->cus_address?><br>
                    <strong>City:</strong><?php echo $ship_info->cus_city?><br>
                    <strong>Country:</strong><?php echo $ship_info->cus_country?><br>
                    <strong>Zip:</strong><?php echo $ship_info->cus_zip?>
                </div>
              </div>
              <div style="margin-top: 10px;">
                <strong>Product Details : </strong><br>
                <table width="100%" class="print-table table">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Quantity</th>
                      <th>Unit Price</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $total=0;
                    foreach ($order_details_info as $order) {?>
                    <tr class="odd gradeX">
                      <td>
                        <?php echo $order->product_name?>
                      </td>
                      <td>
                        <?php echo $order->sales_quantity?>
                      </td>
                      <td>Rs. 
                        <?php echo $order->product_price;?>
                      </td>
                      <td class="center">
                        <?php echo $order->sales_quantity * $order->product_price;?>
                      </td>
                    </tr>
                    <?php
                      $total = $total+$order->sales_quantity * $order->product_price;

                       } ?>
                  </tbody>
                </table>
              </div>
              <div style="height: 80px; margin-top: 10px;margin-bottom: 10px;">
                <div style="float: right;">
                   <strong>Sub-Total: </strong>Rs. <?php echo $total?><br>
                   <strong>Vat 5%: </strong>Rs. <?php echo $vat = $total*5/100;?><br>
                   <strong>Grand Total: </strong>Rs. <?php echo $vat+$total;?> <br>
                </div>
              </div>
            </div>
            <div class="text-right">
              <button class="btn btn-primary" onclick="downloadOrder()">
                Download Order
              </button>
            </div>
        </div>
<script type="text/javascript">
  function downloadOrder(){
  var mywindow = window.open('', 'PRINT');
  mywindow.document.write('<html><head><title>Order Details</title><style>.print-table{ border-collapse: collapse; } .print-table > tbody >tr >td,.print-table > thead >tr >th{ border: 1px solid black; padding: 5px; }</style>');
  mywindow.document.write('</head><body >');
  mywindow.document.write($("#print_area").html());
  mywindow.document.write('</body></html>');
  mywindow.print();
  mywindow.close();

  mywindow.document.close(); // necessary for IE >= 10
  mywindow.focus(); // necessary for IE >= 10*/

  return true;
  }
</script>
