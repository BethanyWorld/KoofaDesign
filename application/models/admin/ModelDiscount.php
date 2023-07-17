<?php


class ModelDiscount extends CI_Model
{
    public function getDiscountByPagination($limit = 1)
    {
        $start = ($limit - 1) * $this->config->item('defaultPageSize');
        $end = $this->config->item('defaultPageSize');
        $this->db->select('*');
        $this->db->from('discount');
        $this->db->order_by('DiscountId', 'DESC');
        $this->db->limit($end, $start);
        $query = $this->db->get()->result_array();
        $queryCount = $this->db->count_all_results('discount');
        if (count($query) > 0) {
            $result['data'] = $query;
            $result['count'] = $queryCount;

            return $result;
        } else {
            return false;
        }
    }

    public function getDiscountByDiscountCode($discountCode)
    {
        $this->db->select('*');
        $this->db->from('discount');
        $this->db->where('DiscountCode', $discountCode);

        return $this->db->get()->result_array();
    }

    public function getDiscountCategoryByProductCode($discountCode)
    {
        $this->db->select('DiscountCategoryId');
        $this->db->from('discount');
        $this->db->where('DiscountCode', $discountCode);
        $query = $this->db->get()->result_array();
        $result['data'] = $query;

        return $result;
    }

    public function doAddDiscountCode($inputs)
    {
        $Array = array(
            'DiscountCode' => $inputs['inputDiscountCode'],
            'DiscountType' => $inputs['inputDiscountType'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        if (isset($inputs['inputDiscountUserId'])) {
            $Array['DiscountUserId'] = $inputs['inputDiscountUserId'];
        }
        if (isset($inputs['inputDiscountStartTime'])) {
            $Array['DiscountStartTime'] = $inputs['inputDiscountStartTime'];
        }
        if (isset($inputs['inputDiscountEndTime'])) {
            $Array['DiscountEndTime'] = $inputs['inputDiscountEndTime'];
        }
        if (isset($inputs['inputDiscountPercent'])) {
            $Array['DiscountPercent'] = $inputs['inputDiscountPercent'];
        }
        if (isset($inputs['inputDiscountPrice'])) {
            $Array['DiscountPrice'] = $inputs['inputDiscountPrice'];
        }
        if (isset($inputs['inputDiscountProductId'])) {
            $Array['DiscountProductId'] = $inputs['inputDiscountProductId'];
        }
        $this->db->trans_start();
        if (isset($inputs['inputDiscountCategory']) && count($inputs['inputDiscountCategory']) > 0) {
            foreach ($inputs['inputDiscountCategory'] as $input) {
                $Array['DiscountCategoryId'] = $input;
                $this->db->insert('discount', $Array);
            }
        } else {
            $this->db->insert('discount', $Array);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            $arr = array(
                'type' => "red",
                'content' => "افزودن کد تخفیف ناموفق بود",
                'success' => false
            );

            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "افزودن کد تخفیف با موفقیت انجام شد",
                'success' => true
            );

            return $arr;
        }
    }

    public function doEditDiscountCode($inputs)
    {
        $Array = array(
            'DiscountCode' => $inputs['inputDiscountCode'],
            'DiscountType' => $inputs['inputDiscountType'],
            'CreateDateTime' => jDateTime::date("Y/m/d H:i:s", false, false)
        );
        if (isset($inputs['inputDiscountUserId'])) {
            $Array['DiscountUserId'] = $inputs['inputDiscountUserId'];
        }
        if (isset($inputs['inputDiscountStartTime'])) {
            $Array['DiscountStartTime'] = $inputs['inputDiscountStartTime'];
        }
        if (isset($inputs['inputDiscountEndTime'])) {
            $Array['DiscountEndTime'] = $inputs['inputDiscountEndTime'];
        }
        if (isset($inputs['inputDiscountPercent'])) {
            $Array['DiscountPercent'] = $inputs['inputDiscountPercent'];
        }
        if (isset($inputs['inputDiscountPrice'])) {
            $Array['DiscountPrice'] = $inputs['inputDiscountPrice'];
        }
        if (isset($inputs['inputDiscountProductId'])) {
            $Array['DiscountProductId'] = $inputs['inputDiscountProductId'];
        }
        $this->db->trans_start();
        $this->db->delete('discount', array(
            'DiscountCode' => $inputs['inputDiscountCode']
        ));
        if (isset($inputs['inputDiscountCategory']) && count($inputs['inputDiscountCategory']) > 0) {
            foreach ($inputs['inputDiscountCategory'] as $input) {
                $Array['DiscountCategoryId'] = $input;
                $this->db->insert('discount', $Array);
            }
        } else {
            $this->db->insert('discount', $Array);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            $arr = array(
                'type' => "red",
                'content' => "ویرایش کد تخفیف ناموفق بود",
                'success' => false
            );

            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "ویرایش کد تخفیف با موفقیت انجام شد",
                'success' => true
            );

            return $arr;
        }
    }

    public function doDeleteDiscountCode($inputs)
    {
        $this->db->trans_start();
        $this->db->delete('discount', array(
            'DiscountCode' => $inputs['inputDiscountCode']
        ));
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            $arr = array(
                'type' => "red",
                'content' => "حذف کد تخفیف ناموفق بود",
                'success' => false
            );

            return $arr;
        } else {
            $arr = array(
                'type' => "green",
                'content' => "حذف کد تخفیف با موفقیت انجام شد",
                'success' => true
            );

            return $arr;
        }
    }

    /*Works Fine */
    public function doChangeAllPrice($inputs)
    {
        $cost = $inputs['inputCost'];
        if ($inputs['inputCostType'] == 'price') {
            if ($inputs['inputCostIncDec'] == 'DEC') {
                $this->db->set('PriceValue', "PriceValue - $cost", false);
            } elseif ($inputs['inputCostIncDec'] == 'INC') {
                $this->db->set('PriceValue', "PriceValue + $cost", false);
            } else {
                $this->db->set('PriceValue', $cost, false);
            }
        } else {
            if ($inputs['inputCostIncDec'] == 'DEC') {
                $this->db->set('PriceValue', "PriceValue - (PriceValue/100 *$cost)", false);
            } else {
                $this->db->set('PriceValue', "PriceValue + (PriceValue/100 *$cost)", false);
            }
        }
        $this->db->update('product_price');
        $arr = array('type' => "green", 'content' => "ویرایش موفق بود", 'success' => true);

        return $arr;
    }

    /*Works Fine */
    public function doChangeCategoryPrice($inputs)
    {

        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();
        foreach ($products as $product) {
            $cost = $inputs['inputCost'];
            if ($inputs['inputCostType'] == 'price') {
                if ($inputs['inputCostIncDec'] == 'DEC') {
                    $this->db->set('PriceValue', "PriceValue - $cost", false);
                } elseif ($inputs['inputCostIncDec'] == 'INC') {
                    $this->db->set('PriceValue', "PriceValue + $cost", false);
                } else {
                    $this->db->set('PriceValue', $cost, false);
                }
            } else {
                if ($inputs['inputCostIncDec'] == 'DEC') {
                    $this->db->set('PriceValue', "PriceValue - (PriceValue/100 *$cost)", false);
                } else {
                    $this->db->set('PriceValue', "PriceValue + (PriceValue/100 *$cost)", false);
                }
            }
            $this->db->where('ProductId', $product['ProductId']);
            $this->db->update('product_price');
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );

        return $arr;
    }

    /*Works Fine */
    public function doChangeSizePrice($inputs)
    {
        $cost = $inputs['inputCost'];
        if ($inputs['inputCostType'] == 'price') {
            if ($inputs['inputCostIncDec'] == 'DEC') {
                $this->db->set('PriceValue', "PriceValue - $cost", false);
            } elseif ($inputs['inputCostIncDec'] == 'INC') {
                $this->db->set('PriceValue', "PriceValue + $cost", false);
            } else {
                $this->db->set('PriceValue', $cost, false);
            }
        } else {
            if ($inputs['inputCostIncDec'] == 'DEC') {
                $this->db->set('PriceValue', "PriceValue - (PriceValue/100 *$cost)", false);
            } else {
                $this->db->set('PriceValue', "PriceValue + (PriceValue/100 *$cost)", false);
            }
        }

        $this->db->where('SizeId', $inputs['inputCostSizeId']);
        $this->db->update('product_price');
        $arr = array('type' => "green", 'content' => "ویرایش موفق بود", 'success' => true);

        return $arr;
    }

    /*Works Fine */
    public function doChangeMaterialPrice($inputs)
    {
        $cost = $inputs['inputCost'];
        if ($inputs['inputCostType'] == 'price') {
            if ($inputs['inputCostIncDec'] == 'DEC') {
                $this->db->set('PriceValue', "PriceValue - $cost", false);
            } elseif ($inputs['inputCostIncDec'] == 'INC') {
                $this->db->set('PriceValue', "PriceValue + $cost", false);
            } else {
                $this->db->set('PriceValue', $cost, false);
            }
        } else {
            if ($inputs['inputCostIncDec'] == 'DEC') {
                $this->db->set('PriceValue', "PriceValue - (PriceValue/100 *$cost)", false);
            } else {
                $this->db->set('PriceValue', "PriceValue + (PriceValue/100 *$cost)", false);
            }
        }
        $this->db->where('MaterialId', $inputs['inputCostMaterialId']);
        $this->db->update('product_price');
        $arr = array('type' => "green", 'content' => "ویرایش موفق بود", 'success' => true);

        return $arr;
    }

    /*Works Fine */
    public function doChangeCategoryMaterialPrice($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();
        foreach ($products as $product) {
            $cost = $inputs['inputCost'];
            if ($inputs['inputCostType'] == 'price') {
                if ($inputs['inputCostIncDec'] == 'DEC') {
                    $this->db->set('PriceValue', "PriceValue - $cost", false);
                } elseif ($inputs['inputCostIncDec'] == 'INC') {
                    $this->db->set('PriceValue', "PriceValue + $cost", false);
                } else {
                    $this->db->set('PriceValue', $cost, false);
                }
            } else {
                if ($inputs['inputCostIncDec'] == 'DEC') {
                    $this->db->set('PriceValue', "PriceValue - (PriceValue/100 *$cost)", false);
                } else {
                    $this->db->set('PriceValue', "PriceValue + (PriceValue/100 *$cost)", false);
                }
            }
            $this->db->where('ProductId', $product['ProductId']);
            $this->db->where('MaterialId', $inputs['inputCostMaterialId']);
            $this->db->update('product_price');
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );
        return $arr;
    }

    /*Works Fine */
    public function doChangeCategorySizePrice($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();
        foreach ($products as $product) {
            $cost = $inputs['inputCost'];
            if ($inputs['inputCostType'] == 'price') {
                if ($inputs['inputCostIncDec'] == 'DEC') {
                    $this->db->set('PriceValue', "PriceValue - $cost", false);
                } elseif ($inputs['inputCostIncDec'] == 'INC') {
                    $this->db->set('PriceValue', "PriceValue + $cost", false);
                } else {
                    $this->db->set('PriceValue', $cost, false);
                }
            } else {
                if ($inputs['inputCostIncDec'] == 'DEC') {
                    $this->db->set('PriceValue', "PriceValue - (PriceValue/100 *$cost)", false);
                } else {
                    $this->db->set('PriceValue', "PriceValue + (PriceValue/100 *$cost)", false);
                }
            }
            $this->db->where('ProductId', $product['ProductId']);
            $this->db->where('SizeId', $inputs['inputCostSizeId']);
            $this->db->update('product_price');
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );

        return $arr;
    }

    /*Works Fine */
    public function doChangeCategoryMaterialSizePrice($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();
        foreach ($products as $product) {
            $cost = $inputs['inputCost'];
            if ($inputs['inputCostType'] == 'price') {
                if ($inputs['inputCostIncDec'] == 'DEC') {
                    $this->db->set('PriceValue', "PriceValue - $cost", false);
                } elseif ($inputs['inputCostIncDec'] == 'INC') {
                    $this->db->set('PriceValue', "PriceValue + $cost", false);
                } else {
                    $this->db->set('PriceValue', $cost, false);
                }
            } else {
                if ($inputs['inputCostIncDec'] == 'DEC') {
                    $this->db->set('PriceValue', "PriceValue - (PriceValue/100 *$cost)", false);
                } else {
                    $this->db->set('PriceValue', "PriceValue + (PriceValue/100 *$cost)", false);
                }
            }
            $this->db->where('ProductId', $product['ProductId']);
            $this->db->where('SizeId', $inputs['inputCostSizeId']);
            $this->db->where('MaterialId', $inputs['inputCostMaterialId']);
            $this->db->update('product_price');
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );

        return $arr;
    }


    /*Works Fine */
    public function doChangeCategoryMaterial($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();
        foreach ($products as $product) {
            $this->db->delete('product_price', array(
                'ProductId' => $product['ProductId'],
                'MaterialId' => $inputs['inputCostMaterialId']
            ));
        }

        foreach ($products as $product) {
            $Array = array(
                'PriceValue' => 0,
                'MaterialId' => $inputs['inputCostMaterialId'],
                'SizeId' => 0,
                'ProductId' => $product['ProductId']
            );
            $this->db->insert('product_price', $Array);
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );
        return $arr;
    }

    /*Works Fine */
    public function doChangeCategorySize($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        if (isset($inputs['inputProductShape']) && $inputs['inputProductShape'] != '') {
            $this->db->join('product', 'product.ProductId = product_category_relation.ProductId');
            $this->db->where('product.ProductShape', $inputs['inputProductShape']);
        }
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();


        $this->db->select('*');
        $this->db->from('product_size');
        $this->db->where('SizeId', $inputs['inputCostSizeId']);
        $size = $this->db->get()->result_array()[0];
        $widthAndHeight = explode('*', $size['SizeTitle']);

        if (is_array($widthAndHeight) && sizeof($widthAndHeight) == 2) {
            foreach ($products as $product) {
                if ($product['ProductMaxWidth'] > floatval($widthAndHeight[0]) || $product['ProductMaxHeight'] > floatval($widthAndHeight[1])) {
                    $this->db->delete('product_price', array(
                        'ProductId' => $product['ProductId'],
                        'SizeId' => $inputs['inputCostSizeId']
                    ));
                }
            }
            foreach ($products as $product) {
                if ($product['ProductMaxWidth'] > floatval($widthAndHeight[0]) || $product['ProductMaxHeight'] > floatval($widthAndHeight[1])) {
                    $Array = array(
                        'PriceValue' => 0,
                        'MaterialId' => 0,
                        'SizeId' => $inputs['inputCostSizeId'],
                        'ProductId' => $product['ProductId']
                    );
                    $this->db->insert('product_price', $Array);
                }
            }
        } else {
            foreach ($products as $product) {
                $this->db->delete('product_price', array(
                    'ProductId' => $product['ProductId'],
                    'SizeId' => $inputs['inputCostSizeId']
                ));
            }
            foreach ($products as $product) {
                $Array = array(
                    'PriceValue' => 0,
                    'MaterialId' => 0,
                    'SizeId' => $inputs['inputCostSizeId'],
                    'ProductId' => $product['ProductId']
                );
                $this->db->insert('product_price', $Array);
            }
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );
        return $arr;
    }

    /*Works Fine */
    public function doChangeCategoryMaterialSize($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        if (isset($inputs['inputProductShape']) && $inputs['inputProductShape'] != '') {
            $this->db->join('product', 'product.ProductId = product_category_relation.ProductId');
            $this->db->where('product.ProductShape', $inputs['inputProductShape']);
        }
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();


        /*$this->db->select('*');
        $this->db->from('product_size');
        $this->db->where('SizeId', $inputs['inputCostSizeId']);
        $size = $this->db->get()->result_array()[0];

        if ( is_array($widthAndHeight) && sizeof($widthAndHeight) == 2 ) {
            var_dump($size);
            var_dump($widthAndHeight);
            foreach ($products as $product) {
                if ($product['ProductMaxWidth'] > floatval($widthAndHeight[0]) || $product['ProductMaxHeight'] > floatval($widthAndHeight[1])) {
                    $this->db->delete('product_price', array(
                        'ProductId' => $product['ProductId'],
                        'MaterialId' => $inputs['inputCostMaterialId'],
                        'SizeId' => $inputs['inputCostSizeId']
                    ));
                }
            }
            foreach ($products as $product) {
                if ($product['ProductMaxWidth'] > floatval($widthAndHeight[0]) || $product['ProductMaxHeight'] > floatval($widthAndHeight[1])) {
                    $Array = array(
                        'PriceValue' => 0,
                        'MaterialId' => $inputs['inputCostMaterialId'],
                        'SizeId' => $inputs['inputCostSizeId'],
                        'ProductId' => $product['ProductId']
                    );
                    $this->db->insert('product_price', $Array);
                }
            }
        } else{*/
        foreach ($products as $product) {
            $this->db->delete('product_price', array(
                'ProductId' => $product['ProductId'],
                'MaterialId' => $inputs['inputCostMaterialId'],
                'SizeId' => $inputs['inputCostSizeId']
            ));
        }
        foreach ($products as $product) {
            $Array = array(
                'PriceValue' => 0,
                'MaterialId' => $inputs['inputCostMaterialId'],
                'SizeId' => $inputs['inputCostSizeId'],
                'ProductId' => $product['ProductId']
            );
            $this->db->insert('product_price', $Array);
        }
        /*}*/


        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );
        return $arr;
    }

    /*Works Fine */
    public function doDeleteCategoryMaterial($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();
        foreach ($products as $product) {
            $this->db->delete('product_price', array(
                'ProductId' => $product['ProductId'],
                'MaterialId' => $inputs['inputCostMaterialId']
            ));
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );
        return $arr;
    }

    /*Works Fine */
    public function doDeleteCategorySize($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        if (isset($inputs['inputProductShape']) && $inputs['inputProductShape'] != '') {
            $this->db->join('product', 'product.ProductId = product_category_relation.ProductId');
            $this->db->where('product.ProductShape', $inputs['inputProductShape']);
        }
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();
        foreach ($products as $product) {
            $this->db->delete('product_price', array(
                'ProductId' => $product['ProductId'],
                'SizeId' => $inputs['inputCostSizeId']
            ));
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );
        return $arr;
    }

    /*Works Fine */
    public function doDeleteCategoryMaterialSize($inputs)
    {
        $this->db->select('*');
        $this->db->from('product_category_relation');
        if (isset($inputs['inputProductShape']) && $inputs['inputProductShape'] != '') {
            $this->db->join('product', 'product.ProductId = product_category_relation.ProductId');
            $this->db->where('product.ProductShape', $inputs['inputProductShape']);
        }
        $this->db->where('CategoryId', $inputs['inputCostCategoryId']);
        $products = $this->db->get()->result_array();
        foreach ($products as $product) {
            $this->db->delete('product_price', array(
                'ProductId' => $product['ProductId'],
                'MaterialId' => $inputs['inputCostMaterialId'],
                'SizeId' => $inputs['inputCostSizeId']
            ));
        }
        $arr = array(
            'type' => "green",
            'content' => "ویرایش موفق بود",
            'success' => true
        );
        return $arr;
    }


}

?>