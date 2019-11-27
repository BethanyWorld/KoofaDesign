<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelUser');
        $this->load->model('admin/ModelCountry');

    }

    public function index()
	{
        $headerData['pageTitle'] = 'کاربران';
        $dataTable['dataTable'] = $this->ModelUser->getUsersByPagination();
        $data['data'] = $this->load->view('admin_panel/user/home/pagination', $dataTable,TRUE);
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/user/home/index', $data);
        $this->load->view('admin_panel/user/home/index_css');
        $this->load->view('admin_panel/user/home/index_js', $dataTable);
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $dataTable['dataTable'] = $this->ModelUser->getUsersByPagination($inputs['pageIndex']);
        echo $this->load->view('admin_panel/user/home/pagination', $dataTable,TRUE);
    }

    public function add()
    {
        $headerData['pageTitle'] = 'افزودن کاربر';
        $data['states'] = $this->ModelCountry->getStateList();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/user/add/index',$data);
        $this->load->view('admin_panel/user/add/index_css');
        $this->load->view('admin_panel/user/add/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddUser()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelUser->doAddUser($inputs);
        echo json_encode($result);
    }

    public function edit($userId)
    {
        $headerData['pageTitle'] = 'ویرایش کاربر';
        $data['data'] = $this->ModelUser->getUserByUserId($userId)['data'][0];
        $data['states'] = $this->ModelCountry->getStateList();
        $data['cities'] = $this->ModelCountry->getCityByStateId($data['data']['UserAddressStateId']);

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/user/edit/index', $data);
        $this->load->view('admin_panel/user/edit/index_css');
        $this->load->view('admin_panel/user/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doUpdateUser()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $result = $this->ModelUser->doUpdateUser($inputs);
        echo json_encode($result);
    }

    /* When User Selects A State, City Of This State Should Be Load */
    public function getCityByStateId($stateId){
        echo json_encode($this->ModelCountry->getCityByStateId($stateId));
    }
    /* End Helper Functions*/

}
