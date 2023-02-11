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
        $data['plans'] = $this->ModelWebSite->getAllPlansWithoutPagination();
        $data['favoriteCategory'] = $this->ModelProductCategory->getFavoriteProductCategory(1);
        $categories = $this->ModelProductCategory->getChildProductCategory(1);
        for ($i=0;$i < count($categories);$i++) {
            $categories[$i]['productCount'] = $this->ModelProduct->getProductCountByProductCategoryId($categories[$i]['CategoryId']);
            $categories[$i]['childCategory'] = $this->ModelProductCategory->getChildProductCategory($categories[$i]['CategoryId']);
            for ($j=0;$j < count($categories[$i]['childCategory']);$j++) {
                $childCat = $categories[$i]['childCategory'][$j];
                $categories[$i]['childCategory'][$j]['product'] = $this->ModelProductCategory->getLastProductCategory($childCat['CategoryId'])[0];
            }
        }
        $data['categories'] = $categories;
        $data['currentDate'] = jDateTime::date("Y/m/d H:i:s", false, false, false);
        $data['latestProduct'] = $this->ModelProduct->getLatestProduct();
        $data['favoriteProduct'] = $this->ModelProduct->getFavoriteProduct();
        $data['specialProduct'] = $this->ModelProduct->getSpecialProduct();

        /*var_dump($data['categories'][0]['childCategory'][0]);
        die();*/

        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/home/index', $data);
        $this->load->view('ui/v2/home/index_css');
        $this->load->view('ui/v2/home/index_js');
        $this->load->view('ui/v2/static/footer');
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
