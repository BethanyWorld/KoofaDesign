<?php
class ModelSizes extends CI_Model{
    public function getAllSizes($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product_size');
        if(isset($inputs['inputSizeTitle']) && !empty($inputs['inputSizeTitle'])){
            $this->db->or_where('SizeTitle', $inputs['inputSizeTitle']);
        }
        $this->db->order_by('SizeId', 'ASC');

        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = false;
        }
        return $result;
    }
    public function getAllSizesWithoutPagination(){
        $this->db->select('*');
        $this->db->from('product_size');
        $this->db->order_by('SizeId', 'ASC');
        return $this->db->get()->result_array();
    }
    public function getSizeBySizeId($id){
        $this->db->select('*');
        $this->db->from('product_size');
        $this->db->where('SizeId', $id);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function doAddSize($inputs)
    {
        $Array = array(
            'SizeTitle' => $inputs['inputSizeTitle'],
            'SizeWidth' => $inputs['inputSizeWidth'],
            'SizeHeight' => $inputs['inputSizeHeight'],
            'SizeErtefa' => $inputs['inputSizeErtefa'],
            'SizeWeight' => $inputs['inputSizeWeight']
        );
        $this->db->trans_start();
        $this->db->insert('product_size', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن سایز ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن سایز با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditSize($inputs)
    {
        $Array = array(
            'SizeTitle' => $inputs['inputSizeTitle'],
            'SizeWidth' => $inputs['inputSizeWidth'],
            'SizeHeight' => $inputs['inputSizeHeight'],
            'SizeErtefa' => $inputs['inputSizeErtefa'],
            'SizeWeight' => $inputs['inputSizeWeight']
        );
        $this->db->trans_start();
        $this->db->where('SizeId', $inputs['inputSizeId']);
        $this->db->update('product_size', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی سایز ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی سایز با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteSize($inputs)
    {
        $this->db->delete('product_size', array(
            'SizeId' => $inputs['inputSizeId']
        ));
        $arr = array(
            'type' => "green",
            'content' => "حذف سایز با موفقیت انجام شد",
            'success' => true
        );
        return $arr;
        /*End For Brand*/
    }
}

?>