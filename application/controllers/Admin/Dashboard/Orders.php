<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Orders extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelOrder');
    }
    public function index(){
        $headerData['pageTitle'] = 'فهرست خریدها';
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/orders/home/index');
        $this->load->view('admin_panel/orders/home/index_css');
        $this->load->view('admin_panel/orders/home/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data= $this->ModelOrder->getAllOrders($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/orders/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function detail($id){
        $headerData['pageTitle'] = 'جزئیات سفارش';
        $data['orderInfo'] = $this->ModelOrder->getOrderByOrderId($id);
        $data['orderItems'] = $this->ModelOrder->getOrderItemsByOrderId($id);
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/orders/detail/index', $data);
        $this->load->view('admin_panel/orders/detail/index_css');
        $this->load->view('admin_panel/orders/detail/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditSize()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelSizes->doEditSize($inputs);
        echo json_encode($result);
    }


}
