<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends CI_Controller
{
    /*----------------------------------------------------*/
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/ModelAccount');
    }
    public function login()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').'ورود به حساب کاربری ';
        $this->load->view('admin/static/header', $data);
        $this->load->view('admin/login/index', $data);
        $this->load->view('admin/login/index_js');
        $this->load->view('admin/static/footer');
    }
    public function doLogin()
    {
        $inputs = $this->input->post(NULL , TRUE);
        $inputs =array_map(function($v){ return strip_tags($v); }, $inputs);
        $inputs =array_map(function($v){ return remove_invisible_characters($v); }, $inputs);
        $inputs =array_map(function($v){ return makeSafeInput($v); }, $inputs);
        $captchaCode= $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            $result = $this->ModelAccount->doLoginUser($inputs);
            echo json_encode($result);
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }
    }

    public function doLogOut()
    {
        $this->session->unset_userdata('AdminLoginInfo');
        $this->session->unset_userdata('AdminIsLogged');
        redirect(base_url('Admin/Account/login'));
    }


}
