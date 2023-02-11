<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user/ModelUserAccount');
        if (isset($_SESSION['UserIsLogged'])) {
            redirect(base_url('User/Home'));
        }
    }
    public function register()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'ثبت نام ';
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/register/index');
        $this->load->view('ui/v2/register/index_css');
        $this->load->view('ui/v2/register/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function doRegister()
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

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputFirstName', 'نام', 'trim|required|min_length[3]|max_length[80]');
        $this->form_validation->set_rules('inputLastName', 'نام خانوادگی', 'trim|required|min_length[3]|max_length[80]');
        $this->form_validation->set_rules('inputPhone', 'تلفن همراه', 'trim|required|max_length[15]|numeric');
        $this->form_validation->set_rules('inputPassword', 'رمز عبور', 'trim|required|max_length[80]');
        $this->form_validation->set_rules('inputCaptcha', 'کد امنیتی', 'trim|required|min_length[5]|max_length[5]');

        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }

        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            $result = $this->ModelUserAccount->doRegister($inputs);
            echo json_encode($result);
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
    public function doVerify()
    {
        $inputs = $this->input->post(NULL, TRUE);

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputActivationCode', 'کد تایید', 'trim|required|max_length[5]|numeric');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $result = $this->ModelUserAccount->doVerify($inputs);
        echo json_encode($result);
    }
    //well done validation
    public function login()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'ورود';

        /*if user should get back to another url after login*/
        $inputs = $this->input->get(NULL, TRUE);
        if (isset($inputs['returnUrl']) && !empty($inputs['returnUrl'])) {
            $this->session->set_userdata('returnUrl', $inputs['returnUrl']);
        }
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/login/index', $data);
        $this->load->view('ui/v2/login/index_css');
        $this->load->view('ui/v2/login/index_js');
        $this->load->view('ui/v2/static/footer');
    }

    public function doLogin()
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

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputPhone', 'تلفن همراه', 'trim|required|min_length[10]|max_length[13]|numeric');
        $this->form_validation->set_rules('inputPassword', 'رمز عبور', 'trim|required|max_length[80]');
        $this->form_validation->set_rules('inputCaptcha', 'کد امنیتی', 'trim|required|min_length[5]|max_length[5]');

        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            $result = $this->ModelUserAccount->doLogin($inputs);
            $returnUrl = $this->session->userdata('returnUrl');
            if (isset($returnUrl) && !empty($returnUrl)) {
                $result['redirect'] = $returnUrl;
            } else {
                $result['redirect'] = base_url('User/Home');
            }
            $this->session->unset_userdata('returnUrl');
            echo json_encode($result);

        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
    public function doSubmitTypeLogin()
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
        $result = $this->ModelUserAccount->doLogin($inputs);
        $returnUrl = $this->session->userdata('returnUrl');
        if (isset($returnUrl) && !empty($returnUrl)) {
            $result['redirect'] = $returnUrl;
        } else {
            $result['redirect'] = base_url('User/Home');
        }
        $this->session->unset_userdata('returnUrl');
        if($result['success']){
            redirect(base_url('User/Home'));
        }
        else{
            redirect(base_url('Account/Login?error=u'));
        }
    }
    public function resendCode()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'ارسال مجدد کد فعال سازی ';
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/resend_code/index', $data);
        $this->load->view('ui/v2/resend_code/index_css');
        $this->load->view('ui/v2/resend_code/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function doResendCode()
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

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputPhone', 'تلفن همراه', 'trim|required|min_length[10]|max_length[13]|numeric');
        $this->form_validation->set_rules('inputCaptcha', 'کد امنیتی', 'trim|required|min_length[5]|max_length[5]');

        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            $result = $this->ModelUserAccount->doResendCode($inputs);
            $result['redirect'] = base_url('Account/login');
            echo json_encode($result);
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
    public function resetPassword()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'بازیابی رمز عبور ';
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/reset_password/index', $data);
        $this->load->view('ui/v2/reset_password/index_css', $data);
        $this->load->view('ui/v2/reset_password/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function doResetPassword()
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


        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputPhone', 'تلفن همراه', 'trim|required|min_length[10]|max_length[13]|numeric');
        $this->form_validation->set_rules('inputCaptcha', 'کد امنیتی', 'trim|required|min_length[5]|max_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }

        $captchaCode = $this->session->userdata['captchaCode'];
        if (strtolower($inputs['inputCaptcha']) == strtolower($captchaCode)) {
            $result = $this->ModelUserAccount->doResetPassword($inputs);
            $result['redirect'] = base_url('Account/login');
            echo json_encode($result);
        } else {
            $arr = array(
                'type' => "red",
                'content' => "کد امنیتی نامعتبر است"
            );
            echo json_encode($arr);
        }
    }
}