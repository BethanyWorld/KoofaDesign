<?php
class ModelDiscount extends CI_Model{

    public function getDiscountByPagination($limit = 1){
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('discount');
        $this->db->order_by('DiscountId', 'DESC');
        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('discount');
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['count'] = $queryCount;
            return $result;
        } else {
            return false;
        }
    }
    public function getDiscountByDiscountCode($discountCode){
        $this->db->select('*');
        $this->db->from('discount');
        $this->db->where('DiscountCode', $discountCode);
        return $this->db->get()->result_array();
    }
    public function getDiscountCategoryByProductCode($discountCode){
        $this->db->select('DiscountCategoryId');
        $this->db->from('discount');
        $this->db->where('DiscountCode', $discountCode);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function doAddDiscountCode($inputs)
    {
        $Array = array(
            'DiscountCode' => $inputs['inputDiscountCode'],
            'DiscountType' => $inputs['inputDiscountType'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        if(isset($inputs['inputDiscountUserId'])){
            $Array['DiscountUserId'] = $inputs['inputDiscountUserId'];
        }
        if(isset($inputs['inputDiscountStartTime'])){
            $Array['DiscountStartTime'] = $inputs['inputDiscountStartTime'];
        }
        if(isset($inputs['inputDiscountEndTime'])){
            $Array['DiscountEndTime'] = $inputs['inputDiscountEndTime'];
        }
        if(isset($inputs['inputDiscountPercent'])){
           $Array['DiscountPercent'] = $inputs['inputDiscountPercent'];
        }
        if(isset($inputs['inputDiscountPrice'])){
            $Array['DiscountPrice'] = $inputs['inputDiscountPrice'];
        }
        if(isset($inputs['inputDiscountProductId'])){
            $Array['DiscountProductId'] = $inputs['inputDiscountProductId'];
        }
        $this->db->trans_start();
        if(isset($inputs['inputDiscountCategory']) && count($inputs['inputDiscountCategory']) > 0){
            foreach ($inputs['inputDiscountCategory'] as $input) {
                $Array['DiscountCategoryId'] = $input;
                $this->db->insert('discount', $Array);
            }
        }
        else{
            $this->db->insert('discount', $Array);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن کد تخفیف ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن کد تخفیف با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditDiscountCode($inputs)
    {
        $Array = array(
            'DiscountCode' => $inputs['inputDiscountCode'],
            'DiscountType' => $inputs['inputDiscountType'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        if(isset($inputs['inputDiscountUserId'])){
            $Array['DiscountUserId'] = $inputs['inputDiscountUserId'];
        }
        if(isset($inputs['inputDiscountStartTime'])){
            $Array['DiscountStartTime'] = $inputs['inputDiscountStartTime'];
        }
        if(isset($inputs['inputDiscountEndTime'])){
            $Array['DiscountEndTime'] = $inputs['inputDiscountEndTime'];
        }
        if(isset($inputs['inputDiscountPercent'])){
            $Array['DiscountPercent'] = $inputs['inputDiscountPercent'];
        }
        if(isset($inputs['inputDiscountPrice'])){
            $Array['DiscountPrice'] = $inputs['inputDiscountPrice'];
        }
        if(isset($inputs['inputDiscountProductId'])){
            $Array['DiscountProductId'] = $inputs['inputDiscountProductId'];
        }
        $this->db->trans_start();
        $this->db->delete('discount', array(
            'DiscountCode' => $inputs['inputDiscountCode']
        ));
        if(isset($inputs['inputDiscountCategory']) && count($inputs['inputDiscountCategory']) > 0){
            foreach ($inputs['inputDiscountCategory'] as $input) {
                $Array['DiscountCategoryId'] = $input;
                $this->db->insert('discount', $Array);
            }
        }
        else{
            $this->db->insert('discount', $Array);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش کد تخفیف ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش کد تخفیف با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteDiscountCode($inputs){
        $this->db->trans_start();
        $this->db->delete('discount', array(
            'DiscountCode' => $inputs['inputDiscountCode']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف کد تخفیف ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف کد تخفیف با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

}
?>