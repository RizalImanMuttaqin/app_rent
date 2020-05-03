<?php
function msgSuccess($msg)
{
	$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> '.$msg.' </h4>
				</div>');
	
}
function msgFail($msg)
{
	$this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> '.$msg.' </h4>
				</div>');
}

function checkUserLogin(){
	// echo "lol";
	$ci =& get_instance();
	$status = $ci->session->userdata("status");
	// die();
	if($status != "login_user"){
		$ci->session->set_flashdata('info', '<div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h5 style="padding:0px; margin:0px"><i class="icon fa fa-check"></i> Please Login to Continue</h5>
				<small></small>
				</div>');
		return redirect('/index/sign');
	}
}
?>