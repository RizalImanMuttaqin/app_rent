<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('MyQuery');
		$this->load->model('ModMedia');
		// $this->load->helper(array('url','download'));

		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['css'] = "<link rel=stylesheet href=".base_url('assets/admin_template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css').">
		";
		$data['js'] = "
		<script src=".base_url('assets/admin_template/bower_components/datatables.net/js/jquery.dataTables.min.js')."></script>
		<script src=".base_url('assets/admin_template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')."></script>
		<script src=".base_url('assets/custom/config_datatable.js')."></script>
		<script src=".base_url('assets/custom/config_ckeditor.js')."></script>
		<script src=".base_url('assets/admin_template/bower_components/ckeditor/ckeditor.js')."></script>
		<script src=".base_url('assets/admin_template/bower_components/select2/dist/js/select2.full.min.js')."></script>
		<script src=".base_url('assets/user_template/js/plugins.js')."></script>
		<script src=".base_url('assets/user_template/js/functions.js')."></script>
		";

		$data['sliders'] = $this->ModMedia->get_media(0);
		$data['anggarans'] = $this->ModMedia->get_media(1);
		$data['galeris'] = $this->MyQuery->get('t_galeri');
		// $data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['kategoris'] = $this->ModMedia->get_kategori();

		// echo "<pre>";
		// print_r($data['kegiatans']);
		// die();
		$this->template->load_a('_admin_template', 'media_index', $data);
	}

	public function addSlide()
	{
		$file_name = time().'slide.jpg';
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name'] 			= $file_name;
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$data = array(
			'keterangan' => $this->input->post('keterangan'),
			'filename' => $file_name,
			'tipe_media' => '0',
			'judul' =>  $this->input->post('judul'),
			'created_by' => $this->session->userdata("nama"),
			'date_updated'	=> date('Y-m-d h:i:s'),
			'date_created' => date('Y-m-d h:i:s'),
		);
		if($this->MyQuery->insert('t_media', $data)){
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data berhasil disimpan</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data gagal disimpan</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function addAnggaran()
	{
		// $file_name = time().'anggaran';
		$config['upload_path']          = './assets/upload/anggaran/';
		$config['allowed_types'] = '*';
		// $config['file_name'] 			= $file_name;
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		// $this->upload->do_upload('foto');
		if ( ! $this->upload->do_upload('foto'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			die();
		}
		$upload = $this->upload->data();
		// print_r($upload['file_name']);
		// die();
		$data = array(
			'keterangan' => $this->input->post('keterangan'),
			'filename' => $upload['file_name'],
			'tipe_media' => '1',
			'created_by' => $this->session->userdata("nama"),
			'date_updated'	=> date('Y-m-d h:i:s'),
			'date_created' => date('Y-m-d h:i:s'),
		);
		if($this->MyQuery->insert('t_media', $data)){
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data berhasil disimpan</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data gagal disimpan</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function updateAnggaran()
	{
		$config['allowed_types'] = '*';
		$config['upload_path']          = './assets/upload/anggaran/';
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$upload = $this->upload->data();
		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('foto'))
		{
			$data = array(
				'keterangan' => $this->input->post('keterangan'),
				// 'filename' => $upload['file_name'],
				'tipe_media' => '1',
				'created_by' => $this->session->userdata("nama"),
				'date_updated'	=> date('Y-m-d h:i:s'),
			);
		}
		else
		{
			$data = array(
				'keterangan' => $this->input->post('keterangan'),
				'filename' => $upload['file_name'],
				'tipe_media' => '1',
				'created_by' => $this->session->userdata("nama"),
				'date_updated'	=> date('Y-m-d h:i:s'),
			);
		}
		if($this->MyQuery->update($this->input->post('id_media'), 'id_media', 't_media', $data)){
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


	public function deleteMedia($id)
	{
		$this->MyQuery->delete($id, 'id_media', 't_media');
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-check"></i> Data berhasil dihapus</h4>
			</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function download($filename){	
		// $isi = 'Here is some text!';
		// $nama_file = 'mytext.txt';
		force_download('assets/upload/anggaran/'.$filename, null);
	}

	public function addGaleri()
	{
		$file_name = time().'galeri.jpg';
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name'] 			= $file_name;
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$data = array(
			'keterangan' => $this->input->post('keterangan'),
			'filename' => $file_name,
			'kategori_foto' => $this->input->post('kategori_foto'),
			'created_by' => $this->session->userdata("nama"),
			'judul' =>  $this->input->post('judul'),
			'date_updated'	=> date('Y-m-d h:i:s'),
			'date_created' => date('Y-m-d h:i:s'),
		);
		if($this->MyQuery->insert('t_galeri', $data)){
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data berhasil disimpan</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data gagal disimpan</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function deleteGaleri($id)
	{
		$this->MyQuery->delete($id, 'id_galeri', 't_galeri');
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-check"></i> Data berhasil dihapus</h4>
			</div>');
		redirect($_SERVER['HTTP_REFERER']);
	}	

}
