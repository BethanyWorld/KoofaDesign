<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller{
    protected function uniqueArray($array,$key){
        $temp_array = [];
        foreach ($array as &$v) {
            if (!isset($temp_array[$v[$key]]))
                $temp_array[$v[$key]] =& $v;
        }
        $array = array_values($temp_array);
        return $array;
    }
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
        if($this->session->userdata('cart') == null){
            $this->session->set_userdata('cart' , array());
        }
    }
    public function index(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سبد خرید ';
        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/cart/index', $data);
        $this->load->view('ui/cart/index_css');
        $this->load->view('ui/cart/index_js');
        $this->load->view('ui/static/footer');
    }
    public function addNormal($productId){
        /* Get Items On Cart */
        $cartItems = $this->session->userdata('cart');
        $data = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $productPrice = $this->ModelProduct->getProductPriceProductId($productId);

        $item['productId'] = $data['ProductId'];
        $item['productTitle'] = $data['ProductTitle'];
        $item['productPrice'] = $productPrice[0]['PriceValue'];
        $item['productImage'] = $data['ProductPrimaryImage'];
        $item['productInstallation'] = false;
        $item['productUploadImage'] = '';
        $item['productSizeId'] = '';
        $item['productMaterialId'] = '';
        $item['productCount'] = 1;
        $item['productType'] = 'Normal';
        $item['productWidth'] = 0;
        $item['productHeight'] = 0;

        array_push($cartItems , $item);
        $this->session->set_userdata('cart' , $this->uniqueArray($cartItems,'productId'));
        redirect(base_url('Cart'));
    }
    public function addNormalUpload(){
        $data = $this->input->post(NULL,TRUE);
        $productId = $data['inputProductId'];
        $productImage = $data['inputProductUploadImage'];

        $cartItems = $this->session->userdata('cart');
        $data = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $productPrice = $this->ModelProduct->getProductPriceProductId($productId);

        $item['productId'] = $data['ProductId'];
        $item['productTitle'] = $data['ProductTitle'];
        $item['productPrice'] = $productPrice[0]['PriceValue'];
        $item['productImage'] = $data['ProductPrimaryImage'];
        $item['productInstallation'] = false;
        $item['productSizeId'] = '';
        $item['productMaterialId'] = '';
        $item['productUploadImage'] = $productImage;
        $item['productCount'] = 1;
        $item['productType'] = 'NormalUpload';
        $item['productWidth'] = 0;
        $item['productHeight'] = 0;

        array_push($cartItems , $item);
        $this->session->set_userdata('cart' , $this->uniqueArray($cartItems,'productId'));
    }
    public function addDesignFixSize(){
        $data = $this->input->post(NULL,TRUE);
        $productId = $data['inputProductId'];
        $sizeId = $data['inputSizeId'];
        $materialId = $data['inputMaterialId'];
        $productHasInstallation = $data['inputProductHasInstallation'];
        $cartItems = $this->session->userdata('cart');

        $data = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $productPrice = $this->ModelProduct->getProductPriceProductId($productId);
        $item['productId'] = $data['ProductId'];
        $item['productTitle'] = $data['ProductTitle'];
        $item['productPrice'] = 0;
        $item['productInstallation'] = false;
        $item['productWidth'] = 0;
        $item['productHeight'] = 0;
        /**/
        foreach ($productPrice as $price) {
            if($price['MaterialId'] == $materialId && $price['SizeId'] == $sizeId ){
                $item['productPrice'] = $price['PriceValue'];
                $item['productSizeId'] = $price['MaterialId'];
                $item['productMaterialId'] = $price['SizeId'];
            }
        }
        if($productHasInstallation != 0){
            $item['productPrice'] += $data['ProductInstallationPrice'];
            $item['productInstallation'] = true;
        }

        $item['productImage'] = $data['ProductPrimaryImage'];
        $item['productUploadImage'] = '';
        $item['productCount'] = 1;
        $item['productType'] = 'DesignFreeSize';


        array_push($cartItems , $item);
        $this->session->set_userdata('cart' , $this->uniqueArray($cartItems,'productId'));
    }
    public function addDesignFreeSize(){
        $data = $this->input->post(NULL,TRUE);
        $productId = $data['inputProductId'];
        $materialId = $data['inputMaterialId'];
        $productWidth = $data['inputProductWidth'];
        $productHeight = $data['inputProductHeight'];
        $cartItems = $this->session->userdata('cart');

        $data = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $productPrice = $this->ModelProduct->getProductPriceProductId($productId);
        $item['productId'] = $data['ProductId'];
        $item['productTitle'] = $data['ProductTitle'];
        $item['productPrice'] = 0;
        $item['productInstallation'] = false;
        $item['productWidth'] = $productWidth;
        $item['productHeight'] = $productHeight;
        /**/
        foreach ($productPrice as $price) {
            if($price['MaterialId'] == $materialId ){
                $item['productPrice'] = $price['PriceValue'];
                $item['productMaterialId'] = $price['MaterialId'];
            }
        }
        $item['productImage'] = $data['ProductPrimaryImage'];
        $item['productUploadImage'] = '';
        $item['productCount'] = 1;
        $item['productType'] = 'DesignFreeSize';

        array_push($cartItems , $item);
        $this->session->set_userdata('cart' , $this->uniqueArray($cartItems,'productId'));
    }
    public function remove($productId)
    {
        $removeIndex=-1;
        $cartItems = $this->session->userdata('cart');
        for ($i=0;$i< count($cartItems);$i++) {
            if($cartItems[$i]['productId'] == $productId){
                $removeIndex = $i;
            }
        }
        if($removeIndex >=0){
            unset($cartItems[$removeIndex]);
            $cartItems = array_values($cartItems);
            $this->session->set_userdata('cart' , $cartItems);
        }
        var_dump($this->session->userdata('cart'));
    }
    public function clear()
    {
        $this->session->set_userdata('cart' , array());
    }

    public function show(){
        var_dump($this->session->userdata('cart'));
    }
}
