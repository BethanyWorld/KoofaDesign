<?php

class ModelUser extends CI_Model{
    public function getUserProfileInfoByUserId($userId)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('UserId' => $userId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function doUpdateProfile($inputs)
    {
        $Array = array(
            'UserFirstName' => $inputs['inputUserFirstName'],
            'UserLastName' => $inputs['inputUserLastName'],
            'UserPhone' => $inputs['inputUserPhone'],
            'UserHomePhone' => $inputs['inputUserHomePhone'],
            'UserEmail' => $inputs['inputUserEmail']
        );
        $this->db->trans_start();
        $this->db->where('UserId', $inputs['inputUserId']);
        $this->db->update('user', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where(array('UserId' => $inputs['inputUserId']));
            $query = $this->db->get();
            $this->session->set_userdata('UserLoginInfo', $query->result_array());
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doChangePassword($inputs)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array(
            'UserId' => $inputs['inputUserId'],
            'UserPassword' => md5($inputs['inputCurrentPassword'])
        ));
        if($this->db->get()->num_rows() > 0){
            $UserArray = array(
                'UserPassword' => md5($inputs['inputNewPassword'])
            );
            $this->db->trans_start();
            $this->db->where('UserId', $inputs['inputUserId']);
            $this->db->update('user', $UserArray);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $arr = array(
                    'type' => "red",
                    'content' => "بروزرسانی رمز عبور با مشکل مواجه شد",
                    'success' => false
                );
                return $arr;
            } else {
                $arr = array(
                    'type' => "green",
                    'content' => "بروزرسانی رمز عبور با موفقیت انجام شد",
                    'success' => true
                );
                return $arr;
            }
        }
        else{
            $arr = array(
                'type' => "red",
                'content' => "رمز عبور فعلی نامعتبر است",
                'success' => false
            );
            return $arr;
        }

    }
    public function getUserAddressByUserId($userId)
    {
        $this->db->select('*');
        $this->db->from('user_address');
        $this->db->join('state' , 'state.StateId = user_address.AddressStateId');
        $this->db->where(array('UserId' => $userId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }
    public function getUserAddressByAddressId($id)
    {
        $this->db->select('*');
        $this->db->from('user_address');
        $this->db->join('state' , 'state.StateId = user_address.AddressStateId');
        $this->db->where(array('AddressId' => $id));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array();
        return $arr;
    }

    public function getWishList($userId){
        $this->db->select('*');
        $this->db->from('user_wish_list');
        $this->db->where(array(
            'UserId' => $userId
        ));
        $data = $this->db->get()->result_array();
        $wishList = array();
        foreach ($data as $item) {
            $this->db->select('*');
            $this->db->from('product');
            $this->db->where('ProductId', $item['ProductId']);
            $wishList[] = $this->db->get()->result_array();
        }
        return $wishList;
    }
    public function getSendMethods(){
        $this->db->select('*');
        $this->db->from('orders_sending_method');
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function doDeleteWishList($inputs){
        $this->db->delete('user_wish_list' , array(
            'UserId' => $inputs['inputUserId'],
            'ProductId' => $inputs['inputProductId']
        ));
        $arr = array(
            'type' => "green",
            'content' => "حذف  با موفقیت انجام شد",
            'success' => true
        );
        return $arr;
    }
    public function doAddAddress($inputs)
    {
        $Array = array(
            'AddressFullName' => $inputs['inputAddressFullName'],
            'AddressEmail' => $inputs['inputAddressEmail'],
            'AddressPhone' => $inputs['inputAddressPhone'],
            'AddressHomePhone' => $inputs['inputAddressHomePhone'],
            'AddressPostalCode' => $inputs['inputAddressPostalCode'],
            'AddressStateId' => $inputs['inputAddressStateId'],
            'AddressCityId' => $inputs['inputAddressCityId'],
            'Address' => $inputs['inputAddress'],
            'UserId' => $inputs['inputUserId']
        );
        $this->db->trans_start();
        $this->db->insert('user_address', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن آدرس ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن آدرس  با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditAddress($inputs)
    {
        $Array = array(
            'AddressFullName' => $inputs['inputAddressFullName'],
            'AddressEmail' => $inputs['inputAddressEmail'],
            'AddressPhone' => $inputs['inputAddressPhone'],
            'AddressHomePhone' => $inputs['inputAddressHomePhone'],
            'AddressPostalCode' => $inputs['inputAddressPostalCode'],
            'AddressStateId' => $inputs['inputAddressStateId'],
            'AddressCityId' => $inputs['inputAddressCityId'],
            'Address' => $inputs['inputAddress'],
            'UserId' => $inputs['inputUserId']
        );
        $this->db->trans_start();
        $this->db->where('UserId', $inputs['inputUserId']);
        $this->db->where('AddressId', $inputs['inputAddressId']);
        $this->db->update('user_address', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function getUserOrdersByUserId($userId){
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where(array(
            'OrderUserId' => $userId
        ));
        $this->db->order_by('OrderId' , 'DESC');
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function getUserOrdersByOrderId($orderId){
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where(array(
            'OrderId' => $orderId
        ));
        $data = $this->db->get()->result_array();
        return $data;
    }
    public function getUserOrdersItemsByOrderId($orderId){
        $this->db->select('*');
        $this->db->from('order_items');
        $this->db->join('product' , 'order_items.ProductId = product.ProductId');
        $this->db->where(array(
            'OrderId' => $orderId
        ));
        $data = $this->db->get()->result_array();
        return $data;
    }
}
?>