<?php
class ModelProduct extends CI_Model{
    /*For Product*/
    public function getProductByPagination($limit = 1)
    {
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('ProductId', 'DESC');
        $this->db->limit($end, $start);
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

    public function getProductByProductId($productId)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('ProductId', $productId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function getProductCategoryByProductId($productId)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->join('product_category', 'product_category_relation.CategoryId = product_category.CategoryId');
        $this->db->where('ProductId', $productId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function getProductRootCategoryByProductId($productId)
    {
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->join('product_category_relation', "product_category.CategoryId = product_category_relation.CategoryId");
        $this->db->where('ProductId', $productId);
        $this->db->where('CategoryParentId', 1);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function getProductPropertyByProductId($productId)
    {
        $this->db->select('*');
        $this->db->from('product_property');
        $this->db->where('ProductId', $productId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function getProductSecondaryByProductId($productId)
    {
        $this->db->select('*');
        $this->db->from('media');
        $this->db->where('MediaTypeId', $productId);
        $this->db->where('MediaType', 'Product');
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function getProductTagsByProductId($productId)
    {
        $this->db->select('*');
        $this->db->from('product_tags');
        $this->db->where('TagProductId', $productId);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function getProductCommentByProductId($productId)
    {
        $this->db->select('*');
        $this->db->from('product_comment');
        $this->db->where('CommentProductId', $productId);
        $this->db->where('CommentStatus', 'Accept');
        return $this->db->get()->result_array();
    }
    public function getProductPriceProductId($productId)
    {
        $this->db->select('*');
        $this->db->from('product_price');
        $this->db->where('ProductId', $productId);
        return $this->db->get()->result_array();
    }

    public function getProductByFilter($inputs)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_category_relation', 'product.ProductId = product_category_relation.ProductId');
        if (isset($inputs['inputProductTitle']) && !empty($inputs['inputProductTitle'])) {
            $this->db->like('ProductTitle', $inputs['inputProductTitle']);
        }
        if (isset($inputs['inputProductCategoryId']) && !empty($inputs['inputProductCategoryId'])) {
            $this->db->where('CategoryId', $inputs['inputProductCategoryId']);
        }
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }

    public function doAddWishList($inputs)
    {

        $this->db->select('*');
        $this->db->from('user_wish_list');
        $this->db->where(array(
            'ProductId' => $inputs['inputProductId'],
            'UserId' => $inputs['inputUserId']
        ));

        if ($this->db->get()->num_rows() > 0) {
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
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن به علاقه مندی ها با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doSubmitComment($inputs){
        $this->db->trans_start();
        $this->db->insert('product_comment', array(
            'CommentProductId' => $inputs['inputProductId'],
            'CommentContent' => $inputs['inputComment'],
            'CommentUserId' => $inputs['inputUserId'],
            'CommentUserFullName' => $inputs['inputFullName'],
            'CommentEmail' => $inputs['inputEmail'],
            'CommentRate' => $inputs['inputRate'],
            'CreateDateTime' => time()
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ثبت نظر با مشکل مواجه شد",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ثبت نظر با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function getProductCountByProductCategoryId($categoryId)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->where('CategoryId', $categoryId);
        return $this->db->get()->num_rows();
    }

    public function getProductByProductCategoryId($categoryId, $limit = null)
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_category_relation', 'product.ProductId = product_category_relation.ProductId');
        $this->db->where('CategoryId', $categoryId);
	    $this->db->order_by('product.ProductId', 'DESC');
        if ($limit) {
            $this->db->limit($limit);
        } else {
            $this->db->limit(8);
        }
        $query = $this->db->get()->result_array();
        for ($i = 0; $i < sizeof($query); $i++) {
            $query[$i]['price'] = $this->getProductPriceProductId($query[$i]['ProductId']);
        }
        return $query;
    }

    public function getLatestProduct() {
	    $this->db->select('CategoryId');
	    $this->db->from('product_category');
	    $this->db->where('CategoryParentId', 1);
	    $this->db->where('CategoryIsActive', 1);
	    $query = $this->db->get()->result_array();
	    $categories = $query;
	    $catArray  = array();
	    foreach ($categories  as $item ) {
		    array_push($catArray , $item['CategoryId'] );
	    }

        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_category_relation' , 'product_category_relation.ProductId = product.ProductId');
        $this->db->join('product_category' , 'product_category.CategoryId = product_category_relation.CategoryId');
        $this->db->where_in('product_category_relation.CategoryId' , $catArray);
	    $this->db->order_by('product.ProductId', 'RANDOM');
        $this->db->limit(25);
        $query = $this->db->get()->result_array();
        /*for ($i = 0; $i < sizeof($query); $i++) {
            $query[$i]['price'] = $this->getProductPriceProductId($query[$i]['ProductId']);
        }*/
        return $query;
    }

    public function getFavoriteProduct()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->order_by('ProductLikeCount', 'DESC');
        $this->db->limit(8);
        $query = $this->db->get()->result_array();
        for ($i = 0; $i < sizeof($query); $i++) {
            $query[$i]['price'] = $this->getProductPriceProductId($query[$i]['ProductId']);
        }
        return $query;
    }

    public function getSpecialProduct()
    {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('ProductIsSpecial', 1);
        $query = $this->db->get()->result_array();
        for ($i = 0; $i < sizeof($query); $i++) {
            $query[$i]['price'] = $this->getProductPriceProductId($query[$i]['ProductId']);
        }
        return $query;
    }



    /*End For Product*/
    public function searchProduct($inputs){
        /*$limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('product.ProductId,ProductTitle,ProductPrimaryImage,ProductMockUpImage,ProductType,ProductIsSpecial');
        $this->db->from('product');
        $this->db->join('product_category_relation', 'product.ProductId = product_category_relation.ProductId');
        $this->db->join('product_price', 'product_price.ProductId = product.ProductId' , 'left');
        $this->db->join('product_property', 'product.ProductId = product_property.ProductId' , 'left');
        $this->db->where('product_category_relation.CategoryId', $inputs['inputCategoryId']);
        if(isset($inputs['inputPropertyOptions'])){
            $this->db->where_in('product_property.PropertyOptionId', $inputs['inputPropertyOptions']);
        }
        $this->db->group_by("product.ProductId");
	    $this->db->order_by('product_price.ProductId' , 'DESC');

        if(isset($inputs['inputOrderingProductPrice'])){
            if($inputs['inputOrderingProductPrice'] == 'ASC'){
                $this->db->order_by('product_price.ProductId' , 'ASC');
            }
            else{
                $this->db->order_by('product_price.PriceValue' , 'DESC');
            }
        }
        else{
          $this->db->order_by('product_price.ProductId' , 'DESC');
        }
        $tempDb = clone $this->db;
        $data['numRows'] = $tempDb->get()->num_rows();
        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();

        for ($i = 0; $i < sizeof($query); $i++) {
            $query[$i]['price'] = $this->getProductPriceProductId($query[$i]['ProductId']);
        }
        if (count($query) > 0) {
            $data['data'] = $query;
            return $data;
        } else {
            $data['data'] = false;
            return $data;
        }*/

        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('product.ProductId,ProductTitle,ProductPrimaryImage,ProductMockUpImage,ProductType,ProductIsSpecial');
        $this->db->from('product');
        $this->db->join('product_category_relation', 'product.ProductId = product_category_relation.ProductId');
        $this->db->join('product_price', 'product_price.ProductId = product.ProductId' , 'left');
        $this->db->join('product_property', 'product.ProductId = product_property.ProductId' , 'left');
        $this->db->where('product_category_relation.CategoryId', $inputs['inputCategoryId']);
        if(!empty($inputs['inputPropertyOptions'])){
            /*foreach ($inputs['inputPropertyOptions'] as $option) {
                $this->db->or_where('product_property.PropertyOptionId', $option);
            }*/
            $this->db->where_in('product_property.PropertyOptionId', $inputs['inputPropertyOptions']);

            // If exact filters
            $this->db->having(' COUNT(DISTINCT product_property.PropertyOptionId) = ' . sizeof($inputs['inputPropertyOptions']));

            //if one of the filter is required
            //$this->db->having(' COUNT(DISTINCT product_property.PropertyOptionId) > 0');
        }
        $this->db->group_by("product.ProductId");


	    switch($inputs['inputOrdering']){
            case 'Newest':
            case 'Sale':
                $this->db->order_by('product.ProductId' , 'DESC');
                break;
            case 'View':
                $this->db->order_by('product.ProductViewCount' , 'DESC');
                break;
            case 'ASC':
                $this->db->order_by('product_price.PriceValue' , 'ASC');
                break;
            case 'DESC':
                $this->db->order_by('product_price.PriceValue' , 'DESC');
                break;
        }
        $tempDb = clone $this->db;
        $data['numRows'] = $tempDb->get()->num_rows();
        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();


        for ($i = 0; $i < sizeof($query); $i++) {
            $query[$i]['price'] = $this->getProductPriceProductId($query[$i]['ProductId']);
        }
        if (count($query) > 0) {
            $data['data'] = $query;
            return $data;
        } else {
            $data['data'] = false;
            return $data;
        }








    }
    public function autoSuggestProduct($inputs)
    {
        $this->db->select('product.ProductId , product.ProductTitle , product.ProductPrimaryImage , product_category.CategoryTitle ,product_category.CategoryId');
        $this->db->from('product');
        $this->db->join('product_category_relation', 'product.ProductId = product_category_relation.ProductId');
        $this->db->join('product_category', 'product_category_relation.CategoryId = product_category.CategoryId');
        $this->db->like('product.ProductTitle', $inputs['inputSearch']);
        $this->db->limit(60);
        $result = $this->db->get()->result_array();
        $result = array_map("unserialize", array_unique(array_map("serialize", $result)));
        $result = array_reverse($result);

        $seenItems = array();
        $originalArray = array();

        foreach ($result as $index => $item) {
            if (in_array($item["ProductId"], $seenItems)) {
                unset($result[$index]);
            } else {
                $seenItems[] = $item["ProductId"];
                $originalArray[] = $item;
            }
        }
        return $originalArray;

    }
    protected function isSetValue($value)
    {
        if (isset($value) && $value != "" && !empty($value)) {
            return true;
        }
        return false;
    }
}
?>