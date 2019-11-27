<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('user/user_login');
        $this->load->model('ui/ModelCountry');
        $this->load->model('user/ModelUser');
    }
    public function index(){
        var_dump( $this->session->userdata('UserLoginInfo')) ;
        echo "<a href='".base_url('User/Home/doLogOut')."'>خروج</a>";
    }
    public function doLogOut(){
        /* Unset Session Data To LogOut */
        $this->session->unset_userdata('UserIsLogged');
        $this->session->unset_userdata('UserLoginInfo');
        header("Location: " . base_url('Account/login'));
    }
    /* Helper Functions */



}