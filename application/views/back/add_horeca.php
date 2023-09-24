
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
                    Add new Horeca
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                                <?php echo form_open_multipart('save-horeca','');?>
                                <div class="form-group">
                                    <label>Add Horeca</label>
                                    <input type="text" class="form-control" value="<?php echo set_value('brand_name')?>" name="name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Upload Product Image</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control" name="cat">
                                        <option value="INDIAN PRODUCTS">INDIAN PRODUCTS</option>
                                        <option value="IMPORTED PRODUCTS">IMPORTED PRODUCTS</option>
                                        <option value="MEAT PRODUCTS">MEAT PRODUCTS</option>
                                        <option value="AMBIENT PRODUCTS">AMBIENT PRODUCTS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Sub Category</label>
                                    <select class="form-control" name="sub_cat">
                                        <option value="CHEESE">CHEESE</option>
                                        <option value="BUTTER">BUTTER</option>
                                        <option value="CREAM">CREAM</option>
                                        <option value="MEAT">MEAT</option>
                                        <option value="AMBIENT">AMBIENT</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Select Temperature</label>
                                    <select class="form-control" name="type">
                                        <option>Select One</option>
                                        <option value="Imported">Imported</option>
                                        <option value="Indian">Indian</option>
                                        <option value="Meat">Meat</option>
                                        <option value="Ambient Products">Ambient</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
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


