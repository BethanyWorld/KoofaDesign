<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('user/user_login');
        $this->load->model('ui/ModelCountry');
        $this->load->model('user/ModelUser');
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'پروفایل ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['sidebar'] = $this->load->view('ui/user/sidebar' , NULL,TRUE);
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/user/home/index', $data);
        $this->load->view('ui/v2/user/home/index_css');
        $this->load->view('ui/v2/user/home/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function doUpdateProfile()
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
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $inputs['inputUserId'] = $userId;
        $result = $this->ModelUser->doUpdateProfile($inputs);
        echo json_encode($result);
    }
    public function doChangePassword()
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
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $inputs['inputUserId'] = $userId;
        $result = $this->ModelUser->doChangePassword($inputs);
        echo json_encode($result);
    }

    public function address(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'دفترچه آدرس ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['userAddress'] = $this->ModelUser->getUserAddressByUserId($userId);
        $data['sidebar'] = $this->load->view('ui/user/sidebar' , NULL,TRUE);

        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/user/address/index', $data);
        $this->load->view('ui/v2/user/address/index_css');
        $this->load->view('ui/v2/user/address/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function doAddAddress()
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
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $inputs['inputUserId'] = $userId;
        $result = $this->ModelUser->doAddAddress($inputs);
        echo json_encode($result);
    }
    public function addressEdit($addressId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'دفترچه آدرس ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['userAddress'] = $this->ModelUser->getUserAddressByAddressId($addressId)[0];
        $data['sidebar'] = $this->load->view('ui/user/sidebar' , NULL,TRUE);
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/user/address_edit/index', $data);
        $this->load->view('ui/v2/user/address_edit/index_css');
        $this->load->view('ui/v2/user/address_edit/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function doEditAddress()
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
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $inputs['inputUserId'] = $userId;
        $result = $this->ModelUser->doEditAddress($inputs);
        echo json_encode($result);
    }

    public function wishList(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'محصولات مورد علاقه ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['userWishList'] = $this->ModelUser->getWishList($userId);
        $data['sidebar'] = $this->load->view('ui/user/sidebar' , NULL,TRUE);
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/user/wish_list/index', $data);
        $this->load->view('ui/v2/user/wish_list/index_css');
        $this->load->view('ui/v2/user/wish_list/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function doDeleteWishList()
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
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $inputs['inputUserId'] = $userId;
        $result = $this->ModelUser->doDeleteWishList($inputs);
        echo json_encode($result);
    }

    public function orders(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سفارش ها ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['orders'] = $this->ModelUser->getUserOrdersByUserId($userId);
        $data['sidebar'] = $this->load->view('ui/user/sidebar' , NULL,TRUE);

        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/user/orders/index', $data);
        $this->load->view('ui/v2/user/orders/index_css');
        $this->load->view('ui/v2/user/orders/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function orderDetail($orderId){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'جزئیات سفارش ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['orderInfo'] = $this->ModelUser->getUserOrdersByOrderId($orderId);
        $data['orderItems'] = $this->ModelUser->getUserOrdersItemsByOrderId($orderId);
        $data['sidebar'] = $this->load->view('ui/user/sidebar' , NULL,TRUE);

        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/user/order_detail/index', $data);
        $this->load->view('ui/v2/user/order_detail/index_css');
        $this->load->view('ui/v2/user/order_detail/index_js');
        $this->load->view('ui/v2/static/footer');
    }

    public function doLogOut(){
        /* Unset Session Data To LogOut */
        $this->session->unset_userdata('UserIsLogged');
        $this->session->unset_userdata('UserLoginInfo');
        header("Location: " . base_url('Account/login'));
    }
    /* Helper Functions */
}