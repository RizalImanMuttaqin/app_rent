<?php 
class ModKegiatan extends CI_Model {

   function __construct(){

      parent::__construct();

   }

   function data($number, $offset){

   		$this->db->order_by("id_kegiatan","desc");
      return $query = $this->db->get('t_kegiatan',$number,$offset)->result();    
   }

   function jumlah_data(){
      return $this->db->get('t_kegiatan')->num_rows();
   }

}