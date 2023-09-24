
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
                  <h4 class="success"> <?php echo $this->session->flashdata('update_pro_msg'); ?></h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                             <?php echo form_open_multipart('update-product','');?>
                                <div class="form-group">
                                    <label>Add Product Title</label>
                                    <input type="text" class="form-control" value="<?php echo $all_product->pro_title?>" name="pro_title" required="">
                                    <input type="hidden" class="form-control" value="<?php echo $all_product->pro_id?>" name="pro_id">
                                </div>
                                 <div class="form-group">
                                    <label>Add Product Description</label>
                                    <textarea  id="ck" class="form-control" rows="3" name="pro_desc">
                                        <?php echo $all_product->pro_desc?>
                                    </textarea>
                                    <script>CKEDITOR.replace('ck')</script>
                                </div>
                                 <div class="form-group">
                                    <label>Select Category</label>
                                    <select class="form-control" name="pro_cat">
                                        <option>Select One</option>
                                        <?php
                                         foreach ($all_cat as $category) {  ?>
                                           <option 
                                                <?php if($all_product->pro_cat==$category->category_id){?>
                                                selected="selected";
                                                <?php }?>
                                              value="<?php echo $category->category_id;?>"><?php echo $category->category_name?>
                                               
                                           </option>
                                          
                                        <?php } ?>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Select Sub Category</label>
                                    <select class="form-control" name="pro_sub_cat">
                                        <option>Select One</option>
                                        <?php
                                         foreach ($all_sub_cat as $sub_category) {  ?>
                                           <option 
                                                 <?php if($all_product->pro_sub_cat==$sub_category->sub_cat_id){?>
                                                selected="selected";
                                                <?php }?>
                                              value="<?php echo $sub_category->sub_cat_id;?>"><?php echo $sub_category->sub_category_name?>
                                               
                                           </option>
                                          
                                        <?php } ?>
                                    </select>
                                </div>
								
								<!--    <div class="form-group">
                                    <label>Select Temperature</label>
                                    <select class="form-control" name="pro_temp">
                                        <option>Select One</option>
                                      
                                        <?php foreach ($all_temp as $temperature) { ?>
                                        <option
                                            <?php if($all_product->pro_temp==$temperature->temperature_id){?>
                                                selected="selected";
                                                <?php }?>
                                             value="<?php echo $temperature->temperature_id;?>"><?php echo $temperature->temperature_name;?>
                                         </option>
                                        <?php } ?>
                                    </select>
                                </div>  -->
								
								
                                 <div class="form-group">
                                    <label>Select Brand</label>
                                    <select class="form-control" name="pro_brand">
                                        <option>Select One</option>
                                        <?php $all_brand = $this->ProductModel->get_all_brand()?>
                                        <?php foreach ($all_brand as $brand) { ?>
                                        <option
                                            <?php if($all_product->pro_brand==$brand->brand_id){?>
                                                selected="selected";
                                                <?php }?>
                                             value="<?php echo $brand->brand_id;?>"><?php echo $brand->brand_name;?>
                                         </option>
                                        <?php } ?>
                                    </select>
                                </div>
								

	                
								
								
                                 <div class="form-group">
                                    <label>Add Product Price</label>
                                    <input type="number" class="form-control" value="<?php echo $all_product->pro_price?>" name="pro_price" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Add Product Quantity</label>
                                    <input type="text" class="form-control" value="<?php echo $all_product->pro_quantity?>" name="pro_quantity" required="">
                                </div>
                                <div class="form-group">
                                    <label>Product Status</label>
                                    <select class="form-control" name="pro_status">
                                        
                                    <?php if($all_product->pro_status==1){?>
                                        <option selected="" value="1">Enable</option>
                                          <option  value="2">Disable</option>
                                     <?php }elseif($all_product->pro_status==2){ ?>
                                         <option  value="1">Enable</option>
                                        <option selected="" value="2">Disable</option>
                                       <?php } ?> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Product Availability</label>
                                    <select class="form-control" name="pro_availability">
                                    
                                    <?php if($all_product->pro_availability==1){?>
                                        <option selected="" value="1">In Stock</option>
                                        <option value="2">Out Of Stock</option>
                                        <option value="3">Up Comming</option>
                                         <?php }elseif($all_product->pro_availability==2){?>
                                         <option value="1">In Stock</option>
                                        <option selected="" value="2">Out Of Stock</option>
                                        <option value="3">Up Comming</option>
                                     <?php }elseif($all_product->pro_availability==3){?>
                                        <option value="1">In Stock</option>
                                        <option value="2">Out Of Stock</option>
                                        <option selected="" value="3">Up Comming</option>
                                    <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload Product Image</label>
                                    <input type="file" name="pro_image">
                                    <input type="hidden" name="old_pro_image" value="<?php echo $all_product->pro_image?>">
                                    <img src="<?php echo base_url().$all_product->pro_image?>" width="80" height="50"/>

                                </div>
                                 <div class="form-group">
                                    <label>Top Product</label>
                                    <div class="checkbox">
                                        <label>
                                            <?php if($all_product->top_product==1){?>
                                            <input type="checkbox" name="top_product" value="1" checked="">Select top product
                                            <?php } else{?>
                                                 <input type="checkbox" name="top_product" value="1">Select top product
                                            <?php } ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Select Country</label>
                                    <select class="form-control" name="pro_country">
                                        <option>Select One</option>
										<option value="India" <?php if($all_product->pro_country=='India') echo 'selected="selected"'; ?>>India</option>
										<option value="Denmark" <?php if($all_product->pro_country=='Denmark') echo 'selected="selected"'; ?>>Denmark</option>
										<option value="Germany" <?php if($all_product->pro_country=='Germany') echo 'selected="selected"'; ?>>Germany</option>
										<option value="Dutch" <?php if($all_product->pro_country=='Dutch') echo 'selected="selected"'; ?>>Dutch</option>
										<option value="Sweden" <?php if($all_product->pro_country=='Sweden') echo 'selected="selected"'; ?>>Sweden</option>
                                        <option value="Italy" <?php if($all_product->pro_country=='Italy') echo 'selected="selected"'; ?>>Italy</option>
										 <option value="Greece" <?php if($all_product->pro_country=='Greece') echo 'selected="selected"'; ?>>Greece</option>
                                        <option value="UK" <?php if($all_product->pro_country=='UK') echo 'selected="selected"'; ?>>UK</option>
										<option value="USA" <?php if($all_product->pro_country=='USA') echo 'selected="selected"'; ?>>USA</option>
										<option value="Portugal" <?php if($all_product->pro_country=='Portugal') echo 'selected="selected"'; ?>>Portugal</option>
                                        <option value="Switzerland" <?php if($all_product->pro_country=='Switzerland') echo 'selected="selected"'; ?>>Switzerland</option>
                                        <option value="Holland" <?php if($all_product->pro_country=='Holland') echo 'selected="selected"'; ?>>Holland</option>
                                        <option value="France" <?php if($all_product->pro_country=='France') echo 'selected="selected"'; ?>>France</option>
                                        <option value="Spain" <?php if($all_product->pro_country=='Spain') echo 'selected="selected"'; ?>>Spain</option>
                                        <option value="Austria" <?php if($all_product->pro_country=='Austria') echo 'selected="selected"'; ?>>Austria</option>
										<option value="Australia" <?php if($all_product->pro_country=='Austria') echo 'selected="selected"'; ?>>Australia</option>
                                        <option value="Other" <?php if($all_product->pro_country=='Other') echo 'selected="selected"'; ?>>Other</option>
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


