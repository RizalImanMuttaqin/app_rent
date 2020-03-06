<?php 
class ModProfile extends CI_Model {

        public function get($id)
        {
                $this->db->select('*');
                $this->db->from('m_profile_desa');
                $this->db->where('id =', $id);
                // $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
                // $this->db->order_by("t_berita.id_berita","desc");
                return $query = $this->db->get();
                // return $query->result();
        }

}