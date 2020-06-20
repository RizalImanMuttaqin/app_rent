<?php
defined('BASEPATH') OR exit('No direct script access allowed');



/* 1: belum selesai menunggu tf;
2: mengajukan pewaran;
3: penawaran admin; 
4: konfirmasi pembayran, upload bukti tf
5: konfirmasi pembayran ole admin, menunggu tanggal, mengurangi stok
6: selesai menambah stok;
0: batal menambah stok */

class Transaction extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('ModTransaction');
		$this->load->model('MyQuery');
		if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("login"));
		}
	}
	public function inProcess()
	{
		$data['css'] = "<link rel=stylesheet href=".base_url('assets/admin_template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css').">";
		$data['js'] = "
			<script src=".base_url('assets/admin_template/bower_components/datatables.net/js/jquery.dataTables.min.js')."></script>
			<script src=".base_url('assets/admin_template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')."></script>
			<script src=".base_url('assets/custom/config_datatable.js')."></script>
			";
		$data['orders'] = $this->ModTransaction->getOrder([1, 3, 4]);
		$this->template->load_a('_admin_template', 'order_on_process', $data);
	}

	public function reject()
	{
		$data['css'] = "<link rel=stylesheet href=".base_url('assets/admin_template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css').">";
		$data['js'] = "
			<script src=".base_url('assets/admin_template/bower_components/datatables.net/js/jquery.dataTables.min.js')."></script>
			<script src=".base_url('assets/admin_template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')."></script>
			<script src=".base_url('assets/custom/config_datatable.js')."></script>
			";
		$data['orders'] = $this->ModTransaction->getOrder([0]);
		$this->template->load_a('_admin_template', 'order_reject', $data);
	}

	public function history()
	{
		$data['css'] = "<link rel=stylesheet href=".base_url('assets/admin_template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css').">";
		$data['js'] = "
			<script src=".base_url('assets/admin_template/bower_components/datatables.net/js/jquery.dataTables.min.js')."></script>
			<script src=".base_url('assets/admin_template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')."></script>
			<script src=".base_url('assets/custom/config_datatable.js')."></script>
			";
		$data['orders'] = $this->ModTransaction->getOrder([5]);
		$this->template->load_a('_admin_template', 'order_history', $data);
	}

	public function offers()
	{
		$data['css'] = "<link rel=stylesheet href=".base_url('assets/admin_template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css').">";
		$data['js'] = "
			<script src=".base_url('assets/admin_template/bower_components/datatables.net/js/jquery.dataTables.min.js')."></script>
			<script src=".base_url('assets/admin_template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')."></script>
			<script src=".base_url('assets/custom/config_datatable.js')."></script>
			";
		$data['orders'] = $this->ModTransaction->getOrder([2]);
		$this->template->load_a('_admin_template', 'order_offers', $data);
	}


	public function update_reject($id_order){

		$this->ModTransaction->updateOrdersStatus(0, $id_order);
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function update_confirm($id_order){

		$this->ModTransaction->updateOrdersStatus(5, $id_order);
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function update_offers($id_order){
		$post = $this->input->post();
		foreach ($post as $key => $value) {
			foreach ((array)$value as $nkey => $nvalue) {
				$tmp[$nkey][$key] = $nvalue;
			}
		}
		// print_r($tmp);
		$total =0;
		foreach($tmp as $data){
			$this->ModTransaction->updateOffers($data);
			$total += (int) str_replace('.', '', $data['offers']);
		}
		$this->ModTransaction->updateOrdersStatusOffers(3, $id_order, $total);
		return redirect("/admin/transaction/offers");
	}

}
