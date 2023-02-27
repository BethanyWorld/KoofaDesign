<?php

include_once("enp/nusoap.php");

class Enpayment{


    var $CI;
    public function __construct()
    {
        // Set the super object to a local variable for use later
        $this->CI =& get_instance();

        $this->config =& get_config();
    }

////////////////////////////////////////////////////login///////////////////////////////////////////////////
    public function login($username, $password)
    {
        $client = new nusoap_client('https://pna.shaparak.ir/ref-payment2/jax/merchantService?wsdl',true);
        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
            echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
            exit();
        }
        $params = array('param' => array('Password' => $password, 'UserName' => $username));
        $result = $client->call('MerchantLogin', array('param' => array('Password' => $password, 'UserName' => $username)));

        if ($client->fault) {
            echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
        } else {
            $err = $client->getError();
            if ($err) {
                echo '<h2>Error</h2><pre>' . $err . '</pre>';
            } else {
                //echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
            }
        }
        //print_r($result);
        return $result;
    }
//////////////////////////////////////////////////logout//////////////////////////////////////////////////
    public function logout($login){

        $client = new nusoap_client('https://pna.shaparak.ir/ref-payment/jax/merchantAuth?wsdl', true);

        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
            echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
            exit();
        }

        $params = array('context' => array('data' => array('entry' => array('key' => 'SESSION_ID', 'value' => $login))));


        $result = $client->call('logout', $params); //print_r($params);

        if ($client->fault) {
            echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>';
            print_r($result);
            echo '</pre>';
        } else {
            $err = $client->getError();
            if ($err) {
                echo '<h2>Error</h2><pre>' . $err . '</pre>';
            } else {
                //echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
            }
        }

        //print_r($result);
        return $result;

    }

////////////////////////////////////////////////////getPurchaseParamsToSign/////////////////////////////////////////////////////
    public function getPurchaseParamsToSign($params)
    {
        $resNum = $params['ReserveNum'];
        $amount = $params['Amount'];
        $redirectUrl = $params['RedirectUrl'];
        $wsContext = $params['WSContext'];
        $transType = $params['TransType'];

        $client = new nusoap_client('https://pna.shaparak.ir/ref-payment2/jax/merchantService?wsdl',true);
        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
            echo '<h2>Debug</h2><pre>' .htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
            exit();
        }
        $params2 = array('param' => array('WSContext' => $wsContext, 'ReserveNum' => $resNum, 'Amount' => $amount, 'AmountSpecified' => true, 'RedirectUrl' => $redirectUrl, 'TransType' => $transType));
        $result = $client->call('GenerateTransactionDataToSign', $params2);
        if ($client->fault) {
            echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
        } else {
            $err = $client->getError();
            if ($err) {
                echo '<h2>Error</h2><pre>' . $err . '</pre>';
            } else {
                //echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
            }
        }
        return $result;
    }
//////////////////////////////////////////////////generateSignedPurchaseToken/////////////////////////////////////////////////////////////
    public function generateSignedPurchaseToken($params)
    {
        $wsContext = $params['WSContext'];
        $signature = $params['Signature'];
        $uniqueId = $params['UniqueId'];

        $client = new nusoap_client('https://pna.shaparak.ir/ref-payment2/jax/merchantService?wsdl',true);
        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
            echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
            exit();
        }
        $params3 = array('param' => array('WSContext' => $wsContext, 'UniqueId' => $uniqueId , 'Signature' => $signature));
        $result = $client->call('GenerateSignedDataToken',
            array('param' => array('WSContext' => $wsContext, 'UniqueId' => $uniqueId , 'Signature' => $signature)));

        if ($client->fault) {
            echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
        } else {
            $err = $client->getError();
            if ($err) {
                echo '<h2>Errorrrrrrrr</h2><pre>' . $err . '</pre>';
            } else {
                //echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
            }
        }
        return $result;
    }

///////////////////////////////////////////tokenVerifyTransaction//////////////////////////////////////////////////////////////
    public function tokenPurchaseVerifyTransaction($params)
    {
        $wsContext = $params['WSContext'];
        $token = $params['Token'];
        $referenceNumber = $params['RefNum'] ;

        $client = new nusoap_client('https://pna.shaparak.ir/ref-payment2/jax/merchantService?wsdl',true);
        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
            echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
            exit();
        }

        $params4 = array('param' => array('WSContext' => $wsContext ,'Token' => $token,'RefNum' => $referenceNumber));
        $result = $client->call('VerifyMerchantTrans', $params4);

        if ($client->fault) {
            echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
        } else {
            $err = $client->getError();
            if ($err) {
                echo '<h2>Error</h2><pre>' . $err . '</pre>';
            } else {
                //echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
            }
        }
        return $result;
    }

/////////////////////////////////////////////////ReverseTrans////////////////////////////////////////////////////////
    public function ReverseTrans($params)
    {
        $wsContext = $params['WSContext'];
        $referenceNumber = $params['RefNum'];
        $token = $params['Token'];

        $client = new nusoap_client('https://pna.shaparak.ir/ref-payment2/jax/merchantService?wsdl',true);
        $err = $client->getError();
        if ($err) {
            echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
            echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
            exit();
        }

        $params5 = array('param' => array('WSContext' => $wsContext ,'Token' => $token,'RefNum' => $referenceNumber));
        $result = $client->call('ReverseMerchantTrans', $params5);
        if ($client->fault) {
            echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
        } else {
            $err = $client->getError();
            if ($err) {
                echo '<h2>Error</h2><pre>' . $err . '</pre>';
            } else {
                //echo '<h2>Result</h2><pre>'; print_r($result); echo '</pre>';
            }
        }
        return $result;
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////	   
}	   