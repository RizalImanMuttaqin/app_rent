<?php 
class MyQuery extends CI_Model {

        public function get($table, $param = [])
        {
                if ($table=='t_pengaduan') {
                        // $this->db->select('m_kategori_pengaduan.nama_kategori as kategori');
                        $this->db->join('m_kategori_pengaduan', 'm_kategori_pengaduan.id_kategori_pengaduan = t_pengaduan.id_kategori');
                }

                if($table == "t_product"){
                        if($param['category'])
                                $this->db->where('t_product.id_kategori =', $param['category']);
                        if($param['search'])
                                $this->db->where("t_product.judul LIKE '%".$param['search']."%'");

                        // $this->db->join('m_kategori', 'm_kategori.id_kategori = t_product.id_kategori');
                }
                $this->db->order_by($table.".date_created", "desc");
                $query = $this->db->get($table);
                return $query->result();
        }


        public function get_by_id($table, $pk, $id)
        {
                $this->db->where($pk.'=', $id);
                if($table == "t_product"){
                        $this->db->join('m_kategori', 'm_kategori.id_kategori = t_product.id_kategori');
                }
                $this->db->order_by($table.".date_created", "desc");
                $query = $this->db->get($table);
                return $query->row();
        }

        public function get_limit($table, $pk, $limit)
        {
                $this->db->select('*');
                $this->db->from($table);
                if($table == "t_product"){
                        $this->db->where('t_product.id_kategori !=', '0');
                        $this->db->join('m_kategori', 'm_kategori.id_kategori = t_product.id_kategori');
                }
                if ($limit != false) {
                        $this->db->limit($limit);
                }
                $this->db->order_by($pk,"desc");
                $query = $this->db->get();
                return $query->result();
        }

        public function insert($table, $param=array())
        {
                if($this->db->insert($table, $param)){
                        return true;
                }
                return false;
        }

        public function update($id, $pk, $table, $param=array())
        {
                $this->db->where($pk, $id);
                if($this->db->update($table, $param)){
                        return true;
                }
                return false;

        }

        public function delete($id, $pk, $table)
        {               
                $this->db->where($pk, $id);
                $this->db->delete($table);
        }

        public function getNotif()
        {
                $this->db->where('status', '1');
                return $this->db->get('t_pengaduan')->num_rows();
        }

        public function insertBatch($table, $data){
                $this->db->insert_batch($table, $data); 
        }

        public function getCart(){
                $id_user = $this->session->userdata('id_user');
                $this->db->where('status', '1');
                $this->db->where('id_user', $id_user);
                $this->db->order_by("t_order_cart.date_created", "desc");
                $this->db->join('t_product', 't_product.id_product = t_order_cart.id_product');
                $query = $this->db->get("t_order_cart");
                return $query->result();
        }

        public function deleteCart($id){
                $id_user = $this->session->userdata('id_user');
                $this->db->where('status', '1');
                $this->db->where('id_user', $id_user);
                $this->db->where('id_cart', $id);
                $this->db->delete("t_order_cart");
        }
}