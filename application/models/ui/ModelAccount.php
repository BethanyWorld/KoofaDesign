<?php


class ModelAccount extends CI_Model
{
    //works fine
    public function doRegisterNormalUser($inputs)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('user.UserPhone' => $inputs['inputPhone']));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $arr = array(
                'type' => "red",
                'content' => "قبلا با این تلفن ثبت نام شده است",
                'success' => false
            );
            return $arr;
        } else {
            $ActivationCode = rand(1001,9999);
            $message = array(
                'verification-code'=> $ActivationCode
            );
            $code = $this->config->item('AccountConfirmCode]');
            var_dump($message);
            die();

            $result = sendSMS($inputs['inputPhone'],$code,$message);
            if ($result > 0) {
                $UserArray = array(
                    'UserFullName' => $inputs['inputFullName'],
                    'UserPhone' => $inputs['inputPhone'],
                    'UserPassword' => md5($inputs['inputPassword']),
                    'UserActivationCode' => $ActivationCode,
                    'UserCreateDateTime' => time()
                );
                $this->db->trans_start();
                $this->db->insert('user', $UserArray);
                $this->session->set_userdata('currentUserId', $this->db->insert_id());
                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $arr = array(
                        'type' => "red",
                        'content' => "ثبت نام با مشکل مواجه شده است.",
                        'success' => false
                    );
                    return $arr;
                } else {
                    $arr = array(
                        'type' => "green",
                        'content' => "کد تایید حساب کاربری به تلفن شما ارسال شد",
                        'success' => true
                    );
                    return $arr;
                }
            } else {
                $arr = array(
                    'type' => "red",
                    'content' => "ثبت نام با مشکل مواجه شده است.",
                    'success' => false
                );
                return $arr;
            }
        }
    }
    //works fine
    public function doVerifyNormalUser($inputs)
    {
        $userId = $this->session->userdata('currentUserId');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('UserActivationCode' => $inputs['inputActivationCode']));
        $this->db->where(array('UserId' => $userId));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('UserIsLogged', TRUE);
            $this->session->set_userdata('UserLoginInfo', $query->result_array());
            $UserArray = array('UserIsActive' => 1);
            $this->db->trans_start();
            $this->db->where('UserId', $userId);
            $this->db->update('user', $UserArray);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $arr = array(
                    'type' => "red",
                    'content' => "فعال سازی حساب با مشکل مواجه شد",
                    'success' => false
                );
                return $arr;
            } else {
                $arr = array(
                    'type' => "green",
                    'content' => "حساب کاربری با موفقیت فعال شد",
                    'success' => true
                );
                return $arr;
            }
        }
        $arr = array(
            'type' => "red",
            'content' => "کد تایید اشتباه است",
            'success' => false
        );
        return $arr;
    }
    //works fine
    public function doResetPassword($inputs)
    {
        $this->session->unset_userdata('redirectUrl');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('UserPhone' => $inputs['inputPhone']));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $userInfo = $query->result_array()[0];
            $newPassword =  rand(1001,9999);
            ini_set("soap.wsdl_cache_enabled", "0");
            $sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding' => 'UTF-8'));
            $parameters['username'] = "09120572107";
            $parameters['password'] = "Bethany1923#";
            $parameters['to'] = $inputs['inputPhone'];
            $parameters['from'] = "50001060658471";
            $parameters['bodyId'] = "3119";
            $parameters['text'] = array($newPassword);
            $result = $sms_client->SendByBaseNumber($parameters);
            if ($result->SendByBaseNumberResult > 15) {
                $UserArray = array('UserPassword' => md5($newPassword));
                $this->db->trans_start();
                $this->db->where('UserId', $userInfo['UserId']);
                $this->db->update('user', $UserArray);
                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $arr = array(
                        'type' => "red",
                        'content' => "مشکلی در تغییر رمز عبور وجود دارد",
                        'success' => false
                    );
                    return $arr;
                } else {
                    $arr = array(
                        'type' => "green",
                        'content' => "رمز عبور جدید به تلفن شما ارسال شد",
                        'success' => true
                    );
                    return $arr;
                }
            } else {
                $arr = array(
                    'type' => "red",
                    'content' => "ثبت نام با مشکل مواجه شده است.",
                    'success' => false
                );
                return $arr;
            }


        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }
    //works fine
    public function doResendCode($inputs)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('UserPhone' => $inputs['inputPhone']));
        $query = $this->db->get();
        if ($query->num_rows() <= 0) {
            $arr = array(
                'type' => "red",
                'content' => "اطلاعات نامعتیر است",
                'success' => false
            );
            return $arr;
        } else {
            $userInfo = $query->result_array()[0];
            $ActivationCode = rand(1001,9999);
            $this->session->set_userdata('activationCode', $ActivationCode);
            $this->session->set_userdata('currentUserId', $userInfo['UserId']);

            ini_set("soap.wsdl_cache_enabled", "0");
            $sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding' => 'UTF-8'));
            $parameters['username'] = "09120572107";
            $parameters['password'] = "Bethany1923#";
            $parameters['to'] = $inputs['inputPhone'];
            $parameters['from'] = "50001060658471";
            $parameters['bodyId'] = "3011";
            $parameters['text'] = array($ActivationCode);

            $result = $sms_client->SendByBaseNumber($parameters);
            if ($result->SendByBaseNumberResult > 15) {
                $UserArray = array('UserActivationCode' => $ActivationCode);
                $this->db->trans_start();
                $this->db->where('UserId', $userInfo['UserId']);
                $this->db->update('user', $UserArray);
                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $arr = array(
                        'type' => "red",
                        'content' => "ارسال کد فعال سازی با مشکل مواجه شده است",
                        'success' => false
                    );
                    return $arr;
                } else {
                    $arr = array(
                        'type' => "green",
                        'content' => "کد تایید حساب کاربری به تلفن شما ارسال شد",
                        'success' => true
                    );
                    return $arr;
                }
            } else {
                $arr = array(
                    'type' => "red",
                    'content' => "ارسال کد فعال سازی با مشکل مواجه شده است",
                    'success' => false
                );
                return $arr;
            }
        }
    }
    //works fine
    public function doLoginUser($inputs)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('UserPhone' => $inputs['inputPhone']));
        $this->db->where(array('UserPassword' => md5($inputs['inputPassword'])));
        $this->db->where(array('UserIsActive' => 1));

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->session->set_userdata('UserIsLogged', TRUE);
            $this->session->set_userdata('UserLoginInfo', $query->result_array());
            $redirectUrl = $this->session->userdata('redirectUrl');
            if($redirectUrl != "" && $redirectUrl != NULL){
                $arr = array(
                    'type' => "green",
                    'content' => "ورود با موفقیت انجام شد",
                    'success' => true,
                    'redirect' => $redirectUrl
                );
                $this->session->unset_userdata('redirectUrl');
            }
            else{
                $arr = array(
                    'type' => "green",
                    'content' => "ورود با موفقیت انجام شد",
                    'success' => true
                );
            }
            return $arr;
        }
        $arr = array(
            'type' => "red",
            'content' => "اطلاعات نامعتبر است",
            'success' => false
        );
        return $arr;
    }

    public function doResetLoggedUserPassword($inputs)
    {
        $userId = $this->session->userdata('currentUserId');
        $UserArray = array('NormalUserPassword' => md5($inputs['inputPassword']));
        $this->db->select('*');
        $this->db->from('normal_user');
        $this->db->where(array('normal_user.NormalUserId' => $userId));
        $this->db->where(array('normal_user.NormalUserPassword' => md5($inputs['inputCurrentPassword'])));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $this->db->trans_start();
            $this->db->where('NormalUserId', $userId);
            $this->db->update('normal_user', $UserArray);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $arr = array(
                    'type' => "red",
                    'content' => "مشکلی در تغییر رمز عبور وجود دارد",
                    'success' => false
                );
                return $arr;
            } else {
                $arr = array(
                    'type' => "green",
                    'content' => "رمز عبور با موفقیت تغییر یافت",
                    'success' => true
                );
                return $arr;
            }
        } else {
            $arr = array(
                'type' => "red",
                'content' => "اطلاعات نامعتبر است",
                'success' => true
            );
            return $arr;
        }

    }

}

?>