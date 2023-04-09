<?php
class ModelProduct extends CI_Model{
    /*For Product*/
    public function getProductByPagination($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_category_relation' , 'product.ProductId = product_category_relation.ProductId');
        if($inputs['inputProductTitle'] != ''){
            $this->db->like('ProductTitle',$inputs['inputProductTitle']);
            $this->db->or_like('ProductSubTitle',$inputs['inputProductTitle']);
        }
        if($inputs['inputProductType'] != ''){
            if($inputs['inputProductType'] == 'ProductSpecial'){
                $this->db->where('ProductIsSpecial',1);
            }
            else{
                $this->db->where('ProductType',$inputs['inputProductType']);
            }
        }
        if($inputs['inputProductCategoryId'] != ''){
            $this->db->where('CategoryId',$inputs['inputProductCategoryId']);
        }
        $this->db->order_by('product.ProductId', 'DESC');
        $this->db->group_by('product.ProductId');
        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();
        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
            return $result;
        } else {
            return false;
        }
    }
    public function getSpecialProductByPagination($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product');
        $this->db->join('product_special_sale' , 'product.ProductId = product_special_sale.ProductId');
        if($inputs['inputProductTitle'] != ''){
            $this->db->like('ProductTitle',$inputs['inputProductTitle']);
        }
        $this->db->order_by('product.ProductId', 'DESC');
        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();
        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
            return $result;
        } else {
            $result['data'] = array();
            $result['startPage'] = 0;
            return $result;
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
        $this->db->join('product_category_property', 'product_property.PropertyId = product_category_property.PropertyId');
        $this->db->join('product_category_property_options', 'product_category_property.PropertyId = product_category_property_options.CategoryPropertyId');
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
    public function doAddNormalProduct($inputs)
    {
        $ProductIsSpecial = 0;
        $inputProductSpecialVirtualMaxPrice = 0;
        $ProductSpecialEndDate = NULL;
        if($inputs['inputProductIsSpecial'] == 'true'){
            $ProductIsSpecial = 1;
            $inputProductSpecialVirtualMaxPrice = $inputs['inputProductSpecialVirtualMaxPrice'];
        }
        $Array = array(
            'ProductTitle' => $inputs['inputProductTitle'],
            'ProductSubTitle' => $inputs['inputProductSubTitle'],
            'ProductQuantity' => $inputs['inputProductQuantity'],
            'ProductCatalogUrl' => $inputs['inputProductCatalogUrl'],
            'ProductType' => $inputs['inputProductType'],
            'ProductBrief' => $inputs['inputProductBrief'],
            'ProductDescription' => $inputs['inputProductDescription'],
            'ProductIsSpecial' => $ProductIsSpecial,
            'ProductSpecialVirtualMaxPrice' => $inputProductSpecialVirtualMaxPrice,
            'ProductPrimaryImage' => $inputs['inputProductPrimaryImage'],
            'ProductMockUpImage' => $inputs['inputProductMockUpImage'],
            'CreateDateTime' => time(),
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->insert('product', $Array);
        $insertId = $this->db->insert_id();

        $Array = array(
            'PriceValue' => $inputs['inputProductPrice'],
            'ProductId' => $insertId,
        );
        $this->db->insert('product_price', $Array);


        if(isset($inputs['inputProductSecondaryImage'])) {
            foreach ($inputs['inputProductSecondaryImage'] as $input) {
                $Array = array(
                    'MediaType' => 'Product',
                    'MediaTypeId' => $insertId,
                    'MediaExtension' => 'jpg',
                    'MediaUrl' => $input
                );
                $this->db->insert('media', $Array);
            }
        }
        if(isset($inputs['inputProductTag'])) {
            foreach ($inputs['inputProductTag'] as $input) {
                $Array = array(
                    'TagTitle' => $input,
                    'TagProductId' => $insertId,
                );
                $this->db->insert('product_tags', $Array);
            }
        }

        foreach ($inputs['inputProductCategory'] as $input) {
            $Array = array(
                'ProductId' => $insertId,
                'CategoryId' => $input
            );
            $this->db->insert('product_category_relation', $Array);
        }

        if(isset($inputs['inputProductCategoryProperty'])) {
            foreach ($inputs['inputProductCategoryProperty'] as $input) {
                $Array = array(
                    'PropertyId' => $input['propertyId'],
                    'PropertyOptionId' => $input['propertyOptionId'],
                    'ProductId' => $insertId,
                );
                $this->db->insert('product_property', $Array);
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن محصول با موفقیت انجام شد.جهت درج محصول جدید اطلاعات همین صفحه را ویرایش کرده و  ذخیره کنید",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditNormalProduct($inputs){

        $ProductIsSpecial = 0;
        $ProductSpecialEndDate = NULL;
        $inputProductSpecialVirtualMaxPrice = 0;
        if($inputs['inputProductIsSpecial'] == 'true'){
            $ProductIsSpecial = 1;
            $inputProductSpecialVirtualMaxPrice = $inputs['inputProductSpecialVirtualMaxPrice'];
        }
        $Array = array(
            'ProductTitle' => $inputs['inputProductTitle'],
            'ProductSubTitle' => $inputs['inputProductSubTitle'],
            'ProductQuantity' => $inputs['inputProductQuantity'],
            'ProductCatalogUrl' => $inputs['inputProductCatalogUrl'],
            'ProductType' => $inputs['inputProductType'],
            'ProductBrief' => $inputs['inputProductBrief'],
            'ProductDescription' => $inputs['inputProductDescription'],
            'ProductIsSpecial' => $ProductIsSpecial,
            'ProductSpecialVirtualMaxPrice' => $inputProductSpecialVirtualMaxPrice,
            'ProductPrimaryImage' => $inputs['inputProductPrimaryImage'],
            'ProductMockUpImage' => $inputs['inputProductMockUpImage'],
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->where('ProductId', $inputs['inputProductId']);
        $this->db->update('product', $Array);


        $this->db->delete('product_price', array(
            'ProductId' => $inputs['inputProductId']
        ));
        $Array = array(
            'PriceValue' => $inputs['inputProductPrice'],
            'ProductId' => $inputs['inputProductId'],
        );
        $this->db->insert('product_price', $Array);


        $this->db->delete('media', array(
            'MediaType' => 'Product',
            'MediaTypeId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductSecondaryImage'])) {
            foreach ($inputs['inputProductSecondaryImage'] as $input) {
                $Array = array(
                    'MediaType' => 'Product',
                    'MediaTypeId' => $inputs['inputProductId'],
                    'MediaExtension' => 'jpg',
                    'MediaUrl' => $input
                );
                $this->db->insert('media', $Array);
            }
        }

        $this->db->delete('product_tags', array(
            'TagProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductTag'])) {
            foreach ($inputs['inputProductTag'] as $input) {
                $Array = array(
                    'TagTitle' => $input,
                    'TagProductId' => $inputs['inputProductId'],
                );
                $this->db->insert('product_tags', $Array);
            }
        }

        $this->db->delete('product_category_relation', array(
            'ProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductCategory'])) {
            foreach ($inputs['inputProductCategory'] as $input) {
                $Array = array(
                    'ProductId' => $inputs['inputProductId'],
                    'CategoryId' => $input
                );
                $this->db->insert('product_category_relation', $Array);
            }
        }

        $this->db->delete('product_property', array(
            'ProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductCategoryProperty'])) {
            foreach ($inputs['inputProductCategoryProperty'] as $input) {
                $Array = array(
                    'PropertyId' => $input['propertyId'],
                    'PropertyOptionId' => $input['propertyOptionId'],
                    'ProductId' => $inputs['inputProductId']
                );
                $this->db->insert('product_property', $Array);
            }
        }

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doAddDesignFixSizeProduct($inputs){

        $installation = false;
        $installationPrice = 0;
        if($inputs['inputProductHasInstallation'] == 'true'){
            $installation = true;
            $installationPrice = $inputs['inputProductInstallationPrice'];
        }
        $Array = array(
            'ProductTitle' => $inputs['inputProductTitle'],
            'ProductSubTitle' => $inputs['inputProductSubTitle'],
            'ProductCatalogUrl' => $inputs['inputProductCatalogUrl'],
            'ProductType' => $inputs['inputProductType'],
            'ProductBrief' => $inputs['inputProductBrief'],
            'ProductDescription' => $inputs['inputProductDescription'],
            'ProductHasInstallation' => $installation,
            'ProductInstallationPrice' => $installationPrice,
            'ProductPrimaryImage' => $inputs['inputProductPrimaryImage'],
            'ProductMockUpImage' => $inputs['inputProductMockUpImage'],
            'ProductMaxHeight' => $inputs['inputProductMaxHeight'],
            'ProductMaxWidth' => $inputs['inputProductMaxWidth'],
            'ProductShape' => $inputs['inputProductShape'],
            'CreateDateTime' => time(),
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->insert('product', $Array);
        $insertId = $this->db->insert_id();

        for($i=1;$i<count($inputs['inputProductMaterial']);$i++){
            $Array = array(
                'MaterialId' => $inputs['inputProductMaterial'][$i],
                'SizeId' => $inputs['inputProductSize'][$i],
                'PriceValue' => $inputs['inputProductPrice'][$i],
                'ProductId' => $insertId
            );
            $this->db->insert('product_price', $Array);
        }
        if(isset($inputs['inputProductSecondaryImage'])) {
            foreach ($inputs['inputProductSecondaryImage'] as $input) {
                $Array = array(
                    'MediaType' => 'Product',
                    'MediaTypeId' => $insertId,
                    'MediaExtension' => 'jpg',
                    'MediaUrl' => $input
                );
                $this->db->insert('media', $Array);
            }
        }
        if(isset($inputs['inputProductTag'])) {
            foreach ($inputs['inputProductTag'] as $input) {
                $Array = array(
                    'TagTitle' => $input,
                    'TagProductId' => $insertId,
                );
                $this->db->insert('product_tags', $Array);
            }
        }
        foreach ($inputs['inputProductCategory'] as $input) {
            $Array = array(
                'ProductId' => $insertId,
                'CategoryId' => $input
            );
            $this->db->insert('product_category_relation', $Array);
        }
        if(isset($inputs['inputProductCategoryProperty'])) {
            foreach ($inputs['inputProductCategoryProperty'] as $input) {
                $Array = array(
                    'PropertyId' => $input['propertyId'],
                    'PropertyOptionId' => $input['propertyOptionId'],
                    'ProductId' => $insertId,
                );
                $this->db->insert('product_property', $Array);
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن محصول با موفقیت انجام شد.جهت درج محصول جدید اطلاعات همین صفحه را ویرایش کرده و  ذخیره کنید",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditDesignFixSizeProduct($inputs)
    {

        $installation = 0;
        $installationPrice = 0;
        if($inputs['inputProductHasInstallation'] == 'true'){
            $installation = 1;
            $installationPrice = $inputs['inputProductInstallationPrice'];
        }
        $Array = array(
            'ProductTitle' => $inputs['inputProductTitle'],
            'ProductSubTitle' => $inputs['inputProductSubTitle'],
            'ProductCatalogUrl' => $inputs['inputProductCatalogUrl'],
            'ProductType' => $inputs['inputProductType'],
            'ProductBrief' => $inputs['inputProductBrief'],
            'ProductDescription' => $inputs['inputProductDescription'],
            'ProductHasInstallation' => $installation,
            'ProductInstallationPrice' => $installationPrice,
            'ProductPrimaryImage' => $inputs['inputProductPrimaryImage'],
            'ProductMockUpImage' => $inputs['inputProductMockUpImage'],
            'ProductMaxHeight' => $inputs['inputProductMaxHeight'],
            'ProductMaxWidth' => $inputs['inputProductMaxWidth'],
            'ProductShape' => $inputs['inputProductShape'],
            'CreateDateTime' => time(),
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->where('ProductId', $inputs['inputProductId']);
        $this->db->update('product', $Array);


        $this->db->delete('product_price', array(
            'ProductId' => $inputs['inputProductId']
        ));

        for($i=1;$i<count($inputs['inputProductMaterial']);$i++){
            $Array = array(
                'MaterialId' => $inputs['inputProductMaterial'][$i],
                'SizeId' => $inputs['inputProductSize'][$i],
                'PriceValue' => $inputs['inputProductPrice'][$i],
                'ProductId' => $inputs['inputProductId']
            );
            $this->db->insert('product_price', $Array);
        }


        $this->db->delete('media', array(
            'MediaType' => 'Product',
            'MediaTypeId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductSecondaryImage'])) {
            foreach ($inputs['inputProductSecondaryImage'] as $input) {
                $Array = array(
                    'MediaType' => 'Product',
                    'MediaTypeId' => $inputs['inputProductId'],
                    'MediaExtension' => 'jpg',
                    'MediaUrl' => $input
                );
                $this->db->insert('media', $Array);
            }
        }

        $this->db->delete('product_tags', array(
            'TagProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductTag'])) {
            foreach ($inputs['inputProductTag'] as $input) {
                $Array = array(
                    'TagTitle' => $input,
                    'TagProductId' => $inputs['inputProductId'],
                );
                $this->db->insert('product_tags', $Array);
            }
        }

        $this->db->delete('product_category_relation', array(
            'ProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductCategory'])) {
            foreach ($inputs['inputProductCategory'] as $input) {
                $Array = array(
                    'ProductId' => $inputs['inputProductId'],
                    'CategoryId' => $input
                );
                $this->db->insert('product_category_relation', $Array);
            }
        }

        $this->db->delete('product_property', array(
            'ProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductCategoryProperty'])) {
            foreach ($inputs['inputProductCategoryProperty'] as $input) {
                $Array = array(
                    'PropertyId' => $input['propertyId'],
                    'PropertyOptionId' => $input['propertyOptionId'],
                    'ProductId' => $inputs['inputProductId']
                );
                $this->db->insert('product_property', $Array);
            }
        }

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doAddDesignFreeSizeProduct($inputs){

        $installation = false;
        $installationPrice = 0;
        if($inputs['inputProductHasInstallation'] == 'true'){
            $installation = true;
            $installationPrice = $inputs['inputProductInstallationPrice'];
        }
        $Array = array(
            'ProductTitle' => $inputs['inputProductTitle'],
            'ProductSubTitle' => $inputs['inputProductSubTitle'],
            'ProductCatalogUrl' => $inputs['inputProductCatalogUrl'],
            'ProductType' => $inputs['inputProductType'],
            'ProductBrief' => $inputs['inputProductBrief'],
            'ProductDescription' => $inputs['inputProductDescription'],
            'ProductMaxHeight' => $inputs['inputProductMaxHeight'],
            'ProductMaxWidth' => $inputs['inputProductMaxWidth'],
            'ProductHasInstallation' => $installation,
            'ProductInstallationPrice' => $installationPrice,
            'ProductIsFullWidth' => $inputs['inputProductIsFullWidth'],
            'ProductIsFullHeight' => $inputs['inputProductIsFullHeight'],
            'ProductPrimaryImage' => $inputs['inputProductPrimaryImage'],
            'ProductMockUpImage' => $inputs['inputProductMockUpImage'],
            'CreateDateTime' => time(),
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->insert('product', $Array);
        $insertId = $this->db->insert_id();

        for($i=1;$i<count($inputs['inputProductMaterial']);$i++){
            $Array = array(
                'MaterialId' => $inputs['inputProductMaterial'][$i],
                'PriceValue' => $inputs['inputProductPrice'][$i],
                'ProductId' => $insertId
            );
            $this->db->insert('product_price', $Array);
        }


        if(isset($inputs['inputProductSecondaryImage'])) {
            foreach ($inputs['inputProductSecondaryImage'] as $input) {
                $Array = array(
                    'MediaType' => 'Product',
                    'MediaTypeId' => $insertId,
                    'MediaExtension' => 'jpg',
                    'MediaUrl' => $input
                );
                $this->db->insert('media', $Array);
            }
        }
        if(isset($inputs['inputProductTag'])) {
            foreach ($inputs['inputProductTag'] as $input) {
                $Array = array(
                    'TagTitle' => $input,
                    'TagProductId' => $insertId,
                );
                $this->db->insert('product_tags', $Array);
            }
        }
        foreach ($inputs['inputProductCategory'] as $input) {
            $Array = array(
                'ProductId' => $insertId,
                'CategoryId' => $input
            );
            $this->db->insert('product_category_relation', $Array);
        }


        if(isset($inputs['inputProductCategoryProperty'])) {
            foreach ($inputs['inputProductCategoryProperty'] as $input) {
                $Array = array(
                    'PropertyId' => $input['propertyId'],
                    'PropertyOptionId' => $input['propertyOptionId'],
                    'ProductId' => $insertId,
                );
                $this->db->insert('product_property', $Array);
            }
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن محصول با موفقیت انجام شد.جهت درج محصول جدید اطلاعات همین صفحه را ویرایش کرده و  ذخیره کنید",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditDesignFreeSizeProduct($inputs){
        $installation = false;
        $installationPrice = 0;
        if($inputs['inputProductHasInstallation'] == 'true'){
            $installation = true;
            $installationPrice = $inputs['inputProductInstallationPrice'];
        }
        $Array = array(
            'ProductTitle' => $inputs['inputProductTitle'],
            'ProductSubTitle' => $inputs['inputProductSubTitle'],
            'ProductCatalogUrl' => $inputs['inputProductCatalogUrl'],
            'ProductType' => $inputs['inputProductType'],
            'ProductBrief' => $inputs['inputProductBrief'],
            'ProductMaxHeight' => $inputs['inputProductMaxHeight'],
            'ProductMaxWidth' => $inputs['inputProductMaxWidth'],
            'ProductDescription' => $inputs['inputProductDescription'],
            'ProductHasInstallation' => $installation,
            'ProductInstallationPrice' => $installationPrice,
            'ProductIsFullWidth' => $inputs['inputProductIsFullWidth'],
            'ProductIsFullHeight' => $inputs['inputProductIsFullHeight'],
            'ProductPrimaryImage' => $inputs['inputProductPrimaryImage'],
            'ProductMockUpImage' => $inputs['inputProductMockUpImage'],
            'CreateDateTime' => time(),
            'ModifiedDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->where('ProductId', $inputs['inputProductId']);
        $this->db->update('product', $Array);


        $this->db->delete('product_price', array(
            'ProductId' => $inputs['inputProductId']
        ));
        for($i=1;$i<count($inputs['inputProductMaterial']);$i++){
            $Array = array(
                'MaterialId' => $inputs['inputProductMaterial'][$i],
                'PriceValue' => $inputs['inputProductPrice'][$i],
                'ProductId' => $inputs['inputProductId']
            );
            $this->db->insert('product_price', $Array);
        }

        $this->db->delete('media', array(
            'MediaType' => 'Product',
            'MediaTypeId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductSecondaryImage'])) {
            foreach ($inputs['inputProductSecondaryImage'] as $input) {
                $Array = array(
                    'MediaType' => 'Product',
                    'MediaTypeId' => $inputs['inputProductId'],
                    'MediaExtension' => 'jpg',
                    'MediaUrl' => $input
                );
                $this->db->insert('media', $Array);
            }
        }

        $this->db->delete('product_tags', array(
            'TagProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductTag'])) {
            foreach ($inputs['inputProductTag'] as $input) {
                $Array = array(
                    'TagTitle' => $input,
                    'TagProductId' => $inputs['inputProductId'],
                );
                $this->db->insert('product_tags', $Array);
            }
        }

        $this->db->delete('product_category_relation', array(
            'ProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductCategory'])) {
            foreach ($inputs['inputProductCategory'] as $input) {
                $Array = array(
                    'ProductId' => $inputs['inputProductId'],
                    'CategoryId' => $input
                );
                $this->db->insert('product_category_relation', $Array);
            }
        }

       $this->db->delete('product_property', array(
            'ProductId' => $inputs['inputProductId']
        ));
        if(isset($inputs['inputProductCategoryProperty'])) {
            foreach ($inputs['inputProductCategoryProperty'] as $input) {
                $Array = array(
                    'PropertyId' => $input['propertyId'],
                    'PropertyOptionId' => $input['propertyOptionId'],
                    'ProductId' => $inputs['inputProductId']
                );
                $this->db->insert('product_property', $Array);
            }
        }

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }

    public function doDeleteProduct($inputs){
        $this->db->trans_start();
        $this->db->delete('product', array(
            'ProductId' => $inputs['inputProductId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "حذف محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    /*End For Product*/
}
?>