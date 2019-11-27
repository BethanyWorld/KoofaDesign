<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DiscountCode extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelProduct');
        $this->load->model('admin/ModelProductCategory');
        $this->load->model('admin/ModelDiscount');
    }

    public function index(){
        $headerData['pageTitle'] = 'فهرست کد های تخفیف';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/discount/home/index');
        $this->load->view('admin_panel/discount/home/index_css');
        $this->load->view('admin_panel/discount/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }

    public function doPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data['data'] = $this->ModelDiscount->getDiscountByPagination($inputs['pageIndex']);
        $data['htmlResult'] = $this->load->view('admin_panel/discount/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function add(){
        $headerData['pageTitle'] = 'افزودن کد تخفیف';
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree();
        $data['discountEnums'] = $this->config->item('discountType');

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/discount/add/index', $data);
        $this->load->view('admin_panel/discount/add/index_css');
        $this->load->view('admin_panel/discount/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddDiscountCode()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelDiscount->doAddDiscountCode($inputs);
        echo json_encode($result);
    }

    public function edit($discountCode)
    {
        $headerData['pageTitle'] = 'افزودن کد تخفیف';
        $data['data'] = $this->ModelDiscount->getDiscountByDiscountCode($discountCode)['data'];
        $data['discountCategories'] = $this->ModelDiscount->getDiscountCategoryByProductCode($discountCode)['data'];

        $discountCategoryArray = array();
        $index = 0;
        foreach ($data['discountCategories'] as $row) {
            $discountCategoryArray[$index++]['CategoryId']  =  $row['DiscountCategoryId'];
        }


        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($discountCategoryArray);
        $data['discountEnums'] = $this->config->item('discountType');
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/discount/edit/index', $data);
        $this->load->view('admin_panel/discount/edit/index_css');
        $this->load->view('admin_panel/discount/edit/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditDiscountCode()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelDiscount->doEditDiscountCode($inputs);
        echo json_encode($result);
    }

    public function doDeleteDiscountCode()
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
        $result = $this->ModelDiscount->doDeleteDiscountCode($inputs);
        echo json_encode($result);
    }

}
