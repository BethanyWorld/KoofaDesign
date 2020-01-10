<?php
class ModelReport extends CI_Model{

    public function getLatestOrders(){
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->join('user' , 'orders.OrderUserId = user.UserId');
        $this->db->order_by('OrderId', 'DESC');
        $this->db->limit(8);
        return $this->db->get()->result_array();
    }
    public function getOrderTypeCount(){
        $this->db->select('COUNT(OrderId) as PendOrderCount');
        $this->db->from('orders');
        $this->db->where('OrderStatus', 'Pend');
        $data= array();

        $data[] = $this->db->get()->result_array();
        $this->db->select('COUNT(OrderId) as FailedOrderCount');
        $this->db->from('orders');
        $this->db->where('OrderStatus', 'Failed');
        $data[] = $this->db->get()->result_array();
        $this->db->select('COUNT(OrderId) as SuccessOrderCount');
        $this->db->from('orders');
        $this->db->where('OrderStatus', 'Done');
        $data[] = $this->db->get()->result_array();
        return $data;
    }
    public function getUsersCount(){
        $this->db->select('COUNT(UserId) as AllUserCount');
        $this->db->from('user');
        return $this->db->get()->result_array();
    }

}
?>