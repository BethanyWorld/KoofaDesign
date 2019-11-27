<?php
class ModelProduct extends CI_Model{
    /*For Product*/
    public function getProductByPagination($limit = 1){
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('ProductId', 'DESC');
        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('product');
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['count'] = $queryCount;
            return $result;
        } else {
            return false;
        }
    }
    public function getProductByProductId($productId){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('ProductId', $productId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getProductCategoryByProductId($productId){
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->join('product_category' , 'product_category_relation.CategoryId = product_category.CategoryId');
        $this->db->where('ProductId', $productId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getProductRootCategoryByProductId($productId){
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->join('product_category_relation' , "product_category.CategoryId = product_category_relation.CategoryId");
        $this->db->where('ProductId', $productId);
        $this->db->where('CategoryParentId', 1);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getProductPropertyByProductId($productId){
        $this->db->select('*');
        $this->db->from('product_property');
         $this->db->where('ProductId', $productId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getProductSecondaryByProductId($productId){
        $this->db->select('*');
        $this->db->from('media');
        $this->db->where('MediaTypeId', $productId);
        $this->db->where('MediaType', 'Product');
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getProductTagsByProductId($productId){
        $this->db->select('*');
        $this->db->from('product_tags');
        $this->db->where('TagProductId', $productId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function getProductPriceProductId($productId){
        $this->db->select('*');
        $this->db->from('product_price');
        $this->db->where('ProductId', $productId);
        return $this->db->get()->result_array();
    }
    public function getProductByFilter($inputs){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_category_relation', 'product.ProductId = product_category_relation.ProductId');
        if(isset($inputs['inputProductTitle']) && !empty($inputs['inputProductTitle'])){
            $this->db->like('ProductTitle', $inputs['inputProductTitle']);
        }
        if(isset($inputs['inputProductCategoryId']) && !empty($inputs['inputProductCategoryId'])){
            $this->db->where('CategoryId', $inputs['inputProductCategoryId']);
        }
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function doAddWishList($inputs){

        $this->db->select('*');
        $this->db->from('user_wish_list');
        $this->db->where(array(
            'ProductId' => $inputs['inputProductId'],
            'UserId' => $inputs['inputUserId']
        ));

        if($this->db->get()->num_rows() > 0){
            $arr = array(
                'type' => "red",
                'content' => "محصول قبلا به علاقه مندی ها اضافه شده است",
                'success' => false
            );
            return $arr;
        }

        $this->db->trans_start();
        $this->db->insert('user_wish_list', array(
            'ProductId' => $inputs['inputProductId'],
            'UserId' => $inputs['inputUserId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن به علاقه مندی ها ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن به علاقه مندی ها با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function getProductCountByProductCategoryId($categoryId){
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->where('CategoryId', $categoryId);
        return $this->db->get()->num_rows();
    }
    public function getProductByProductCategoryId($categoryId , $limit = null){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_category_relation' , 'product.ProductId = product_category_relation.ProductId');
        $this->db->where('CategoryId', $categoryId);
        if($limit){
            $this->db->limit($limit);
        }
        else{
            $this->db->limit(8);
        }
        return $this->db->get()->result_array();
    }
    public function getLatestProduct(){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('ProductId' , 'DESC');
        $this->db->limit(8);
        return $this->db->get()->result_array();
    }
    public function getFavoriteProduct(){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('ProductLikeCount' , 'DESC');
        $this->db->limit(8);
        return $this->db->get()->result_array();
    }
    /*End For Product*/
}

?>