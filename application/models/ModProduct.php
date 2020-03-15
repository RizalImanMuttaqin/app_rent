<?php 
class ModProduct extends CI_Model {

        public function get_product()
        {
                $this->db->select('*');
                $this->db->from('t_product');
                $this->db->join('m_kategori', 'm_kategori.id_kategori = t_product.id_kategori');
                $this->db->order_by("t_product.id_product","desc");
                $query = $this->db->get();
                return $query->result();
        }

        public function get_search($param)
        {
                $this->db->select('*');
                $this->db->from('t_product');
                $this->db->where("t_product.judul LIKE '%".$param."%'");
                $this->db->join('m_kategori', 'm_kategori.id_kategori = t_product.id_kategori');
                $this->db->order_by("t_product.id_product","desc");
                $query = $this->db->get();
                return $query->result();
        }

        public function get_product_id($id)
        {
                $this->db->select('*');
                $this->db->from('t_product');
                $this->db->join('m_kategori', 'm_kategori.id_kategori = t_product.id_kategori');
                $this->db->where('t_product.id_kategori =', $id);
                $this->db->order_by("t_product.id_product","desc");
                $query = $this->db->get();
                return $query->result();
        }

        public function get_buruh()
        {
                $this->db->select('*, t_product.date_created as tanggal');
                $this->db->from('t_product');
                $this->db->join('m_kategori', 'm_kategori.id_kategori = t_product.id_kategori');
                $this->db->where('t_product.id_kategori =', '0');
                $this->db->order_by("t_product.id_product","desc");
                $query = $this->db->get();
                return $query->result();
        }

        
        // public function get_buruh_id($id)
        // {
        //         $this->db->select('*');
        //         $this->db->from('t_product');
        //         $this->db->join('m_kategori', 'm_kategori.id_kategori = t_product.id_kategori');
        //         $this->db->where('t_product.id_kategori =', $id);
        //         $this->db->order_by("t_product.id_product","desc");
        //         $query = $this->db->get();
        //         return $query->result();
        // }

}