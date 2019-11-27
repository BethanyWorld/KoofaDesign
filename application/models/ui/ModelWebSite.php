<?php
/* this model is used for all minimal site sections  */
class ModelWebSite extends CI_Model{
    public function getAllSlides($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('product_main_slider');
        $this->db->order_by('SlideId', 'ASC');

        $tempDb = clone $this->db;
        $result['count'] = $tempDb->get()->num_rows();

        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['startPage'] = $start;
        } else {
            $result['data'] = false;
        }
        return $result;
    }
    public function getAllSlidesWithoutPagination(){
        $this->db->select('*');
        $this->db->from('product_main_slider');
        $this->db->order_by('SlideId', 'ASC');
        return $this->db->get()->result_array();
    }
    public function getSlideBySlideId($id){
        $this->db->select('*');
        $this->db->from('product_main_slider');
        $this->db->where('SlideId', $id);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function doAddSlide($inputs){
        $Array = array(
            'SlideTitle' => $inputs['inputSlideTitle'],
            'SlideImage' => $inputs['inputSlideImage'],
            'SlideUrl' => $inputs['inputSlideUrl'],
            'SlideButtonTitle' => $inputs['inputSlideButtonTitle']
        );
        $this->db->trans_start();
        $this->db->insert('product_main_slider', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن اسلاید محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن اسلاید محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditSlide($inputs)
    {
        $Array = array(
            'SlideTitle' => $inputs['inputSlideTitle'],
            'SlideImage' => $inputs['inputSlideImage'],
            'SlideUrl' => $inputs['inputSlideUrl'],
            'SlideButtonTitle' => $inputs['inputSlideButtonTitle']
        );
        $this->db->trans_start();
        $this->db->where('SlideId', $inputs['inputSlideId']);
        $this->db->update('product_main_slider', $Array);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی اسلاید محصول ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی اسلاید محصول با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteSlide($inputs)
    {
        $this->db->delete('product_main_slider', array(
            'SlideId' => $inputs['inputSlideId']
        ));
        $arr = array(
            'type' => "green",
            'content' => "حذف اسلاید محصول با موفقیت انجام شد",
            'success' => true
        );
        return $arr;
    }
}
?>