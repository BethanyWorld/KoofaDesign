<?php

class ModelProductCategory extends CI_Model{
    /*For Category*/
    public function getProductCategoryByPagination($limit = 1){
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->order_by('CategoryId', 'ASC');
        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('product_category');
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['count'] = $queryCount;
            return $result;
        } else {
            return false;
        }
    }
    public function getAllProductCategory(){
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->order_by('CategoryId', 'ASC');
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getProductCategoryByCategoryId($categoryId){
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('CategoryId', $categoryId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getCategoryByCategoryId($categoryId){
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('CategoryId', $categoryId);
        return $this->db->get()->result_array();
    }
    public function getProductByCategoryId($categoryId){
        $this->db->select('*')->from('product_category');
        $this->db->join('product_category_relation', 'product_category.CategoryId = product_category_relation.CategoryId');
        $this->db->join('product', 'product.ProductId = product_category_relation.ProductId');
        $this->db->where('product_category.CategoryId', $categoryId);
        return $this->db->get()->result_array();
    }

    /*End For Category*/
    /*For Category Property*/
    public function getCategoryPropertyByCategoryId($categoryId){
        $this->db->select('*');
        $this->db->from('product_category_property');
        $this->db->where('PropertyCategoryId', $categoryId);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            return $result;
        } else {
            return false;
        }
    }
    public function getCategoryPropertyByPropertyId($propertyId){
        $this->db->select('*');
        $this->db->from('product_category_property');
        $this->db->where('PropertyId', $propertyId);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            return $query;
        } else {
            return false;
        }
    }
    public function getCategoryPropertyOptionByPropertyId($categoryPropertyId){
        $this->db->select('*');
        $this->db->from('product_category_property_options');
        $this->db->where('CategoryPropertyId', $categoryPropertyId);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) { ;
            return $query;
        } else {
            return false;
        }
    }
    protected function getCategoryTree($hasSelectedCategory = null  ,$level = 0, $prefix = '') {
        $rows = $this->db
            ->select('*')
            ->where('CategoryParentId', $level)
            ->order_by('CategoryId','asc')
            ->get('product_category')
            ->result();
        $category = '';
        if (count($rows) > 0) {
            foreach ($rows as $row) {
                if ($hasSelectedCategory) {
                    if ($hasSelectedCategory == $row->CategoryId) {
                        $category .= '<option selected value="' . $row->CategoryId . '">' . $prefix . $row->CategoryTitle . '</option>';
                    }
                    else{
                        $category .= '<option value="' . $row->CategoryId . '">' . $prefix . $row->CategoryTitle . '</option>';
                    }
                }
                else{
                    $category .= '<option value="' . $row->CategoryId . '">' . $prefix . $row->CategoryTitle . '</option>';
                }
                // Append subcategories
                $category .= $this->getCategoryTree($hasSelectedCategory , $row->CategoryId, $prefix . ' -- ');
            }
        }
        return $category;
    }
    public function printCategoryTree($hasSelectedCategory = null) {
        $cat = '<select class="form-control" id="inputProductCategoryDropDown" name="inputProductCategoryDropDown">';
        $cat .=$this->getCategoryTree($hasSelectedCategory);
        $cat .= '</select>';
        return $cat;
    }
    protected function getCategoryCheckBoxTree($hasSelectedCategory = null , $level = 0, $prefix = '') {
        $rows = $this->db
            ->select('*')
            ->where('CategoryParentId', $level)
            ->order_by('CategoryId','asc')
            ->get('product_category')
            ->result();
        $category = '';
        if (count($rows) > 0) {
            $category .= '<ul>';
            foreach ($rows as $row) {
                $isSelected = false;
                $category .= '<li>';
                if($hasSelectedCategory){
                    foreach ($hasSelectedCategory as $item) {
                        if($row->CategoryId == $item['CategoryId']){
                            $isSelected = true;
                            $category .= '<input checked="checked" type="checkbox" name="inputProductCategory" class="filled-in" id="cat-'.$row->CategoryId.'" value="'.$row->CategoryId.'" />';
                            break;
                        }
                    }
                }
                if(!$isSelected){
                    $category .= '<input type="checkbox" name="inputProductCategory" class="filled-in" id="cat-'.$row->CategoryId.'" value="'.$row->CategoryId.'" />';
                }
                $category .= '<label for="cat-'.$row->CategoryId.'">';
                $category .= $prefix.$row->CategoryTitle;
                $category .= '</label>';
                $category .= '</li>';
                $category .= $this->getCategoryCheckBoxTree($hasSelectedCategory , $row->CategoryId, $prefix . ' -- ');
            }
            $category .= '</ul>';
        }
        return $category;
    }
    public function printCategoryCheckBoxTree($hasSelectedCategory = null) {
        return $this->getCategoryCheckBoxTree($hasSelectedCategory);
    }
    public function getProductPropertyByCategoryId($categoryId){
        $this->db->select('*')->from('product_category');
        $this->db->join('product_category_property', 'product_category.CategoryId = product_category_property.PropertyCategoryId');
        $this->db->where('product_category.CategoryId', $categoryId);
        return $this->db->get()->result_array();
    }
    public function getProductPropertyOptionByPropertyId($propertyId){
        $this->db->select('*')->from('product_category_property_options');
        $this->db->where('CategoryPropertyId', $propertyId);
        return $this->db->get()->result_array();
    }
    public function getFavoriteProductCategory(){
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('CategoryIsFavorite', 1);
        return $this->db->get()->result_array();
    }
    public function getChildProductCategory($catId){
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('CategoryParentId', $catId);
        return $this->db->get()->result_array();
    }
    public function getLastProductCategory($catId){
        $this->db->select('*')->from('product_category_relation');
        $this->db->join('product', 'product.ProductId = product_category_relation.ProductId');
        $this->db->where('product_category_relation.CategoryId', $catId);
        $this->db->order_by('product.ProductId', 'RANDOM');
        $this->db->limit(1);
        return $this->db->get()->result_array();

    }
    /*End For Category Property*/

}
?>