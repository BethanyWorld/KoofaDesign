<?php
$_URL = base_url();
$_DIR = base_url('assets/ui/');
?>
<style>
    /*breadcrumb*/
    .breadcrumb-container{
        direction: rtl;
        background: rgba(0,0,0,0) !important;
    }
    .breadcrumb-container .breadcrumb{
        margin: 15px 0;
        padding: 0;
        background: rgba(0,0,0,0) !important;
    }
    .breadcrumb-container .breadcrumb li{
        color: #b5b5b5;
    }
    .breadcrumb-container .breadcrumb li a{
        color: #b5b5b5 !important;
    }
    .breadcrumb-container .breadcrumb li.active{
    }
    /*End breadCrumb*/
</style>
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
        width: 130px;
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
        background: #f9f9f9;
    }
    .breadcrumb-container .breadcrumb{
        background: #f9f9f9;
        margin: 15px 0;
        padding: 0;
    }
    .breadcrumb-container .breadcrumb li{
        color: #b5b5b5;
    }
    .breadcrumb-container .breadcrumb li a{
        color: #4abead;
    }
    .breadcrumb-container .breadcrumb li.active{
    }
    /*End breadCrumb*/

    .category-list-box{

    }
    .category-list-box .item{
        padding: 25% 0;
        margin-bottom: 25px;
        border-radius: 10px;
        overflow: hidden;
    }
    .category-list-box .item .overlay{
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background: rgba(0,0,0,0.8);
    }
    .category-list-box .item .content{
        color: #fff;
        position: relative;
        z-index: 10;
    }
    .category-list-box .item .content img{
        max-width: 65px;
        max-height: 65px;
    }
    .category-list-box .item .content h2{
        font-family: bold;
        font-size: 24px;
    }
    .product-slider.min a.more {
        bottom: 100px;
        left: 15vw;
        margin: auto;
        background: #fd4a1a;
        display: inline-block;
        color: #fff;
        padding: 10px 20px;
        border: 1px solid #fff;
        border-radius: 7px;
        margin-top: 40px;
        font-size: 18px;
    }
    .product-slider {
        background: #fff;
        margin: 45px 0 !important;
    }
    .product-slider .owl-nav .owl-next,
    .product-slider .owl-nav .owl-prev
    {
        padding: 40px 20px;
    }
    .offers .box h3 {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        height: 35px;
        font-size: 28px;
    }
    .offers {
        margin-bottom: 30px !important;
    }



</style>