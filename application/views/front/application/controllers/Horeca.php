<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Category Controller
*/
class Horeca extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!isset($this->session->userid) && ($this->session->userstatus !=1)){
			redirect('Login');
		}
		$data =array();
		$this->load->model('HorecaModel');
		$this->load->model('ProductModel');
	}
	public function add_horeca_form(){
		$data['main_content'] = $this->load->view('back/add_horeca',$data,true);
		$this->load->view('back/adminpanel',$data);
	}
	public function edit_horeca_form($horeca_id){
		$data['edit_horeca_form_data']= $this->HorecaModel->edit_horeca_id($horeca_id);
		$data['main_content'] = $this->load->view('back/edit_horeca',$data,true);
		$this->load->view('back/adminpanel',$data);
	}
	public function save_horeca(){
        $image= $this->upload_product_image();
		if($image==NULL){
			redirect("Horeca/add_horeca_form");
		}else{
			$image = $this->HorecaModel->add_horeca_model($image);
			$this->session->set_flashdata("flsh_msg","<font class='success'>Product Added Successfully</font>");
			redirect('horeca-list');
		}
	}
	public function update_horeca($horeca_id){
        $image= $this->upload_product_image();
		if($image==NULL){
			$image = $this->HorecaModel->update_horeca_model($image, $horeca_id);
			$this->session->set_flashdata("flsh_msg","<font class='success'>Product Updated Successfully</font>");
			redirect('horeca-list');
		}else{
			$image = $this->HorecaModel->update_horeca_model($image, $horeca_id);
			$this->session->set_flashdata("flsh_msg","<font class='success'>Product Updated Successfully</font>");
			redirect('horeca-list');
		}
	}
	public function delete_horeca_by_id($horeca_id){
		$this->HorecaModel->delete_horeca_by_id($horeca_id);
		$this->session->set_flashdata("flsh_msg","<font class='success'>Horeca Deleted Successfully</font>");
           redirect('horeca-list');
	}

	private function upload_product_image(){
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'png|gif|jpg|jpeg';
        $config['max_size']             = 1000;//kb
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image')){
        	$data = $this->upload->data();
        	$image_path = "uploads/$data[file_name]";
        	return $image_path;
        }else{
        	  $error =  $this->upload->display_errors();
        	$this->session->set_userdata('error_image',$error);
        	//redirect("Product/add_product_form");
        }

	}

	public function show_horeca_list(){
		$data['all_horeca']= $this->HorecaModel->get_all_horeca();
		$data['main_content'] = $this->load->view('back/horeca_list',$data,true);
		$this->load->view('back/adminpanel',$data);
	}
}