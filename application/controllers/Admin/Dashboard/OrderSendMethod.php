<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderSendMethod extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelOrderSendMethod');
    }

    public function index()
	{
        $headerData['pageTitle'] = 'فهرست روش های ارسال';
         $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/order_send_method/home/index');
        $this->load->view('admin_panel/order_send_method/home/index_css');
        $this->load->view('admin_panel/order_send_method/home/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data['data'] = $this->ModelOrderSendMethod->getAllSendMethods($inputs['pageIndex']);
        $data['htmlResult'] = $this->load->view('admin_panel/order_send_method/home/pagination', $data,TRUE);
         unset($data['data']);
        echo json_encode($data);
    }

    public function add()
    {
        $headerData['pageTitle'] = 'افزودن روش ارسال';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/order_send_method/add/index');
        $this->load->view('admin_panel/order_send_method/add/index_css');
        $this->load->view('admin_panel/order_send_method/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddSendMethod(){
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelOrderSendMethod->doAddSendMethod($inputs);
        echo json_encode($result);
    }

    public function edit($sendMethodId)
    {
        $headerData['pageTitle'] = 'ویرایش روش ارسال';
        $data['data'] = $this->ModelOrderSendMethod->getSendMethodBySendMethodId($sendMethodId)['data'][0];

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/order_send_method/edit/index', $data);
        $this->load->view('admin_panel/order_send_method/edit/index_css');
        $this->load->view('admin_panel/order_send_method/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doUpdateOrderSendMethod()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelOrderSendMethod->doUpdateOrderSendMethod($inputs);
        echo json_encode($result);
    }

    public function doDeleteSendMethod()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
         $result = $this->ModelOrderSendMethod->doDeleteSendMethod($inputs);
        echo json_encode($result);
    }

}
