<?php 
class ModArtikel extends CI_Model {

   function __construct(){

      parent::__construct();

   }

   function data($number, $offset){

   		$this->db->order_by("id_artikel","desc");
      return $query = $this->db->get('t_artikel',$number,$offset)->result();    
   }

   function jumlah_data(){
      return $this->db->get('t_artikel')->num_rows();
   }

}