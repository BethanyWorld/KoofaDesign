<?php

class ModelBrand extends CI_Model
{
    /*For Brand*/
    public function getBrandByPagination($limit = 1){
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->order_by('BrandId', 'ASC');
        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('brand');
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['count'] = $queryCount;
            return $result;
        } else {
            return false;
        }
    }

    public function getBrandByBrandId($brandId){
        $this->db->select('*');
        $this->db->from('brand');
        $this->db->where('BrandId', $brandId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getBrandCategoriesByBrandId($brandId){
        $this->db->select('*');
        $this->db->from('brand_category_relation');
        $this->db->where('BrandId', $brandId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function doAddBrand($inputs)
    {
        $Array = array(
            'BrandTitle' => $inputs['inputBrandTitle'],
            'BrandLogo' => $inputs['inputBrandLogo'],
            'BrandDescription' => $inputs['inputBrandDescription'],
            'CreateDateTime' => time(),
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->insert('brand', $Array);
        $insertId = $this->db->insert_id();
        foreach ($inputs['inputBrandCategory'] as $input) {
            $Array = array(
                'BrandId' => $insertId,
                'CategoryId' => $input
            );
            $this->db->insert('brand_category_relation', $Array);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن برند ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن برند با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doUpdateBrand($inputs)
    {
        $Array = array(
            'BrandTitle' => $inputs['inputBrandTitle'],
            'BrandLogo' => $inputs['inputBrandLogo'],
            'BrandDescription' => $inputs['inputBrandDescription'],
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->where('BrandId', $inputs['inputBrandId']);
        $this->db->update('brand', $Array);

        $this->db->delete('brand_category_relation', array(
            'BrandId' => $inputs['inputBrandId']
        ));
        foreach ($inputs['inputBrandCategory'] as $input) {
            $Array = array(
                'BrandId' => $inputs['inputBrandId'],
                'CategoryId' => $input
            );
            $this->db->insert('brand_category_relation', $Array);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی برند ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی برند با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteBrand($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('brand', array(
            'BrandId' => $inputs['inputBrandId']
        ));
        $this->db->delete('brand_category_relation', array(
            'BrandId' => $inputs['inputBrandId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف  برند ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف برند با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    /*End For Brand*/

}

?>