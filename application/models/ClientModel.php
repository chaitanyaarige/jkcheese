<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientModel extends CI_Model {
	public function add_client_model($client_image)
	{
		$data['client_name'] = $this->input->post('client_name',true);
		$data['client_image'] = $client_image;
		$this->db->insert('tbl_client',$data);
	}
	public function get_all_client()
	{
		$data = $this->db->select('*')
			->from('tbl_client')
			->order_by('client_id','desc')
			->get()
			->result();
			return $data;
	}
	public function delete_client_by_id($client_id)
	{
		$this->db->where('client_id', $client_id);
		$this->db->delete('tbl_client');
	}
	public function edit_client_by_id($client_id)
	{
		$data = $this->db
				->select('*')
				->from('tbl_client')
				->where('client_id', $client_id)
				->get()
				->row();
		return $data;
	}
	public function update_client_by_id($client_image)
	{

		$client_id = $this->uri->segment(2);
		$data['client_name'] = $this->input->post('client_name');
		$data['client_image'] = $client_image;
		$this->db->where('client_id', $client_id);
		$this->db->update('tbl_client', $data); 
	}
	public function get_all_client_desc()
	{
		$data = $this->db->select('*')
			->from('tbl_client')
			->order_by('client_id','desc')
			->limit(4)
			->get()
			->result();
			return $data;
	}
	public function get_all_client_asc()
	{
		$data = $this->db->select('*')
			->from('tbl_client')
			->order_by('client_id','asc')
			->limit(4)
			->get()
			->result();
			return $data;
	}
	
}