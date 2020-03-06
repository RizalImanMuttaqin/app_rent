<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('ModLogin');

 
	}
 
	function index(){
		if($this->session->userdata('status') == "login"){
			redirect(base_url("admin/profile"));
		}
		$this->load->view('admin/login');
	}
 
	function aksiLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->ModLogin->cek_login("m_admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin/profile"));
 
		}else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Username atau Password salah</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}