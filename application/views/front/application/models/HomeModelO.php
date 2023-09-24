<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {
	// public function get_product_by_id($product_id){
	// 	$data = $this->db->select('*')
	// 			->from("tbl_product")
	// 			->where("pro_id",$product_id)
	// 			->join('tbl_brand','tbl_brand.brand_id=tbl_product.pro_brand')
	// 			->get()
	// 			->row();
	// 			return $data;
	// }

    public function get_product_by_id($product_id){
			$this->db->select('tbl_product.*,tbl_brand.brand_name');
	    $this->db->from('tbl_product');
		 	$this->db->where('pro_id',$product_id);
	    $this->db->join('tbl_brand', 'tbl_product.pro_brand = tbl_brand.brand_id', 'left'); 
	    // $this->db->join('tbl_brand', 'tbl_product.pro_brand = tbl_brand.brand_id', 'right outer'); 
	    $query = $this->db->get();
	    return $query->row();
		}
		
	public function get_category_id($sub_cat_id) {
		$this->db->select('tbl_maincategory.id,tbl_maincategory.name');
	    $this->db->from('tbl_maincategory');
	    $this->db->join('tbl_category', 'tbl_category.maincat_id = tbl_maincategory.id');
	    $this->db->join('tbl_sub_category', 'tbl_sub_category.category_sub_id = tbl_category.category_id');
		$this->db->where('tbl_sub_category.sub_cat_id',$sub_cat_id);
	    $query = $this->db->get();
	    return $query->row();
	}
	public function get_total_product_by_brand($brand_id){
		$data = $this->db->select('count(pro_brand) as total')
			->from('tbl_product')
			->where('pro_brand',$brand_id)
			->get()
			->result();
			return $data;
	}

	public function get_total_product_by_category($category_id){
		$data = $this->db->select('count(pro_cat) as total')
			->from('tbl_product')
			->where('pro_cat',$category_id)
			->get()
			->result();
			return $data;
	}

	public function get_total_product_by_sub_category($category_id){
		$data = $this->db->select('count(pro_cat) as total')
			->from('tbl_product')
			->where('pro_sub_cat',$category_id)
			->get()
			->result();
			return $data;
	}
	public function post_brand_by_id($brand_id){
		$data = $this->db->select('*')
			->from('tbl_product')
			->where('pro_brand',$brand_id)
			->get()
			->result();
			return $data;
	}
	public function post_sub_cat_by_id($sub_cat_id){
		$sub_cat_id = explode(",", $sub_cat_id);
		$data = $this->db->select('*')
			->from('tbl_product')
			->where_in('pro_sub_cat',$sub_cat_id)
			->get()
			->result();
			return $data;
	}

	public function post_cat_by_id($cat_id){
		$data = $this->db->select('*')
			->from('tbl_product')
			->where('pro_cat',$cat_id)
			->get()
			->result();
			return $data;
	}
	public function countRow(){	
	  $query = $this->db->query("SELECT COUNT(pro_id) as count FROM tbl_product");
	  if($query->num_rows() >0 ){
	    $row =  $query->row();
	    $data =  $row->count; 
	 		return $data;
		}
	}
	public function get_all_product_pagination($perpage,$offset){
		if($offset==NULL){
			$offset=0;
		}
		$data = $this->db->select('*')
			->from('tbl_product')
			->where('pro_status',1)
			->limit($perpage,$offset)
			->get()
			->result();
			return $data;
	}
	public function get_all_horeca_pagination($perpage,$offset){
		if($offset==NULL){
			$offset=0;
		}
		$data = $this->db->select('*')
			->from('tbl_horeca')
			
			->limit($perpage,$offset)
			->get()
			->result();
			return $data;
	}
	public function show_product_price_range($min_range,$max_range){
		$data = $this->db->select('*')
			->from('tbl_product')
			->where("pro_price BETWEEN '".$min_range."' AND '".$max_range."'")
			->get()
			->result();
		return $data;
	}


	public function cheese()
	{
		$this->db->select('category_name');
		$this->db->from('tbl_category');
		$this->db->join('tbl_product', 'tbl_product.pro_cat = tbl_category.category_id');
		$query = $this->db->get();
	}

	// sathibabu

	public function posts_brand_by_id($brand_id){

		$brand_id = explode(",", $brand_id);
		$data = $this->db->select('*')
			->from('tbl_product')
			->where_in('pro_brand',$brand_id)
			->get()
			->result();
			return $data;
	}

	public function get_user_orders($customer_id)
	{
		$orders = $this->db->select('*')
						 ->from('tbl_order_details')
						 ->join('tbl_order', 'tbl_order.order_id = tbl_order_details.order_id')
						 ->where('tbl_order.cus_id', $customer_id)->get()->result();
		return  $orders;

	}

	public function get_cat_id_by_name($name)
	{
		$cat = $this->db->select('category_id')
						 ->from('tbl_category')
						 ->where('category_name', $name)
						 ->limit(1)->get()->row();
		return  ($cat) ? $cat->category_id : NULL;

	}

	public function get_sub_cat_id_by_name($name)
	{
		$cat = $this->db->select('sub_cat_id')
						 ->from('tbl_sub_category')
						 ->where('sub_category_name', $name)
						 ->limit(1)->get()->row();
		return  ($cat) ?  $cat->sub_cat_id : NULL;

	}

	public function get_maincat_id($id)
	{
		$cat = $this->db->select('maincat_id')
						 ->from('tbl_category')
						 ->where('category_id', $id)
						 ->limit(1)->get()->row();
		return  ($cat) ? $cat->maincat_id : NULL;

	}

	public function get_maincat_name($id)
	{
		$cat = $this->db->select('name')
						 ->from('tbl_maincategory')
						 ->where('id', $id)
						 ->limit(1)->get()->row();
		return  ($cat) ? $cat->name : NULL;

	}

	public function get_maincat_id_by_name($name)
	{	
		$cat = $this->db->select('maincat_id')
						 ->from('tbl_maincategory')
						  ->where("column LIKE '%$name%'")
						 ->limit(1)->get()->row();
		return  $cat->maincat_id;

	}

	public function get_brands()
	{
		$this->db->select('*');
		$this->db->from('tbl_brand');
		$query = $this->db->get();
		return $query->result();
	}

	// sathibabu
	public function check_mail($email)
	{
		$user_details = $this->db->select('*')
							->from('tbl_customer')
							->where('cus_email',$email)
							->get()
							->row();
							
		return 	$user_details;
		
	}
	public function check_id($email)
	{
		$user_details = $this->db->select('cus_id')
							->from('tbl_customer')
							->where('cus_email',$email)
							->get()
							->result();
				$id = $user_details[0]->cus_id;
						
		return 	$id;
		
	}

	public function reset_pass($id,$pass)
	{
		
						
			$data['cus_password'] = $pass;
		$this->db->where('cus_id', $id);
		$this->db->update('tbl_customer', $data); 
		
	}

	public function add_news()
	{
		$data =  $this->input->post(NULL,true);
		$this->db->insert("tbl_newsletter",$data);
	}

		public function get_products($category_id){

			$query = $this->db->select('*')
							->from('tbl_product')
							->where('pro_cat',$category_id)
							->get()
							->result();
							
		return 	$query;
	
	}
	
	public function get_all_cheese_by_weight()
	{
	    	$this->db->select('*');
$this->db->from('tbl_category');
$this->db->join('tbl_product', 'tbl_product.pro_cat = tbl_category.category_id');
$query = $this->db->get();
return $return;
	}
	
}