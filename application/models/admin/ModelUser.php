<?php

class ModelUser extends CI_Model
{
    /*For Product*/
    public function getUsersByPagination($limit = 1)
    {
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('UserId', 'DESC');
        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('user');
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['count'] = $queryCount;
            return $result;
        } else {
            return false;
        }
    }

    public function getUserByUserId($userId){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_address' , 'user.UserId = user_address.UserId');
        $this->db->where('user.UserId', $userId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function doAddUser($inputs)
    {
        $Array = array(
            'UserFirstName' => $inputs['inputUserFirstName'],
            'UserLastName' => $inputs['inputUserLastName'],
            'UserPhone' => $inputs['inputUserPhone'],
            'UserPassword' => md5($inputs['inputUserPassword']),
            'UserEmail' => $inputs['inputUserEmail'],
            'UserBirthDate' => $inputs['inputUserBirthDate'],
            'UserHomePhone' => $inputs['inputUserHomePhone'],
            'ModifiedDateTime' => time(),
            'CreateDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->insert('user', $Array);
        $insertId = $this->db->insert_id();
        $Array = array(
            'UserAddressStateId' => $inputs['inputUserAddressStateId'],
            'UserAddressCityId' => $inputs['inputUserAddressCityId'],
            'UserAddress' => $inputs['inputUserAddress'],
            'UserPostalCode' => $inputs['inputUserPostalCode'],
            'UserSecondPhone' => $inputs['inputUserSecondPhone'],
            'UserId' => $insertId
        );
        $this->db->insert('user_address', $Array);

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن کاربر ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن کاربر با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doUpdateUser($inputs)
    {
        $Array = array(
            'UserFirstName' => $inputs['inputUserFirstName'],
            'UserLastName' => $inputs['inputUserLastName'],
            'UserPhone' => $inputs['inputUserPhone'],
            'UserPassword' => md5($inputs['inputUserPassword']),
            'UserEmail' => $inputs['inputUserEmail'],
            'UserBirthDate' => $inputs['inputUserBirthDate'],
            'UserHomePhone' => $inputs['inputUserHomePhone'],
            'ModifiedDateTime' => time()
        );
        $AddressArray = array(
            'UserAddressStateId' => $inputs['inputUserAddressStateId'],
            'UserAddressCityId' => $inputs['inputUserAddressCityId'],
            'UserAddress' => $inputs['inputUserAddress'],
            'UserPostalCode' => $inputs['inputUserPostalCode'],
            'UserSecondPhone' => $inputs['inputUserSecondPhone']
        );

        $this->db->trans_start();
        $this->db->where('UserId', $inputs['inputUserId']);
        $this->db->update('user', $Array);

        $this->db->where('UserId', $inputs['inputUserId']);
        $this->db->update('user_address', $AddressArray);

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش کاربر ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش کاربر با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }



    public function getManagers()
    {
        $this->db->select('*');
        $this->db->from('manager');
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('user');
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['count'] = $queryCount;
            return $result;
        } else {
            return false;
        }
    }
    public function getManagerById($Id){
        $this->db->select('*');
        $this->db->from('manager');
        $this->db->where('ManagerId', $Id);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function doAddManager($inputs){
        $Array = array(
            'ManagerFullName' => $inputs['inputManagerFullName'],
            'ManagerPhone' => $inputs['inputManagerPhone'],
            'ManagerEmail' => $inputs['inputManagerEmail'],
            'ManagerPassword' => md5($inputs['inputManagerPassword']),
            'Role' => $inputs['inputRole']
        );
        $this->db->trans_start();
        $this->db->insert('manager', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش کاربر ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش کاربر با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doUpdateManager($inputs){
        $Array = array(
            'ManagerFullName' => $inputs['inputManagerFullName'],
            'ManagerPhone' => $inputs['inputManagerPhone'],
            'ManagerEmail' => $inputs['inputManagerEmail'],
            'ManagerPassword' => md5($inputs['inputManagerPassword']),
            'Role' => $inputs['inputRole']
        );

        $this->db->trans_start();
        $this->db->where('ManagerId', $inputs['inputManagerId']);
        $this->db->update('manager', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش کاربر ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش کاربر با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    /*End For Product*/


}

?>