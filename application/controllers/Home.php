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
            $categories[$i]['products'] = $this->ModelProduct->getProductByProductCategoryId($categories[$i]['CategoryId'] , 3);
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
    public function sms(){
        $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
        $user = "miladghelich";
        $pass = "Zibadesign64Ghelich";
        $fromNum = "9810009589";
        $toNum = array("09120572107");
        $pattern_code = "h5q654ed8x";
        $input_data = array( "verification-code" => "10544-41");
        echo $client->sendPatternSms($fromNum,$toNum,$user,$pass,$pattern_code,$input_data);
    }
}
