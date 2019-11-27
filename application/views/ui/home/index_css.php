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

    /*helper*/
    .padding-response {
        padding: 0px;
    }

    .index-slider-div {
        background-color: #f3f3f0;
    }

    .index-slider-div2 {
        margin-top: 15px;
    }
    .index-holder-slider1{
        padding-bottom: 10px;
    }
    .index-sidebar-top {
        margin-top: 15px;
        width: 100%;
    }

    .index-sidebar-top2 {
        margin-top: 10px;
        width: 100%;
    }

    .index-sidebar-home {
        position: relative;
    }

    .index-sidebar-top > div {
        float: right;
        padding-left: 10px;
    }

    .index-sidebar-top .index-sidebar-home {
        width: 77%;
        height: 390px;
        border-radius: 3px 3px 0 0;
        overflow: hidden;
    }

    .index-sidebar-top .index-sidebar-home2 {
        width: 77%;
        height: 350px;
        border-radius: 3px 3px 0 0;
        overflow: hidden;
    }

    .index-sidebar-home2 {
        width: 100% !important;
        padding-bottom: 15px !important;
    }

    .index-sidebar-home .carousel-indicators {
        bottom: 0;
        width: 100%;
        left: 0;
        right: 0;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .index-sidebar-home .carousel-indicators li {
        position: relative;
        width: 25%;
        height: 40px;
        text-align: center;
        padding: 10px 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        font-size: 16px;
        color: #fff;
        float: right;
        border: 0px none transparent;
        margin: 0;
        display: list-item;
        text-indent: 0;
        line-height: 1em;
        z-index: 1;
        -webkit-transition: all 0.1s ease;
        -o-transition: all 0.1s ease;
        transition: all 0.1s ease;
    }

    .index-sidebar-home .carousel-indicators li:before {
        content: "";
        background-color: #d5b55e;
        height: 2px;
        top: -2px;
        position: absolute;
        left: 0;
        right: 0;
        -webkit-transition: all 0.1s ease;
        -o-transition: all 0.1s ease;
        transition: all 0.1s ease;
    }

    .index-sidebar-home .carousel-indicators li.active:before {
        top: -7px;
        height: 7px;
    }

    .index-sidebar-home .owl-stage .owl-item:nth-child(1) {
        background-color: #2d693a;
    }

    .index-sidebar-home .owl-stage .owl-item:nth-child(2) {
        background-color: #387044;
    }

    .index-sidebar-home .owl-stage .owl-item:nth-child(3) {
        background-color: #42784e;
    }

    .index-sidebar-home .owl-stage .owl-item:nth-child(4) {
        background-color: #4d8057;
    }

    .index-sidebar-home .owl-stage .owl-item:nth-child(5) {
        background-color: #4d8057;
    }

    .index-sidebar-home .owl-stage .owl-item .item .active {
        border-top-width: 7px;
    }

    .index-sidebar-home2 .owl-stage .owl-item {
        background-color: #fff !important;
        border-bottom: 1px solid #ccc;
    }

    #slider-border {
        border: 1px solid #ccc;
        border-radius: 2px;
    }

    .index-sidebar-home .owl-stage li a {
        color: #fff;
    }

    .index-sidebar-home .index-btn-buy {
        position: absolute;
        top: 260px;
        left: 40px;
        font-size: 16px;
        color: #fff;
        background-color: #009E4C;
        font-weight: normal;
        padding: 15px 40px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -o-border-radius: 5px;
        border-radius: 5px;
        line-height: 1;
    }

    .index-sidebar-home img {
        width: 100%;
    }

    .index-sidebar-home .carousel-control {
        background: transparent;
        width: 5%;
        opacity: .8;
    }

    .index-sidebar-home .carousel-control .index-arrow {
        width: 30px;
        height: 30px;
        margin-top: -15px;
        font-size: 50px;
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
    }

    .index-sidebar-home .carousel-control .index-arrow-left {
        margin: 0;
        right: 0;
    }

    .index-sidebar-home .carousel-control .index-arrow-right {
        margin: 0;
        left: 0;
    }

    .index-sidebar-top .index-tools-top {
        height: 390px;
        width: 17%;
    }

    .index-sidebar-top .index-tools-top .index-enamad {
        height: 145px;
        margin-bottom: 5px;
        width: 100%;
        text-align: center;
        background-color: #fff;
        border: 1px solid #cccccc;
        padding-top: 5px;
        border-radius: 5px;
    }

    .index-sidebar-top .index-tools-top img {
        width: 100%;
        height: 100%;
    }

    .index-sidebar-top .index-tools-top .index-enamad img {
        width: auto;
        height: auto;
    }

    .index-sidebar-top .index-tools-top .index-banner {
        height: 240px;
    }

    .index-sidebar-top .index-tools-top img {
        width: 100%;
        height: 100%;
    }

    .index-product-extra {
        background-color: #fff;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -o-border-radius: 5px;
        border-radius: 5px;
        border: 1px solid #cccccc;
    }

    .index-sidebar-top .index-product-extra {
        width: 6%;
        height: 390px;
        float: left;
    }

    .index-sidebar-top > div:nth-child(3) {
        padding-left: 0;
    }

    .index-product-extra .item {
        -webkit-transition: background-color 0.5s ease;
        -o-transition: background-color 0.5s ease;
        transition: background-color 0.5s ease;
        background-color: #fff;
        background-repeat: no-repeat;
        background-position: center 7px;
        border-bottom: 1px solid #cccccc;
        height: 25%;
    }

    .index-product-extra .item:first-child {
        -moz-border-radius: 5px 5px 0 0;
        -webkit-border-radius: 5px 5px 0 0;
        -o-border-radius: 5px 5px 0 0;
        border-radius: 5px 5px 0 0;
    }

    .index-product-extra .item.item_1 {
        background-image: url(<?php echo $_DIR; ?>images/delivery1.png);
        background-size: 34px 32px;
    }

    .index-product-extra .item.item_2 {
        background-image: url(.<?php echo $_DIR; ?>images/delivery2.png);
        background-size: 45px 32px;
    }

    .index-product-extra .item.item_3 {
        background-image: url(<?php echo $_DIR; ?>images/delivery3.png);
        background-size: 38px 24px;
    }

    .index-product-extra .item.item_4 {
        background-image: url(<?php echo $_DIR; ?>images/delivery4.png);
        background-size: 35px 37px;
    }

    .index-product-extra .item a {
        font-size: 14px;
        display: block;
        text-align: center;
    }

    .index-product-extra .item a span {
        display: block;
        color: #888;
        line-height: 1.3em;
        padding: 43px 3px 0 3px;
        word-break: break-word;
    }

    /*guarantee*/
    .body-guarantee-div {
        padding: 0px;
        border-radius: 3px;
        display: none;
        /*width: 100%;*/
        background-color: #fff;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        /*margin: 12.5px 0;*/
        border: 2px solid #cccccc;
    }

    .body-guarantee {
        display: table;
        width: 100%;
        overflofw: hidden;
        margin: 0px 0 0px 0;
        border-width: 2px;
        padding: 0px;
    }

    .body-guarantee li {
        padding: 0px;
        cursor: pointer;
        height: 62px;
        text-align: center;
        border-left: 2px solid #cccccc;
        border-bottom: 0 none #cccccc;
        display: table-cell;
        background-position: 85% center;
        vertical-align: middle;
        line-height: 62px;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        -o-border-radius: 0;
        border-radius: 0;
        float: right;
    }

    .body-guarantee li:hover a {
        color: #fff !important;
    }

    .body-guarantee li:first-child {
        border-radius: 0 5px 5px 0 !important;
    }

    .body-guarantee li:last-child {
        border-left: 0 none transparent;
        border-radius: 5px 0 0 5px !important;
    }

    .body-guarantee li:hover {
        background-color: #3CB371 !important;
        color: #fff;
        border-radius: 0px !important;
    }

    .body-guarantee li a {
        padding-left: 0px;
        font-size: 13px;
        padding-top: 4px;
        color: #3CB371 !important;
        text-align: center;
        padding-right: 10px;
    }
    /*guarantee*/

    .index-keeper {
        box-shadow: 2px 0 4px #ccc;
        padding: 10px;
        border: 1px solid #fff;
    }

    .index-feature-title {
        padding: 0 10px;
        font-size: 18px;
        margin: 0 0 20px 0;
        display: block;
        text-align: center;
        color: #000;
        font-weight: bold;
    }

    .index-height-image-div {
        height: 230px;
    }

    .index-item-title {
        font-size: 14px;
        color: #000;
        float: right;
        line-height: 1.3em;
        font-weight: 600;
    }

    .index-price {
        font-size: 18px;
        color: #000;
        float: left;
        text-align: left;
        margin-top: 5px;
    }

    .index-gallery-item {
        padding: 3px;
        height: 70px;
        float: right;
    }

    .index-gallery-other {
        padding: 8px 10px;
        border: 1px solid #cccccc;
        border-radius: 3px;
        text-align: center;
        transition: all 0.5s all;
    }

    .index-other-link {
        line-height: 1.3em;
        color: #2D693A;
    }

    .index-gallery-number {
        font-size: 25px;
        margin: 0;
        font-weight: 700;
    }

    .index-gallery-other span {
        display: block;
        font-size: 14px;
        font-weight: 700;
    }

    .index-product-tool {
        height: 25px;
        padding: 5px 5px;
        background-color: rgba(255, 255, 255, 0.75);
        position: absolute;
        left: 0px;
        top: 0px;
        text-align: center;
    }

    .index-product-tool a {
        width: 19px;
        height: 19px;
        display: inline-block;
        color: gray;
    }
    .category-products{
        padding: 10px;
    }

    /*owl slider*/
    .outer {
        margin: 0 auto;
        max-width: 100%;
        direction: ltr !important;
        overflow: hidden;
    }

    #big .item {
        padding: 0px 0px;
        margin: 0px;
        color: #FFF;
        border-radius: 3px;
        text-align: center;
        height: 100%;
    }

    #big2 .item {
        padding: 0px 0px;
        margin: 0px;
        color: #FFF;
        border-radius: 3px;
        text-align: center;
        height: 100%;
    }

    #thumbs .owl-stage {
        width: 100% !important;
        text-align: center !important;
        border-top: 2px solid #d5b55e;
        cursor: pointer;
        direction: rtl;
    }

    #thumbs2 .owl-stage {
        cursor: pointer;
    }

    #thumbs.owl-carousel .owl-item {
        float: none !important;
        display: inline-block !important;
        cursor: pointer;
    }

    #thumbs .item {
        /*background: #C9C9C9;*/
        height: 40px;
        line-height: 40px;
        padding: 0px;
        margin: 2px;
        color: #FFF;
        border-radius: 0px;
        text-align: center;
        cursor: pointer;
        border: 1px solid transparent;
    }

    #thumbs .item a {
        color: #fff;
        text-decoration: none !important;
    }

    #thumbs .item h1 {
        font-size: 18px;
    }

    #thumbs .owl-stage .owl-item:before {
        content: "";
        background-color: #d5b55e;
        height: 2px;
        top: -2px;
        position: absolute;
        left: 0;
        right: 0;
        transition: all 0.1s ease;
    }

    #thumbs .owl-stage .owl-item.current:before {
        top: -10px;
        height: 8px;
    }

    #thumbs2 .owl-stage {
        width: 100% !important;
        text-align: center !important;
    }

    #thumbs2.owl-carousel .owl-item {
        float: none !important;
        display: inline-block !important;
        width: 100% !important;
        height: 66.5px;
        padding-top: 5px;
    }

    #thumbs2 .item {
        /*background: #C9C9C9;*/
        /*height:30px;*/
        line-height: 25px;
        padding-bottom: 0px;
        padding-right: 15px;
        padding-top: 0px;
        padding-left: 15px;
        margin: 2px;
        color: #FFF;
        border-radius: 0px;
        text-align: center;
        cursor: pointer;
        border: 1px solid transparent;
    }

    #thumbs2 .item a {
        color: #2D693A;
        text-decoration: none !important;
        font-weight: 700;
        font-size: 15px;
    }
    #thumbs2 .item a p{
        text-align: left;
        margin-bottom: 0px;
    }
    #thumbs2 .item h1 {
        font-size: 18px;
    }

    #thumbs2 .owl-stage .owl-item:before {
        content: "";
        background-color: #d5b55e;
        height: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        transition: all 0.1s ease;
    }

    #thumbs2 .owl-stage .owl-item.current:before {
        left: -10px;
        width: 10px;
    }


    .owl-theme .owl-nav [class*='owl-'] {
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
    }

    .owl-theme .owl-nav [class*='owl-'].disabled:hover {
        background-color: #D6D6D6;
    }

    #big.owl-theme {
        position: relative;
        height: 100%;
    }

    #big2.owl-theme {
        position: relative;
        height: 100%;
    }

    .owl-carousel .owl-stage-outer {
        height: 100%;
        overflow: visible;
    }

    .owl-carousel .owl-stage {
        height: 100%;
    }

    .owl-carousel .owl-item {
        height: 100%;
    }

    #big.owl-theme .owl-next, #big.owl-theme .owl-prev {
        background: #333;
        width: 22px;
        line-height: 40px;
        height: 40px;
        margin-top: -20px;
        position: absolute;
        text-align: center;
        top: 50%;
    }

    #big2.owl-theme .owl-next, #big.owl-theme .owl-prev {
        background: #333;
        width: 22px;
        line-height: 40px;
        height: 40px;
        margin-top: -20px;
        position: absolute;
        text-align: center;
        top: 50%;
    }

    .product-slider {
        height: 100%;
        position: relative;
        padding: 0px;
        background-color: #fff;
        width: 100%;
        -webkit-box-shadow: 0 1px 3px #ccc;
        box-shadow: 0 1px 3px #ccc;
    }

    #big.owl-theme .owl-prev {
        left: 10px;
    }

    #big.owl-theme .owl-next {
        right: 10px;
    }

    #thumbs.owl-theme .owl-next, #thumbs.owl-theme .owl-prev {
        background: #333;
    }

    #big2.owl-theme .owl-prev {
        left: 10px;
    }

    #big2.owl-theme .owl-next {
        right: 10px;
    }

    #thumbs2.owl-theme .owl-next, #thumbs2.owl-theme .owl-prev {
        background: #333;
    }

    .owl-dots {
        display: none;
    }

    #thumbs {
        padding-top: 10px;
        position: absolute;
        bottom: 0px;
    }

    #thumbs2 {
        padding-top: 0px;
        position: absolute;
        right: 0px;
        width: 300px;
        display: block;
        float: right;
        z-index: 6000;
        opacity: 1;
        top: 0px;
        height: 100%;
    }

    #big.owl-theme .owl-next, #big.owl-theme .owl-prev {
        background-color: transparent;
    }

    #big.owl-theme .owl-next, #big.owl-theme .owl-prev i {
        font-size: 35px;
    }


    #big2.owl-theme .owl-next, #big2.owl-theme .owl-prev {
        background-color: transparent;
    }

    #big2.owl-theme .owl-next, #big2.owl-theme .owl-prev i {
        font-size: 35px;
    }

    /*owl slider*/


    /*for product slider 2*/
    .index-product-slider2 {
        background-color: #f3f3f0;
        min-height: 300px;
        margin-top: 20px;
    }

    .div-on-slider2 {
        width: 300px;
        top: 0px;
        height: 100%;
        background-color: #151515d4;
        position: absolute;
        z-index: 3000;
        right: 25.5%;
        padding-top: 15px;
        padding-left: 5px;
    }

    .div-on-slider2 a {
        color: #fff;
    }
    .div-on-slider2 a h2{
        margin-bottom: 5px;
    }
    .slider2-desc {
        color: #2D693A;
        font-weight: bolder;
        font-size: 15px;
        margin-bottom: 0px;
    }
    .slider2-discountPrice{
        margin-bottom: -5px;
    }
    .slider2-discountPrice p {
        color: red;
        font-weight: bolder;
        font-size: 19px;
        margin-bottom: 0px;
    }

    .slider2-mainPrice p {
        color: #d5b55e;
        font-size: 25px;
    }

    .slider2-mainPrice span {
        font-size: 15px;
    }

    .slider2-hour {
        height: 65px;
        background-color: #d5b55e;
        margin-bottom: 5px;
    }

    .slider2-hour-div {
        margin-top: 15px;
    }

    .slider2-text p {
        color: #ccc;
        margin-bottom: 0px;
        font-size: 15px;
        word-break: break-word;
    }
    .slier2-rightPanel-Price-div{
        color:#2D693A ;
    }
    .slier2-rightPanel-Price-div .slier2-rightPanel-mainPrice{
        color: #ccc;
        float: left;
        padding-right: 10px;
    }
    .slier2-rightPanel-Price-div .slider2-rightPanel-discountPrice{
        color: red;
        text-decoration: line-through;
        float: right;
    }
    /*for product slider 2*/


    /*for new product*/
    .index-product-new {
        min-height: 300px;
        background-color: #fff;
    }

    .index-new-product-title {
        color: #2D693A;
        margin-top: 10px;
        margin-bottom: 0px;
    }

    .index-new-product-desc {
        color: #ccc;
        text-align: center;
    }

    /*for new product*/


    /*for product detail*/
    .one-product-detail {
        float: right;
        margin-bottom: 25px;
        padding: 10px;
    }

    .product-keeper {
        background-color: #fff;
        box-shadow: 2px 0 5px #ccc;
        padding: 10px;
        position: relative;
        border: 1px solid transparent;
        height: 180px;
        margin-bottom: 5px;
    }

    .product-keeper {
        background-color: #fff;
        box-shadow: 2px 0 5px #ccc;
        padding: 10px;
        cursor: pointer;
    }

    .product-info {
        color: #2D693A;
        font-size: 16px;
        font-weight: bold;
        margin-top: 0px;
        line-height: 2em;
        margin-bottom: 0px;
    }

    .price-box {
        display: inline-block;
        padding: 0px;
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

    /*for product popular*/
    .index-product-Popular {
        background-color: #f3f3f0;
        min-height: 300px;
    }

    /*for product popular*/


    .btn-slider {
        position: absolute;
        bottom: 25%;
        z-index: 50;
        left: 5%;
    }

    .btn-slider:focus {
        border: none;
    }

    #big {
        height: 100%;
    }

    .index-keeper:hover {
        border: 1px solid #000;
        border-radius: 3px;
    }

    .index-height-image-div:hover {
        opacity: 0.8;
    }

    .index-gallery-item img:hover {
        opacity: 0.8;
    }

    .index-gallery-other:hover {
        background-color: #2D693A;
    }

    .index-gallery-other:hover .index-other-link {
        color: #fff;
    }

    .btn-buy {
        position: absolute;
        top: 260px;
        left: 40px;
        font-size: 16px;
        color: #fff;
        background-color: #009E4C;
        font-weight: normal;
        padding: 15px 50px;
        border-radius: 3px;
        line-height: 1;
        z-index: 50;
        cursor: pointer;
    }

    .btn-buy:hover {
        color: #fff;
        text-decoration: none;
    }

    .product-keeper:hover {
        border: 1px solid #000;
    }

    .product-keeper:hover img {
        opacity: 0.8;
    }

    @media (min-width: 992px) {
        #myCarousel {
            padding-right: 33.3333%;
        }

        #myCarousel .carousel-controls {
            display: none;
        }
    }

    @media (max-width: 991px) {
        .carousel-caption p,
        #myCarousel .list-group {
            display: none;
        }

        .body-guarantee-div {
            width: 99%;
        }

        /*for slider 2*/
        #thumbs2 .item a{
            font-size: 12px;
        }
        /*for slider 2*/

    }

    @media screen and (max-width: 992px) {

        .index-sidebar-top .index-sidebar-home {
            width: 100%;
        }

        .index-sidebar-home .carousel {
            padding-bottom: 40px;
        }

        .index-sidebar-home .carousel .index-btn-buy {
            top: auto;
            font-size: 16px;
            padding: 10px 20px;
            bottom: 50px;
        }

        .index-tools-top {
            display: none;
        }

        .index-height-image-div {
            height: 230px;
        }

        .index-gallery-item {
            padding-right: 3px;
            padding-left: 15px;
            padding-bottom: 10px;
            height: 105px;
            float: right;
            padding-top: 0px;
        }

        .index-gallery-other-item {
            height: 80px;
        }

        #thumbs .item a {
            font-size: 10px;
        }

        .product-keeper {
            height: 300px;
        }

        .one-product-detail {
            float: right;
            margin-bottom: 10px;
            padding: 10px;
        }

        .padding-response {
            padding-right: 15px;
        }

        .price-box {
            padding-right: 15px;
        }

        #thumbs {
            padding-top: 0px;
        }

        .btn-buy {
            top: 260px;
            left: 65px;
        }

        /*for slider 2*/
        #thumbs2{
            width: 210px;
        }
        .div-on-slider2{
            width: 275px;
            padding-left: 0px;
        }
        .slider2-hour-div {
            margin-top: 5px;
        }
        .index-sidebar-top .index-sidebar-home2{
            height: 358px;
        }
        #thumbs2.owl-carousel .owl-item{
            height: 68.4px;
        }
        /*for slider 2*/
    }

    @media (max-width: 991px) and (min-width: 768px) {

        .body-guarantee-div {
            display: table;
        }

        .index-product-extra {
            display: none;
        }

        #myCarousel .list-group-item {
            height: 67px;
        }
    }

    @media (max-width: 1199px) and (min-width: 992px) {
        .index-sidebar-home .carousel .index-btn-buy {
            top: auto;
            font-size: 16px;
            padding: 10px 20px;
            bottom: 50px;
        }

        .index-sidebar-top .index-tools-top .index-banner {
            height: 173px;
        }

        .index-sidebar-top .index-product-extra {
            height: 322px;
        }

        .index-sidebar-top .index-product-extra .item a {
            font-size: 12px;
        }

        .index-sidebar-top .index-product-extra .item a span {
            padding: 45px 3px 0 3px;
            font-size: 1rem;
            margin-top: 0px;
        }

        .index-sidebar-top .index-product-extra .item.item_1 a span {
            padding-top: 40px;
        }

        .index-sidebar-top .index-sidebar-home {
            width: 77%;
            height: 323px;
            border-radius: 3px 3px 0 0;
            overflow: hidden;
        }

        .index-sidebar-top .index-tools-top {
            height: 323px;
            width: 17%;
        }

        .btn-buy {
            top: 165px;
            left: 65px;
        }

        /*for slider2*/
        .div-on-slider2 {
            padding-top: 5px;
            padding-left: 0px;
        }
        .slider2-hour-div {
            margin-top: 10px;
        }
        .index-sidebar-top .index-sidebar-home2 {
            width: 77%;
            height: 350px;
            border-radius: 3px 3px 0 0;
            overflow: hidden;
        }
        #thumbs2.owl-carousel .owl-item{
            height: 66.5px;
        }
        .slider2-text p{
            font-size: 13px;
        }
        /*for slider2*/

    }

    @media screen and (max-width: 767px) {
        .index-sidebar-home .carousel li {
            padding: 5px 0;
            font-size: 12px;
            line-height: 1.5;
        }

        .index-sidebar-home .carousel .carousel-control.left {
            left: 5%;
        }

        .index-sidebar-home .carousel .carousel-control.right {
            right: 10%;
        }

        .index-sidebar-home .carousel .carousel-control .index-arrow {
            top: 30%;
        }

        .index-sidebar-top .index-sidebar-home {
            height: 275px;
        }

        .body-guarantee-div {
            display: table;
        }

        .index-product-extra {
            display: none;
        }

        .btn-buy {
            top: 140px;
            left: 65px;
        }
        /*for slider 2*/
        #thumbs2.owl-carousel .owl-item {
            height: 51.5px;
        }
        .div-on-slider2 {
            width: 100%;
            position: absolute;
            right: 0px;
            height: 40%;
            bottom: 0px;
            top: auto;
            padding-top: 0px;
        }
        .div-on-slider2 a h2{
            margin-top: 5px;
        }
        .slider2-desc {
            font-size: 12px;
            margin-bottom: 0px;
        }
        .slider2-discountPrice{
            width: 15%;
        }
        .slider2-mainPrice{
            width: 28%;
        }
        .slider2-hour-div{
            width: 25%;
            position: absolute;
            right: 35%;
            top: 10px;
        }
        .slider2-text{
            display: none;
        }
        .slider2-mainPrice p{
            font-size: 20px;
        }
        #thumbs2 .item{
            line-height: 18px;
        }
        /*for slider 2*/
    }

    @media screen and (max-width: 700px) {
        /*for slider 2*/
        .slider2-hour-div {
            width: 25%;
            position: absolute;
            right: 40%;
            top: 10px;
        }
        /*for slider 2*/
    }

    @media screen and (max-width: 600px) {
        #thumbs2 {
            width: 190px;
        }
        /*for slider 2*/
        .slider2-hour-div {
            width: 20%;
            position: absolute;
            right: 42%;
            top: 25px;
        }
        .slider2-hour {
            height: 50px;
        }
        /*for slider 2*/
    }

    @media  screen and (max-width: 550px) {
        .body-guarantee li a{
            font-size: 11px;
            padding-right: 3px;
        }
        /*for slider 2*/
        .slider2-hour{
            display: none;
        }
        #thumbs2 .item {
            line-height: 17px;
        }
        .slider2-mainPrice p {
            font-size: 17px;
        }
        #thumbs2 .item a {
            font-size: 11px;
        }
        .slider2-discountPrice {
            width: 16%;
        }
        .slider2-discountPrice p {
            font-size: 17px;
        }
        /*for slider 2*/
    }
</style>