<?php
class ModTransaction extends CI_Model
{

    public function getOrder($status)
    {
        $sql = '
        SELECT t1.*, t2.name, t2.phone, t2.email FROM t_order t1 
        LEFT JOIN m_users t2 ON t1.id_user = t2.id  
        WHERE status IN ?
        ORDER BY t1.id_order DESC';
        // echo "<pre>";
        $query = $this->db->query($sql, [$status]);
        return $query->result();
    }

    public function getOrderUser($status)
    {
        $id_user = $this->session->userdata('id_user');
        $sql = '
        SELECT t1.*, t2.name, t2.phone, t2.email FROM t_order t1 
        LEFT JOIN m_users t2 ON t1.id_user = t2.id  
        WHERE id_user = ? AND status IN ?
        ORDER BY t1.id_order DESC';
        // echo "<pre>";
        $query = $this->db->query($sql, [$id_user, $status]);
        return $query->result();
    }

    public function updateOrdersStatus($status, $id_order)
    {
        $sql = '
        UPDATE t_order SET status = ?
        WHERE id_order = ?';
        // echo "<pre>";
        $query = $this->db->query($sql, [$status, $id_order]);
        return $query;
    }

    public function getOrderDetails($id_order)
    {
        $sql = '
        SELECT * FROM t_order 
        WHERE id_order = ?';
        // echo "<pre>";
        $query = $this->db->query($sql, [$id_order]);
        return $query->row();
    }

    public function submitOffersUser($id_order)
    {
        $id_user = $this->session->userdata('id_user');
        $sql = '
        UPDATE t_order SET status = ?
        WHERE id_order = ? AND id_user = ?';
        // echo "<pre>";
        $query = $this->db->query($sql, [2, $id_order, $id_user]);
        return $query;
    }


    public function updateOrdersStatusOffers($status, $id_order, $discount)
    {
        $sql = '
        UPDATE t_order SET status = ?, potongan_harga = ?
        WHERE id_order = ?';
        // echo "<pre>";
        $query = $this->db->query($sql, [$status, $discount, $id_order]);
        return $query;
    }
}
