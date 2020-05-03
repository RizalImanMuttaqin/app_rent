<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('MyQuery');
		// $this->load->model('ModBerita');
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['css'] = "<link rel=stylesheet href=".base_url('assets/admin_template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css').">";
		$data['js'] = "
			<script src=".base_url('assets/admin_template/bower_components/datatables.net/js/jquery.dataTables.min.js')."></script>
			<script src=".base_url('assets/admin_template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')."></script>
			<script src=".base_url('assets/custom/config_datatable.js')."></script>
			<script src=".base_url('assets/custom/config_ckeditor.js')."></script>
			<script src=".base_url('assets/admin_template/bower_components/ckeditor/ckeditor.js')."></script>
			<script src=".base_url('assets/admin_template/bower_components/select2/dist/js/select2.full.min.js')."></script>
			";
		// $data['kategoris'] = $this->MyQuery->get('m_kategori');
		$data['artikels'] = $this->MyQuery->get('t_artikel');
		// echo "<pre>";
		// print_r($data['beritas']);
		// die();
		$this->template->load_a('_admin_template', 'artikel_index', $data);
	}

	public function addArtikel()
	{
		$file_name = time().'artikel.jpg';
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name'] 			= $file_name;
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$data = array(
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
			// 'id_kategori' => $this->input->post('id_kategori'),
			'foto' => $file_name,
			'created_by' => $this->session->userdata("nama"),
			'date_updated'	=> date('Y-m-d h:i:s'),
			'date_created' => date('Y-m-d h:i:s'),
		);
		if($this->MyQuery->insert('t_artikel', $data)){
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

	public function updateArtikel()
	{
		// $file_name = time().'berita.jpg';
		$file_name = time().'artikel.jpg';
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name'] 			= $file_name;
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('foto'))
		{
			$data = array(
				'judul' => $this->input->post('judul'),
				'konten' => $this->input->post('konten'),
				// 'id_kategori' => $this->input->post('id_kategori'),
				// 'foto' => $file_name,
				'created_by' => $this->session->userdata("nama"),
				'date_updated'	=> date('Y-m-d h:i:s'),
				// 'date_created' => date('Y-m-d h:i:s'),
			);
		}
		else
		{
			$data = array(
				'judul' => $this->input->post('judul'),
				'konten' => $this->input->post('konten'),
				// 'id_kategori' => $this->input->post('id_kategori'),
				'foto' => $file_name,
				'created_by' => $this->session->userdata("nama"),
				'date_updated'	=> date('Y-m-d h:i:s'),
				// 'date_created' => date('Y-m-d h:i:s'),
			);
		}
		if($this->MyQuery->update($this->input->post('id_artikel'), 'id_artikel', 't_artikel', $data)){
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


	public function deleteArtikel($id)
	{
		$this->MyQuery->delete($id, 'id_artikel', 't_artikel');
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data berhasil dihapus</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
	}

}
