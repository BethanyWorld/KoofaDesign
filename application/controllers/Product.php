<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
        $this->load->model('admin/ModelServices');
    }
    public function index() {}
    public function detail($productId , $productTitle = ""){
        $data['productType'] = $this->config->item('productType');
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['data'] = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $data['productPrice'] = $this->ModelProduct->getProductPriceProductId($productId);
        /* For Breadcrumbs just selected categories*/
        $data['productCategories'] = $this->ModelProduct->getProductCategoryByProductId($productId)['data'];
        /* For search in sidebar */
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($data['productCategories']);
        /* for search related products in root category */
        $data['rootCategoryId'] = $this->ModelProduct->getProductRootCategoryByProductId($productId)['data'][0];
        /* category drop down */
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($data['rootCategoryId']['CategoryId']);
        $data['productSecondaryImages'] = $this->ModelProduct->getProductSecondaryByProductId($productId)['data'];
        $data['productTags'] = $this->ModelProduct->getProductTagsByProductId($productId)['data'];
        $data['allSizes'] = $this->ModelSizes->getAllSizesWithoutPagination();
        $data['allMaterials'] = $this->ModelMaterial->getAllMaterialsWithoutPagination();
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'محصول ';
        //$data['relatedProducts'] = $this->ModelProduct->getProductByProductCategoryId($data['rootCategoryId']['CategoryId']);
        $data['relatedProducts'] = $this->ModelProduct->getProductByProductCategoryId(($data['productCategories'][count($data['productCategories'])-1])['CategoryId']);
        $data['services'] = $this->ModelServices->getServicesByCategoryId(end($data['productCategories'])['CategoryId'])['data'];
        $serviceIndex = 0;
        foreach ($data['services'] as $item) {
            $data['services'][$serviceIndex]['items'] = $this->ModelServices->getServicesItemsByServicesId($item['ServiceId']);
            $serviceIndex +=1;
        }
        $this->load->view('ui/v2/static/header', $data);
        $data['breadCrumb'] = $this->load->view('ui/v2/product/breadcrumb', $data , TRUE);
        $data['productTitles'] = $this->load->view('ui/v2/product/product_titles', $data , TRUE);
        switch ($data['data']['ProductType']){
            case 'Normal':
                $this->load->view('ui/v2/product/normal/index', $data);
                $this->load->view('ui/v2/product/normal/index_css');
                $this->load->view('ui/v2/product/normal/index_js');
                break;
            case 'NormalUpload':
                $this->load->view('ui/v2/product/normal_upload/index', $data);
                $this->load->view('ui/v2/product/normal_upload/index_css');
                $this->load->view('ui/v2/product/normal_upload/index_js');
                break;
            case 'DesignFixSize':
                for($i=0;$i<count($data['productPrice']);$i++) {
                    for($j=0;$j<count($data['allSizes']);$j++) {
                        if($data['productPrice'][$i]['SizeId'] == $data['allSizes'][$j]['SizeId']){
                            $data['productPrice'][$i]['SizeTitle'] = $data['allSizes'][$j]['SizeTitle'];
                        }
                    }
                }
                for($i=0;$i<count($data['productPrice']);$i++) {
                    for($j=0;$j<count($data['allMaterials']);$j++) {
                        if($data['productPrice'][$i]['MaterialId'] == $data['allMaterials'][$j]['MaterialId']){
                            $data['productPrice'][$i]['MaterialTitle'] = $data['allMaterials'][$j]['MaterialTitle'];
                        }
                    }
                }
                $this->load->view('ui/v2/product/fix_size/index', $data);
                $this->load->view('ui/v2/product/fix_size/index_css');
                $this->load->view('ui/v2/product/fix_size/index_js');
                break;
            case 'DesignFreeSize':
                for($i=0;$i<count($data['productPrice']);$i++) {
                    for($j=0;$j<count($data['allMaterials']);$j++) {
                        if($data['productPrice'][$i]['MaterialId'] == $data['allMaterials'][$j]['MaterialId']){
                            $data['productPrice'][$i]['MaterialTitle'] = $data['allMaterials'][$j]['MaterialTitle'];
                        }
                    }
                }
                $this->load->view('ui/v2/product/free_size/index', $data);
                $this->load->view('ui/v2/product/free_size/index_css');
                $this->load->view('ui/v2/product/free_size/index_js');
                break;
           default:
                break;
        }
        $this->load->view('ui/v2/static/footer');
    }
    public function doAddWishList()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);
        $inputs['inputUserId'] = getLoggedUserId();

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputProductId', 'کد محصول', 'trim|required|min_length[1]|numeric');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        if($inputs['inputUserId'] == NULL){
            $arr = array(
                'type' => "red",
                'content' => 'ابتدا وارد حساب کاربری خود شوید'
            );
            echo json_encode($arr);
            die();
        }


        echo json_encode($this->ModelProduct->doAddWishList($inputs));
    }
    protected function getProductPropertyByCategoryId($categoryId , $print=true)
    {
        $result = $this->ModelProductCategory->getProductPropertyByCategoryId($categoryId);
        for ($i = 0; $i < count($result); $i++) {
            $result[$i]['properties'] = $this->ModelProductCategory->getProductPropertyOptionByPropertyId($result[$i]['PropertyId']);
        }
        if($print){
            echo $this->printProductPropertyDropDown($result);
        }
        else{
            return $result;
        }
    }
}
