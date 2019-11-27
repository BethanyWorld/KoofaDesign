<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page404 extends CI_Controller
{
    /*----------------------------------------------------*/
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelAccount');
    }
    public function index()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').'موردی یافت نشد ';
        $this->load->view('ui/static/header' , $data);
        $this->load->view('ui/page_404/index');
        $this->load->view('ui/page_404/index_css');
        $this->load->view('ui/static/footer');
    }

}
