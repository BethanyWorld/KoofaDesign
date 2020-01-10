<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelReport');
    }
	public function index()
	{
	    $data['noImg'] = $this->config->item('defaultImage');
	    $data['latestOrders'] = $this->ModelReport->getLatestOrders();
	    $data['usersCount'] = $this->ModelReport->getUsersCount()[0]['AllUserCount'];
	    $data['orderTypeCount'] = $this->ModelReport->getOrderTypeCount();
        $data['pageTitle'] = 'پیشخوان';
	    $this->load->view('admin_panel/static/header', $data);
	    $this->load->view('admin_panel/home/index', $data);
	    $this->load->view('admin_panel/static/footer');
	}
}
