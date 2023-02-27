<?php

class ModelOrderSendMethod extends CI_Model{
    /*For Brand*/
    public function getAllSendMethods($limit = 1){
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('orders_sending_method');
        $this->db->order_by('OrderSendMethodId', 'ASC');
        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('orders_sending_method');
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['count'] = $queryCount;
            return $result;
        } else {
            return false;
        }
    }

    public function getSendMethodBySendMethodId($brandId){
        $this->db->select('*');
        $this->db->from('orders_sending_method');
        $this->db->where('OrderSendMethodId', $brandId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function doAddSendMethod($inputs)
    {
        $Array = array(
            'OrderSendMethodTitle' => $inputs['inputOrderSendMethodTitle'],
            'OrderSendMethodPrice' => $inputs['inputOrderSendMethodPrice'],
            'CreateDateTime' => time(),
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->insert('orders_sending_method', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن روش ارسال ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن روش ارسال با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doUpdateOrderSendMethod($inputs)
    {
        $Array = array(
            'OrderSendMethodTitle' => $inputs['inputOrderSendMethodTitle'],
            'OrderSendMethodPrice' => $inputs['inputOrderSendMethodPrice'],
            'OrderSendMethodActive' => $inputs['inputOrderSendMethodActive'],
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->where('OrderSendMethodId', $inputs['inputOrderSendMethodId']);
        $this->db->update('orders_sending_method', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی روش ارسال ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی روش ارسال با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doDeleteSendMethod($inputs){
        $Array = array(
            'OrderSendMethodActive' => 'InActive',
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->where('OrderSendMethodId', $inputs['inputOrderSendMethodId']);
        $this->db->update('orders_sending_method', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف  روش ارسال ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف روش ارسال با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    /*End For Brand*/

}

?>