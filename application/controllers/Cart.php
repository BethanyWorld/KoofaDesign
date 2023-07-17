<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(__DIR__ . '/../libraries/psp/RSAProcessor.class.php');
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
    }
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
        $this->load->model('admin/ModelDiscount');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
        $this->load->model('admin/ModelOrder');
        $this->load->model('admin/ModelServices');
        $this->load->model('user/ModelUser');
        if ($this->session->userdata('cart') == null) {
            $this->session->set_userdata('cart', array());
        }
    }
    public function index()
    {
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'سبد خرید ';
        $data['latestProduct'] = $this->ModelProduct->getLatestProduct();
        $data['allSizes'] = $this->ModelSizes->getAllSizesWithoutPagination();
        $data['allMaterials'] = $this->ModelMaterial->getAllMaterialsWithoutPagination();
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/cart/index', $data);
        $this->load->view('ui/v2/cart/index_css');
        $this->load->view('ui/v2/cart/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function addNormal($productId)
    {
        /* Get Items On Cart */
        $cartItems = $this->session->userdata('cart');
        $data = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $productPrice = $this->ModelProduct->getProductPriceProductId($productId);

        $item['productId'] = $data['ProductId'];
        $item['productTitle'] = $data['ProductTitle'];
        $item['productSubTitle'] = $data['ProductSubTitle'];
        $item['productPrice'] = $productPrice[0]['PriceValue'];
        $item['productImage'] = $data['ProductMockUpImage'];
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
        $item['productSubTitle'] = $data['ProductSubTitle'];
        $item['productPrice'] = $productPrice[0]['PriceValue'];
        $item['productImage'] = $data['ProductMockUpImage'];
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
        $services = $data['inputServices'];
        $services = json_decode($services , true);
        $cartItems = $this->session->userdata('cart');

        $data = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $productPrice = $this->ModelProduct->getProductPriceProductId($productId);
        $item['productId'] = $data['ProductId'];
        $item['productTitle'] = $data['ProductTitle'];
        $item['productSubTitle'] = $data['ProductSubTitle'];
        $item['productPrice'] = 0;
        $item['productInstallation'] = false;
        $item['productWidth'] = 0;
        $item['productHeight'] = 0;
        /**/
        foreach ($productPrice as $price) {
            if ($price['MaterialId'] == $materialId && $price['SizeId'] == $sizeId) {
                $item['productPrice'] = $price['PriceValue'];
                $item['productSizeId'] = $price['SizeId'];
                $item['productMaterialId'] = $price['MaterialId'];
            }
        }
        if ($productHasInstallation != 0) {
            $item['productPrice'] += $data['ProductInstallationPrice'];
            $item['productInstallation'] = true;
        }

        $item['productImage'] = $data['ProductMockUpImage'];
        $item['productUploadImage'] = $productImage;
        $item['productCount'] = 1;
        $item['productType'] = 'DesignFixSize';


        foreach ($services as $id) {
            $si = $this->ModelServices->getServicesItemsByServiceItemId($id);
            if(!empty($si)){
                $item['productPrice'] += $si[0]['ServiceItemPrice'];
            }
        }
        $item['productServices'] = json_encode($services);
        array_push($cartItems, $item);
        $this->session->set_userdata('cart', $this->uniqueArray($cartItems, 'productId'));
    }
    public function addDesignFreeSize(){
        $data = $this->input->post(NULL, TRUE);
        $productId = $data['inputProductId'];
        $materialId = $data['inputMaterialId'];
        $productWidth = $data['inputProductWidth'];
        $productHeight = $data['inputProductHeight'];
        $productImage = $data['inputProductUploadImage'];
        $services = $data['inputServices'];
        $services = json_decode($services , true);
        $cartItems = $this->session->userdata('cart');
        $data = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $productPrice = $this->ModelProduct->getProductPriceProductId($productId);
        $item['productId'] = $data['ProductId'];
        $item['productTitle'] = $data['ProductTitle'];
        $item['productSubTitle'] = $data['ProductSubTitle'];
        $item['productPrice'] = 0;
        $item['productInstallation'] = true;
        $item['productOldWidth'] = $productWidth;
        $item['productOldHeight'] = $productHeight;
        $item['productWidth'] = $productWidth;
        $item['productHeight'] = $productHeight;
        $item['productSizeId'] = '';//Free Size Has Not Size

        if (ceil(($productWidth / 10)) != ($productWidth / 10)) {
            $item['productWidth'] = ceil(($productWidth / 10))*10;
        }

        /**/
        foreach ($productPrice as $price) {
            if ($price['MaterialId'] == $materialId) {
                $item['productPrice'] = $price['PriceValue'] * $item['productHeight'] * $item['productWidth'];
                $item['productMaterialId'] = $price['MaterialId'];
            }
        }
        $item['productImage'] = $data['ProductMockUpImage'];
        $item['productUploadImage'] = $productImage;
        $item['productCount'] = 1;
        $item['productType'] = 'DesignFreeSize';

        foreach ($services as $id) {
            $si = $this->ModelServices->getServicesItemsByServiceItemId($id);
            if(!empty($si)){
                $item['productPrice'] += $si[0]['ServiceItemPrice'];
            }
        }



        $productCategories = $this->ModelProduct->getProductCategoryByProductId($productId)['data'];
        $installPrice = $productCategories[count($productCategories)-1]['CategoryInstallPrice'];

        $installPrice = $installPrice * $item['productHeight'] * $item['productWidth'];
        $item['productPrice'] += $installPrice;
        $item['productInstallationPrice'] = $installPrice;

        $item['productServices'] = json_encode($services);
        array_push($cartItems, $item);
        $this->session->set_userdata('cart', $cartItems);

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

        $items = $this->session->userdata('cart');
        $totalPrice = 0;
        foreach ($items as $item) {
            $totalPrice += $item['productPrice'] * $item['productCount'];
        }
        echo json_encode(array(
            'tp' => number_format($totalPrice)
        ));
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
    public function updateDiscountCode(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $inputDiscountCode = $inputs['inputDiscountCode'];

        $data = $this->ModelDiscount->getDiscountByDiscountCode($inputDiscountCode);

        if(empty($data)){
            $result = array(
                'type' => "red",
                'content' => "کد تخفیف نامعتبر است",
                'success' => false
            );
            echo json_encode($result);
            die();
        }
        else{
            $data = $data[0];
            if($data['DiscountPercent'] > 0){
                $massage = "مبلغ";
                $massage .= " ";
                $massage .= $data['DiscountPercent'];
                $massage .= " درصد ";
                $massage .= "از فاکتور نهایی کسر خواهد شد";
                $result = array(
                    'type' => "green",
                    'content' => $massage,
                    'success' => true
                );
                echo json_encode($result);
            }
            if($data['DiscountPrice'] > 0){
                $massage = "مبلغ";
                $massage .= " ";
                $massage .= $data['DiscountPrice'];
                $massage .= " هزار تومان ";
                $massage .= "از فاکتور نهایی کسر خواهد شد";
                $result = array(
                    'type' => "green",
                    'content' => $massage,
                    'success' => true
                );
                echo json_encode($result);
            }
            $array = array(
                'CartDiscount' => $data
            );
            $this->session->set_userdata($array);
        }
    }
    public function payment(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'اطلاعات ارسال ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        if(!isset($userId)){
            $this->session->set_userdata('returnUrl'  , base_url('Cart/payment'));
            redirect(base_url('Account/login'));
            die();
        }


        $data['cart'] = $this->session->userdata('cart');
        $shipment = array();
        $index = 0;
        foreach ($data['cart'] as $crt) {
            if($crt['productSizeId'] != null && $crt['productSizeId'] != '' ) {
                $data['cart'][$index]['meta'] = $this->ModelSizes->getSizeBySizeId($crt['productSizeId'])['data'];
             }
            else {
                $data['cart'][$index]['meta']= $this->ModelMaterial->getMaterialByMaterialId($crt['productMaterialId'])['data'];
             }
            $index+=1;
        }

        foreach ($data['cart'] as $item) {
            var_dump($item['meta'][0]['Shipment']);

        }

        $cartShipmentTotalWeight = 0;
        foreach ($data['cart'] as $crt) {
            if($crt['productType'] == 'DesignFreeSize'){
                $width = $crt['productWidth'];
                $height = $crt['productHeight'];
                $zekhamat = 5; /* prodcut zekhamat is default 5cm */
                $vaznhajmi =  ($width  * $height * $zekhamat) / 6000;
                $vazngerami=  ($width  * $height * $zekhamat)/1000;
                $VAZNAKHAR = 0;
                if($vaznhajmi > $vazngerami){
                    $VAZNAKHAR = $vaznhajmi;
                } else{
                    $VAZNAKHAR = $vazngerami;
                }
                $cartShipmentTotalWeight+=$VAZNAKHAR;
            }
            if($crt['productType'] == 'DesignFixSize'){
                $width = $crt['meta']['SizeWidth'];
                $height = $crt['meta']['SizeHeight'];
                $zekhamat = $crt['meta']['SizeErtefa'];
                $vaznhajmi =  ($width  * $height * $zekhamat) / 6000;
                $vazngerami=  $crt['meta']['SizeWeight']/1000;
                $VAZNAKHAR = 0;
                if($vaznhajmi > $vazngerami){
                    $VAZNAKHAR = $vaznhajmi;
                } else{
                    $VAZNAKHAR = $vazngerami;
                }
                $cartShipmentTotalWeight+=$VAZNAKHAR;
            }
        }



        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['userAddress'] = $this->ModelUser->getUserAddressByUserId($userId);
        $data['sendMethods'] = $this->ModelUser->getSendMethods();
        $data['shipments'] = $shipment;
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/cart/payment/index', $data);
        $this->load->view('ui/v2/cart/payment/index_css');
        $this->load->view('ui/v2/cart/payment/index_js');
        $this->load->view('ui/v2/static/footer');
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
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/cart/send_method/index', $data);
        $this->load->view('ui/v2/cart/send_method/index_css');
        $this->load->view('ui/v2/cart/send_method/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function updateSendMethodId($sendMethodId){
        $this->session->set_userdata('sendMethodId' , $sendMethodId);
    }
    public function payMethod(){
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'روش پرداخت ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/cart/pay_method/index', $data);
        $this->load->view('ui/v2/cart/pay_method/index_css');
        $this->load->view('ui/v2/cart/pay_method/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function finalCheck(){
        $this->session->userdata('cart');
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'بازبینی سفارش ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $data['userAddress'] = $this->ModelUser->getUserAddressByUserId($userId);
        $data['sendMethods'] = $this->ModelUser->getSendMethods();
        $data['latestProduct'] = $this->ModelProduct->getLatestProduct();
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/cart/final_check/index', $data);
        $this->load->view('ui/v2/cart/final_check/index_css');
        $this->load->view('ui/v2/cart/final_check/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function startPayment(){
        $this->load->library("Uuid");
        $resNum = $this->uuid->v4();
        $orderInfo = $this->session->userdata('cart');
        $inputs = array();
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $inputs['inputOrderResNum'] = $resNum;
        $inputs['inputOrderUserId'] = $userId;
        $inputs['inputOrderAddressId'] = $this->session->userdata('addressId');
        $inputs['inputOrderSendMethodId'] = $this->session->userdata('addressId');
        $inputs['inputOrderTotalPrice'] = $this->session->userdata('totalPrice');
        $inputs['inputOrderSendMethodPrice'] = 0;
        $inputs['inputOrderDiscountCode'] = $this->session->userdata('CartDiscount');
        if ($inputs['inputOrderDiscountCode']) {
            $inputs['inputOrderDiscountCode'] = $inputs['inputOrderDiscountCode']['DiscountCode'];
        }
        else{
            $inputs['inputOrderDiscountCode'] = "NONE";
        }
        $inputs['inputOrderToken'] = $this->generate_pay_token($inputs['inputOrderTotalPrice'], $resNum);
        $orderId = $this->ModelOrder->doAddOrder($inputs);
        $this->ModelOrder->doAddOrderItems($orderInfo , $orderId);
        $this->session->set_userdata('OrderId' , $orderId);
        $to = $this->session->userdata('UserLoginInfo')[0]['UserPhone'];
        $message = array( 'order-number'=> 'KFD-'.$orderId );
        $code = $this->config->item('SuccessOrderRegister');
        sendSMS($to,$code,$message);
        $data['Token'] = $inputs['inputOrderToken'];
        $data['url'] = $this->config->item('pay_submit_url');
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/cart/payment_redirect/index' , $data);
        $this->load->view('ui/v2/static/footer');
    }
    public function endPayment(){


        $token = $_POST['token'];
        //Get Order
        $order = $this->db->select('*')->from('orders')->where('OrderToken' , $token)->get()->result_array()[0];

        $OrderId  = $order['OrderId'];
        $orderId  = $order['OrderId'];
        $OrderUserId = $order['OrderUserId'];

        //Get User
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('UserId' => $OrderUserId));
        $userResult = $this->db->get()->result_array();
        $this->session->set_userdata('UserIsLogged', TRUE);
        $this->session->set_userdata('UserLoginInfo', $userResult);


        if (isset($orderId) && $orderId != '' && $orderId != NULL) {
            if ($this->input->post('State') == 'OK') {
                $this->load->library("Enpayment");
                $login = $this->enpayment->login(config_item('EN_WS_Username'), config_item('EN_WS_Password'));
                $login = $login['return'];
                $sessionId = $login['SessionId'];
                $params['WSContext'] = array('SessionId' => $sessionId, 'UserId' => config_item('EN_WS_Username'), 'Password' => config_item('EN_WS_Password'));
                $params['Token'] = $_POST['token'];
                $params['RefNum'] = $_POST['RefNum'];
                $VerifyTrans = $this->enpayment->tokenPurchaseVerifyTransaction($params);

                if (isset($VerifyTrans['return']['Result']) && $VerifyTrans['return']['Result'] == 'erSucceed') {
                    $this->ModelOrder->payment_update_after_pay(
                        $this->input->post('ResNum'),
                        $this->input->post('MID'),
                        $this->input->post('RefNum'),
                        $this->input->post('CustomerRefNum'),
                        $this->input->post('State'),
                        $this->input->post('CardPanHash'),
                        1
                    );
                    $data['success'] = true;
                } else {
                    $logout = $this->enpayment->logout($login);
                    $data['success'] = false;
                }
            }
            else {
                $this->payment_model->payment_update_failed($this->input->post('ResNum'), $this->input->post('State'), date("Y-m-d H:i:s"));
                $this->session->set_userdata('payment_pay', 'failed');
                $this->session->set_userdata('payment_pay_state', $this->input->post('State'));
                $this->checkout_model->set_status('canceled_byuser');
                $data['success'] = false;
            }
        } else {
            $data['success'] = false;
        }




        /*$totalPrice = $this->session->userdata('totalPrice');
        $orderId = $this->session->userdata('OrderId');
        $result = NULL;
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
                    $this->session->unset_userdata('CartDiscount');
                    $this->session->unset_userdata('totalPrice');

                    $to = $this->session->userdata('UserLoginInfo')[0]['UserPhone'];
                    $message = array(
                        'order-number'=> 'KFD-'.$orderId,
                        'order-date'=> jDateTime::date("Y-m-d H:i", false, false)
                    );
                    $code = $this->config->item('SuccessOrderPayment');
                    sendSMS($to,$code,$message);
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
        $data['result'] = $result;*/
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'نتیجه پرداخت ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];

        /*$this->session->unset_userdata('OrderId');
        $this->session->unset_userdata('cart');
        $this->session->unset_userdata('CartDiscount');
        $this->session->unset_userdata('totalPrice');*/

        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/cart/result/index', $data);
        $this->load->view('ui/v2/cart/result/index_css');
        $this->load->view('ui/v2/cart/result/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    public function endPaymentZarinPal()
    {
        $totalPrice = $this->session->userdata('totalPrice');
        $orderId = $this->session->userdata('OrderId');
        $result = NULL;
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
                    $this->session->unset_userdata('CartDiscount');
                    $this->session->unset_userdata('totalPrice');

                    $to = $this->session->userdata('UserLoginInfo')[0]['UserPhone'];
                    $message = array(
                        'order-number'=> 'KFD-'.$orderId,
                        'order-date'=> jDateTime::date("Y-m-d H:i", false, false)
                    );
                    $code = $this->config->item('SuccessOrderPayment');
                    sendSMS($to,$code,$message);
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
        $data['result'] = $result;
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'نتیجه پرداخت ';
        $userId = $this->session->userdata('UserLoginInfo')[0]['UserId'];
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($userId)[0];
        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('ui/v2/cart/result/index', $data);
        $this->load->view('ui/v2/cart/result/index_css');
        $this->load->view('ui/v2/cart/result/index_js');
        $this->load->view('ui/v2/static/footer');
    }
    private function generate_pay_token($amount = 10000, $resNum = 0){

        $this->load->library("Enpayment");
        $login = $this->enpayment->login(config_item('EN_WS_Username'), config_item('EN_WS_Password'));
        $login = $login['return'];
        $amount *= 10;
        $amount = (int)$amount;
        $sessionId = $login['SessionId'];
        $params['ReserveNum'] = $resNum;
        $params['Amount'] = $amount;
        $params['RedirectUrl'] = $this->config->item('pay_redirect_url');
        $params['WSContext'] = array('SessionId' => $sessionId, 'UserId' => config_item('EN_WS_Username'), 'Password' => config_item('EN_WS_Password'));
        $params['TransType'] = "enGoods";
        $getPurchaseParamsToSign = $this->enpayment->getPurchaseParamsToSign($params);
        $getPurchaseParamsToSign = $getPurchaseParamsToSign['return'];
        $uniqueId = $getPurchaseParamsToSign['UniqueId'];
        $dataToSign = $getPurchaseParamsToSign['DataToSign'];
        ///////////////////////state2
        $fm = fopen($this->config->item('msg_file'), "w");
        fwrite($fm, $dataToSign);
        fclose($fm);
        $fs = fopen($this->config->item('sign_file'), "w");
        fwrite($fs, "test");
        fclose($fs);
        //ssl certificate
        openssl_pkcs7_sign(realpath($this->config->item('msg_file')), realpath($this->config->item('sign_file')), $this->config->item('cert_file'),
            array($this->config->item('cert_file'), $this->config->item('cert_file_secret_key')),
            array(), PKCS7_NOSIGS
        );
        $data = file_get_contents($this->config->item('sign_file'));
        $parts = explode("\n\n", $data, 2);
        $string = $parts[1];
        $parts1 = explode("\n\n", $string, 2);
        $signature = $parts1[0];
        ///////////////////////state3
        $login = $this->enpayment->login(config_item('EN_WS_Username'), config_item('EN_WS_Password'));
        $params['UniqueId'] = $uniqueId;
        $params['Signature'] = $signature;
        $params['WSContext'] = array('SessionId' => $sessionId, 'UserId' => config_item('EN_WS_Username'), 'Password' => config_item('EN_WS_Password'));
        $generateSignedPurchaseToken = $this->enpayment->generateSignedPurchaseToken($params);
        $generateSignedPurchaseToken = $generateSignedPurchaseToken['return'];
        $token = $generateSignedPurchaseToken = $generateSignedPurchaseToken['Token'];
        if (!$token) {
            return 'ERROR';
        }
        return $token;

    }
}