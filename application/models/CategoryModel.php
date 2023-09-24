<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model {
	public function add_category_model(){
		$data['category_name'] = $this->input->post('category_name',true);
		$data['category_status'] =1;
		$this->db->insert('tbl_category',$data);
	}
	public function add_sub_category_model(){
		$data['sub_category_name'] = $this->input->post('sub_category_name',true);
		$data['category_sub_id'] = $this->input->post('category_sub_id',true);
		$this->db->insert('tbl_sub_category',$data);

	}
	public function get_all_category(){
		$data = $this->db->select('*')
			->from('tbl_category')
			->order_by('category_id','asc')
			->where("category_name NOT LIKE '%Cheese%'")
			->where("category_name NOT LIKE '%meat%'")
			->where("category_name NOT LIKE '%cold%'")
			->where("category_name NOT LIKE '%pork%'")
			// ->where_not_in('category_name','imported cheese')
			// ->where_not_in('category_name','indian cheese')
			// ->where_not_in('category_name','cheese by weight')
			// ->where_not_in('category_name','meat by weight')
			->get()
			->result();
			return $data;
	}

	public function get_all_cat(){
		$data = $this->db->select('*')
			->from('tbl_category')
			->order_by('category_id','asc')
			->get()
			->result();
			return $data;
	}
	
	public function get_categoris_main($sub_cat_id) {
		$this->db->select('tbl_sub_category.*');
	    $this->db->from('tbl_sub_category');
	    $this->db->join('tbl_category', 'tbl_sub_category.category_sub_id in (tbl_category.category_id)');
	    // $this->db->join('tbl_maincategory', 'tbl_category.maincat_id = tbl_maincategory.id');
		$this->db->where('tbl_category.maincat_id',$sub_cat_id);
	    $query = $this->db->get();
	    return $query->result();
	}
	
	public function get_all_sub_category(){
		$data = $this->db->select('*')
			->from('tbl_sub_category')
			->order_by('sub_cat_id','asc')
			->get()
			->result();
			return $data;
	}
	
	public function delete_caegory_by_id($category_id){
		$this->db->where('category_id', $category_id);
		$this->db->delete('tbl_category');
	}
	public function delete_sub_caegory_by_id($sub_category_id){
		$this->db->where('sub_cat_id', $sub_category_id);
		$this->db->delete('tbl_sub_category');
	}
	public function edit_caegory_by_id($category_id){
		$data = $this->db
				->select('*')
				->from('tbl_category')
				->where('category_id', $category_id)
				->get()
				->row();
		return $data;
	}
	
	
	public function edit_sub_caegory_by_id($sub_category_id){
		$data = $this->db
				->select('*')
				->from('tbl_sub_category')
				->where('sub_cat_id', $sub_category_id)
				->get()
				->row();
		return $data;
	}
	public function update_caegory_by_id($category_id){
		$data['category_name'] = $this->input->post('category_name');
		$this->db->where('category_id', $category_id);
		$this->db->update('tbl_category', $data); 
	}
	
	
			public function update_sub_caegory_by_id($sub_category_id){
		$data['sub_category_name'] = $this->input->post('sub_category_name');
		$data['category_sub_id'] = $this->input->post('category_sub_id');
		$this->db->where('sub_cat_id', $sub_category_id);
		$this->db->update('tbl_sub_category', $data); 	
	}

	// public function update_sub_caegory_by_id($sub_category_id){
	// 	$data['sub_category_name'] = $this->input->post('sub_category_name');
	// 	$this->db->where('sub_cat_id', $sub_category_id);
	// 	$this->db->update('tbl_sub_category', $data); 
	// }

	public function get_sub_cat_imported()
	{

	$data = $this->db->select('*')
						->from('tbl_category')
						->join('tbl_sub_category', 'tbl_category.category_id = tbl_sub_category.category_sub_id')
						->where('category_name','Imported Cheese')
						->get()
						->result();
						return $data;
						}

	public function get_sub_cat_indian()
	{

	$data = $this->db->select('*')
						->from('tbl_category')
						->join('tbl_sub_category', 'tbl_category.category_id = tbl_sub_category.category_sub_id')
						->where('category_name','Indian cheese')
						->get()
						->result();
						return $data;
						}

						public function get_sub_cat_coldcuts()
	{

	$data = $this->db->select('*')
						->from('tbl_category')
						->join('tbl_sub_category', 'tbl_category.category_id = tbl_sub_category.category_sub_id')
						->where('category_name','Cold Cuts')
						->get()
						->result();
						return $data;
						}

	public function get_sub_cat_cannedpork()
	{

	$data = $this->db->select('*')
						->from('tbl_category')
						->join('tbl_sub_category', 'tbl_category.category_id = tbl_sub_category.category_sub_id')
						->where('category_name','CANNED MEAT')
						->get()
						->result();
						return $data;
						}


	public function get_all_cheese_by_weight()
	{
	    $data = $this->db->select('*')
			->from('tbl_product')
			->where('pro_cat','103')
			->get()
			->result();
			return $data;
	}
	
	public function get_all_meat_by_weight()
	{
	    $data = $this->db->select('*')
			->from('tbl_product')
			->where('pro_cat','104')
			->get()
			->result();
			return $data;
	}
	
	
}