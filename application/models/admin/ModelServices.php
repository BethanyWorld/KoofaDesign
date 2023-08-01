<?php
class ModelServices extends CI_Model{
    public function getAllServices($inputs){
        $limit = $inputs['pageIndex'];
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('services');
        if(isset($inputs['inputServiceTitle']) && !empty($inputs['inputServiceTitle'])){
            $this->db->or_where('ServiceTitle', $inputs['inputServiceTitle']);
        }
        $this->db->order_by('RowId', 'ASC');

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
    public function getAllServicesWithoutPagination(){
        $this->db->select('*');
        $this->db->from('services');
        $this->db->order_by('RowId', 'ASC');
        return $this->db->get()->result_array();
    }
    public function getServicesByServicesId($id){
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('RowId', $id);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;
        return $result;
    }
    public function doAddServices($inputs)
    {
        $Array = array(
            'ServiceTitle' => $inputs['inputServiceTitle']
        );
        $this->db->trans_start();
        $this->db->insert('services', $Array);
        $rowId = $this->db->insert_id();
	    foreach ( $inputs['inputServiceCategories'] as $id ) {
		    $Array = array(
			    'ServiceId' => $rowId,
			    'CategoryId' => $id
		    );
		    $this->db->insert('services_category_relation', $Array);
	    }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن ناموفق بود",
                'success' => false
            );
            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doEditServices($inputs) {
        $Array = array(
            'ServiceTitle' => $inputs['inputServiceTitle']
        );
        $this->db->trans_start();
        $this->db->where('RowId', $inputs['inputRowId']);
        $this->db->update('services', $Array);
	    $this->db->delete('services_category_relation', array(
		    'ServiceId' => $inputs['inputRowId']
	    ));
	    foreach ( $inputs['inputServiceCategories'] as $id ) {
		    $Array = array(
			    'ServiceId' => $inputs['inputRowId'],
			    'CategoryId' => $id
		    );
		    $this->db->insert('services_category_relation', $Array);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $arr = array(
                'type' => "red",
                'content' => "بروزرسانی ناموفق بود",
                'success' => false
            );
            return $arr;
        }
        else {
            $arr = array(
                'type' => "green",
                'content' => "بروزرسانی با موفقیت انجام شد",
                'success' => true
            );
            return $arr;
        }
    }
    public function doDeleteService($inputs) {
        $this->db->delete('services', array(
            'RowId' => $inputs['inputRowId']
        ));
        $this->db->delete('services_items', array(
            'ServiceId' => $inputs['inputRowId']
        ));
        $this->db->delete('services_category_relation', array(
            'ServiceId' => $inputs['inputRowId']
        ));
        $arr = array(
            'type' => "green",
            'content' => "حذف با موفقیت انجام شد",
            'success' => true
        );
        return $arr;
        /*End For Brand*/
    }

	public function getServicesItemsByServicesId($id){
		$this->db->select('*');
		$this->db->from('services_items');
		$this->db->where('ServiceId', $id);
		$query = $this->db->get()->result_array();
		$result['data'] = $query;
		return $result;
	}
	public function getServicesItemsByServiceItemId($id){
		$this->db->select('*');
		$this->db->from('services_items');
        $this->db->join('services' , 'services.RowId = services_items.ServiceId');
		$this->db->where('ServiceItemId', $id);
		return $this->db->get()->result_array();
	}
	public function getServicesCategoryByServicesId($id){
		$this->db->select('*');
		$this->db->from('services_category_relation');
		$this->db->where('ServiceId', $id);
		$query = $this->db->get()->result_array();
		$result['data'] = $query;
		return $result;
	}
	public function getServicesByCategoryId($id){
		$this->db->select('*');
		$this->db->from('services_category_relation');
		$this->db->join('services' , 'services.RowId = services_category_relation.ServiceId');
		$this->db->where('CategoryId', $id);
		$query = $this->db->get()->result_array();
		$result['data'] = $query;
		return $result;
	}


	public function doAddItems($inputs)
	{
		$Array = array(
			'ServiceItemTitle' => $inputs['inputServiceItemTitle'],
			'ServiceItemPrice' => $inputs['inputServiceItemPrice'],
			'ServiceId' => $inputs['inputServiceId']
		);
		$this->db->trans_start();
		$this->db->insert('services_items', $Array);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$arr = array(
				'type' => "red",
				'content' => "افزودن ناموفق بود",
				'success' => false
			);
			return $arr;
		} else {
			$arr = array(
				'type' => "green",
				'content' => "افزودن با موفقیت انجام شد",
				'success' => true
			);
			return $arr;
		}
	}
	public function doEditItems($inputs)
	{
		$Array = array();
		if($inputs['inputServiceItemType'] == 'Title'){
			$Array = array(
				'ServiceItemTitle' => $inputs['inputServiceItemValue']
			);
		}
		if($inputs['inputServiceItemType'] == 'Price'){
			$Array = array(
				'ServiceItemPrice' => $inputs['inputServiceItemValue']
			);
		}
		$this->db->trans_start();
		$this->db->where('ServiceItemId', $inputs['inputServiceItemId']);
		$this->db->update('services_items', $Array);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE) {
			$arr = array(
				'type' => "red",
				'content' => "افزودن ناموفق بود",
				'success' => false
			);
			return $arr;
		} else {
			$arr = array(
				'type' => "green",
				'content' => "افزودن با موفقیت انجام شد",
				'success' => true
			);
			return $arr;
		}
	}
	public function doRemoveItem($inputs) {
		$this->db->delete('services_items', array(
			'ServiceItemId' => $inputs['inputServiceItemId']
		));
		$arr = array(
			'type' => "green",
			'content' => "حذف با موفقیت انجام شد",
			'success' => true
		);
		return $arr;
		/*End For Brand*/
	}

}
?>