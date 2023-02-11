<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Services extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelServices');
	    $this->load->model('admin/ModelProductCategory');
    }
    public function index(){
        $headerData['pageTitle'] = 'فهرست خدمات';
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/services/home/index');
        $this->load->view('admin_panel/services/home/index_css');
        $this->load->view('admin_panel/services/home/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data= $this->ModelServices->getAllServices($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/services/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }

    public function add()
    {
        $headerData['pageTitle'] = 'افزودن خدمات جدید';
	    $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/services/add/index', $data);
        $this->load->view('admin_panel/services/add/index_css');
        $this->load->view('admin_panel/services/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddServices(){
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelServices->doAddServices($inputs);
        echo json_encode($result);
    }

    public function edit($id) {
        $headerData['pageTitle'] = 'ویرایش خدمات';
        $data['data'] = $this->ModelServices->getServicesByServicesId($id)['data'][0];
        $data['serviceCategories'] = $this->ModelServices->getServicesCategoryByServicesId($id)['data'];
	    $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($data['serviceCategories']);
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/services/edit/index', $data);
        $this->load->view('admin_panel/services/edit/index_css');
        $this->load->view('admin_panel/services/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditServices() {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelServices->doEditServices($inputs);
        echo json_encode($result);
    }

    public function doDeleteService() {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
         $result = $this->ModelServices->doDeleteService($inputs);
        echo json_encode($result);
    }

	public function items($id) {
		$headerData['pageTitle'] = 'آیتم خدمات';
		$data['data'] = $this->ModelServices->getServicesByServicesId($id)['data'][0];
		$data['serviceItems'] = $this->ModelServices->getServicesItemsByServicesId($id);
		$this->load->view('admin_panel/static/header', $headerData);
		$this->load->view('admin_panel/services/items/index', $data);
		$this->load->view('admin_panel/services/items/index_css');
		$this->load->view('admin_panel/services/items/index_js', $data);
		$this->load->view('admin_panel/static/footer');
	}
	public function doAddItems(){
		$inputs = $this->input->post(NULL, TRUE);
		$result = $this->ModelServices->doAddItems($inputs);
		echo json_encode($result);
	}
	public function doEditItems(){
		$inputs = $this->input->post(NULL, TRUE);
		$result = $this->ModelServices->doEditItems($inputs);
		echo json_encode($result);
	}
	public function doRemoveItem(){
		$inputs = $this->input->post(NULL, TRUE);
		$result = $this->ModelServices->doRemoveItem($inputs);
		echo json_encode($result);
	}



}
