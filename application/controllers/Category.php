<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
    }
    public function index(){}
    public function detail($categoryId, $categoryTitle = ""){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'دسته بندی محصول ';
        $data['categoryId'] = $categoryId;
        $allCategories = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['categoryInfo'] = $this->ModelProductCategory->getCategoryByCategoryId($categoryId)[0];
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($categoryId);
        $data['products'] = $this->ModelProductCategory->getProductByCategoryId($categoryId);

        $data['defaultPageSize'] = $this->config->item('defaultPageSize');
        $data['productCount'] = $this->ModelProduct->getProductCountByProductCategoryId($categoryId);
        $breadCrumb = array();
        //get root category
        foreach ($allCategories as $item) {
            if($item['CategoryParentId']==0){
                $breadCrumb['root'] = $item;
            }
        }
        //get current category
        $breadCrumb ['current'] = $data['categoryInfo'];
        //get other non-root categories
        foreach ($allCategories as $item) {
            if($item['CategoryId']==$data['categoryInfo']['CategoryParentId'] && $data['categoryInfo']['CategoryParentId'] != 1){
                $breadCrumb['parents'][] = $item;
            }
        }
        //get child category
        /*foreach ($allCategories as $item) {
            if($item['CategoryParentId']==$categoryId){
                $breadCrumb['child'][] = $item;
            }
        }*/
        $data['breadCrumb'] = $breadCrumb;
        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/category/index', $data);
        $this->load->view('ui/category/index_css');
        $this->load->view('ui/category/index_js', $data);
        $this->load->view('ui/static/footer');
    }
    public function search(){
        $inputs = $this->input->post(NULL , TRUE);
        $data = $this->ModelProduct->searchProduct($inputs);
        $data['defaultPageSize'] = $this->config->item('defaultPageSize');
        $view = $this->load->view('ui/category/pagination' , $data , TRUE);
        echo  $view;
    }
}