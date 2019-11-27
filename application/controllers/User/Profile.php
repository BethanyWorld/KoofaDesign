<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('user/user_login');
        $this->load->model('user/ModelUser');
        $this->load->model('ui/ModelCountry');
        $this->load->model('employer/dashboard/ModelJobCategory');
        $this->load->model('ui/ModelQuery');
        $this->load->model('admin/ModelAgent');
    }

    public function index()
    {
        $data['sideBarHtml'] = $this->load->view('user/static/sidebar', NULL, true);
        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle') . 'پنل کارجو ';
        $data['userInfo'] = $this->ModelUser->getUserProfileInfoByUserId($this->session->userdata('UserLoginInfo')[0]['UserId']);
        $data['majors'] = $this->ModelQuery->getMajorList();
        $data['states'] = $this->ModelCountry->getStateList();
        $data['cities'] = $this->ModelCountry->getCityByStateId($data['userInfo'][0]['UserStateId']);
        $data['agents'] = $this->ModelAgent->getAllAgents();
        $data['jobCategories'] = $this->ModelJobCategory->getAllJobCategories();

        $this->load->view('ui/v2/static/header', $data);
        $this->load->view('user/profile/index', $data);
        $this->load->view('user/profile/index_css');
        $this->load->view('user/profile/index_js', $data);
        $this->load->view('ui/v2/static/footer');
    }

    /* well done validation done */
    public function doUpdateProfile()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {
            return strip_tags($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return remove_invisible_characters($v);
        }, $inputs);
        $inputs = array_map(function ($v) {
            return makeSafeInput($v);
        }, $inputs);

        $this->form_validation->set_data($inputs);
        $this->form_validation->set_rules('inputUserFullName', 'نام و نام خانوادگی', 'trim|required|max_length[254]');
        $this->form_validation->set_rules('inputUserPhone', 'تلفن همراه', 'trim|required|max_length[15]|numeric');
        $this->form_validation->set_rules('inputUserJobTitle', 'عنوان شغلی', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('inputUserEmployStatus', 'وضعیت اشتغال', 'trim|required|max_length[25]|alpha');
        $this->form_validation->set_rules('inputUserEmail', 'ایمیل', 'trim|required|max_length[254]|valid_email');
        $this->form_validation->set_rules('inputUserStateId', 'استان', 'trim|required|max_length[3]|numeric');
        $this->form_validation->set_rules('inputUserCityId', 'شهر', 'trim|required|max_length[3]|numeric');
        $this->form_validation->set_rules('inputUserBirthDate', 'تاریخ تولد', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('inputUserGender', 'جنسیت', 'trim|required|max_length[5]|alpha');
        $this->form_validation->set_rules('inputUserMilitaryStatus', 'وضعیت خدمت سربازی', 'trim|required|max_length[12]|alpha');
        $this->form_validation->set_rules('inputUserMainMajorId', 'رشته تحصیلی', 'trim|required|numeric');
        $this->form_validation->set_rules('inputUserMainJobCategoryId', 'دسته بندی شغلی', 'trim|required|numeric');
        $this->form_validation->set_rules('inputUserAgentId', 'نمایندگی', 'trim|required|numeric');
        $this->form_validation->set_rules('inputUserAbout', 'درباره من', 'trim|required|min_length[10]|max_length[1024]');

        if ($this->form_validation->run() == FALSE) {
            $arr = array(
                'type' => "red",
                'content' => validation_errors()
            );
            echo json_encode($arr);
            die();
        }
        $userInfo = $this->session->userdata('UserLoginInfo')[0];
        $inputs['inputUserId'] = $userInfo['UserId'];
        $result = $this->ModelUser->doUpdateProfile($inputs);
        echo json_encode($result);
    }

    public function uploadFile()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $uploadPath = $this->config->item('user_upload_path');
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
            $allowedExtensions = array('jpg', 'png', 'gif', 'jpeg');
            $temp = explode(".", $myFile["name"]);
            $extension = strtolower(end($temp));
            if (!in_array($extension, $allowedExtensions)) {
                $result = array(
                    'type' => "red",
                    'content' => "فقط مجاز به بارگذاری تصویر هستید",
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
                    'fileSrc' =>  base_url('uploads/Users/') . $fileName,
                    'success' => true
                );
                echo json_encode($result);
                die();
            }
        }
        else {
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

}