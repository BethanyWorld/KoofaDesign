<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller{
    protected function uniqueArray($array, $key)
    {
        $temp_array = [];
        foreach ($array as &$v) {
            if (!isset($temp_array[$v[$key]]))
                $temp_array[$v[$key]] =& $v;
        }
        $array = array_values($temp_array);
        return $array;
    }public function __construct()
    {
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
        $this->load->model('admin/ModelOrder');
        $this->load->model('user/ModelUser');
        if ($this->session->userdata('cart') == null) {
            $this->session->set_userdata('cart', array());
        }
    }

    public function index()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سبد خرید ';
        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/cart/index', $data);
        $this->load->view('ui/cart/index_css');
        $this->load->view('ui/cart/index_js');
        $this->load->view('ui/static/footer');
    }
    public function addNormal($productId)
    {
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

        array_push($cartItems, $item);
        $this->session->set_userdata('cart', $this->uniqueArray($cartItems, 'productId'));
        redirect(base_url('Cart'));
    }
    public function addNormalUpload()
    {
        $data = $this->input->post(NULL, TRUE);
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

        array_push($cartItems, $item);
        $this->session->set_userdata('cart', $this->uniqueArray($cartItems, 'productId'));
    }
    public function addDesignFixSize()
    {
        $data = $this->input->post(NULL, TRUE);
        $productId = $data['inputProductId'];
        $sizeId = $data['inputSizeId'];
        $materialId = $data['inputMaterialId'];
        $productHasInstallation = $data['inputProductHasInstallation'];
        $productImage = $data['inputProductUploadImage'];
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
            if ($price['MaterialId'] == $materialId && $price['SizeId'] == $sizeId) {
                $item['productPrice'] = $price['PriceValue'];
                $item['productSizeId'] = $price['MaterialId'];
                $item['productMaterialId'] = $price['SizeId'];
            }
        }
        if ($productHasInstallation != 0) {
            $item['productPrice'] += $data['ProductInstallationPrice'];
            $item['productInstallation'] = true;
        }

        $item['productImage'] = $data['ProductPrimaryImage'];
        $item['productUploadImage'] = $productImage;
        $item['productCount'] = 1;
        $item['productType'] = 'DesignFixSize';


        array_push($cartItems, $item);
        $this->session->set_userdata('cart', $this->uniqueArray($cartItems, 'productId'));
    }
    public function addDesignFreeSize()
    {
        $data = $this->input->post(NULL, TRUE);
        $productId = $data['inputProductId'];
        $materialId = $data['inputMaterialId'];
        $productWidth = $data['inputProductWidth'];
        $productHeight = $data['inputProductHeight'];
        $productImage = $data['inputProductUploadImage'];
        $cartItems = $this->session->userdata('cart');

        $data = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $productPrice = $this->ModelProduct->getProductPriceProductId($productId);
        $item['productId'] = $data['ProductId'];
        $item['productTitle'] = $data['ProductTitle'];
        $item['productPrice'] = 0;
        $item['productInstallation'] = false;
        $item['productWidth'] = $productWidth;
        $item['productHeight'] = $productHeight;

        if (ceil(($productHeight / 100)) != ($productHeight / 100)) {
            $item['productHeight'] = ceil(($productHeight / 100))*100;
        }

        /**/
        foreach ($productPrice as $price) {
            if ($price['MaterialId'] == $materialId) {
                $item['productPrice'] = $price['PriceValue'] * $item['productHeight'] * $item['productWidth'];
                $item['productMaterialId'] = $price['MaterialId'];
            }
        }
        $item['productImage'] = $data['ProductPrimaryImage'];
        $item['productUploadImage'] = $productImage;
        $item['productCount'] = 1;
        $item['productType'] = 'DesignFreeSize';

        array_push($cartItems, $item);
        $this->session->set_userdata('cart', $this->uniqueArray($cartItems, 'productId'));
    }
    public function remove($productId)
    {
        $removeIndex = -1;
        $cartItems = $this->session->userdata('cart');
        for ($i = 0; $i < count($cartItems); $i++) {
            if ($cartItems[$i]['productId'] == $productId) {
                $removeIndex = $i;
            }
        }
        if ($removeIndex >= 0) {
            unset($cartItems[$removeIndex]);
            $cartItems = array_values($cartItems);
            $this->session->set_userdata('cart', $cartItems);
        }
    }
    public function clear(){
        $this->session->set_userdata('cart', array());
    }
    public function show(){
        var_dump($this->session->userdata('cart'));
    }
    public function updateCount(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $newCount = $inputs['inputNewCount'];
        $productId = $inputs['inputProductId'];
        $cartItems = $this->session->userdata('cart');
        for ($i = 0; $i < count($cartItems); $i++) {
            if ($cartItems[$i]['productId'] == $productId) {
                $cartItems[$i]['productCount'] = $newCount;
            }
        }
        $this->session->set_userdata('cart' , $cartItems);
    }
    public function uploadFile()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $uploadPath = $this->config->item('upload_path');
        $error = array();
        $errorClass = "alert alert-danger";
        $this->session->set_flashdata('class', $errorClass);
        if (!empty($_FILES["file"])) {
            $myFile = $_FILES["file"];
            if ($myFile["error"] !== UPLOAD_ERR_OK) {
                $result = array(
                    'type' => "red",
                    'content' => "خطای ارتباط با سرور",
                    'success' => false
                );
                echo json_encode($result);
                die();
            }
            $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
            $i = 0;
            $parts = pathinfo($name);
            while (file_exists($uploadPath . $name)) {
                $i++;
                $name = $parts["filename"] . "_" . $i . "." . $parts["extension"];
            }
            if ($myFile['size'] > 10242880) {
                $result = array(
                    'type' => "red",
                    'content' => "حجم فایل بیشتر از 10 مگابایت است",
                    'success' => false
                );
                echo json_encode($result);
                die();
            }
            $allowedExtensions = array('jpg', 'png', 'gif', 'jpeg', 'pdf', 'psd');
            $temp = explode(".", $myFile["name"]);
            $extension = strtolower(end($temp));
            if (!in_array($extension, $allowedExtensions)) {
                $result = array(
                    'type' => "red",
                    'content' => "فقط مجاز به بارگذاری تصویر، PSD , PDF هستید",
                    'success' => false
                );
                echo json_encode($result);
                die();
            }
            $fileName = md5(rand(100, 9999) . microtime()) . '_' . $name;
            $success = move_uploaded_file($myFile["tmp_name"], $uploadPath . $fileName);
            if (!$success) {
                $result = array(
                    'type' => "red",
                    'content' => "خطایی رخ داده است",
                    'success' => false
                );
                echo json_encode($result);
                die();
            } else {
                chmod($uploadPath . $fileName, 0644);
                $result = array(
                    'type' => "green",
                    'content' => "بارگذاری با موفقیت انجام شد",
                    'fileSrc' => base_url('uploads/') . $fileName,
                    'success' => true
                );
                echo json_encode($result);
                die();
            }
        } else {
            $result = array(
                'type' => "green",
                'content' => "بارگذاری با موفقیت انجام شد",
                'fileSrc' => "",
                'success' => true
            );
            echo json_encode($result);
            die();
        }
    }

    public function payment(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'اطلاعات ارسال ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['userAddress'] = $this->ModelUser->getUserAddressByUserId($userId);
        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/cart/payment/index', $data);
        $this->load->view('ui/cart/payment/index_css');
        $this->load->view('ui/cart/payment/index_js');
        $this->load->view('ui/static/footer');
    }
    public function updateAddressId($addressId){
        $this->session->set_userdata('addressId' , $addressId);
    }
    public function sendMethod(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'نحوه ارسال ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['userAddress'] = $this->ModelUser->getUserAddressByUserId($userId);
        $data['sendMethods'] = $this->ModelUser->getSendMethods();
        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/cart/send_method/index', $data);
        $this->load->view('ui/cart/send_method/index_css');
        $this->load->view('ui/cart/send_method/index_js');
        $this->load->view('ui/static/footer');
    }
    public function updateSendMethodId($sendMethodId){
        $this->session->set_userdata('sendMethodId' , $sendMethodId);
    }
    public function payMethod(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'روش پرداخت ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/cart/pay_method/index', $data);
        $this->load->view('ui/cart/pay_method/index_css');
        $this->load->view('ui/cart/pay_method/index_js');
        $this->load->view('ui/static/footer');
    }
    public function finalCheck(){
        $this->session->userdata('cart');
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'بازبینی سفارش ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['userAddress'] = $this->ModelUser->getUserAddressByUserId($userId);
        $data['sendMethods'] = $this->ModelUser->getSendMethods();
        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/cart/final_check/index', $data);
        $this->load->view('ui/cart/final_check/index_css');
        $this->load->view('ui/cart/final_check/index_js');
        $this->load->view('ui/static/footer');
    }

    public function startPayment(){
        $orderInfo = $this->session->userdata('cart');
        $inputs = array();
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $inputs['inputOrderUserId'] = $userId;
        $inputs['inputOrderAddressId'] = $this->session->userdata('addressId');
        $inputs['inputOrderSendMethodId'] = $this->session->userdata('addressId');
        $inputs['inputOrderTotalPrice'] = $this->session->userdata('totalPrice');
        $inputs['inputOrderSendMethodPrice'] = $this->session->userdata('sendMethodPrice');

        $orderId = $this->ModelOrder->doAddOrder($inputs);
        $this->ModelOrder->doAddOrderItems($orderInfo , $orderId);
        $this->session->set_userdata('OrderId' , $orderId);

        $this->load->helper('payment/zarinpal/nusoap');
        $MerchantID = '2e809336-c5d4-11e6-8edd-000c295eb8fc';
        $Description = 'خرید اعتبار از درگاه';
        $CallbackURL = base_url('Cart/endPayment');
        $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentRequest', [
            [
                'MerchantID' => $MerchantID,
                'Amount' => 100,
                'Description' => $Description,
                'Email' => 'info@koofadesign.ir',
                'CallbackURL' => $CallbackURL,
            ],
        ]);
        if ($result['Status'] == 100) {
            header('Location: https://www.zarinpal.com/pg/StartPay/' . $result['Authority']);
        } else {
            $CallbackURL = base_url('Cart/endPayment?error=true');
            header('Location: ' . $CallbackURL);
        }
    }
    public function endPayment()
    {
        $totalPrice = $this->session->userdata('totalPrice');
        $orderId = $this->session->userdata('OrderId');
        if(isset($orderId) && !empty($orderId)) {
            $this->load->helper('payment/zarinpal/nusoap');
            $MerchantID = '2e809336-c5d4-11e6-8edd-000c295eb8fc';
            $Amount = 100;//$totalPrice;
            $Authority = $_GET['Authority'];
            if ($_GET['Status'] == 'OK') {
                $client = new nusoap_client('https://www.zarinpal.com/pg/services/WebGate/wsdl', 'wsdl');
                $client->soap_defencoding = 'UTF-8';
                $result = $client->call('PaymentVerification', [
                    [
                        'MerchantID' => $MerchantID,
                        'Authority' => $Authority,
                        'Amount' => $Amount,
                    ],
                ]);
                if ($result['Status'] == 100) {
                    $data['success'] = true;
                    $this->ModelOrder->setOrderPaid($orderId);
                    $this->session->unset_userdata('OrderId');
                    $this->session->unset_userdata('cart');
                    $this->session->unset_userdata('totalPrice');
                } else {
                    $data['success'] = false;
                    $this->ModelOrder->setOrderFailed($orderId);
                }
            } else {
                $data['success'] = false;
                $this->ModelOrder->setOrderUnpaid($orderId);
            }
        }
        else{
            $data['success'] = false;
        }
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'نتیجه پرداخت ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $this->load->view('ui/static/header', $data);
        $this->load->view('ui/cart/result/index', $data);
        $this->load->view('ui/cart/result/index_css');
        $this->load->view('ui/cart/result/index_js');
        $this->load->view('ui/static/footer');
    }

}
