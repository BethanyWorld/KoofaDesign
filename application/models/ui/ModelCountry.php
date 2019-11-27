<?php

class ModelCountry extends CI_Model
{
    public function getStateList()
    {
        $this->db->select('*');
        $this->db->from('state');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
    public function getStateById($stateId)
    {
        $this->db->select('*');
        $this->db->from('state');
        $this->db->where(array('StateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
    public function getCityByStateId($stateId)
    {
        $this->db->select('*');
        $this->db->from('city');
        $this->db->where(array('CityStateId' => $stateId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
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