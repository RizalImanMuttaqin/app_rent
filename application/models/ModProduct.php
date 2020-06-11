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

        
        public function getStock($date)
        {
                $sql = '
                SELECT judul, nama_kategori, stock, IFNULL( t4.stock_used, 0 ) AS used,(stock - IFNULL( t4.stock_used, 0 )) AS available 
                FROM t_product t1
                        LEFT JOIN m_kategori t2 ON t1.id_kategori = t2.id_kategori
                        LEFT JOIN (
                        SELECT	t1.id_order, t2.id_product, SUM( t2.qty ) AS stock_used 
                        FROM
                                t_order t1
                                LEFT JOIN t_order_cart t2 ON t1.id_order = t2.id_order 
                        WHERE
                                t1.STATUS = 5 
                                AND t2.order_start_date <= DATE( ? ) AND t2.order_end_date >= DATE( ? ) 
                        GROUP BY
                        t2.id_product 
                        ) t4 ON t1.id_product = t4.id_product        
                ';
                $query = $this->db->query($sql, [$date, $date]);
                return $query->result();
        }

        public function getSchedule($date)
        {
                $sql = '
                SELECT
                t1.id_order,
                t1.order_code,
                t3.judul,
                t4.`name`,
                t4.email,
                t4.phone,
                t2.order_start_date,
                t2.order_end_date,
                t2.qty
                FROM
                t_order t1
                LEFT JOIN t_order_cart t2 ON t1.id_order = t2.id_order 
                LEFT JOIN t_product t3 ON t2.id_product = t3.id_product
                LEFT JOIN m_users t4 ON t4.id = t2.id_user
                WHERE
                t1.STATUS = 5
                AND t2.order_start_date >= DATE( ? ) 
                OR DATE( ? ) BETWEEN t2.order_start_date AND t2.order_end_date
                ORDER BY t2.order_start_date        
                ';
                $query = $this->db->query($sql, [$date, $date]);
                return $query->result();

        }

}