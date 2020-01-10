<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config['base_url'] = 'http://localhost:8080/KoofaDesign/';
//$config['base_url'] = 'http://koofadesign.ir/';
$config['index_page'] = '';
$config['uri_protocol']	= 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language']	= 'persian';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = FALSE;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = TRUE;
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = 'bpYzH4olFrJDHuvihqEM0AIdotzljyuQ';
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'koofa_design_session';
$config['sess_expiration'] = 14400;
//$config['sess_save_path'] = NULL;
$config['sess_save_path'] = sys_get_temp_dir();
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= TRUE;

$config['standardize_newlines'] = FALSE;

$config['global_xss_filtering'] = FALSE;
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_koofa_design';
$config['csrf_cookie_name'] = 'csrf_cookie_koofa_design';
$config['csrf_expire'] = 14400;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();
$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';

$config['defaultImage'] = $config['base_url'] . 'assets/ui/images/no-img.png';
$config['defaultPageTitle'] = 'کوفادیزاین - ';
$config['API_KEY'] = 'AIzaSyACQqvivCiQe0wFhh1R4q4x3Hfmeuig3Y8';

$config['defaultPageSize'] = 6;
$config['upload_path']= './uploads/';

/* SMS Panel */
$config['AccountConfirmCode'] = 'h5q654ed8x';
$config['AccountNewPasswordCode'] = 'c8922i2kjy';
$config['SuccessOrderRegister'] = 'uia3n6frmp';
$config['SuccessOrderPayment'] = 'x5y798y3sh';

/* Enums */
$config['discountType'] = array(
    'UserBase' => 'مخصوص کاربر',
    'GeneralBase' => 'عمومی',
    'ProductBase' => 'مخصوص محصول',
    'CategoryBase' => 'محصوص دسته بندی',
);
$config['productType'] = array(
    'DesignFreeSize' => 'طراحی سایز آزاد',
    'DesignFixSize' => 'طراحی سایز ثابت',
    'NormalUpload' => 'معمولی /قابلیت آپلود',
    'Normal' => 'معمولی',
);
$config['orderStatus'] = array('Pend' ,'Failed','Done');
/* End Enums */

