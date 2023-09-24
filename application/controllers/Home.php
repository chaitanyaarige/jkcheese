<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("HomeModel");
		$this->load->library('pagination');
		$this->load->model("ClientModel");
		$this->load->model("CategoryModel");
		$this->load->model("HorecaModel");
		$this->load->library('session');
	}

	// sathibabu
	public function show_products_by_category()
	{
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended1'] = $this->ProductModel->get_all_recomm_product();
		$data['category_brand'] = $this->load->view('front/category','',true);
		$name = strtoupper(str_replace("-"," ", $this->uri->segment(1)));
		$cat_id = $this->HomeModel->get_cat_id_by_name($name);
		$data['maincat_id'] =$this->HomeModel->get_maincat_id($cat_id);
		$this->session->unset_userdata('search_filter');
		$this->session->unset_userdata('search_brand_filter');
		$data['maincat_name'] =$this->HomeModel->get_maincat_name($data['maincat_id']);
		$this->session->set_userdata('maincat_id', $data['maincat_id']);
		$this->session->set_userdata('maincat_name', $data['maincat_name']);
		$data['post_by_brand_id'] = $this->HomeModel->post_cat_by_id($cat_id);
		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$this->load->view('front/product_by_cat',$data);
	}

	public function show_products_by_sub_category()
	{
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended1'] = $this->ProductModel->get_all_recomm_product();
		$data['category_brand'] = $this->load->view('front/category','',true);
		$name = strtoupper(str_replace("-"," ", $this->uri->segment(2)));
		$sub_cat_id = $this->HomeModel->get_sub_cat_id_by_name($name);
		$this->session->unset_userdata('search_filter');
		$this->session->unset_userdata('search_brand_filter');
		$this->set_session_filters($sub_cat_id);
		$data['sub_cat_id'] = $sub_cat_id;
		$data['post_by_brand_id'] = $this->HomeModel->post_sub_cat_by_id($sub_cat_id);
		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$this->load->view('front/product_by_cat',$data);

	}

	public function set_search_session()
	{
		$value = $this->input->post('search');
		$this->set_session_filters($value,'sub');
		$this->session->unset_userdata('search_brand_filter');

	}

	public function set_brand_search_session()
	{
		$value = $this->input->post('search');
		$this->set_session_filters($value,'brand');
		$this->session->unset_userdata('search_filter');

	}

	public function show_products_by_sub_filters()
	{

		$sub_cat_id = implode(",",$this->session->userdata('search_filter'));
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended1'] = $this->ProductModel->get_all_recomm_product();
		$data['category_brand'] = $this->load->view('front/category','',true);
		$data['post_by_brand_id'] = $this->HomeModel->post_sub_cat_by_id($sub_cat_id);
		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$data['sub_cat_id'] = $sub_cat_id;
		$this->load->view('front/product_by_cat',$data);
	}

	public function show_products_by_brand_filters()
	{

		$brand_id = implode(",",$this->session->userdata('search_brand_filter'));
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended1'] = $this->ProductModel->get_all_recomm_product();
		$data['category_brand'] = $this->load->view('front/category','',true);
		$data['post_by_brand_id'] = $this->HomeModel->posts_brand_by_id($brand_id);
		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$sub_cat_id = $this->HomeModel->subcat_by_brand_id($brand_id);
		$data['sub_cat_id'] = $sub_cat_id;
		$this->load->view('front/product_by_cat',$data);
	}


	public function my_orders()
	{
		$data =array();
		$data['slider'] = "";
		$customer_id = $this->session->userdata('cus_id');
		$data['recommended'] = $this->load->view('front/recommended','',true);
		$data['order_details'] = $this->HomeModel->get_user_orders($customer_id);
		$data['feature'] = $this->load->view('front/orders',$data,true);
		$data['category_brand'] = $this->load->view('front/category','',true);

		// print_r($data['product_info']);
		$this->load->view('front/orders',$data);
	}

	public function show_horeca_by_category()
	{
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended1'] = $this->ProductModel->get_all_recomm_product();
		$data['category_brand'] = $this->load->view('front/category','',true);
		$name = strtoupper(str_replace("-"," ", $this->uri->segment(2)));
		$data['post_by_brand_id'] = $this->HomeModel->horeca_post_by_cat_name($name);
		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$this->session->unset_userdata('search_filter');
		$this->session->unset_userdata('search_brand_filter');
		$this->load->view('front/horeca_products',$data);
	}

	public function show_horeca_by_sub_category()
	{
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended1'] = $this->ProductModel->get_all_recomm_product();
		$data['category_brand'] = $this->load->view('front/category','',true);
		$cat_name = strtoupper(str_replace("-"," ", $this->uri->segment(2)));
		$sub_cat_name = strtoupper(str_replace("-"," ", $this->uri->segment(3)));
		$data['post_by_brand_id'] = $this->HomeModel->horeca_post_by_sub_cat_name($cat_name,$sub_cat_name);
		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$this->session->unset_userdata('search_filter');
		$this->session->unset_userdata('search_brand_filter');
		$this->load->view('front/horeca_products',$data);
	}

	// sathibabu

	public function index(){
		$this->homepage();
	}
	public function productpage(){
		$data =array();
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended'] = "";
// Start pagination
		$config['base_url'] = base_url().'/Home/productpage/';
		$config['total_rows'] = $this->db->count_all("tbl_product");
		$config['per_page'] = 2;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_link"] = "&laquo;";
		$config["first_tag_open"] = "<li>";
		$config["first_tag_close"] = "</li>";
		$config["last_link"] = "&raquo;";
		$config["last_tag_open"] = "<li>";
		$config["last_tag_close"] = "</li>";
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '<li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '<li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$data['post_by_brand_id'] = $this->load->HomeModel->get_all_product_pagination($config['per_page'],$this->uri->segment(3));

// End pagination
		// $data['feature'] = $this->load->view('front/product_list',$data,true);
		// $data['category_brand'] = $this->load->view('front/category','',true);
		// $this->load->view('front/index',$data);
		$data['feature'] = $this->load->view('front/product_listall',$data);
	}
	public function homepage()
	{
		$data =array();
		$data['slider'] = $this->load->view('front/slider','',true);
		$data['featured'] = $this->ProductModel->get_all_product_limit();
		$data['recommended'] = $this->ProductModel->get_all_recomm_product();
		$data['recommended1'] = $this->ProductModel->get_all_recomm1_product();
		$data['feature'] = $this->load->view('front/feature','',true);
		$data['category_brand'] = $this->load->view('front/category','',true);
		$data['clients'] = $this->ClientModel->get_all_client_desc();
		$data['clients_asc'] = $this->ClientModel->get_all_client_asc();
		$this->load->view('front/index',$data);
	}
	public function product_details($product_id)
	{
		$data =array();
		$data['slider'] = "";
		$data['recommended'] = $this->load->view('front/recommended','',true);
		$data['product_info'] = $this->HomeModel->get_product_by_id($product_id);
		$data['feature'] = $this->load->view('front/product_details',$data,true);
		$data['category_brand'] = $this->load->view('front/category','',true);
		// print_r($data['product_info']);
		$this->load->view('front/product_details',$data);
	}
	public function show_post_by_brand_id($brand_id)
	{
		$data = array();
		// $data['slider'] = $this->load->view('front/advertise_top','',true);
		// $data['recommended'] = "";
		// $data['category_brand'] = $this->load->view('front/category','',true);
		$data['post_by_brand_id'] = $this->HomeModel->post_brand_by_id($brand_id);
		// $data['feature'] = $this->load->view('front/product_list',$data,true);
		// $this->load->view('front/index',$data);
		$this->load->view("front/search_brand",$data);
	}
	public function show_post_by_sub_cat_id($sub_cat_id)
	{
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended1'] = $this->ProductModel->get_all_recomm_product();
		$data['category_brand'] = $this->load->view('front/category','',true);
		$data['post_by_brand_id'] = $this->HomeModel->post_sub_cat_by_id($sub_cat_id);
		// $mainCategory['mainCategory'] = $this->HomeModel->get_category_id($sub_cat_id);
		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$data['sub_cat_id'] = $sub_cat_id;
		// $this->load->view('front/MenuLeft',$mainCategory);
		$this->load->view('front/product_by_cat',$data);
	}

	public function show_post_by_cat_id($cat_id)
	{
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['recommended1'] = $this->ProductModel->get_all_recomm_product();
		$data['category_brand'] = $this->load->view('front/category','',true);
		$data['post_by_brand_id'] = $this->HomeModel->post_cat_by_id($cat_id);
		$data['feature'] = $this->load->view('front/product_list',$data,true);
		$this->load->view('front/product_by_cat',$data);
	}

	public function _404_page()
	{
		$this->load->view('front/404');
	}
	public function show_product_by_price_range(){
		$data = array();
		 $min_range = $this->input->post('amount1');
		 $max_range = $this->input->post('amount2');
		$data['slider'] = $this->load->view('front/advertise_top','',true);
		$data['category_brand'] = $this->load->view('front/category','',true);
		$data['post_by_brand_id'] = $this->HomeModel->show_product_price_range($min_range,$max_range);
		$data['feature'] = $this->load->view('front/filtered_products',$data,true);
		$this->load->view('front/index',$data);

	}
	public function contact_page(){
		$data =array();
		$this->load->view('front/contact_page',$data);
	}
	public function insert_contact_info()
	{
	    $this->form_validation->set_rules('contact_email', 'Email', 'required|valid_email');
		if($this->form_validation->run())
		{
		  $this->ContactModel->insert_contact_data();
		  $this->session->set_flashdata("flash_msg","<h3 class='alert alert-success text-center'>Message Send Successfully.</h3>");
		 $email = $this->input->post('contact_email');
	$name = $this->input->post('contact_name');
	$number = $this->input->post('contact_number');
	$this->load->library("PhpMailerLib");
        $mail = $this->phpmailerlib->load();
	try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'faiz@alakopdigital.com';                 // SMTP username
		    $mail->Password = 'faiz@alakop';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to
		    //Recipients
		    $mail->setFrom('faiz@alakopdigital.com', $name);
		    $mail->addAddress('faiz.khan9121993@gmail.com', 'faiz');     // Add a recipient
		    $mail->addAddress($email);               // Name is optional
		    $mail->addReplyTo($email, 'Ganesha');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    //Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Here is the subject';
		    $mail->Body    = 'pls find the number and mail here'.$number.     $email;
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    echo 'Message has been sent';
		    redirect('horeco-contact');
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
           redirect('home');
        }
         else
        {
       		$this->contact_page();
        }
	}

	public function product_page()
	{
		$data['products'] = $this->ProductModel->get_all_product();
		$this->load->view('front/productpage',$data);
	}


	public function about_us()
	{
		$this->load->view('front/about');
	}

	public function terms()
	{
		$this->load->view('front/terms');
	}

	public function faq()
	{
		$this->load->view('front/faq');
	}

	public function privacy()
	{
		$this->load->view('front/privacy');
	}

	public function delivery()
	{
		$this->load->view('front/delivery');
	}

	function phpmailer()
{
	$email = $this->input->post('contact_email');
	$name = $this->input->post('contact_name');
	$number = $this->input->post('contact_number');
	$this->load->library("PhpMailerLib");
        $mail = $this->phpmailerlib->load();
	try {
		    //Server settings
		    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.yandex.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'faiz@alakopdigital.com';                 // SMTP username
		    $mail->Password = 'faiz@alakop';                           // SMTP password
		    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 465;                                    // TCP port to connect to
		    //Recipients
		    $mail->setFrom('faiz@alakopdigital.com', $name);
		    $mail->addAddress('faiz.khan9121993@gmail.com', 'faiz');     // Add a recipient
		    $mail->addAddress($email);               // Name is optional
		    $mail->addReplyTo($email, 'Ganesha');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    //Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Here is the subject';
		    $mail->Body    = 'pls find the number and mail here'.$number.     $email;
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    echo 'Message has been sent';
		    redirect('home');
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}


	public function forget_password()
	{
		$this->load->view('front/forget_password');
	}

	public function reset_password()
	{
		$email = $this->input->post('email');
		$data = $this->HomeModel->check_mail($email);
		$id = $this->HomeModel->check_id($email);
		if($data==true)
		{
			$code = rand(0,9).rand(0,9).rand(0,9).rand(0,9);
			$this->session->set_userdata("code",$code);
			$this->session->set_userdata("id",$id);
      $msg = 'Code : <b>'.$code.'</b>';
			$this->load->library("PhpMailerLib");
        $mail = $this->phpmailerlib->load();
	try {
		    //Server settings
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'ramyaranik9@gmail.com';                 // SMTP username
		    $mail->Password = 'XQ45afxq';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to
		    //Recipients
		    $mail->setFrom('ramyaranik9@gamil.com', 'JKC');
		    $mail->addAddress('ramyaranik9@gamil.com', 'faiz');     // Add a recipient
		    $mail->addAddress($email);               // Name is optional
		    $mail->addReplyTo($email, 'Ganesha');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    //Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Reset Password';
		    $mail->Body    = $msg;
		    $mail->AltBody = 'Code : '.$code;

		    $mail->send();
		    echo 'Message has been sent';
		    redirect('new_password');
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
		}
		else
		{
           echo "We Dont Find Your Email";
		}
	}
	public function new_password(){
		$this->load->view('front/new_password');
	}
	public function change_password(){
			$code = $this->input->post('code');
			echo $code."<br>".$this->session->userdata('code');
			if($code == $this->session->userdata('code')){
	     	$pass = md5($this->input->post('password'));
	     	$id = $this->session->userdata("id");
				$data = $this->HomeModel->reset_pass($id,$pass);
	     	redirect('my-account');
	     }else{
	     	echo "Invalid code";
	     	redirect('new_password');
	     }
	}
     public function confirm_account($id)
     {
     	$this->load->view('front/change_password');
     	// $data = $this->HomeModel->check_mail($id);
     }

      public function change_pass($id)
     {
     	$pass = md5($this->input->post('cus_password'));
     	$data = $this->HomeModel->reset_pass($id,$pass);
     	redirect('my-account');
     }

     public function search_by()
     {
     	$this->load->view('abc');
     }

     public function horeco()
     {
     	$config['base_url'] = base_url().'/Home/horeco/';
		$config['total_rows'] = $this->db->count_all("tbl_horeca");
		$config['per_page'] = 10;
		$config["full_tag_open"] = '<ul class="pagination">';
		$config["full_tag_close"] = '</ul>';
		$config["first_link"] = "&laquo;";
		$config["first_tag_open"] = "<li>";
		$config["first_tag_close"] = "</li>";
		$config["last_link"] = "&raquo;";
		$config["last_tag_open"] = "<li>";
		$config["last_tag_close"] = "</li>";
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '<li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '<li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		/* $this->pagination->initialize($config);
		$data['post_by_brand_id'] = $this->HomeModel->get_all_horeca_pagination($config['per_page'],$this->uri->segment(3)); */
		$data['post_by_brand_id'] = $this->HorecaModel->get_all_horeca();
     	$this->load->view('front/horeco_products',$data);
     }

     public function horeco_contact()
     {
     	$this->load->view('front/horeco.php');
     }

     public function news_letter()
     {
     	$this->HomeModel->add_news();
     	redirect('home');
     }

     	public function get_product($category_id)
	{
		$data['search_data'] = $this->HomeModel->get_products($category_id);
		$this->load->view("front/search_cat",$data);
	}

	public function cheese_by_weight()
	{
	   	$data['get_data'] = $this->CategoryModel->get_all_cheese_by_weight();
		$data['sub_cat_id'] = 44;
		$this->session->unset_userdata('search_filter');
		$this->session->unset_userdata('search_brand_filter');
		$this->set_session_filters($data['sub_cat_id']);
		$this->load->view("front/cheese_weight",$data);
	}

	public function meat_by_weight()
	{
	   	$data['get_data'] = $this->CategoryModel->get_all_meat_by_weight();
		$data['sub_cat_id'] = 57;
		$this->session->unset_userdata('search_filter');
		$this->session->unset_userdata('search_brand_filter');
		$this->set_session_filters($data['sub_cat_id']);
		$this->load->view("front/meat_weight",$data);
	}

	// sathibabu
	function set_session_filters($value,$type='sub')
	{
		$search_array = [];
		if($type == 'sub'){
			if($this->session->has_userdata('search_filter')){
				$filters =  $this->session->userdata('search_filter');
				if(!in_array($value, $filters)){
					array_push($filters,$value);
				}else{
					$filters = array_diff($filters,[$value]);
				}
				$arraydata = array('search_filter'  => $filters);
			}else{
				$arraydata = array('search_filter'  => array($value));
			}
		}else if($type == 'brand'){
			if($this->session->has_userdata('search_brand_filter')){
				$filters =  $this->session->userdata('search_brand_filter');
				if(!in_array($value, $filters)){
					array_push($filters,$value);
				}else{
					$filters = array_diff($filters,[$value]);
				}
				$arraydata = array('search_brand_filter'  => $filters);
			}else{
				$arraydata = array('search_brand_filter'  => array($value));
			}
		}


		$this->session->set_userdata($arraydata);
	}


}
