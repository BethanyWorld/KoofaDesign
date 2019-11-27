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

}

?>