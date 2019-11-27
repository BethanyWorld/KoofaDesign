<?php

class ModelProfile extends CI_Model
{
    public function getManagerInfo(){
        return $this->db->get('manager')->result_array()[0];
    }

    public function doUpdateProfile($inputs)
    {
        $Array = array(
            'ManagerFullName' => $inputs['inputFullName'],
            'ManagerPhone' => $inputs['inputPhone'],
            'ManagerEmail' => $inputs['inputEmail']
        );
        $this->db->trans_start();
        $this->db->where('ManagerId', $inputs['ManagerId']);
        $this->db->update('manager', $Array);

        if( isset($inputs['inputPassword']) && $inputs['inputPassword']!=""){
            $Array = array('ManagerPassword' => md5($inputs['inputPassword']));
            $this->db->update('manager', $Array);
        }
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

}

?>