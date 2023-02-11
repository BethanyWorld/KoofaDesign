<?php $_URL = base_url();
$_DIR = base_url('assets/ui/'); ?>

<style>

    .category-lists{
        direction: rtl;
    }
    .category-lists.sticky{
        direction: rtl;
        position: absolute;
        right: 0;
        top: 0;
    }
    .category-lists h2{
        font-size: 14px;
        text-align: right;
        background: #fff;
        margin: 0;
        padding: 10px 16px;
        border: 1px solid #ddd;
        color: #4abead;
    }
    .category-lists ul{
        border-radius: 7px;
        position: relative;
        overflow: hidden;
    }
    .category-lists ul li{

    }
    .category-lists ul li a{
        color: #6b6b6b;
    }

    .category-lists ul li a:hover{
        color: #4abead;
    }
    .category-lists ul li.active,
    .category-lists ul li.active:hover{
        background: #fff;
        border: 1px solid #ddd;
    }
    .category-lists ul li.active a{
        color: #4abead;
        text-shadow: 0 0 0 black;
    }
    .category-box{

    }
    .category-box .box {
        position: relative;
        border-radius: 7px;
        overflow: hidden;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        margin-bottom: 15px;
    }

    .category-box .box:after {
        content: "";
        display: block;
        padding-bottom: 75%;
    }
    .category-box .box .category-box-content {
        position: absolute;
        width: 100%;
        height: 100%;
    }
    .category-box .box .overlay{
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4);
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
    }
    .category-box .box .category-box-content{
        position: absolute;
        width: 100%;
        height: 150px;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
        text-align: center;
    }
    .category-box .box .category-box-content img{

    }
    .category-box .box .category-box-content h4{
        color: #fff;
        font-size: 26px;
        margin: 25px 0;
        font-weight: 900;
        text-shadow: 0px 1px 0px #fff;
    }





    /*breadcrumb*/
    .breadcrumb-container{
        direction: rtl;
    }
    .breadcrumb-container .breadcrumb{
        margin: 15px 0;
        padding: 0;
    }
    .breadcrumb-container .breadcrumb li{
        color: #b5b5b5;
    }
    .breadcrumb-container .breadcrumb li a{
        color: #b5b5b5;
    }
    .breadcrumb-container .breadcrumb li.active{
    }
    /*End breadCrumb*/

    /*sortbox*/
    .category-list-box .sort-box{
        direction: rtl;
        font-size: 10px;
        padding: 12px 4px;
        border: 1px solid #ccc;
        border-radius: 7px;


    }
    .category-list-box .sort-box strong{
        float: right;
    }
    .category-list-box .sort-box ul{
        padding: 0;
        margin: 0;
    }
    .category-list-box .sort-box ul li{
        display: inline-block;
        color: #989898;
        margin-right: 20px;
        cursor: pointer;
    }
    .category-list-box .sort-box ul li.active{
        color: #fd4a1a;
    }
    .category-list-box .sort-box ul li:hover{
        color: #fd4a1a;
    }
    /*End sortbox*/

    /*product item*/
    .product-item{
        padding: 10px;
        margin: 10px 0px;
        border: 1px solid #ccc;
        border-radius: 7px;
        direction: rtl;
        margin-bottom: 6px;
    }
    .product-item:hover{
        border: 1px solid #fd4a1a;
    }
    .product-item .product-image{
        height: 250px;
        background-position: center !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
        border-radius: 7px;
    }
    .product-item .product-info{

    }
    .product-item h4{
        font-size: 12px;
        padding: 0 2px;
        border-bottom: 1px solid #ccc;
        padding-bottom: 10px;
        text-align: right;
    }
    .product-item h4 strong{

    }
    .product-item h4 .fa{
        float: left;
        color: red;
        font-size: 16px;
    }
    .product-item .price-begin{
        display: inline-block;
        width: 100%;
        color: #808080;
        font-size: 10px;
    }
    /* End product item*/

    .category-info{
        direction: rtl;
        display: inline-block;
        width: 100%;
        padding: 10px 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 7px;
    }
    .category-info h1{
        font-size: 16px;
        font-weight: 900;
        margin: 0;
        margin-bottom: 10px;
    }
    .category-info p{
        color: #636363;
        line-height: 30px;
        font-size: 10px;
    }
    .product-container{
        display: inline-block;
        width: 100%;
    }

</style>