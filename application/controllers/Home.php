<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('ui/ModelWebSite');
    }
    public function index(){


        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'صفحه اصلی ';

        $data['slides'] = $this->ModelWebSite->getAllSlidesWithoutPagination();

        $categories = $this->ModelProductCategory->getFavoriteProductCategory();
        for ($i=0;$i < count($categories);$i++) {
            $categories[$i]['productCount'] = $this->ModelProduct->getProductCountByProductCategoryId($categories[$i]['CategoryId']);
            $categories[$i]['products'] = $this->ModelProduct->getProductByProductCategoryId($categories[$i]['CategoryId'] , 2);
        }
        $data['categories'] = $categories;

        $data['currentDate'] = jDateTime::date("Y/m/d H:i:s", false, false, false);
        $data['latestProduct'] = $this->ModelProduct->getLatestProduct();
        $data['favoriteProduct'] = $this->ModelProduct->getFavoriteProduct();
        $data['specialProduct'] = $this->ModelProduct->getSpecialProduct();


        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/home/index');
        $this->load->view('ui/home/index_css');
        $this->load->view('ui/home/index_js');
        $this->load->view('ui/static/footer');
    }
}
