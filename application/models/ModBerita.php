<?php 
class ModBerita extends CI_Model {

        public function get_berita()
        {
                $this->db->select('*');
                $this->db->from('t_berita');
                $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
                $this->db->order_by("t_berita.id_berita","desc");
                $query = $this->db->get();
                return $query->result();
        }

        public function get_search($param)
        {
                $this->db->select('*');
                $this->db->from('t_berita');
                $this->db->where("t_berita.judul LIKE '%".$param."%'");
                $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
                $this->db->order_by("t_berita.id_berita","desc");
                $query = $this->db->get();
                return $query->result();
        }

        public function get_berita_id($id)
        {
                $this->db->select('*');
                $this->db->from('t_berita');
                $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
                $this->db->where('t_berita.id_kategori =', $id);
                $this->db->order_by("t_berita.id_berita","desc");
                $query = $this->db->get();
                return $query->result();
        }

        public function get_buruh()
        {
                $this->db->select('*, t_berita.date_created as tanggal');
                $this->db->from('t_berita');
                $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
                $this->db->where('t_berita.id_kategori =', '0');
                $this->db->order_by("t_berita.id_berita","desc");
                $query = $this->db->get();
                return $query->result();
        }

        
        // public function get_buruh_id($id)
        // {
        //         $this->db->select('*');
        //         $this->db->from('t_berita');
        //         $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
        //         $this->db->where('t_berita.id_kategori =', $id);
        //         $this->db->order_by("t_berita.id_berita","desc");
        //         $query = $this->db->get();
        //         return $query->result();
        // }

}