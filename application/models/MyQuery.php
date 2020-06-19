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
                // echo $this->db->last_query();

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

        public function insertWithLastId($table, $param){
                if($this->db->insert($table, $param)){
                        $insert_id = $this->db->insert_id();
                        return  $insert_id;
                }
                return false;
        }

        public function getOrder($status, $isAdmin = false){
                if($isAdmin){
                        $id_user = $this->session->userdata('id_user');
                        $this->db->where('id_user', $id_user);
                }
                if($status){
                        $this->db->where('status', $status);
                }
                
                $this->db->order_by("t_order.date_created", "desc");
                // $this->db->join('t_product', 't_product.id_product = t_order_cart.id_product');
                $query = $this->db->get("t_order");
                // echo $this->db->last_query();
                return $query->result();
        }

        public function getProductOrder($id_order)
        {
                // $id_user = $this->session->userdata('id_user');
                // $this->db->where('status', '1');
                $this->db->where('id_order', $id_order);
                // $this->db->order_by("t_order_cart.date_created", "desc");
                $this->db->join('t_product', 't_product.id_product = t_order_cart.id_product');
                $query = $this->db->get("t_order_cart");
                return $query->result();
        }

        public function uploadPayment($id, $data)
        {
                $id_user = $this->session->userdata('id_user');
                $sql = '
                UPDATE t_order t1 SET t1.status = ?, t1.bukti_tf = ?, t1.read = ?
                WHERE t1.id_order = ? AND t1.id_user = ?';
                // echo "<pre>";
                $query = $this->db->query($sql, [$data['status'], $data['bukti_tf'], $data['read'], $id, $id_user]);
                return $query;
        }

        public function getAccount()
        {
                $sql = '
                SELECT name, phone, email, address FROM m_users;
                ';
                // echo "<pre>";
                $query = $this->db->query($sql);
                return $query->result();
        }

        public function updateAdmin($data){
                $sql = '
                UPDATE m_admin t1 SET t1.email = ?, t1.phone = ?
                WHERE t1.id = 1';
                // echo "<pre>";
                $query = $this->db->query($sql, [$data['email'], $data['phone']]);
                return $query;
        }

        public function getAdmin(){
                $sql = '
                SELECT username, phone, email FROM m_admin t1
                WHERE t1.id = 1';
                // echo "<pre>";
                $query = $this->db->query($sql);
                return $query->row();
        }

        public function deleteOrder($id){
                $id_user = $this->session->userdata('id_user');
                $sql = '
                UPDATE t_order t1 SET t1.status = 0
                WHERE t1.id_order = ? AND t1.id_user = ?';
                // echo "<pre>";
                $query = $this->db->query($sql, [$id, $id_user]);
                return $query;
        }

        public function checkout($data, $id_order)
        {
                // echo "<pre>";
                $id_user = $this->session->userdata('id_user');
                $sql = '
                UPDATE t_order_cart t1 SET t1.status = 2,
                qty = ?, order_start_date = ?, order_end_date = ?,
                total_price = ?, id_order = ?
                WHERE t1.id_cart = ? AND t1.id_user = ?';
                // echo "<pre>";
                $query = $this->db->query($sql, [
                        $data['qty'], 
                        date('Y-m-d', strtotime(str_replace('/', '-', explode(" - ", $data["tgl_sewa"])[0]))),
                        date('Y-m-d', strtotime(str_replace('/', '-', explode(" - ", $data["tgl_sewa"])[1]))), 
                        $data['total_price'],
                        $id_order,
                        $data['id_cart'],
                        $id_user
                ]);
                // print_r($data);
                return $query;
        }


}