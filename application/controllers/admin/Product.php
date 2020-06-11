<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('MyQuery');
		$this->load->model('ModProduct');
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login"));
		}
	}
	public function master()
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
		$data['kategoris'] = $this->MyQuery->get('m_kategori');
		$data['beritas'] = $this->ModProduct->get_product();
		// echo "<pre>";
		// print_r($data['beritas']);
		// die();
		$this->template->load_a('_admin_template', 'product_index', $data);
	}

	public function addKategori()
	{
		$file_name = time().'kategori.jpg';
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name'] 			= $file_name;
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		// $this->upload->do_upload('foto');
		if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump($error);
                }

		$data = array(
			'nama_kategori' => $this->input->post('nama'),
			'image' => $file_name,
			'date_updated'	=> date('Y-m-d h:i:s'),
			'date_created' => date('Y-m-d h:i:s'),
		);
		if($this->MyQuery->insert('m_kategori', $data)){
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

	public function updateKategori($id)
	{

		$file_name = time().'kategori.jpg';
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name'] 			= $file_name;
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('foto'))
		{
			$data = array(
				'nama_kategori' => $this->input->post('nama'),
				// 'image' => $file_name,
				'date_updated'	=> date('Y-m-d h:i:s'),
	
			);
		}
		else
		{
			$data = array(
				'nama_kategori' => $this->input->post('nama'),
				'image' => $file_name,
				'date_updated'	=> date('Y-m-d h:i:s'),
	
			);
		}
		
		// $data = array(
		// 	'nama_kategori' => $this->input->post('nama'),
		// 	'date_updated'	=> date('Y-m-d h:i:s'),

		// );
		if($this->MyQuery->update($id, 'id_kategori', 'm_kategori', $data)){
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

	public function addProduct()
	{
		$file_name = time().'product.jpg';
		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name'] 			= $file_name;
		$config['overwrite'] 			= TRUE;
		$this->upload->initialize($config);
		$this->upload->do_upload('foto');
		$data = array(
			'judul' => $this->input->post('judul'),
			'konten' => $this->input->post('konten'),
			'id_kategori' => $this->input->post('id_kategori'),
			'foto' => $file_name,
			'harga_sewa' => str_replace(array('.', ','), '' , $this->input->post('harga_sewa')),
			'harga_sewa_crew' => str_replace(array('.', ','), '' , $this->input->post('harga_sewa_crew')),
			'stock' => str_replace(array('.', ','), '', $this->input->post('stock')),
			'created_by' => $this->session->userdata("nama"),
			'date_updated'	=> date('Y-m-d h:i:s'),
			'date_created' => date('Y-m-d h:i:s'),
		);
		if($this->MyQuery->insert('t_product', $data)){
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

	public function updateProduct()
	{
		$file_name = time().'berita.jpg';
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
				'id_kategori' => $this->input->post('id_kategori'),
				// 'foto' => $file_name,
				'harga_sewa' => str_replace(array('.', ','), '' , $this->input->post('harga_sewa')),
				'harga_sewa_crew' => str_replace(array('.', ','), '' , $this->input->post('harga_sewa_crew')),
				'stock' => str_replace(array('.', ','), '', $this->input->post('stock')),
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
				'id_kategori' => $this->input->post('id_kategori'),
				'foto' => $file_name,
				'harga_sewa' => str_replace(array('.', ','), '' , $this->input->post('harga_sewa')),
				'harga_sewa_crew' => str_replace(array('.', ','), '' , $this->input->post('harga_sewa_crew')),
				'stock' => str_replace(array('.', ','), '', $this->input->post('stock')),
				'created_by' => $this->session->userdata("nama"),
				'date_updated'	=> date('Y-m-d h:i:s'),
				// 'date_created' => date('Y-m-d h:i:s'),
			);
		}
		// echo "<pre>";
		// print_r($data);
		// die();
		if($this->MyQuery->update($this->input->post('id_product'), 'id_product', 't_product', $data)){
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

	

	public function deleteProduct($id)
	{
		$this->MyQuery->delete($id, 'id_product', 't_product');
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data berhasil dihapus</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
	}

	public function deleteKategori($id)
	{
		$this->MyQuery->delete($id, 'id_kategori', 'm_kategori');
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data berhasil dihapus</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
	}


	public function stock()
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
			$data['kategoris'] = $this->MyQuery->get('m_kategori');
			$date = $this->input->get('date');
			if($date){
				$date = date('Y-m-d', strtotime($date));
			}else{
				$date = date('Y-m-d');
			}
			$data['products'] = $this->ModProduct->getStock($date);

			$this->template->load_a('_admin_template', 'product_stock', $data);

		}

	public function schedule()
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
		$data['kategoris'] = $this->MyQuery->get('m_kategori');
		// $date = date('Y-m-d');
		$date = "2020-05-18";
		$data['products'] = $this->ModProduct->getSchedule($date);

		$this->template->load_a('_admin_template', 'product_schedule', $data);
	}
}