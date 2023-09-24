
  <div class="ui stackable grid container" id="menuleft">
    <div class="ui vertical menu sidenav" id="realmenuleft" >
    
    <div class="item">
        <div id="realmenuleftfont" class="ui centered small  header">FILTER</div>
      </div>	
			
            <div class="item">
		        <p id="realmenuleftfont" href="#demoMeat" data-toggle="collapse"> Sub Categories 
            <i class="ui dropdown icon"></i> </p>
            </div>
        
        <div id="demoMeat" class="show  menu">
            <?php
              if(empty($maincat_id) && !empty($sub_cat_id))    {
                $mainCategory = $this->HomeModel->get_category_id($sub_cat_id);
                if(!empty($mainCategory)){
                  $maincat_id = $mainCategory->id;
                  $maincat_name = $mainCategory->name;
                }
               
              }
              if(!empty($maincat_id)) {
              $all_categories = $this->CategoryModel->get_categoris_main($maincat_id);
              $search_array_final = $this->session->userdata('search_filter');
              if(empty($search_array_final )){
                $search_array_final = [];
              }

              foreach ($all_categories as $key => $category) {
                
            ?>
					<div class="ui checkbox">
							<input type="checkbox" class="search_filter_boxes" name="multipleCheckbox[]" value="<?php echo $category->sub_cat_id;?>" <?php echo (in_array($category->sub_cat_id, $search_array_final)) ? "checked" : '';?>
            ?>
              
            <label id="realmenuleftfont" style="color:black"> 
              <b> <?php echo $category->sub_category_name;?> 
              <?php $total_category = $this->HomeModel->get_total_product_by_sub_category($category->sub_cat_id)[0]->total; ?>
              <?php echo "($total_category)"?></b>
            </label>
					</div>
    <?php } }?>
        </div>
		
		      <div class="item">
          <p id="realmenuleftfont" href="#demobrand" data-toggle="collapse"> Brands 
          <i class="ui dropdown icon"></i> </p>
      </div>
      <div id="demobrand" class="show  menu">
        <?php 
          $all_brands = $this->HomeModel->get_brands();
          $search_brand_array_final = $this->session->userdata('search_brand_filter');
          $index = 0;
          if(empty($search_brand_array_final )){
            $search_brand_array_final = [];
          }
          foreach ($all_brands as $key => $brand) {
          $index += 1;  
        ?>
        <?php if($index <= 5) {?>
        <div class="ui checkbox">
              <input type="checkbox" class="search_brand_filter_boxes" name="multipleCheckbox[]" value="<?php echo $brand->brand_id;?>" <?php echo (in_array($brand->brand_id, $search_brand_array_final)) ? "checked" : '';?> >
              <label id="realmenuleftfont" style="color:black"> 
              <b> <?php echo $brand->brand_name;?> 
              <?php $total_brands = $this->HomeModel->get_total_product_by_brand($brand->brand_id)[0]->total; ?>
              <?php echo "($total_brands)"?></b>
              </label>
        </div>
	
          <?php } ?>
          <div id="demo" class="collapse">
          <?php if($index > 5) {?>
          <div class="ui checkbox">
              <input type="checkbox" class="search_brand_filter_boxes" name="multipleCheckbox[]" value="<?php echo $brand->brand_id;?>" <?php echo (in_array($brand->brand_id, $search_brand_array_final)) ? "checked" : '';?> >
              <label id="realmenuleftfont" style="color:black"> 
              <b> <?php echo $brand->brand_name;?> 
              <?php $total_brands = $this->HomeModel->get_total_product_by_brand($brand->brand_id)[0]->total; ?>
              <?php echo "($total_brands)"?></b>
              </label>
           </div>
           <?php } ?>
          </div>
         <?php } ?>
             <p id="realmenuleftfont" href="#demo" data-toggle="collapse"> more/less brands 
            <i class="ui dropdown icon"></i> </p>
            </div>
			
			
      </div>

     
    </div> <!-- vertical menu end -->
  </div> <!-- container end -->

<script>
$(".search_filter_boxes").change(function () {
    var value = $(this).val();
    if($('input[type=checkbox]:checked').length > 0){
      if ($(this).is(':checked')) {
        status = 'checked';
      }
      $.ajax({
          type: "POST",
          url: "<?php echo base_url();?>set_search_session",
          async: true,
          data: {
              search: value
          },
          success: function (msg) {
            window.location.href= "<?php echo base_url();?><?php echo strtolower($maincat_name);?>/search-filters";
          }
      });
    }else{
      $(this).prop('checked', true);
    }
});

$(".search_brand_filter_boxes").change(function () {
    var value = $(this).val();
    if($('input[type=checkbox]:checked').length > 0){
      if ($(this).is(':checked')) {
        status = 'checked';
      }
      $.ajax({
          type: "POST",
          url: "<?php echo base_url();?>set_brand_search_session",
          async: true,
          data: {
              search: value
          },
          success: function (msg) {
            window.location.href= "<?php echo base_url();?>brand/search-filters";
          }
      });
    }else{
      $(this).prop('checked', true);
    }
});
</script>
