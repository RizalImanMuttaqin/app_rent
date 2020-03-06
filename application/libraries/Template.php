<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
	var $template_data = array();
	
	function set($name, $value)
	{
		//$this->template_data['site_title'] = 'Predefined Title';
		$this->template_data[$name] = $value;
	}

	function load_a($template = '', $view = '' , $view_data = array(), $return = FALSE)
	{
		$this->CI =& get_instance();
		$this->set('contents', $this->CI->load->view('admin/'.$view, $view_data, TRUE));			
		return $this->CI->load->view('_templates/'.$template, $this->template_data, $return);
	}
	function load_u($template = '', $view = '' , $view_data = array(), $return = FALSE)
	{
		$this->CI =& get_instance();
		$this->set('contents', $this->CI->load->view('user/'.$view, $view_data, TRUE));			
		return $this->CI->load->view('_templates/'.$template, $this->template_data, $return);
	}
}