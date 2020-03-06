<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->library('pagination');
		$this->load->model('MyQuery');
		$this->load->model('ModMedia');
		$this->load->model('ModProfile');
		$this->load->model('ModBerita');
		$this->load->model('ModKegiatan');
		$this->load->model('ModArtikel');

	}
	public function index()
	{
		$data['sliders'] = $this->ModMedia->get_media(0);
		$data['profile'] = $this->ModProfile->get(6)->row();
		$data['address'] = $this->ModProfile->get(7)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['beritas']= $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['kategoris']= $this->MyQuery->get_limit('m_kategori_berita', 'id_kategori', false);
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		// // $data['sliders'] = $this->MyQuery->get();
		// echo "<pre>";
		// print_r($data['artikels']);
		// die();
		$this->template->load_u('_user_template', 'index', $data);
	}

	public function info()
	{
		$data['profile'] = $this->ModProfile->get(1)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);

		$this->template->load_u('_user_template', 'profile_desa', $data);
	}
	public function sejarah()
	{
		$data['profile'] = $this->ModProfile->get(2)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);

		$this->template->load_u('_user_template', 'profile_desa', $data);
	}

	public function geografis()
	{
		$data['profile'] = $this->ModProfile->get(7)->row();
		$data['profile'] = $this->ModProfile->get(2)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);

		$this->template->load_u('_user_template', 'letak_geografis', $data);
	}

	public function jumlah()
	{
		$data['profile'] = $this->ModProfile->get(3)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);

		$this->template->load_u('_user_template', 'profile_desa', $data);
	}

	public function jenis_perkerjaan()
	{
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['profile'] = $this->ModProfile->get(4)->row();
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$this->template->load_u('_user_template', 'profile_desa', $data);
	}

	public function peraturan()
	{
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['profile'] = $this->ModProfile->get(5)->row();
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$this->template->load_u('_user_template', 'profile_desa', $data);
	}

	public function anggaran()
	{
		$data['medias'] = $this->ModMedia->get_media(1);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		
		$this->template->load_u('_user_template', 'anggaran_desa', $data);
	}

	public function galeri()
	{
		$data['medias'] = $this->ModMedia->get_media(1);
		$data['kategoris'] = $this->ModMedia->get_kategori();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['galeris']= $this->MyQuery->get('t_galeri');

		$this->template->load_u('_user_template', 'galeri_desa', $data);
	}

	public function download($filename){	
		// $isi = 'Here is some text!';
		// $nama_file = 'mytext.txt';
		force_download('assets/upload/anggaran/'.$filename, null);
	}

	public function kegiatan()
	{
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$jumlah_data = $this->ModKegiatan->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'kegiatan/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$config['query_string_segment'] = 'start';

		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<a>';
		$config['first_tag_close'] = '</a>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<a>';
		$config['last_tag_close'] = '</a>';

		$config['next_link'] = 'Next';
		// $config['next_tag_open'] = '<a>';
		// $config['next_tag_close'] = '</a>';

		$config['prev_link'] = 'Prev';
		// $config['prev_tag_open'] = '<a>';
		// $config['prev_tag_close'] = '</a>';

		$config['cur_tag_open'] = '<a class="active">';
		$config['cur_tag_close'] = '</a>';

		// $config['num_tag_open'] = '<a>';
		// $config['num_tag_close'] = '</a>';
		$this->pagination->initialize($config);		
		$data['data'] = $this->ModKegiatan->data($config['per_page'],$from); 
		$data['id']='id_kegiatan';    
		$this->template->load_u('_user_template', 'blogs', $data);
   
	}

	public function detail_kegiatan($id)
	{
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['data']= $this->MyQuery->get_by_id('t_kegiatan', 'id_kegiatan', $id);
		$data['id']='id_kegiatan';
		// print_r($data['keg']);
		// die();
		$this->template->load_u('_user_template', 'read_more_detail', $data);

	}

	public function artikel()
	{
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$jumlah_data = $this->ModArtikel->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'artikel/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$config['query_string_segment'] = 'start';

		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<a>';
		$config['first_tag_close'] = '</a>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<a>';
		$config['last_tag_close'] = '</a>';

		$config['next_link'] = 'Next';
		// $config['next_tag_open'] = '<a>';
		// $config['next_tag_close'] = '</a>';

		$config['prev_link'] = 'Prev';
		// $config['prev_tag_open'] = '<a>';
		// $config['prev_tag_close'] = '</a>';

		$config['cur_tag_open'] = '<a class="active">';
		$config['cur_tag_close'] = '</a>';

		// $config['num_tag_open'] = '<a>';
		// $config['num_tag_close'] = '</a>';
		$this->pagination->initialize($config);		
		$data['data'] = $this->ModArtikel->data($config['per_page'],$from);
		$data['id']='id_artikel';     
		$this->template->load_u('_user_template', 'blogs', $data);
	}

	public function detail_artikel($id)
	{
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['data']= $this->MyQuery->get_by_id('t_artikel', 'id_artikel', $id);
		$data['id']='id_artikel';
		// print_r($data['data']);
		// die();
		$this->template->load_u('_user_template', 'read_more_detail', $data);

	}

	public function berita()
	{
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		if($this->input->get('search') != '' ){
			// // print_r($data['data']);
			$data['data']= $this->ModBerita->get_search($this->input->get('search'));
			// print_r($data['data']);
			// die();
			$data['id']='id_berita';
			$this->template->load_u('_user_template', 'blogs', $data);
		}else{
			$data['data']= $this->MyQuery->get('m_kategori_berita');
			$this->template->load_u('_user_template', 'berita', $data);
		}
	}

	public function buruh()
	{
		$data['buruh'] = $this->ModProfile->get(8)->row();
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['data']= $this->ModBerita->get_buruh();
		// print_r($data['data']);
		// die();
		$this->template->load_u('_user_template', 'buruh_migran', $data);
	}
	public function detail_berita($id)
	{
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['data']= $this->MyQuery->get_by_id('t_berita', 'id_berita', $id);
		$data['id']='id_berita';
		// print_r($data['data']);
		// die();
		$this->template->load_u('_user_template', 'read_more_detail', $data);
	}

	public function pengaduan()
	{
		$data['newss'] = $this->MyQuery->get_limit('t_berita', 'id_berita', 2);
		$data['pengaduans']= $this->MyQuery->get('m_kategori_pengaduan');
		$data['address'] = $this->ModProfile->get(7)->row();

		// print_r($data['pengaduans']);
		// die();
		$this->template->load_u('_user_template', 'pengaduan', $data);
	}
	public function addPengaduan()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'telepon' => $this->input->post('telepon'),
			'id_kategori' => $this->input->post('kategori'),
			'judul' => $this->input->post('judul'),
			'pesan' => $this->input->post('pesan'),
			'date_updated'	=> date('Y-m-d h:i:s'),
			'date_created' => date('Y-m-d h:i:s'),
		);
		if($this->MyQuery->insert('t_pengaduan', $data)){
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Pengaduan berhasil dikirim</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Pengaduan gagal dikirim</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}
}
