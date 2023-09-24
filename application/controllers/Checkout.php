<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("CartModel");
		$this->load->model("CheckoutModel");
		$this->load->model("MailModel");
		$this->load->library('paypal_lib');
		$this->load->model("ContactModel");
		$this->load->helper('form');
  		$this->load->library('form_validation');
	}
// 	public function checkout(){
// 		$this->load->view('front/Login');
// 	}
	public function checkout(){

		$customer_id = $this->session->userdata('cus_id');
		if(!empty($customer_id)){
			redirect("billing");
		}
		$data['main_content'] = $this->load->view('front/Login','',true);
		$this->load->view('front/Login',$data);
	}

	public function my_account(){

		$this->load->view('front/Myaccount');
	}

	public function my_login(){

		$this->load->view('front/Login');
	}

	public function my_registration(){

		$this->load->view('front/CreateAccount');
	}

	public function customer_registration(){
		// print_r($_POST);
		// exit;
	 $this->form_validation->set_rules('cus_name', 'Customer Name', 'trim|required|min_length[5]');
	// $this->form_validation->set_rules('cus_email', 'Email', 'trim|required|valid_email');
	 $this->form_validation->set_rules('cus_email', 'Email', 'required|valid_email|is_unique[tbl_customer.cus_email]');
	 $this->form_validation->set_rules('cus_password', 'Password', 'trim|required|min_length[8]');
	 $this->form_validation->set_rules('con_pass', 'Password Confirmation', 'trim|required|matches[cus_password]');
 	if($this->form_validation->run()){
		$customer_id = $this->CheckoutModel->save_customer_info();
		$sdata = array();
		$sdata['cus_id'] = $customer_id;
		$sdata['cus_name'] = $this->input->post('cus_name');
		$sdata['cus_email'] = $this->input->post('cus_email');
		$sdata['cus_mobile'] = $this->input->post('cus_mobile');
		$sdata['cus_id'] = $this->session->set_userdata($sdata);
		// start registration Successfull mail
		$mdata = array();
		$mdata['name'] = $this->input->post('cus_name');
		$mdata['from'] = "admin@sumon-it.com";
		$mdata['admin_full_name'] = "sumon-it.com";
		$mdata['to'] = $this->input->post('cus_email');
		$mdata['subject'] = "Registration Successfull......";
		$mdata['password'] = $this->input->post('cus_password');
		$this->MailModel->mail_send($mdata,'registration_successfull');

		// end registration successfull  mail
		redirect("billing");
	}else{
			$this->my_registration();//checkout means login page
		}
	}
	public function customer_login(){
		$cus_email = $this->input->post('cus_email',true);
		$cus_pass = md5($this->input->post('cus_password',true));
		$user_details = $this->CheckoutModel->get_user_login_by_email($cus_email);
		if($cus_pass==$user_details->cus_password){
			$sdata['cus_id'] = $user_details->cus_id;
			$sdata['cus_name'] =$user_details->cus_name;
			$sdata['cus_email'] =$user_details->cus_email;
			$sdata['cus_id'] = $this->session->set_userdata($sdata);
			redirect("home");
		}else{
			$this->session->set_flashdata('flash_msg','Incorrect Email Or Password...!');
			redirect("Checkout/checkout");
		}
	}
	public function billing(){

		$customer_id = $this->session->userdata('cus_id');
		if(empty($customer_id)){
			redirect("my_login");
		}

		$data= array();
		$data['cus_info'] = $this->CheckoutModel->select_customer_info_by_id($customer_id);

		$this->load->view('front/billing',$data);
	}
	public function shipping(){

			$data['main_content'] = $this->load->view('front/shipping','',true);
			$this->load->view('front/index',$data);

	}
	public function update_billing(){
		 $this->form_validation->set_rules('cus_mobile', 'Mobile Number', 'trim|required');
		 $this->form_validation->set_rules('cus_address', 'Address', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('cus_city', 'City', 'trim|required');
		 $this->form_validation->set_rules('cus_zip', 'Zip', 'trim|required|min_length[4]');
		if($this->form_validation->run()){
			$this->CheckoutModel->upate_billing_by_id();
			//$shipping_id = $this->session->userdata("shipping_id");
			$cart_total = $this->cart->total();
			if($cart_total==NUll){
				redirect("home");
			}else{
				$shipping_status= $this->input->post('shipping_info');
				if($shipping_status=="on"){
					redirect("payment");
				}else{
				redirect("shipping");
				}
			}
		}else{
			$this->billing();
		}
	}
	public function payment(){

	$customer_id = $this->session->userdata('cus_id');
	if($customer_id==NUll){
		redirect("checkout");
	}else{
		$customer = $this->CheckoutModel->get_user_login_by_id($customer_id);
		$data = array('customer'=>$customer);
		$this->load->view('front/payment',$data);
		}
	}
	public function customer_logout()
	{
		$this->session->sess_destroy();
		redirect("Home");
	}
	public function insert_shipping()
	{
		$this->form_validation->set_rules('cus_mobile', 'Mobile Number', 'trim|required');
		 $this->form_validation->set_rules('cus_address', 'Address', 'trim|required|min_length[5]');
		 $this->form_validation->set_rules('cus_city', 'City', 'trim|required');
		 $this->form_validation->set_rules('cus_zip', 'Zip', 'trim|required|min_length[4]');
		 $this->form_validation->set_rules('cus_email', 'Email', 'trim|required|valid_email');
		 $this->form_validation->set_rules('cus_name', 'Email', 'trim|required');
			if($this->form_validation->run())
			{
			$this->CheckoutModel->insert_shipping();
			redirect("payment");
	        }
	         else
	        {
			$this->shipping();
	        }
	}
	public function place_order()
	{


		$payment_method = $this->input->post('payment_gateway',true);

		if($payment_method!=NUll)
		{
			$this->CheckoutModel->save_payment_info();
			if($payment_method=='cash_on_delivery'){

				$this->CheckoutModel->save_order_info();
				// start Order Successfull mail

		$mdata = array();
		$mdata['cus_full_name'] = $this->session->userdata("cus_name");
		$mdata['to'] = $this->session->userdata("cus_email");
		$mdata['from'] = "admin@sumon-it.com";
		$mdata['admin_full_name'] = "sumon-it.com";
		$mdata['subject'] = "Order Successfully Complete......";
		$mdata['g_total'] = $this->session->userdata("cart_total");


		$this->MailModel->Order_success_mail_send($mdata,'order_successfull');

		$email = $this->session->userdata("cus_email");
		$customer = $this->CheckoutModel->get_user_login_by_email($email);

		$this->ContactModel->insert(array(
			"contact_email"=>$email,
			"contact_name"=>$this->session->userdata("cus_name"),
			"contact_subject"=>"New Order",
			"contact_message"=>"New Order from ".$this->session->userdata("cus_name"),
			"contact_date"=>time()
		));

		// end Order successfull  mail
		$this->cart->destroy();
				redirect('order-success');
			}
			if($payment_method=='cc_avenue'){
				$this->load->view('front/dataFrom');
			}
			if($payment_method=='payu_money'){

				   $MERCHANT_KEY = "e03EeFFf";
        $SALT = "4T1a2spXoO";

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";
		$action = '';

		$formError = 0;
		if(empty($posted['txnid']))
		{
			// echo "hi";die;
			$txnid = $this->session->userdata('shipping_id');

		// Generate random transaction id
		// $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

		}
		else
		{
		$txnid = $posted['txnid'];

		}
		$hash = '';
		// Hash Sequence
		$hashSequence = "KcU5nI|txnid|amount|productinfo|firstname|email||||||||||";
		if(isset($posted['hash'])) {
		if(
		empty($posted['key'])
		|| empty($posted['txnid'])
		|| empty($posted['amount'])
		|| empty($posted['firstname'])
		|| empty($posted['email'])
		|| empty($posted['phone'])
		|| empty($posted['productinfo'])
		|| empty($posted['surl'])
		|| empty($posted['furl'])
		|| empty($posted['service_provider'])
		) { //echo"hoo";
		$formError = 1;
		}else
		{
		$hashVarsSeq = explode('|', $hashSequence);
		$hash_string = '';
		foreach($hashVarsSeq as $hash_var) {
		$hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
		$hash_string .= '|';
		}
		$hash_string .= $SALT;
		$hash = strtolower(hash('sha512', $hash_string));
		$action = $PAYU_BASE_URL . '/_payment';
		}
		}elseif(!empty($posted['hash'])) {
		$hash = $posted['hash'];
		$action = $PAYU_BASE_URL . '/_payment';

		}



		$booking_id = "123";
		// echo "<pre>";
		// print_r($this->session->userdata('b_total'));die;
		//$data['paying_amout']=$this->session->userdata('total_amount');
		$data['paying_amount']=$this->session->userdata('b_total');

        // echo "<pre>";
        // print_r($data['paying_amount']);die;
		$data['name']=$this->session->userdata('cus_name');
		$data['email']=$this->session->userdata('cus_email');
		$data['mobile']=$this->session->userdata('mobile');
		// echo "<pre>";
		// print_r($this->session->userdata('b_total'));die;
		// print_r($data['mobile']);die;
		$hash_string =  $MERCHANT_KEY."|".$booking_id."|".$data['paying_amount']."|new|".$data['name']."|".$data['email']."|||||||||||";
		$hash_string .= $SALT;
		$hash = strtolower(hash('sha512', $hash_string));
		 $data['hash']=$hash;
		$action = $PAYU_BASE_URL.'/_payment';
		$data['action']=$action;
		$data['MERCHANT_KEY']=$MERCHANT_KEY;

		   $data['shipping_id']=$this->session->userdata('shipping_id');

				$this->load->view('payumoney_form',$data);
			}
		}
		else
		{
			$this->session->set_flashdata("flash_msg","<font class='btn-warning alert alert-danger'>Please Select A Payment Pemthod</font>");
			redirect("payment");
		}
	}
	function cancel_payu()
	{
	$this->load->view('front/paypal_fail');
	}
	function success_payu()
	{
	$mihpayid=$_POST['mihpayid'];
	$paid_amount=$_POST['amount'];
	$status=$_POST['status'];
	$order_id=$this->session->userdata('shipping_id');
	$payment_id = $this->session->userdata('payment_id');
	$q=$this->db->query("update `tbl_order`  set order_total='$paid_amount',order_status='completed'  WHERE order_id=".$order_id."");
	$q=$this->db->query("update `tbl_payment`  set payment_status='completed'  WHERE payment_id=".$payment_id."");
	//mail
	// $headers = "MIME-Version: 1.0" . "\r\n";
	// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// $from='info@kitnation.com';
	// $subject='Cheese new order placed';
	// $headers = "From: JK Cheese Invoice<" . strip_tags($from) . "> \r\n";
	// $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	// $to='faiz.khan9121993@gmail.com';
	// $message=$data['message'];
	// mail($to,$subject,$message,$headers);
	$this->cart->destroy();
	$this->load->view('front/order_success');
	}

	public function order_success()
	{
		// $data =array();
		// $data['slider'] = $this->load->view('front/slider','',true);
		// $data['recommended'] = $this->load->view('front/recommended','',true);
		// // $data['main_content'] = $this->load->view('front/order_success','',true);
		// $data['category_brand'] = $this->load->view('front/category','',true);
		 $this->load->view('front/order_success');
	}

	function payumoney()
	{
        $MERCHANT_KEY = "enter your test merchant key here";
        $SALT = "enter your test salt here";
        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
        $udf1='';
        $udf2='';
        $udf3='';
        $udf4='';
        $udf5='';
        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $grandtotal . '|' . $productinfo . '|'. $fname . '|' . $email .'|'.$udf1.'|' .$udf2.'|' .$udf3.'|'.$udf4.'|'.$udf5.'||||||'. $SALT;

        $hash = strtolower(hash('sha512', $hashstring));
        $data['hash'] = $hash;
        //Loading checkout view
        $this->load->view('checkout.php');
}
function ccavenue(){
	$this->load->view('front/ccavRequestHandler.php');
}

}
