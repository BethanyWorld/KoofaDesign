<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comments extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->helper('admin/admin_pipe');
        $this->load->model('admin/ModelProduct');
    }
    public function index(){
        $headerData['pageTitle'] = 'فهرست جنس محصولات';
        $this->load->view('admin_panel/static/header', $headerData);
	    $this->load->view('admin_panel/comments/home/index');
        $this->load->view('admin_panel/comments/home/index_css');
        $this->load->view('admin_panel/comments/home/index_js');
	    $this->load->view('admin_panel/static/footer');
	}
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data= $this->ModelProduct->getComments($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/comments/home/pagination', $data, TRUE);
        unset($data['data']);
        echo json_encode($data);
    }
    public function edit($id)
    {
        $headerData['pageTitle'] = 'ویرایش جنس';
        $data['data'] = $this->ModelProduct->getCommentById($id)['data'][0];
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/comments/edit/index', $data);
        $this->load->view('admin_panel/comments/edit/index_css');
        $this->load->view('admin_panel/comments/edit/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditComment()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doEditComment($inputs);
        echo json_encode($result);
    }
    public function doDelete()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
         $result = $this->ModelProduct->doDeleteComment($inputs);
        echo json_encode($result);
    }
}
