
<script type="text/javascript" src="<?php echo base_url();?>/assets/back/ckeditor/ckeditor.js"></script>
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
              <?php echo $this->session->flashdata('flsh_msg'); ?>
               <h4 class="error">
                    <?php $msg = $this->session->userdata('error_image');
                        echo $msg;
                        $this->session->unset_userdata('error_image');
                     ?>                       
                </h4>
                <div class="panel-heading">
                    Add new Product
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                             <?php echo form_open_multipart('save-product','');?>
                                <div class="form-group">
                                    <label>Add Product Title</label>
                                    <input type="text" class="form-control" value="" name="pro_title" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Add Product Description</label>
                                    <textarea  id="ck" class="form-control" rows="3" name="pro_desc"></textarea>
                                    <script>CKEDITOR.replace('ck')</script>
                                </div>
                                 <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control" name="pro_cat">
                                        <option>Select One</option>
                                        <?php
                                         foreach ($all_cat as $category) {  ?>
                                        <option value="<?php echo $category->category_id;?>"><?php echo $category->category_name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sub Category Auto Selected</label>
                                    <select class="form-control" name="pro_sub_cat">
                                            <?php foreach ($all_sub_cat as $sub_cat) {?>
                                            <option  value="<?php echo $sub_cat->sub_cat_id?>">
                                                <?php echo $sub_cat->sub_category_name?>
                                                </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Select Brand</label>
                                    <select class="form-control" name="pro_brand">
                                        <option>Select One</option>
                                        <?php $all_brand = $this->ProductModel->get_all_brand()?>
                                        <?php foreach ($all_brand as $brand) { ?>
                                        <option value="<?php echo $brand->brand_id;?>"><?php echo $brand->brand_name;?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Temperature</label>
                                    <select class="form-control" name="pro_temp">
                                        <option>Select One</option>
                                        <option value="Chilled">Chilled</option>
                                        <option value="Frozen">Frozen</option>
                                        <option value="Ambient">Ambient</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Add Product Price</label>
                                    <input type="number" class="form-control" value="" name="pro_price" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Add Product Quantity</label>
                                    <input type="text" class="form-control" value="" name="pro_quantity" required="">
                                </div>
                                <div class="form-group">
                                    <label>Product Status</label>
                                    <select class="form-control" name="pro_status">
                                        <option>Select One</option>
                                        <option value="1">Enable</option>
                                        <option value="2">Disable</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Product Availability</label>
                                    <select class="form-control" name="pro_availability">
                                        <option>Select One</option>
                                        <option value="1">In Stock</option>
                                        <option value="2">Out Of Stock</option>
                                        <option value="3">Up Comming</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload Product Image</label>
                                    <input type="file" name="pro_image">
                                </div>
                                 <div class="form-group">
                                    <label>Top Product</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="top_product" value="1">Select top product
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Select Country</label>
                                    <select class="form-control" name="pro_country">
                                        <option>Select One</option>
										<option value="Dutch">Dutch</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Greece">Greece</option>
										<option value="USA">USA</option>
										<option value="Portugal">Portugal</option>
										<option value="India">India</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Italy">Italy</option>
                                        <option value="UK">UK</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Holland">Holland</option>
                                        <option value="France">France</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Austria">Austria</option>
										<option value="Australia">Australia</option>
                                        <option value="Other">Other</option>
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


