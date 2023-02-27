<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utility extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelProductCategory');
        $this->load->model('ui/ModelProduct');
    }
    public function autoSuggestProduct(){
        $inputs = $this->input->post(NULL, TRUE);
        $inputs = array_map(function ($v) {return strip_tags($v);}, $inputs);
        $inputs = array_map(function ($v) {return remove_invisible_characters($v);}, $inputs);
        $inputs = array_map(function ($v) {return makeSafeInput($v);}, $inputs);
        $result['data'] = $this->ModelProduct->autoSuggestProduct($inputs);
        $view = $this->load->view('ui/v2/static/auto-suggest' , $result , TRUE);
        echo $view;
    }
}
