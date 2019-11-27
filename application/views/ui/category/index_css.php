<?php $_URL = base_url(); $_DIR = base_url('assets/ui/');  ?>

<style>
    /*helper*/
    .margin-top-20 {
        margin-top: 20px;
    }

    .left-text-align {
        text-align: left;
    }

    .right-text-align {
        text-align: right;
    }

    .LeftFloat {
        float: left;
    }

    .RightFloat {
        float: right;
    }

    .padding-response {
        padding: 0px;
    }

    .padding-t-3 {
        padding-top: 3px;
    }

    .margin-t-30 {
        margin-top: 30px;
    }

    /*helper*/

    #main {
        background-color: #f3f3f0;
    }

    /*breadcrumb*/
    .breadcrumb {
        background-color: #f3f3f0;
    }

    ul.breadcrumb {
        list-style: none;
        color: #B1C472;
        padding-top: 15px;
        padding-bottom: 0px;
        border-radius: 0px;
        margin-bottom: 20px;
        padding-right: 0px;
    }

    ul.breadcrumb li:last-child a {
        color: gray;
    }

    ul.breadcrumb li {
        display: inline;
    }

    ul.breadcrumb li + li:before {
        padding: 8px;
        color: black;
        content: "/\00a0";
    }

    ul.breadcrumb li a {
        color: #B1C472;
    }

    /*breadcrumb*/

    .Ordering-main-div {
        background-color: #fff;
        height: 50px;
        float: right;
        padding-top: 12px;
        box-shadow: 2px 0 5px #ccc;
    }

    .Ordering-main-div label {
        font-size: 12px;
        color: gray;
        padding-left: 15px;
    }

    .Ordering-main-div select {
        width: 50%;
        padding-right: 10px;
        color: #3CB371;
        font-size: 12px;
    }

    .all-div-style-image-row {
        min-height: 120px;
        background-color: #fff;
        box-shadow: 2px 0 5px #ccc;
    }

    .image-product-div {
        padding: 10px;
    }

    .image-product-div img {
        width: 100%;
        height: 110px;
    }

    .image-desc-div {

    }

    .image-main-div-detail {
        padding-right: 0px;
        padding-left: 0px;
        padding-top: 7px;
        padding-bottom: 10px;
        text-align: justify;
    }

    .image-desc-div p {
        height: 5em;
        line-height: 1.6667em;
        overflow: hidden;
        font-size: 12px;
        word-break: break-word;
        font-weight: 500;
    }

    .grouping-rangeSlider-main-div {
        background-color: #fff;
        height: 50px;
        padding-top: 12px;
        box-shadow: 2px 0 5px #ccc;
        direction: ltr;
    }

    .grouping-filtering-main-div {
        background-color: #fff;
        height: 50px;
        box-shadow: 2px 0 5px #ccc;
        padding: 0px;
    }

    .grouping-filtering-product {
        height: 280px;
        background-color: #fff;
        box-shadow: 2px 0 5px #ccc;
    }


    /*for product detail*/
    .first-container-m-b {
        margin-bottom: 120px;
    }

    .product-title-h2 {
        font-size: 16px;
        text-align: right;
        margin: 0 0 15px 0;
        font-weight: bold;
        color: #2D693A;
        padding-top: 15px;
    }

    .one-product-detail {
        float: right;
        margin-bottom: 15px;
        padding-top: 7px;
        padding-bottom: 7px;
        padding-right: 0px;
        padding-left: 0px;
    }

    .product-keeper {
        background-color: #fff;
        box-shadow: 2px 0 5px #ccc;
        padding: 10px;
        position: relative;
        border: 1px solid transparent;
        height: 275px;
        margin-bottom: 5px;
        cursor: pointer;
    }
    .product-keeper:hover{
        border: 1px solid gray;
    }

    .product-info {
        /*color: #2D693A;*/
        /*font-size: 16px;*/
        /*font-weight: bold;*/
        /*margin-top: 0px;*/
        /*line-height: 2em;*/
        /*height: 4em;*/
        /*overflow: hidden;*/
        /*margin-bottom: 0px;*/
    }

    .product-info p {
        margin-bottom: 1px;
        color: #2D693A;
        font-weight: bolder;
        font-size: 14px;
    }

    .grouping-product-info-price {
        font-size: 23px;
    }

    .grouping-product-info-toman {
        color: gray;
        font-size: 10px;
        padding-right: 5px;
    }

    .price-box {
        display: inline-block;
    }

    .item_price {
        font-size: 27px;
        margin-bottom: 0;
        padding-bottom: 0;
        line-height: 1.1em;
        color: #2D693A;
        width: 100%;
        float: right;
        text-align: right;
    }

    .item_price span {
        color: #7c7c7c;
        font-size: 14px;
        padding: 0 2px;
    }

    .item_price span {
        color: #7c7c7c;
        font-size: 19px;
    }

    .item_price span {
        font-size: 15px;
    }

    .product-tool {
        height: 25px;
        padding: 3px 5px;
        background-color: rgba(255, 255, 255, 0.75);
        position: absolute;
        left: 10px;
        top: 10px;
    }

    .product-tool a {
        width: 19px;
        height: 19px;
        display: inline-block;
        color: gray;
    }

    .shopping-basket {
        border-left: 2px solid #439275;
        text-align: center;
        padding: 0px;
        cursor: pointer;
    }

    /*for product detail*/


    .circle {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background-color: #3cb371e3;
        height: 65px;
        border-top-left-radius: 100%;
        padding-right: 10px;
        padding-top: 15px;
    }

    .circle p {
        color: #fff;
        word-break: break-word;
        display: block;
        letter-spacing: 1px;
        text-align: right;
    }

    .sort-item {
        float: left;
        width: 21px;
    }

    .sort-by-switcher {
        width: 21px;
        height: 13px;
        display: block;
        text-align: center;
        background-color: #8BC53F;
        color: #fff;
        font-size: 8px;
        padding-top: 2px;
    }

    .sort-by-switcher.current {
        background-color: #ccc;
    }

    .productCategories {
        border: none;
        margin-left: 20px;
        padding-left: 5px;
    }

    .image-title-div h5 {
        font-weight: 600;
        margin-bottom: 5px;
    }

    .grouping-ul-style {
        padding-right: 5px;
        padding-left: 5px;
    }

    .grouping-ul-style .grouping-li-style {
        float: right;
        padding: 9px;
    }

    .pager li > a {
        display: inline-block;
        padding: 5px 10px;
        background-color: #D8D8D8;
        border: 1px solid #ddd;
        color: #2D693A;
        border-radius: 3px;
        border-bottom: 2px solid #A6A6A6;
    }

    .grouping-pagination .active a {
        background-color: gray;
        color: #fff;
    }

    .grouping-pagination .active:hover a {
        background-color: gray;
        color: #D8D8D8;
    }
    .grouping-pagination li a:focus{
        background-color: gray;
        color: #fff;
    }

    ul.grouping-pagination li:hover a {
        background-color: #2D693A;
        color: #fff;
    }

    ul.grouping-pagination li:first-child a {
        border-radius: 0px 4px 4px 0px;
    }

    ul.grouping-pagination li:last-child a {
        border-radius: 4px 0px 0px 4px;
    }

    .multiselect {
        width: auto;
        position: absolute;
        z-index: 3000;
        background-color: #fff;
    }

    .selectBox {
        position: relative;
        cursor: pointer;
    }

    .selectBox select {
        /*width: 100%;*/
        font-weight: bold;
        border: none;
        height: 50px;
        padding-right: 15px;
    }

    .selectBox select:hover{
        cursor: pointer;
        background-color: #8BC53F;
        color: #fff;
    }

    .overSelect {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }

    .checkboxes {
        display: none;
        border: 1px #dadada solid;
        padding-right: 15px;
        cursor: pointer;
        min-width: 230px;
        position: absolute;
        background-color: #fff;
    }

    .checkboxes label {
        display: block;
    }

    .checkboxes label:hover {
        /*background-color: #1e90ff;*/
        cursor: pointer;
    }

    .checkboxes input[type=checkbox] {
        margin: 10px 5px 10px 10px;
    }

    /*for checkbox*/
    .checkbox-container {
        display: block;
        position: relative;
        padding-right: 35px;
        margin-bottom: 12px;
        margin-top: 12px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-weight: 300;
    }

    .checkbox-container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .checkmark {
        position: absolute;
        top: 0;
        right: 0;
        height: 15px;
        width: 15px;
        background-color: #fff;
        border: 1px solid #8BC53F;
    }

    .checkbox-container:hover input ~ .checkmark {
        background-color: #fff;
    }

    .checkbox-container input:checked ~ .checkmark {
        background-color: #8BC53F;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .checkbox-container input:checked ~ .checkmark:after {
        display: none;
    }

    .checkbox-container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    /*for checkbox*/


    .suffix_tbx, .suffix_tbx input {
        font-family: sans-serif;
        background-color: #ecf0f1;
        padding-right: 2px;
    }

    .center {
        margin-top: 0vh;
        margin-left: 0%;
        transform: translate(0%, 0);
        /* max-width: 550px; */
        /* min-width: 200px; */
        width: 100%;
    }
    .range_slider {
        margin-left: 0% !important;
        width: 100% !important;
    }
    .hr {
        margin-top: 5px;
        margin-bottom: 5px;
        height: 1px;
        width: 100%;
        background-color: #bdc3c7;
    }

    .handle {
        background-color: #bdc3c7;
        top: 4px !important;
        border-color: #7f8c8d;
        border-radius: 100% !important;
        width: 10px !important;
        height: 10px !important;
        background-color: #8BC53F !important;
        cursor: pointer;
    }

    .bar {
        background-color: #ecf0f1;
    }
    .suffix_tbx{
        float: left;
    }
    .bar.selected, .bar.reversed {
        background-color: #34495e;
    }
    .suffix_tbx input{
        background-color: transparent !important;
        border: none;
    }
    span.suffix_tbx{
        background-color: transparent !important;
        border: none !important;
        margin-top: 1px !important;
        font-family: font1;
    }
    #reverse {
        margin-left: 15px;
    }
























    @media (min-width: 992px) {

    }

    @media (max-width: 991px) {

    }

    @media screen and (max-width: 992px) {
        .image-main-div-detail {
            padding-right: 15px;
            padding-left: 15px;
            text-align: justify;
        }

        .image-product-div img {
            width: 100%;
            height: 170px;
        }

        .circle {
            padding-right: 2px;
            padding-top: 23px;
        }

        .productCategories {
            border: none;
            margin-left: 0px;
            padding-left: 0px;
        }
        .all-div-style-image-row{
            padding-left: 0px;
        }
        .grouping-rangeSlider-main-div{
            margin-top: 3px;
        }
        .Ordering-main-div label{
            padding-left: 0px;
        }
    }

    @media (max-width: 991px) and (min-width: 768px) {

    }

    @media (max-width: 1199px) and (min-width: 992px) {
        .Ordering-main-div label{
            padding-left: 0px;
        }
    }

    @media screen and (max-width: 767px) {


    }
</style>