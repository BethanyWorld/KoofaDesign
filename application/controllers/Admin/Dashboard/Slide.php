<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Slide extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('ui/ModelWebSite');
    }
    public function index()
    {
        $headerData['pageTitle'] = 'فهرست اسلایدر محصولات';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/main_slider/home/index');
        $this->load->view('admin_panel/main_slider/home/index_css');
        $this->load->view('admin_panel/main_slider/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelWebSite->getAllSlides($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/main_slider/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function add()
    {
        $headerData['pageTitle'] = 'افزودن اسلایدر جدید';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/main_slider/add/index');
        $this->load->view('admin_panel/main_slider/add/index_css');
        $this->load->view('admin_panel/main_slider/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddSlide()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelWebSite->doAddSlide($inputs);
        echo json_encode($result);
    }
    public function edit($id)
    {
        $headerData['pageTitle'] = 'ویرایش اسلایدر';
        $data['data'] = $this->ModelWebSite->getSlideBySlideId($id)['data'][0];
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/main_slider/edit/index', $data);
        $this->load->view('admin_panel/main_slider/edit/index_css');
        $this->load->view('admin_panel/main_slider/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditSlide()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelWebSite->doEditSlide($inputs);
        echo json_encode($result);
    }
    public function doDeleteSlide()
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
        $result = $this->ModelWebSite->doDeleteSlide($inputs);
        echo json_encode($result);
    }
}