<?php

class ModelUserAccount extends CI_Model
{
    //works fine
    public function doRegister($inputs)
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
            $ActivationCode = rand(1001, 9999);
            $this->session->set_userdata('activationCode', $ActivationCode);
            $message = array(
                'verification-code'=> $ActivationCode
            );
            $code = $this->config->item('AccountConfirmCode');
            $result = sendSMS($inputs['inputPhone'],$code,$message);
            if ($result > 0) {
                $UserArray = array(
                    'UserFirstName' => $inputs['inputFirstName'],
                    'UserLastName' => $inputs['inputLastName'],
                    'UserPhone' => $inputs['inputPhone'],
                    'UserPassword' => md5($inputs['inputPassword']),
                    'UserActivationCode' => $ActivationCode,
                    'ModifiedDateTime' => jDateTime::date("Y-m-d H:i", false, false),
                    'CreateDateTime' => jDateTime::date("Y-m-d H:i", false, false)
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
    public function doVerify($inputs)
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
    public function doLogin($inputs)
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
            $arr = array(
                'type' => "green",
                'content' => "ورود با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
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
            if($userInfo['UserIsActive'] == '1'){
                $arr = array(
                    'type' => "red",
                    'content' => "حساب کاربری شما قبلا فعال شده است",
                    'success' => false
                );
                return $arr;
            }
            $ActivationCode = rand(1001, 9999);
            $this->session->set_userdata('activationCode', $ActivationCode);
            $this->session->set_userdata('currentUserId', $userInfo['UserId']);
            $message = array(
                'verification-code'=> $ActivationCode
            );
            $code = $this->config->item('AccountConfirmCode');
            $result = sendSMS($inputs['inputPhone'],$code,$message);
            if ($result > 0) {
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
            }
            else {
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
    public function doResetPassword($inputs)
    {
        $this->session->unset_userdata('redirectUrl');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(array('UserPhone' => $inputs['inputPhone']));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $userInfo = $query->result_array()[0];
            $newPassword = rand(1001, 9999);
            $message = array(
                'new-password'=> $newPassword
            );
            $code = $this->config->item('AccountNewPasswordCode');
            $result = sendSMS($inputs['inputPhone'],$code,$message);
            if ($result > 0) {
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
                    'content' => "تغییر رمز عبور با مشکل مواجه شده است.",
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