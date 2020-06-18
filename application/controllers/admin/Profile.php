<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('MyQuery');
		$this->load->model('ModLogin');
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['profiles'] = $this->MyQuery->get('m_profile_desa');
		$data['admin'] = $this->MyQuery->getAdmin(); 
		// echo "<pre>";
		// print_r($data['profile']);
		// die();
		$data['js'] = "
			<script src=".base_url('assets/custom/config_ckeditor.js')."></script>
			<script src=".base_url('assets/admin_template/bower_components/ckeditor/ckeditor.js')."></script>
			";
		$this->template->load_a('_admin_template', 'profile_desa', $data);
	}
	public function update($id)
	{
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name'] 			= $id.'gambar.jpg';
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('foto'))
		{
			 $error = array('error' => $this->upload->display_errors());
			//  print_r($error);
			//  die();
		}
		$data = array(
			'konten' => $this->input->post('konten'),
			'foto'	=> $id.'gambar.jpg',
			'date_updated'	=> date('Y-m-d h:i:s'),
		);
		if ($id == 6 || $id == 8) {
			$data['judul'] = $this->input->post('judul');
		}
		if ($id == 6){
			$ndata = array(
				"email" => $this->input->post('email'),
				"phone" => $this->input->post('phone')
			);
			$this->MyQuery->updateAdmin($ndata);
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		if($this->MyQuery->update($id, 'id', 'm_profile_desa', $data)){
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data berhasil diupdate</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data gagal diupdate</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}

	public function edit_admin()
	{
		$user= $this->MyQuery->get_by_id('m_admin', 'username', 'admin');
		// echo md5($this->input->post('old_password'));
		// echo "<br>";
		// 	echo $user->password;
		// die();
		if ( $user->password != md5($this->input->post('old_password'))) {
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Password gagal diubah</h4><p>password lama salah</p>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
			exit();
		} 
		$data = array(
			'password' => md5($this->input->post('n_pass')),
		);
		if($this->MyQuery->update('admin', 'username', 'm_admin', $data)){
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Password berhasil diubah</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Password gagal diubah</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}
}
