<?php

class ModelOrder extends CI_Model{
    public function getAllOrders($inputs)
    {

        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->join('user' , 'orders.OrderUserId = user.UserId');
        $this->db->join('user_address' , 'user_address.AddressId = orders.OrderAddressId');

        if($inputs['inputOrderId'] != ''){
            $this->db->where('OrderId',$inputs['inputOrderId']);
        }
        if($inputs['inputPhone'] != ''){
            $this->db->where('UserPhone',$inputs['inputPhone']);
        }
        if($inputs['inputLastName'] != ''){
            $this->db->like('UserLastName',$inputs['inputLastName']);
        }
        if($inputs['inputOrderStatus'] != ''){
            $this->db->where('OrderStatus',$inputs['inputOrderStatus']);
        }
        $this->db->order_by('OrderId', 'DESC');
        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('orders');
        if (count($query) > 0) {
            $index = 0;
            foreach ($query as $item) {
                $query[$index]['items'] = $this->getOrderItemsByOrderId($query[$index]['OrderId']);
                $index +=1;
            }
            $result['data'] = $query;
            $result['count'] = $queryCount;
            return $result;
        } else {
            $result['data'] = array();
            $result['count'] = 0;
            return $result;
        }
    }
    public function getOrderByOrderId($brandId){
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->join('user' , 'orders.OrderUserId = user.UserId');
        $this->db->where('OrderId', $brandId);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getOrderItemsByOrderId($brandId){
        $this->db->select('*');
        $this->db->from('order_items');
        $this->db->join('product' , 'order_items.ProductId = product.ProductId');
        $this->db->join('product_size' , 'product_size.SizeId = order_items.ProductSizeId' , 'left');
        $this->db->join('product_material' , 'product_material.MaterialId = order_items.ProductMaterialId' , 'left');
        $this->db->where('OrderId', $brandId);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function doAddOrder($inputs){
        $Array = array(
            'OrderUserId' => $inputs['inputOrderUserId'],
            'OrderTotalPrice' => $inputs['inputOrderTotalPrice'],
            'OrderAddressId' => $inputs['inputOrderAddressId'],
            'OrderSendMethodId' => $inputs['inputOrderSendMethodId'],
            'OrderSendMethodPrice' => $inputs['inputOrderSendMethodPrice'],
            'OrderDiscountCode' => $inputs['inputOrderDiscountCode'],
            'OrderToken' => $inputs['inputOrderToken'],
            'OrderResNum' => $inputs['inputOrderResNum'],
            'OrderStatus' => 'Pend',
            'OrderDateTime' => time()
        );
        $this->db->insert('orders', $Array);
        return $this->db->insert_id();
    }
    public function doAddOrderItems($inputs, $orderId){
        foreach ($inputs as $input) {
            $Array = array(
                'OrderId' => $orderId,
                'ProductId' => $input['productId'],
                'ProductCount' => $input['productCount'],
                'ProductPrice' => $input['productPrice'],
                'ProductUploadImage' => $input['productUploadImage'],
                'ProductMaterialId' => $input['productMaterialId'],
                'ProductSizeId' => $input['productSizeId'],
                'ProductHeight' => $input['productHeight'],
                'ProductWidth' => $input['productWidth'],
                'ProductDiscountPrice' => NULL,
                'ProductDiscountCode' => NULL,
                'ProductServices' => $input['productServices'],
            );
            $this->db->insert('order_items', $Array);
        }
    }
    public function setOrderPaid($orderId){
        $Array = array(
            'OrderId' => $orderId,
            'OrderRequiredDateTime' => time(),
            'OrderStatus' => 'Done'
        );
        $this->db->where('OrderId', $orderId);
        $this->db->update('orders', $Array);
    }
    public function setOrderFailed($orderId){
        $Array = array(
            'OrderId' => $orderId,
            'OrderRequiredDateTime' => time(),
            'OrderStatus' => 'Failed',
        );
        $this->db->where('OrderId', $orderId);
        $this->db->update('orders', $Array);
    }
    public function setOrderUnpaid($orderId){
        $Array = array(
            'OrderId' => $orderId,
            'OrderRequiredDateTime' => time(),
            'OrderStatus' => 'Pend',
        );
        $this->db->where('OrderId', $orderId);
        $this->db->update('orders', $Array);
    }
    public function payment_update_after_pay($id,$MID,$RefNum,$CustomerRefNum,$State,$CardPanHash,$is_pay){
        $this->db->reset_query();
        $this->db->where('OrderResNum',$id);
        $this->db->set('OrderMID',$MID);
        $this->db->set('OrderRefNum',$RefNum);
        $this->db->set('OrderCustomerRefNum',$CustomerRefNum);
        $this->db->set('OrderStatus','Done');
        $this->db->set('OrderCardPanHash',$CardPanHash);
        $this->db->set('OrderIsPay',$is_pay);
        $this->db->set('OrderRequiredDateTime',time());
        $this->db->update('orders');
    }

    public function payment_update_after_pay_failed($id,$MID,$RefNum,$CustomerRefNum,$State,$CardPanHash,$is_pay){
        $this->db->reset_query();
        $this->db->where('OrderResNum',$id);
        $this->db->set('OrderMID',$MID);
        $this->db->set('OrderRefNum',$RefNum);
        $this->db->set('OrderCustomerRefNum',$CustomerRefNum);
        $this->db->set('OrderStatus','Failed');
        $this->db->set('OrderCardPanHash',$CardPanHash);
        $this->db->set('OrderIsPay',$is_pay);
        $this->db->set('OrderRequiredDateTime',time());
        $this->db->update('orders');
    }

    public function setOrderStatus($inputs){
        $Array = array( 'OrderStatus' =>$inputs['inputOrderStatus'] );
        $this->db->where('OrderId', $inputs['inputOrderId']);
        $this->db->update('orders', $Array);

        return $this->config->item('DBMessages')['SuccessAction'];
    }


}

?>