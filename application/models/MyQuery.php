<?php 
class MyQuery extends CI_Model {

        public function get($table)
        {
                if ($table=='t_pengaduan') {
                        // $this->db->select('m_kategori_pengaduan.nama_kategori as kategori');
                        $this->db->join('m_kategori_pengaduan', 'm_kategori_pengaduan.id_kategori_pengaduan = t_pengaduan.id_kategori');
                }
                $this->db->order_by($table.".date_created", "desc");
                $query = $this->db->get($table);
                return $query->result();
        }


        public function get_by_id($table, $pk, $id)
        {
                $this->db->where($pk.'=', $id);
                if($table == "t_berita"){
                        $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
                }
                $this->db->order_by($table.".date_created", "desc");
                $query = $this->db->get($table);
                return $query->row();
        }

        public function get_limit($table, $pk, $limit)
        {
                $this->db->select('*');
                $this->db->from($table);
                if($table == "t_berita"){
                        $this->db->where('t_berita.id_kategori !=', '0');
                        $this->db->join('m_kategori_berita', 'm_kategori_berita.id_kategori = t_berita.id_kategori');
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


}