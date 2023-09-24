
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
           <!-- page header -->
           <div class="col-lg-12">
            <h1 class="page-header">Forms Element</h1>
        </div>
        <!--end page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
               
                <div class="panel-heading">
                    Update Client
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                                <?php echo form_open_multipart('update-client'.'/'.$client_by_id->client_id,'');?>
                                <div class="form-group">
                                    <label>Update Client</label>
                                    <input type="text" class="form-control" value="<?php echo $client_by_id->client_name;?>" name="client_name" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Upload Client Image</label>
                                    <input type="file" name="client_image">
                                    <input type="hidden" name="old_client_image" value="<?php echo $client_by_id->client_image?>">
                                    <img src="<?php echo base_url().$client_by_id->client_image?>" width="80" height="80"/>

                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
</div>
<!-- end page-wrapper -->


