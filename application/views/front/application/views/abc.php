

<form action="<?php echo base_url()?>search" method="post">
      <div class="ui icon input">
        
        <input type="text" name="search" placeholder="Quick Search..." required>
        <input type = "submit">
       </div>
      <!--   <i style="color:#0d5690" class="search link icon"></i>  -->
      </form>


  Search By Drop
      <form action="<?php echo base_url()?>search" method="post">
      <select name="search">
  <optgroup label="Imported">
  	<?php $all_category = $this->CategoryModel->get_sub_cat_imported();?>
                <?php foreach ($all_category as  $maincat) {?>
    <option value="<?php echo base_url()?>show-post-by-sub-cat-id/<?php echo $maincat->sub_cat_id?>"><?php echo $maincat->sub_category_name?></option>
  <?php } ?>
  </optgroup>
  <optgroup label="German Cars">
  	<?php $all_category = $this->CategoryModel->get_sub_cat_indian();?>
                <?php foreach ($all_category as  $maincat) {?>
    <option value="mercedes"><?php echo $maincat->sub_category_name?></option>
     <?php } ?>
  </optgroup>
  <optgroup label="Cheese">
    <option value="brie">Brie</option>
    <option value="audi">Audi</option>
  </optgroup>
</select>
<input type = "submit">
</form>