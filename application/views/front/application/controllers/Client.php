<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Category Controller
*/
class Client extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!isset($this->session->userid) && ($this->session->userstatus !=1)){
			redirect('Login');
		}
		$data =array();
		$this->load->model('ClientModel');
	}
	public function add_client_form(){
		$data['main_content'] = $this->load->view('back/add_client','',true);
		$this->load->view('back/adminpanel',$data);
	}
	public function save_client()
	{
		$client_image= $this->upload_client_image();
		if($client_image==NULL)
		{
			redirect("Client/add_client_form");
		}
		else
		{
		$image = $this->ClientModel->add_client_model($client_image);
	$this->session->set_flashdata("flsh_msg","<font class='success'>Client Added Successfully</font>");
		redirect('client-list');
		}
	}

	public function show_client_list()
	{
		$data['all_clients']= $this->ClientModel->get_all_client();
		$data['main_content'] = $this->load->view('back/client_list',$data,true);
		$this->load->view('back/adminpanel',$data);
	}

	public function delete_client($client_id)
	{
		$this->ClientModel->delete_client_by_id($client_id);
		$this->session->set_flashdata("flsh_msg","<font class='success'>Client Deleted Successfully</font>");
           redirect('client-list');
	}
	
	public function edit_client($client_id)
	{
		$data['client_by_id'] = $this->ClientModel->edit_client_by_id($client_id);
		$data['main_content'] = $this->load->view('back/edit_client',$data,true);
		$this->load->view('back/adminpanel',$data);
	}
	

	public function update_client()
	{
		if($_FILES['client_image']['name']=="" || $_FILES['client_image']['size']=="")
		{
			$client_image= $this->input->post('old_client_image',true);
			$this->ClientModel->update_client_by_id($client_image);
			$this->session->set_flashdata("update_client_msg","Client Updated Successfully");
			$client_id = $this->uri->segment(2);
			redirect('client-list');
		}
		else
		{
			$client_id = $this->input->post('client_id',true);
			$client_image = $this->upload_client_image();
			if($client_image==NULL)
			{
			redirect('edit-client/'.$client_id);
			}
			else
			{
			$this->ClientModel->update_client_by_id($client_image);
			unlink($this->input->post('old_client_image',true));
			$this->session->set_flashdata("update_client_msg","Client Updated Successfully");
			redirect('client-list');
		    }
		}

	}

	private function upload_client_image()
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'png|gif|jpg|jpeg';
        $config['max_size']             = 1000;//kb
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('client_image'))
        {
        	$data = $this->upload->data();
        	$image_path = "uploads/$data[file_name]";
        	return $image_path;
        }
        else
        {
        	  $error =  $this->upload->display_errors();
        	$this->session->set_userdata('error_image',$error);
        }

	}
}