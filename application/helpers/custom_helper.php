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
?>