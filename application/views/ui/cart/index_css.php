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
    .RightFloat{
        float: right;
    }
    /*helper*/

    /*body guarantee*/
    .body-guarantee-div {
        padding: 0px;
        border-radius: 3px;
        display: block;
        background-color: #fff;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        margin: 12.5px 0;
        border: 2px solid #cccccc;
    }

    .body-guarantee {
        display: table;
        width: 100%;
        overflow: hidden;
        margin: 0px 0 0px 0;
        border-width: 2px;
        padding: 0px;
    }

    .body-guarantee li {
        cursor: pointer;
        height: 55px;
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
    .body-guarantee li img{
        width: 35px;
        height: 35px;
        position: absolute;
        right: 20px;
        bottom: 0px;
        top: 0px;
        margin: auto;
    }
    .body-guarantee li:hover {
        background-color: #3CB371 !important;
        color: #fff;
    }
    .body-guarantee li:hover a {
        color: #fff !important;
    }
    .body-guarantee li:last-child {
        border-left: 0 none transparent;
    }
    .body-guarantee li a {
        padding-left: 0px;
        font-size: 15px;
        padding-top: 0px;
        color: #3CB371 !important;
        text-align: center;
        padding-right: 15px;
    }

    /*body guarantee*/

    #main {
        background-color: #f3f3f0;
    }

    .index-slider-div{
        margin-bottom: 20px;
    }

    /*برای قسمت سمت راست */
    .cart-product-factor-main-div{
        min-height: 40px;
        padding-right: 0px;
        padding-left: 0px;
        padding-top: 0px;
        padding-bottom: 0px !important;
    }
    .cart-product-discount-card{
        padding-right: 0px;
        padding-left: 0px;
        padding-top: 10px;
        color: #fff;
    }
    .cart-product-discount-card p {
        font-size: 12px;
        margin-bottom: 7px;
    }
    .cart-product-question-span{
        position: absolute;
        left: 10px;
        top: 10px;
        background-color: #d5b55e;
        border-radius: 50%;
        width: 15px;
        height: 15px;
        text-align: center;
        color: #000;
    }
    .cart-product-factor-button{
        background-color: #fff;
        font-size: 12px;
        padding: 7px;
        width: 100%;
        word-break: break-word;
        font-weight: bold;
        line-height: 19px;
    }
    .cart-product-factor-text input{
        width: 100%;
        height: 100%;
        padding: 5.3px;
        border: none;
        border-left: 2px solid #2b2b2b;
    }
    .cart-product-right-panel{
        min-height: 360px;
        background-color: #2b2b2b;
        margin-top: 0px;
        padding-left: 0px;
        padding-right: 0px;
    }
    .cart-product-right-panel-border-b{
        border-bottom: 2px solid #fff;
        padding-left: 10px;
        padding-right: 10px;
    }
    .cart-left-panel-button{
        height: 55px;
        margin: 12.5px 0px;
        padding-right: 10px;
        padding-left: 10px;
        margin-bottom: 5px;
        margin-top: 0px;
    }
    .cart-left-panel-button button{
        width: 100%;
        height: 100%;
        background-color: #2D693A;
        color: #fff;
        line-height: 30px;
        border-radius: 3px;
        border: none;
        padding-right: 0px;
    }
    .cart-left-panel-button span{
        font-size: 2em;
    }
    .cart-text-shipping-cost p{
        font-size: 11px;
        color: gray;
        text-align: center;
        word-break: break-word;
    }
    .cart-product-discount-desc{
        color: #d5b55e;
        font-size: 13px;
        padding-top: 10px;
        padding-left: 0px;
        padding-right: 12px;
    }
    .cart-product-discount-price p{
        font-size: 17px;
        margin-bottom: 1px;
    }
    .cart-product-discount-price span{
        font-size: 10px;
    }
    .cart-first-title{
        color: #fff;
    }
    .cart-first-title span{
        font-size: 10px;
    }
    .cart-product-discount-border-b-div{
        border-bottom: 2px solid #fff;
    }
    .cart-product-amount-payable-text{
        padding-top: 10px;
    }
    .cart-product-amount-payable-text p {
        text-align: center;
        font-size: 16px;
        color: #fff;
        margin-bottom: 5px;
    }
    .cart-product-amount-payable-price p{
        text-align: center;
        font-size: 20px;
        color: #3CB371 ;
        margin-bottom: 5px;
    }
    .cart-product-amount-payable-price span{
        font-size: 12px;
    }
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        opacity: 1;
    }
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    /*برای قسمت سمت راست */


    /*برای سمت چپ*/
    .finalize-shopping {
        height: 55px;
        margin: 12.5px 0;
        padding-right: 15px;
    }

    .cart-shopping-button {
        width: 100%;
        height: 100%;
        background-color: #2D693A;
        color: #fff;
        line-height: 30px;
        border-radius: 3px;
        border: none;
        padding-right: 0px;
    }
    .cart-shopping-basket{
        font-size: 22px;
        padding-top: 2px;
    }
    .finalize-shopping span {
        font-size: 2em;
    }

    .cart-shopping-button:hover {
        color: #fff;
        text-decoration: none;
    }
    .cart-shopping-button:focus {
        color: #fff;
        text-decoration: none;
    }
    .cart-product-main-div {
        min-height: 110px;
        background-color: #fff;
        margin-bottom: 15px;
    }

    .cart-product-detail {
        /*height: 100%;*/
        min-height: 110px;
        border-left: 1px solid #ccc;
        float: right;
        padding-top: 8px;
        padding-right: 8px;
        padding-left: 8px;
        padding-bottom: 0px;
    }

    .cart-product-main-div div:last-child {
        border: none;
    }

    .cart-product-image {
        border: 2px solid #d5b55e;
    }

    .cart-product-title p {
        font-size: 14px;
        font-weight: 800;
        margin: 0px 0px 0px;
    }

    .cart-product-desc p {
        color: gray;
        font-size: 11px;
        margin: 0px 0px 4px;
    }

    .cart-product-price {
        color: #2D693A;
        font-weight: bold;
    }
    .cart-text-shipping-cost{
        padding: 0px;
    }
    .cart-main-price {
        padding-left: 15px;
        text-decoration: line-through;
        color: red;
        font-weight: bold;
        font-size: 13px;
    }

    .cart-discount-price {

    }

    .cart-toman-price {
        color: #ccc;
        padding-right: 10px;
        font-size: 13px;
    }

    .cart-second-title {
        color: #2D693A;
        font-weight: bolder;
        padding-right: 5px;
    }
    .cart-product-title a{
        color: #2D693A;
        text-decoration: none;
    }
    .cart-second-desc {
        padding-right: 5px;
    }

    .cart-second-desc p {
        color: gray;
        font-size: 12px;
        margin: 0px 0px 5px;
    }

    .cart-product-number-detail {
        border-bottom: 1px solid #ccc;
        padding-right: 10px;
        padding-top: 10px;
        padding-bottom: 15px;
    }

    .cart-product-number-text {
        position: absolute;
        font-weight: bold;
        color: #2D693A;
        padding-top: 2px;
    }

    .cart-shopping-button-div {
        padding: 0px;
        padding-top: 5px;
    }

    .cart-product-decrease-increase {
        height: 24px;
        color: #fff;
        width: 23px !important;
        border: none;
    }

    .cart-product-increase {
        background-color: #8BC53F
    }

    .cart-product-decrease {
        background-color: #2D693A;
    }
    .cart-product-main-div-IncrAndDecr{
        direction: ltr;
        text-align: center;
        line-height: 27px;
        display: flex;
        padding-left: 10px;
    }
    .cart-product-buy-number{
        width: 35px;
        height: 24px;
        background-color: #f3f3f0;
        border: none;
    }
    /*برای سمت چپ*/


    @media screen and (max-width: 992px) {
        /*body guarantee*/
        .body-guarantee li {
            padding: 0px;
        }
        .body-guarantee li img{
            width: 30px;
            height: 30px;
            right: 10px;
        }
        /*body guarantee*/

        /*برای قسمت سمت راست */
        .cart-product-discount-desc{
            border-bottom: 2px solid #fff;
        }
        .cart-product-factor-main-div {
            padding-top: 10px;
            padding-bottom: 15px !important;
        }
        /*برای قسمت سمت راست */

        /*برای سمت چپ*/
        .finalize-shopping {
            padding: 0px;
        }

        .cart-product-detail {
            border-bottom: 1px solid #ccc;
            border-left: 0px;
        }
        .cart-product-title p {
            padding-top: 10px;
        }
        /*برای سمت چپ*/
    }

    @media (max-width: 991px) and (min-width: 768px) {

    }

    @media (max-width: 1199px) and (min-width: 992px){
        /*body guarantee*/
        .body-guarantee li img{
            width: 30px;
            height: 30px;
            right: 10px;
        }
        /*body guarantee*/
        /*برای قسمت سمت راست */
        .cart-product-discount-card p{
            font-size: 11px;
        }
        .cart-product-factor-button{
            font-size: 8px;
            padding: 10px;
            font-weight: bold;
        }
        /*برای قسمت سمت راست */

        .finalize-shopping {
            padding-right: 15px;
        }

        .cart-toman-price {
            padding-right: 2px;
        }
        .cart-product-discount-desc{
            font-size: 12px;
        }

        .cart-product-discount-price p {
            font-size: 14px;
            margin-bottom: 5px;
        }
        .cart-product-factor-text input{
            padding: 4.3px;
        }
        .cart-text-shipping-cost{
            padding-left: 10px;
            padding-right: 10px;
        }
        .cart-shopping-button{
            font-size: 11px;
        }
    }

    @media screen and (max-width: 767px) {
        .finalize-shopping {
            padding-right: 10px;
            padding-left: 10px;
        }
        .body-guarantee li a{
            font-size: 13px;
        }
        .body-guarantee li img {
            width: 25px;
            height: 25px;
            right: 10px;
        }
    }

    @media screen and (max-width: 600px) {
        .finalize-shopping {
            padding-right: 10px;
            padding-left: 10px;
        }
        .body-guarantee li a {
            font-size: 12px;
        }
        .body-guarantee li img {
            width: 20px;
            height: 20px;
            right: 5px;
        }
    }
</style>