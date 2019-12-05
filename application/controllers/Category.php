<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
    }

    public function index(){}

    public function detail($categoryId, $categoryTitle = "")
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'دسته بندی محصول ';

        $allCategories = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['categoryInfo'] = $this->ModelProductCategory->getCategoryByCategoryId($categoryId)[0];
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($categoryId);
        $data['products'] = $this->ModelProductCategory->getProductByCategoryId($categoryId);

        $breadCrumb = array();
        foreach ($allCategories as $item) {
            if($item['CategoryParentId']==0){
                $breadCrumb[] = $item;
            }
        }
        foreach ($allCategories as $item) {
            if($item['CategoryId']==$data['categoryInfo']['CategoryParentId'] && $data['categoryInfo']['CategoryParentId'] != 1){
                $breadCrumb[] = $item;
            }
        }
        foreach ($allCategories as $item) {
            if($item['CategoryParentId']==$categoryId){
                $breadCrumb[] = $item;
            }
        }
        $breadCrumb [] = $data['categoryInfo'];
        var_dump($breadCrumb);

        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/category/index', $data);
        $this->load->view('ui/category/index_css');
        $this->load->view('ui/category/index_js');
        $this->load->view('ui/static/footer');
    }

    protected function FindChildrenAndGrandchildren($array, $parentId)
    {
        foreach ($array as $category) {
            if ($category['CategoryParentId'] == $parentId) {
                $temp = $this->FindChildrenAndGrandchildren($array, $category['CategoryId']);
                $category['children'] = $temp;
            }
        }
        return $category;
    }

}