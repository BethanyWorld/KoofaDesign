<?php

class ModelSkills extends CI_Model
{
    public function getSkillsByKeyword($keyword)
    {
        $this->db->select('SkillId as id ,SkillName as text');
        $this->db->from('skills');
        $this->db->like('SkillName', $keyword, 'both');
        $this->db->order_by('SkillId', 'ASC');
        $this->db->limit(30, 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        $arr = array();
        return $arr;
    }

    public function getSkillsByUserId($userId)
    {
        $this->db->select('*');
        $this->db->from('skills');
        $this->db->join('user_skill', 'skills.SkillId = user_skill.SkillId');
        $this->db->where('user_skill.UserId', $userId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        $arr = array(
            'type' => "red",
            'content' => "موردی یافت نشد",
            'success' => false
        );
        return $arr;
    }

    public function doUpdateSkills($inputs)
    {
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $inputs = json_decode($inputs['inputUserSkill'], true);
        $inputs = array_unique($inputs, SORT_REGULAR);
        $this->db->trans_start();
        $this->db->delete('user_skill', array('UserId' => $userId));
        foreach ($inputs as $item) {
            $UserArray = array(
                'UserId' => $userId,
                'SkillId' => $item['id']
            );
            $this->db->insert('user_skill', $UserArray);
        }
        $this->session->set_userdata('currentUserId', $this->db->insert_id());
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج مهارت با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج مهارت با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }


    }

    public function doAddNewSkill($inputs)
    {
        $insertId = 0;
        $this->db->trans_start();
        $UserArray = array(
            'SkillName' => $inputs['inputUserNewSkill']
        );
        $this->db->insert('skills', $UserArray);
        $insertId = $this->db->insert_id();
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "درج مهارت با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "درج مهارت با موفقیت انجام شد",
                'id'=> $insertId,
                'text'=> $inputs['inputUserNewSkill'],
                'success' => true
            );
            return $arr;
        }


    }


}

?>