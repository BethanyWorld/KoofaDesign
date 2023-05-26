<?php

class ModelMaterial extends CI_Model
{
    public function getAllMaterials($inputs)
    {
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product_material');
        if (isset($inputs['inputMaterialTitle']) && !empty($inputs['inputMaterialTitle'])) {
            $this->db->or_where('MaterialTitle', $inputs['inputMaterialTitle']);
        }
        $this->db->order_by('MaterialId', 'ASC');

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

    public function getAllMaterialsWithoutPagination()
    {
        $this->db->select('*');
        $this->db->from('product_material');
        $this->db->order_by('MaterialId', 'ASC');
        return $this->db->get()->result_array();
    }

    public function getMaterialByMaterialId($id)
    {
        $this->db->select('*');
        $this->db->from('product_material');
        $this->db->where('MaterialId', $id);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function doAddMaterial($inputs)
    {
        $Array = array(
            'MaterialTitle' => $inputs['inputMaterialTitle']
        );
        $this->db->trans_start();
        $this->db->insert('product_material', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن جنس محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن جنس محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doEditMaterial($inputs)
    {
        $Array = array(
            'MaterialTitle' => $inputs['inputMaterialTitle']
        );
        $this->db->trans_start();
        $this->db->where('MaterialId', $inputs['inputMaterialId']);
        $this->db->update('product_material', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی جنس محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی جنس محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doDeleteMaterial($inputs)
    {
        $query = $this->db->get_where('product_price', array('MaterialId' => $inputs['inputMaterialId']))->num_rows();
        if ($query > 0) {
            $arr = array(
                'type' => "red",
                'content' => " این جنس در قیمت دهی " . $query . " محصول دیگر مورد استفاده قرار گرفته است. ",
                'success' => true
            );
            return $arr;
        } else {
            $this->db->delete('product_material', array(
                'MaterialId' => $inputs['inputMaterialId']
            ));
            $arr = array(
                'type' => "green",
                'content' => "حذف جنس محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
        /*End For Brand*/
    }
}

?>