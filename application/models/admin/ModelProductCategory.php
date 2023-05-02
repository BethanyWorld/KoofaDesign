<?php
class ModelProductCategory extends CI_Model{

    /*For Category*/
    public function getProductCategoryByPagination($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product_category');
        if($inputs['inputCategoryTitle'] != ''){
            $this->db->like('CategoryTitle',$inputs['inputCategoryTitle']);
        }
        $this->db->order_by('CategoryId', 'DESC');

        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end,$start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = false;
        }
        return $result;
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
    public function doAddCategory($inputs)
    {
        $Array = array(
            'CategoryTitle' => $inputs['inputCategoryTitle'],
            'CategoryParentId' => $inputs['inputCategoryParentId'],
            'CategoryImage' => $inputs['inputCategoryImage'],
            'CategoryPoster' => $inputs['inputCategoryPoster'],
            'CategorySpecialPoster' => $inputs['inputCategorySpecialPoster'],
            'CategoryDescription' => $inputs['inputCategoryDescription'],
            'CategoryDeliveryTime' => $inputs['inputCategoryDeliveryTime'],
            'CategoryInstallPrice' => $inputs['inputCategoryInstallPrice'],
            'CreateDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->insert('product_category', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن دسته ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن دسته با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doUpdateCategory($inputs)
    {

        $this->db->trans_start();
        $Array = array(
            'CategoryTitle' => $inputs['inputCategoryTitle'],
            'CategoryParentId' => $inputs['inputCategoryParentId'],
            'CategoryImage' => $inputs['inputCategoryImage'],
            'CategoryPoster' => $inputs['inputCategoryPoster'],
            'CategorySpecialPoster' => $inputs['inputCategorySpecialPoster'],
            'CategoryIsActive' => $inputs['inputCategoryIsActive'],
            'CategoryDescription' => $inputs['inputCategoryDescription'],
            'CategoryDeliveryTime' => $inputs['inputCategoryDeliveryTime'],
            'CategoryInstallPrice' => $inputs['inputCategoryInstallPrice'],
            'CreateDateTime' => time()
        );
        $this->db->where('CategoryId', $inputs['inputCategoryId']);
        $this->db->update('product_category', $Array);

        $this->db->reset_query();
        $Array = array('CategoryIsActive' => $inputs['inputCategoryIsActive']);
        $this->db->where('CategoryParentId', $inputs['inputCategoryId']);
        $this->db->update('product_category', $Array);


        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی دسته محصولات ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی دسته محصولات با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteCategory($inputs)
    {
        $categoryParentId = $inputs['currentCategory']['CategoryParentId'];
        $categoryId = $inputs['currentCategory']['CategoryId'];

        $Array = array(
            'CategoryParentId' => $categoryParentId
        );
        $this->db->trans_start();
        $this->db->where('CategoryParentId', $categoryId);
        $this->db->update('product_category', $Array);

        $this->db->delete('product_category', array(
            'CategoryId' => $categoryId
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف دسته محصولات ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف دسته محصولات با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doFavoriteCategory($inputs){
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('CategoryId', $inputs['inputCategoryId']);
        $result = $this->db->get()->result_array()[0];
        if($result['CategoryIsFavorite']  == 1){
            $Array = array( 'CategoryIsFavorite' => 0 );
        }
        else{
            $Array = array( 'CategoryIsFavorite' => 1 );
        }

        $this->db->trans_start();
        $this->db->where('CategoryId', $inputs['inputCategoryId']);
        $this->db->update('product_category', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "عملیات ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "عملیات با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
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
    public function doAddProperty($inputs)
    {
        $Array = array(
            'PropertyTitle' => $inputs['inputPropertyTitle'],
            'PropertyCategoryId' => $inputs['inputCategoryId'],
            'CreateDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->insert('product_category_property', $Array);
        $insertId = $this->db->insert_id();
        foreach (json_decode($inputs['inputPropertyOptions']) as $item) {
            $Array = array(
                'CategoryPropertyOptionTitle' => $item,
                'CategoryPropertyId' =>$insertId
            );
            $this->db->insert('product_category_property_options', $Array);
        }

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن ویژگی محصولات ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن ویژگی محصولات با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteProperty($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('product_category_property', array(
            'PropertyId' => $inputs['inputPropertyId']
        ));
        $this->db->delete('product_category_property_options', array(
            'CategoryPropertyId' => $inputs['inputPropertyId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف ویژگی محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف ویژگی محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doUpdatePropertyTitle($inputs)
    {
        $Array = array(
            'PropertyTitle' => $inputs['inputPropertyTitle'],
            'CreateDateTime' => time()
        );
        $this->db->trans_start();
        $this->db->where('PropertyId', $inputs['inputPropertyId']);
        $this->db->update('product_category_property', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی نام ویژگی ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی نام ویژگی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doAddPropertyOption($inputs)
    {
        $this->db->trans_start();
        foreach (json_decode($inputs['inputPropertyOptions']) as $item) {
            $Array = array(
                'CategoryPropertyOptionTitle' => $item,
                'CategoryPropertyId' => $inputs['inputPropertyId']
            );
            $this->db->insert('product_category_property_options', $Array);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن ویژگی محصولات ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن ویژگی محصولات با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeletePropertyOption($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('product_category_property_options', array(
            'CategoryPropertyOptionId' => $inputs['inputCategoryPropertyOptionId']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "حذف مقدار ویژگی محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف مقدار ویژگی محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doUpdatePropertyOption($inputs)
    {
        $Array = array(
            'CategoryPropertyOptionTitle' => $inputs['inputCategoryPropertyOptionTitle']
        );
        $this->db->trans_start();
        $this->db->where('CategoryPropertyOptionId', $inputs['inputCategoryPropertyOptionId']);
        $this->db->update('product_category_property_options', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی مقدار ویژگی ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی مقدار ویژگی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
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
        $cat = '<select  id="inputProductCategoryDropDown" name="inputProductCategoryDropDown">';
        $cat .= '<option value="">-- انتخاب کنید --</option>';
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


    protected function getCategoryLinkedTree($hasSelectedCategory = null , $level = 0, $prefix = '') {
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
                            $category .= '<a href="'.base_url('Admin/Dashboard/Category/Edit/').$row->CategoryId.'"><button>ویرایش</button></a>';
                            break;
                        }
                    }
                }
                if(!$isSelected){
                    $category .= '<a href="'.base_url('Admin/Dashboard/Category/Edit/').$row->CategoryId.'"><button>ویرایش</button></a>';
                    $category .= '<a href="'.base_url('Admin/Dashboard/Category/property/').$row->CategoryId.'"><button>ویژگی ها</button></a>';
                }
                $category .= '<label for="cat-'.$row->CategoryId.'">';
                $category .= $prefix.$row->CategoryTitle;
                $category .= '</label>';
                $category .= '</li>';
                $category .= $this->getCategoryLinkedTree($hasSelectedCategory , $row->CategoryId, $prefix . ' -- ');
            }
            $category .= '</ul>';
        }
        return $category;
    }
    public function printCategoryLinkedTree($hasSelectedCategory = null) {
        return $this->getCategoryLinkedTree($hasSelectedCategory);
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
    /*End For Category Property*/
}
?>