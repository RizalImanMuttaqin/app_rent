<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->library('pagination');
		$this->load->model('MyQuery');
		$this->load->model('ModMedia');
		$this->load->model('ModProfile');
		$this->load->model('ModProduct');
		$this->load->model('ModKegiatan');
		$this->load->model('ModArtikel');
		$this->load->model('ModLogin');

	}
	public function index()
	{
		$data['sliders'] = $this->ModMedia->get_media(0);
		$data['profile'] = $this->ModProfile->get(6)->row();
		$data['address'] = $this->ModProfile->get(7)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['beritas']= $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['kategoris']= $this->MyQuery->get_limit('m_kategori', 'id_kategori', false);
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
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
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);

		$this->template->load_u('_user_template', 'profile_desa', $data);
	}
	public function sejarah()
	{
		$data['profile'] = $this->ModProfile->get(2)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);

		$this->template->load_u('_user_template', 'profile_desa', $data);
	}

	public function geografis()
	{
		$data['profile'] = $this->ModProfile->get(7)->row();
		$data['profile'] = $this->ModProfile->get(2)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);

		$this->template->load_u('_user_template', 'letak_geografis', $data);
	}

	public function jumlah()
	{
		$data['profile'] = $this->ModProfile->get(3)->row();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);

		$this->template->load_u('_user_template', 'profile_desa', $data);
	}

	public function jenis_perkerjaan()
	{
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['profile'] = $this->ModProfile->get(4)->row();
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$this->template->load_u('_user_template', 'profile_desa', $data);
	}

	public function peraturan()
	{
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['profile'] = $this->ModProfile->get(5)->row();
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$this->template->load_u('_user_template', 'profile_desa', $data);
	}

	public function anggaran()
	{
		$data['medias'] = $this->ModMedia->get_media(1);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		
		$this->template->load_u('_user_template', 'anggaran_desa', $data);
	}

	public function galeri()
	{
		$data['medias'] = $this->ModMedia->get_media(1);
		$data['kategoris'] = $this->ModMedia->get_kategori();
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
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
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
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
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
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
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
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
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['data']= $this->MyQuery->get_by_id('t_artikel', 'id_artikel', $id);
		$data['id']='id_artikel';
		// print_r($data['data']);
		// die();
		$this->template->load_u('_user_template', 'read_more_detail', $data);

	}

	public function product($kategori = null)
	{
		$search = $this->input->get('search');
		// var_dump($kategori, $search);
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['address'] = $this->ModProfile->get(7)->row();

		// if($this->input->get('search') != '' ){
		// 	// // print_r($data['data']);
		// 	$data['data']= $this->ModProduct->get_search($this->input->get('search'));
		// 	// print_r($data['data']);
		// 	// die();
		// 	$data['id']='id_product';
		// 	$this->template->load_u('_user_template', 'blogs', $data);
		// }else{
			$data['data']= $this->MyQuery->get('t_product', ["category"=> $kategori, "search" => $search]);
			// print_r($data['data']);
			$this->template->load_u('_user_template', 'product', $data);
		// }
	}

	// public function buruh()
	// {
	// 	$data['buruh'] = $this->ModProfile->get(8)->row();
	// 	$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
	// 	$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
	// 	$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
	// 	$data['data']= $this->ModProduct->get_buruh();
	// 	// print_r($data['data']);
	// 	// die();
	// 	$this->template->load_u('_user_template', 'buruh_migran', $data);
	// }
	public function detail_product($id)
	{
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['artikels']= $this->MyQuery->get_limit('t_artikel', 'id_artikel', 6);
		$data['kegiatans']= $this->MyQuery->get_limit('t_kegiatan', 'id_kegiatan', 2);
		$data['data']= $this->MyQuery->get_by_id('t_product', 'id_product', $id);
		$data['address'] = $this->ModProfile->get(7)->row();

		$data['id']='id_product';
		// print_r($data['data']);
		// die();
		$this->template->load_u('_user_template', 'read_more_detail', $data);
	}

	public function sign()
	{
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['pengaduans']= $this->MyQuery->get('m_kategori_pengaduan');
		$data['address'] = $this->ModProfile->get(7)->row();

		// print_r($data['pengaduans']);
		// die();
		$this->template->load_u('_user_template', 'sign', $data);
	}

	public function signIn()
	{
		$username = $this->input->post('emaillogin');
		$password = $this->input->post('passlogin');
		$where = array(
			'email' => $username,
			'password' => md5($password)
			);
		$cek = $this->ModLogin->cek_login("m_users",$where)->row();
		// print_r($cek);
		if($cek){ 
			// print_r(count($cek->id);
			// die();
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'admin' => false,
				'id_user' => $cek->id
				);
 
			$this->session->set_userdata($data_session);
 
			return redirect(base_url("/"));
 
		}else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5 style="padding:0px; margin:0px"><i class="icon fa fa-check"></i> Login Failed</h5>
				<small>Invalid email or password</small>
				</div>');
			return redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function signOut(){
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}

	public function register()
	{
		if($this->input->post('password') !== $this->input->post('cpassword')){
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5 style="padding:0px; margin:0px"><i class="icon fa fa-check"></i> Register Failed</h5>
				<small>Your password not match</small>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		$check = $this->MyQuery->get_by_id('m_users', 'email', $this->input->post('email'));
		if($check){
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5 style="padding:0px; margin:0px"><i class="icon fa fa-check"></i> Register Failed</h5>
				<small>Your email already registered<small>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}

		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'password' => md5($this->input->post('password')),
			'address' => $this->input->post('adress'),
			'date_updated'	=> date('Y-m-d h:i:s'),
			'date_created' => date('Y-m-d h:i:s'),
		);
		if($this->MyQuery->insert('m_users', $data)){
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5 style="padding:0px; margin:0px"><i class="icon fa fa-check"></i> Register Success</h5>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5 style="padding:0px; margin:0px"><i class="icon fa fa-check"></i> Register Failed</h5>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}

	public function cart()
	{
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['address'] = $this->ModProfile->get(7)->row();
		$data['cart'] = $this->MyQuery->getCart();
		$data['sub_total'] = array_sum(array_column($data['cart'], 'total_price'));
		// print_r($xarr_new);
		// die();
		$this->template->load_u('_user_template', 'cart', $data);
	}

	public function add_cart()
	{
		$post = $this->input->post();

		// $tmp = array();
		foreach ($post as $key => $value) {
			foreach ($value as $nkey => $nvalue) {
				$tmp[$nkey][$key] = $nvalue;
				// $ndata[$nkey]= array(
				// 	"test" => $key[$nk]
				// );
			}
		}
		foreach ($tmp as $key => $value) {
			$ndata[$key] = array(
				"id_product" 		=> $value["id_product"],
				"id_user"	 		=> $this->session->userdata('id_user'),
				"qty"				=> $value["qty_sewa"],
				"order_start_date"	=> date('Y-m-d', strtotime(str_replace('/', '-', explode(" - ", $value["tgl_sewa"])[0]))),
				"order_end_date"	=> date('Y-m-d', strtotime(str_replace('/', '-', explode(" - ", $value["tgl_sewa"])[1]))),
				"date_created"		=> date('Y-m-d h:i:s'),
				"date_updated"		=> date('Y-m-d h:i:s'),
				"status"			=> "1",
				"total_price"		=> $value["total_price"]
			);
			// echo $value["id_product"]."<br>";
		}
		// print_r($ndata);
		// die();
		$this->MyQuery->insertBatch('t_order_cart', $ndata);
		$this->session->set_flashdata('info_cart', true);
		return redirect($_SERVER['HTTP_REFERER']);
		
	}

	public function delete_cart($id)
	{
		$this->MyQuery->deleteCart($id);
		$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Data berhasil dihapus</h4>
				</div>');
			redirect($_SERVER['HTTP_REFERER']);
	}


	public function order()
	{
		$data['newss'] = $this->MyQuery->get_limit('t_product', 'id_product', 2);
		$data['address'] = $this->ModProfile->get(7)->row();

		// print_r($data['data']);
		// die();
		$this->template->load_u('_user_template', 'orders', $data);
	}
}
