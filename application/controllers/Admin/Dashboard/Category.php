<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelProductCategory');
        $this->load->library("pagination");
    }
    public function index(){
        $headerData['pageTitle'] = 'دسته بندی محصولات';
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/category/home/index');
        $this->load->view('admin_panel/category/home/index_css');
        $this->load->view('admin_panel/category/home/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelProductCategory->getProductCategoryByPagination($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/category/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function add()
    {
        $headerData['pageTitle'] = 'افزودن دسته بندی محصول';
        $data['data'] = $this->ModelProductCategory->getAllProductCategory();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/category/add/index', $data);
        $this->load->view('admin_panel/category/add/index_css');
        $this->load->view('admin_panel/category/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddCategory()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProductCategory->doAddCategory($inputs);
        echo json_encode($result);
    }
    public function edit($categoryId)
    {
        $headerData['pageTitle'] = 'ویرایش دسته بندی محصول';
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['data'] = $this->ModelProductCategory->getProductCategoryByCategoryId($categoryId)['data'][0];

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/category/edit/index', $data);
        $this->load->view('admin_panel/category/edit/index_css');
        $this->load->view('admin_panel/category/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doUpdateCategory()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProductCategory->doUpdateCategory($inputs);
        echo json_encode($result);
    }
    public function doDeleteCategory()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $inputs['currentCategory'] = $this->ModelProductCategory->getProductCategoryByCategoryId($inputs['inputCategoryId'])['data'][0];
        $result = $this->ModelProductCategory->doDeleteCategory($inputs);
        echo json_encode($result);
    }
    public function doFavoriteCategory()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProductCategory->doFavoriteCategory($inputs);
        echo json_encode($result);
    }

    public function property($categoryId)
    {
        $headerData['pageTitle'] = 'ویژگی های دسته بندی محصول';
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['data'] = $this->ModelProductCategory->getProductCategoryByCategoryId($categoryId)['data'][0];
        $properties = $this->ModelProductCategory->getCategoryPropertyByCategoryId($categoryId)['data'];
        for($i=0;$i<count($properties);$i++){
            $propertyId  = $properties[$i]['PropertyId'];
            $properties[$i]['properties'] = $this->ModelProductCategory->getCategoryPropertyOptionByPropertyId($propertyId);
        }
        $data['properties'] = $properties;
        //getCategoryProperty
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/category/property/index', $data);
        $this->load->view('admin_panel/category/property/index_css');
        $this->load->view('admin_panel/category/property/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function editProperty($categoryId , $propertyId){
        $headerData['pageTitle'] = 'ویرایش ویژگی های دسته بندی محصول';
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];

        $data['data'] = $this->ModelProductCategory->getProductCategoryByCategoryId($categoryId)['data'][0];
        $properties = $this->ModelProductCategory->getCategoryPropertyByPropertyId($propertyId)[0];
        $properties['properties'] = $this->ModelProductCategory->getCategoryPropertyOptionByPropertyId($propertyId);

        $data['properties'] = $properties;

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/category/property_edit/index', $data);
        $this->load->view('admin_panel/category/property_edit/index_css');
        $this->load->view('admin_panel/category/property_edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddProperty()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProductCategory->doAddProperty($inputs);
        echo json_encode($result);
    }
    public function doDeleteProperty()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
         $result = $this->ModelProductCategory->doDeleteProperty($inputs);
        echo json_encode($result);
    }
    public function doUpdatePropertyTitle()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProductCategory->doUpdatePropertyTitle($inputs);
        echo json_encode($result);
    }
    public function doAddPropertyOption()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProductCategory->doAddPropertyOption($inputs);
        echo json_encode($result);
    }
    public function doDeletePropertyOption()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProductCategory->doDeletePropertyOption($inputs);
        echo json_encode($result);
    }
    public function doUpdatePropertyOption()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelProductCategory->doUpdatePropertyOption($inputs);
        echo json_encode($result);
    }
}