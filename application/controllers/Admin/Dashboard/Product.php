<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->helper('admin/admin_login');
        $this->load->model('admin/ModelProductCategory');
        $this->load->model('admin/ModelProduct');
        $this->load->model('admin/ModelMaterial');
        $this->load->model('admin/ModelSizes');
    }
    public function index(){
        $headerData['pageTitle'] = 'فهرست محصولات';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/home/index');
        $this->load->view('admin_panel/product/home/index_css');
        $this->load->view('admin_panel/product/home/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelProduct->getProductByPagination($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/product/home/pagination', $data, TRUE);
        echo json_encode($data);
    }
    /*----------------------------------------------Normal Product*/
    public function addNormal(){
        $headerData['pageTitle'] = 'افزودن محصول';
        $data['productType'] = $this->config->item('productType');
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree();
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/add/normal/index', $data);
        $this->load->view('admin_panel/product/add/normal/index_css');
        $this->load->view('admin_panel/product/add/normal/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddNormalProduct()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doAddNormalProduct($inputs);
        echo json_encode($result);
    }
    public function editNormal($productId)
    {
        $headerData['pageTitle'] = 'ویرایش محصول';
        $data['productType'] = $this->config->item('productType');
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['data'] = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $data['productPrice'] = $this->ModelProduct->getProductPriceProductId($productId);
        $data['productCategories'] = $this->ModelProduct->getProductCategoryByProductId($productId)['data'];
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($data['productCategories']);


        $data['rootCategoryId'] = $this->ModelProduct->getProductRootCategoryByProductId($productId)['data'][0];
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($data['rootCategoryId']['CategoryId']);
        $data['productRootCategoryProperties'] = $this->getProductPropertyByCategoryId($data['rootCategoryId']['CategoryId'] , false);
        $data['productSelectedProperties'] = $this->ModelProduct->getProductPropertyByProductId($productId)['data'];
        $data['productSecondaryImages'] = $this->ModelProduct->getProductSecondaryByProductId($productId)['data'];
        $data['productTags'] = $this->ModelProduct->getProductTagsByProductId($productId)['data'];

        /*var_dump($data['productSelectedProperties']);
        die();*/

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/edit/normal/index', $data);
        $this->load->view('admin_panel/product/edit/normal/index_css');
        $this->load->view('admin_panel/product/edit/normal/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditNormalProduct()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doEditNormalProduct($inputs);
        echo json_encode($result);
    }
    /*----------------------------------------------End Normal Product*/
    /*----------------------------------------------Normal Upload Product*/
    public function addNormalUpload(){
        $headerData['pageTitle'] = 'افزودن محصول';
        $data['productType'] = $this->config->item('productType');
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree();
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/add/normal_upload/index', $data);
        $this->load->view('admin_panel/product/add/normal_upload/index_css');
        $this->load->view('admin_panel/product/add/normal_upload/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddNormalUploadProduct()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doAddNormalProduct($inputs);
        echo json_encode($result);
    }
    public function editNormalUpload($productId)
    {
        $headerData['pageTitle'] = 'ویرایش محصول';
        $data['productType'] = $this->config->item('productType');
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['data'] = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $data['productPrice'] = $this->ModelProduct->getProductPriceProductId($productId);
        $data['productCategories'] = $this->ModelProduct->getProductCategoryByProductId($productId)['data'];
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($data['productCategories']);


        $data['rootCategoryId'] = $this->ModelProduct->getProductRootCategoryByProductId($productId)['data'][0];
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($data['rootCategoryId']['CategoryId']);
        $data['productRootCategoryProperties'] = $this->getProductPropertyByCategoryId($data['rootCategoryId']['CategoryId'] , false);
        $data['productSelectedProperties'] = $this->ModelProduct->getProductPropertyByProductId($productId)['data'];
        $data['productSecondaryImages'] = $this->ModelProduct->getProductSecondaryByProductId($productId)['data'];
        $data['productTags'] = $this->ModelProduct->getProductTagsByProductId($productId)['data'];


        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/edit/normal_upload/index', $data);
        $this->load->view('admin_panel/product/edit/normal_upload/index_css');
        $this->load->view('admin_panel/product/edit/normal_upload/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditNormalUploadProduct()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doEditNormalProduct($inputs);
        echo json_encode($result);
    }
    /*----------------------------------------------End Normal Upload Product*/
    /*----------------------------------------------Design Fix Size Product*/
    public function addDesignFixSize(){
        $headerData['pageTitle'] = 'افزودن محصول';
        $data['productType'] = $this->config->item('productType');
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree();
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree();
        $data['materials'] = $this->ModelMaterial->getAllMaterialsWithoutPagination();
        $data['sizes'] = $this->ModelSizes->getAllSizesWithoutPagination();

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/add/fix_size/index', $data);
        $this->load->view('admin_panel/product/add/fix_size/index_css');
        $this->load->view('admin_panel/product/add/fix_size/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddDesignFixSizeProduct()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doAddDesignFixSizeProduct($inputs);
        echo json_encode($result);
    }
    public function editDesignFixSize($productId)
    {
        $headerData['pageTitle'] = 'ویرایش محصول';
        $data['productType'] = $this->config->item('productType');
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['data'] = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $data['productPrice'] = $this->ModelProduct->getProductPriceProductId($productId);
        $data['productCategories'] = $this->ModelProduct->getProductCategoryByProductId($productId)['data'];
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($data['productCategories']);

        $data['rootCategoryId'] = $this->ModelProduct->getProductRootCategoryByProductId($productId)['data'][0];
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($data['rootCategoryId']['CategoryId']);
        $data['productRootCategoryProperties'] = $this->getProductPropertyByCategoryId($data['rootCategoryId']['CategoryId'] , false);
        $data['productSelectedProperties'] = $this->ModelProduct->getProductPropertyByProductId($productId)['data'];
        $data['productSecondaryImages'] = $this->ModelProduct->getProductSecondaryByProductId($productId)['data'];
        $data['productTags'] = $this->ModelProduct->getProductTagsByProductId($productId)['data'];

        $data['materials'] = $this->ModelMaterial->getAllMaterialsWithoutPagination();
        $data['sizes'] = $this->ModelSizes->getAllSizesWithoutPagination();


        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/edit/fix_size/index', $data);
        $this->load->view('admin_panel/product/edit/fix_size/index_css');
        $this->load->view('admin_panel/product/edit/fix_size/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditDesignFixSizeProduct()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doEditDesignFixSizeProduct($inputs);
        echo json_encode($result);
    }
    /*----------------------------------------------End Design Fix Size Product*/
    /*----------------------------------------------Design Free Size Product*/
    public function addDesignFreeSize(){
        $headerData['pageTitle'] = 'افزودن محصول';
        $data['productType'] = $this->config->item('productType');
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree();
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree();
        $data['materials'] = $this->ModelMaterial->getAllMaterialsWithoutPagination();
        $data['sizes'] = $this->ModelSizes->getAllSizesWithoutPagination();

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/add/free_size/index', $data);
        $this->load->view('admin_panel/product/add/free_size/index_css');
        $this->load->view('admin_panel/product/add/free_size/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doAddDesignFreeSizeProduct()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doAddDesignFreeSizeProduct($inputs);
        echo json_encode($result);
    }
    public function editDesignFreeSize($productId)
    {
        $headerData['pageTitle'] = 'ویرایش محصول';
        $data['productType'] = $this->config->item('productType');
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['data'] = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $data['productPrice'] = $this->ModelProduct->getProductPriceProductId($productId);
        $data['productCategories'] = $this->ModelProduct->getProductCategoryByProductId($productId)['data'];
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($data['productCategories']);

        $data['rootCategoryId'] = $this->ModelProduct->getProductRootCategoryByProductId($productId)['data'][0];
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($data['rootCategoryId']['CategoryId']);
        $data['productRootCategoryProperties'] = $this->getProductPropertyByCategoryId($data['rootCategoryId']['CategoryId'] , false);
        $data['productSelectedProperties'] = $this->ModelProduct->getProductPropertyByProductId($productId)['data'];
        $data['productSecondaryImages'] = $this->ModelProduct->getProductSecondaryByProductId($productId)['data'];
        $data['productTags'] = $this->ModelProduct->getProductTagsByProductId($productId)['data'];

        $data['materials'] = $this->ModelMaterial->getAllMaterialsWithoutPagination();
        $data['sizes'] = $this->ModelSizes->getAllSizesWithoutPagination();


        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/edit/free_size/index', $data);
        $this->load->view('admin_panel/product/edit/free_size/index_css');
        $this->load->view('admin_panel/product/edit/free_size/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }
    public function doEditDesignFreeSizeProduct()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $result = $this->ModelProduct->doEditDesignFreeSizeProduct($inputs);
        echo json_encode($result);
    }
    /*----------------------------------------------End Design free Size Product*/


    public function special(){
        $headerData['pageTitle'] = 'فهرست محصولات';
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/special/index');
        $this->load->view('admin_panel/product/special/index_css');
        $this->load->view('admin_panel/product/special/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doSpecialPagination(){
        $inputs = $this->input->post(NULL, TRUE);
        $data = $this->ModelProduct->getSpecialProductByPagination($inputs);
        $data['htmlResult'] = $this->load->view('admin_panel/product/special/pagination', $data, TRUE);
        echo json_encode($data);
    }
    public function addSpecial($productId)
    {
        $headerData['pageTitle'] = 'ویرایش محصول';
        $data['productType'] = $this->config->item('productType');
        $data['allCategories'] = $this->ModelProductCategory->getAllProductCategory()['data'];
        $data['data'] = $this->ModelProduct->getProductByProductId($productId)['data'][0];
        $data['productPrice'] = $this->ModelProduct->getProductPriceProductId($productId);
        $data['productCategories'] = $this->ModelProduct->getProductCategoryByProductId($productId)['data'];
        $data['categoryCheckBoxTree'] = $this->ModelProductCategory->printCategoryCheckBoxTree($data['productCategories']);


        $data['rootCategoryId'] = $this->ModelProduct->getProductRootCategoryByProductId($productId)['data'][0];
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree($data['rootCategoryId']['CategoryId']);
        $data['productRootCategoryProperties'] = $this->getProductPropertyByCategoryId($data['rootCategoryId']['CategoryId'] , false);
        $data['productSelectedProperties'] = $this->ModelProduct->getProductPropertyByProductId($productId)['data'];
        $data['productSecondaryImages'] = $this->ModelProduct->getProductSecondaryByProductId($productId)['data'];
        $data['productTags'] = $this->ModelProduct->getProductTagsByProductId($productId)['data'];

        /*var_dump($data['productSelectedProperties']);
        die();*/

        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/special_add/index', $data);
        $this->load->view('admin_panel/product/special_add/index_css');
        $this->load->view('admin_panel/product/special_add/index_js', $data);
        $this->load->view('admin_panel/static/footer');
    }




    public function doDeleteProduct()
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
         $result = $this->ModelProduct->doDeleteProduct($inputs);
        echo json_encode($result);
    }
    public function search(){
        $headerData['pageTitle'] = 'جستجوی محصولات';
        $data['categoryTree'] = $this->ModelProductCategory->printCategoryTree();
        $this->load->view('admin_panel/static/header', $headerData);
        $this->load->view('admin_panel/product/search/index', $data);
        $this->load->view('admin_panel/product/search/index_css');
        $this->load->view('admin_panel/product/search/index_js');
        $this->load->view('admin_panel/static/footer');
    }
    public function doSearch()
    {
        $inputs = $this->input->post(NULL, TRUE);
        $dataTable['dataTable'] = $this->ModelProduct->getProductByFilter($inputs);
        echo $this->load->view('admin_panel/product/search/pagination', $dataTable, TRUE);
    }
    public function getProductPropertyByCategoryId($categoryId , $print=true)
    {
        $result = $this->ModelProductCategory->getProductPropertyByCategoryId($categoryId);
        for ($i = 0; $i < count($result); $i++) {
            $result[$i]['properties'] = $this->ModelProductCategory->getProductPropertyOptionByPropertyId($result[$i]['PropertyId']);
        }
        if($print){
            echo $this->printProductPropertyDropDown($result);
        }
        else{
            return $result;
        }
    }
    protected function printProductPropertyDropDown($result){
        foreach ($result as $item) { ?>
            <div class="col-xs-12 col-sm-6 col-xs-12">
                <label for="<?php echo $item['PropertyId']; ?>"><?php echo $item['PropertyTitle']; ?></label>
                <div class="form-group">
                    <div class="form-line">
                        <select class="form-control" id="<?php echo $item['PropertyId']; ?>" name="inputProductCategoryProperty"
                                data-id="<?php echo $item['PropertyId']; ?>">
                            <?php
                            foreach ($item['properties'] as $propertyOption) { ?>
                                <option value="<?php echo $propertyOption['CategoryPropertyOptionId'] ?>">
                                    <?php echo $propertyOption['CategoryPropertyOptionTitle'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        <?php }
    }
    protected function printCategoryCheckBoxTree(){
        return $this->printCategoryCheckBoxTree();
    }

}
