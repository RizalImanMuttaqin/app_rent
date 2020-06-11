<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('MyQuery');
		$this->load->model('ModProduct');
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
        $data['css'] = "<link rel=stylesheet href=" . base_url('assets/admin_template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') . ">";
		$data['js'] = "
				<script src=" . base_url('assets/admin_template/bower_components/datatables.net/js/jquery.dataTables.min.js') . "></script>
				<script src=" . base_url('assets/admin_template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') . "></script>
				<script src=" . base_url('assets/custom/config_datatable.js') . "></script>
				<script src=" . base_url('assets/custom/config_ckeditor.js') . "></script>
				<script src=" . base_url('assets/admin_template/bower_components/ckeditor/ckeditor.js') . "></script>
				<script src=" . base_url('assets/admin_template/bower_components/select2/dist/js/select2.full.min.js') . "></script>
				";
        $data['users'] = $this->MyQuery->getAccount();
        
		$this->template->load_a('_admin_template', 'account_index', $data);
	}
}
