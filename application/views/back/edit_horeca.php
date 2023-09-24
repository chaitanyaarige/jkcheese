
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
                    Edit Horeca
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                                <?php echo form_open_multipart('update-horeca'.'/'.$edit_horeca_form_data->id,'');?>
                                <div class="form-group">
                                    <label>Horeca</label>
                                    <input type="text" class="form-control" value="<?php echo $edit_horeca_form_data->name; ?>" name="name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Upload Product Image</label>
                                    <input type="file" name="image">
									<img src="<?php echo base_url(); ?>/<?php echo $edit_horeca_form_data->image; ?>">
                                </div>

                                  <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control" name="cat">
                                        <option value="INDIAN PRODUCTS" <?php echo ($edit_horeca_form_data->cat == 'INDIAN PRODUCTS') ? "selected" : ''; ?>>INDIAN PRODUCTS</option>
                                        <option value="IMPORTED PRODUCTS" <?php echo ($edit_horeca_form_data->cat == 'IMPORTED PRODUCTS') ? "selected" : ''; ?>>IMPORTED PRODUCTS</option>
                                        <option value="MEAT PRODUCTS" <?php echo ($edit_horeca_form_data->cat == 'MEAT PRODUCTS') ? "selected" : ''; ?>>MEAT PRODUCTS</option>
                                        <option value="AMBIENT PRODUCTS" <?php echo ($edit_horeca_form_data->cat == 'AMBIENT PRODUCTS') ? "selected" : ''; ?>>AMBIENT PRODUCTS</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Sub Category</label>
                                    <select class="form-control" name="sub_cat">
                                        <option value="CHEESE" <?php echo ($edit_horeca_form_data->sub_cat == 'CHEESE') ? "selected" : ''; ?>>CHEESE</option>
                                        <option value="BUTTER" <?php echo ($edit_horeca_form_data->sub_cat == 'BUTTER') ? "selected" : ''; ?>>BUTTER</option>
                                        <option value="CREAM" <?php echo ($edit_horeca_form_data->sub_cat == 'CREAM') ? "selected" : ''; ?>>CREAM</option>
                                        <option value="MEAT" <?php echo ($edit_horeca_form_data->sub_cat == 'MEAT') ? "selected" : ''; ?>>MEAT</option>
                                        <option value="AMBIENT" <?php echo ($edit_horeca_form_data->sub_cat == 'AMBIENT') ? "selected" : ''; ?>>AMBIENT</option>
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <label>Select Category Again</label>
                                    <select class="form-control" name="type">
                                        <option>Select One</option>
                                        <option value="Imported" <?php echo ($edit_horeca_form_data->type == 'Imported') ? "selected" : ''; ?> >Imported Product</option>
                                        <option value="Indian" <?php echo ($edit_horeca_form_data->type == 'Indian') ? "selected" : ''; ?> >Indian Product</option>
                                        <option value="Meat" <?php echo ($edit_horeca_form_data->type == 'Frozen') ? "selected" : ''; ?> >Meat Product</option>
                                        <option value="Ambient" <?php echo ($edit_horeca_form_data->type == 'Ambient Products') ? "selected" : ''; ?> >Ambient</option>
                                    </select>
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


