<?php

class ModelAccount extends CI_Model
{
    //works fine
    public function doLoginUser($inputs)
    {
        $this->db->select('*');
        $this->db->from('manager');
        $this->db->where(array('ManagerPhone' => $inputs['inputPhone']));
        $this->db->where(array('ManagerPassword' => md5($inputs['inputPassword'])));

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('AdminIsLogged', TRUE);
            $this->session->set_userdata('AdminLoginInfo', $query->result_array());
            $redirectUrl = $this->session->userdata('redirectUrl');
            if($redirectUrl != "" && $redirectUrl != NULL){
                $arr = array(
                    'type' => "green",
                    'content' => "ورود با موفقیت انجام شد",
                    'success' => true,
                    'redirect' => $redirectUrl
                );
                $this->session->unset_userdata('redirectUrl');
            }
            else{
                $arr = array(
                    'type' => "green",
                    'content' => "ورود با موفقیت انجام شد",
                    'success' => true
                );
            }
            return $arr;
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }

}

?>