<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Managers extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelUser');
        $this->load->model('admin/ModelCountry');

    }

    public function index()
	{
        $headerData['pageTitle'] = 'کاربران';
        $dataTable['dataTable'] = $this->ModelUser->getManagers();
        $data['data'] = $this->load->view('admin_panel/managers/home/pagination', $dataTable,TRUE);
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/managers/home/index', $data);
        $this->load->view('admin_panel/managers/home/index_css');
        $this->load->view('admin_panel/managers/home/index_js', $dataTable);
	    $this->load->view('admin_panel/static/footer');
	}

    public function add()
    {
        $headerData['pageTitle'] = 'افزودن کاربر';
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/managers/add/index',$data);
        $this->load->view('admin_panel/managers/add/index_css');
        $this->load->view('admin_panel/managers/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddManager()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelUser->doAddManager($inputs);
        echo json_encode($result);
    }

    public function edit($userId)
    {
        $headerData['pageTitle'] = 'ویرایش کاربر';
        $data['data'] = $this->ModelUser->getManagerById($userId)['data'][0];
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/managers/edit/index', $data);
        $this->load->view('admin_panel/managers/edit/index_css');
        $this->load->view('admin_panel/managers/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doUpdateManager()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelUser->doUpdateManager($inputs);
        echo json_encode($result);
    }

    /* When User Selects A State, City Of This State Should Be Load */
    public function getCityByStateId($stateId){
        echo json_encode($this->ModelCountry->getCityByStateId($stateId));
    }
    /* End Helper Functions*/

}
