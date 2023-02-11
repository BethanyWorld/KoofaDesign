<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Plans extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('ui/ModelWebSite');
    }
    public function index()
    {
        $headerData['pageTitle'] = 'پلن ها';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/plans/home/index');
        $this->load->view('admin_panel/plans/home/index_css');
        $this->load->view('admin_panel/plans/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelWebSite->getAllPlans($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/plans/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function add()
    {
        $headerData['pageTitle'] = 'افزودن پلن جدید';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/plans/add/index');
        $this->load->view('admin_panel/plans/add/index_css');
        $this->load->view('admin_panel/plans/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddPlan()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelWebSite->doAddPlan($inputs);
        echo json_encode($result);
    }
    public function edit($id)
    {
        $headerData['pageTitle'] = 'ویرایش پلن';
        $data['data'] = $this->ModelWebSite->getPlanByPlanId($id)['data'][0];
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/plans/edit/index', $data);
        $this->load->view('admin_panel/plans/edit/index_css');
        $this->load->view('admin_panel/plans/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditPlan()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelWebSite->doEditPlan($inputs);
        echo json_encode($result);
    }
    public function doDeletePlan()
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
        $result = $this->ModelWebSite->doDeletePlan($inputs);
        echo json_encode($result);
    }
}