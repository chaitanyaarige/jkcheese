<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HorecaModel extends CI_Model {
	public function add_horeca_model($image){
		$data['name'] = $this->input->post('name',true);
		$data['type'] = $this->input->post('type',true);
		$data['cat'] = $this->input->post('cat',true);
		$data['sub_cat'] = $this->input->post('sub_cat',true);
		$data['image'] = $image;
		$this->db->insert('tbl_horeca',$data);
	}
	public function update_horeca_model($image, $horeca_id){
		$data['name'] = $this->input->post('name',true);
		$data['type'] = $this->input->post('type',true);
		$data['cat'] = $this->input->post('cat',true);
		$data['sub_cat'] = $this->input->post('sub_cat',true);
		if(!empty($image))
			$data['image'] = $image;

		$this->db->where('id', $horeca_id);
		$this->db->update('tbl_horeca', $data);
	}
	public function get_all_horeca(){
		$data = $this->db->select('*')
			->from('tbl_horeca')
			->order_by('id','desc')
			->get()
			->result();
			return $data;
	}
	public function delete_horeca_by_id($horeca_id){
		$this->db->where('id', $horeca_id);
		$this->db->delete('tbl_horeca');
	}
	public function edit_horeca_id($horeca_id){
		$data = $this->db
				->select('*')
				->from('tbl_horeca')
				->where('id', $horeca_id)
				->get()
				->row();
		return $data;
	}
}