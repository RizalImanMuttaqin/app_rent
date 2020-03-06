<?php 
class ModMedia extends CI_Model {

     public function get_media($tipe)
     {
          $this->db->select('*');
          $this->db->from('t_media');
          $this->db->where('tipe_media =', $tipe);
// $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
          $this->db->order_by("t_media.id_media","desc");
          $query = $this->db->get();
          return $query->result();
     }

     public function get_kategori()
     {
          $this->db->select('DISTINCT(kategori_foto)');
          $this->db->from('t_galeri');
          $query = $this->db->get();
          return $query->result();
     }

}