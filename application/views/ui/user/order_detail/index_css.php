<style>
    /*helper*/
    .margin-t-5{
        margin-top: 5px;
    }
    .margin-top-20 {
        margin-top: 20px;
    }

    .left-text-align {
        text-align: left;
    }

    .right-text-align {
        text-align: right;
    }

    .padding-response {
        padding: 0px;
    }

    .padding-left {
        padding-left: 0px;
    }

    .margin-t-15 {
        margin-top: 15px;
    }

    .margin-b-10 {
        margin-bottom: 10px;
    }
    .rightFloat{
        float: right;
    }
    .leftFloat{
        float: left;
    }
    .margin-t-25{
        margin-top: 25px;
    }
    .padding-b-30{
        padding-bottom: 30px;
    }
    /*helper*/

    #main {
        background-color: #f3f3f0;
    }

    .container-padding {
        padding: 0px;
    }

    /*for user*/
    .discount-login-image-div {
        height: 35px;
        width: 35px;
        border-radius: 100%;
        background-color: transparent;
        line-height: 45px;
        text-align: center;
        border: 1px solid #8dc63f;
        float: right;
    }
    .discount-login-image-div i {
        color: #8dc63f;
        font-size: 25px;
        padding: 3px;
    }
    .discount-login-image-div-heart{
        height: 35px;
        width: 35px;
        border-radius: 100%;
        background-color: transparent;
        line-height: 40px;
        text-align: center;
        border: 1px solid red;
        float: right;
    }
    .discount-login-image-div-heart i {
        color: red;
        font-size: 17px;
        padding: 0px;
    }
    .profile-public-desc-left-text {
        line-height: 35px;
        color: #8dc63f;
        float: right;
        font-weight: bold;
        padding-right: 10px;
    }
    .profile-public-desc-left-text-heart {
        line-height: 35px;
        color: red;
        float: right;
        font-weight: bold;
        padding-right: 10px;
    }
    /*for user*/
    .profile-public-desc-right-div {
        min-height: 200px;
        border: 1px solid #ccc;
        background-color: #fff;
        padding-right: 0px;
        padding-left: 0px;
        border-left: 0px;
    }
    .profile-public-desc-right-div2{
        background-color: transparent;
        border: none;
    }
    .profile-public-desc-left-div {
        border: 1px solid #ccc;
        background-color: #fff;
        padding-right: 0px;
        padding-left: 0px;
    }

    .profile-public-desc-title {
        padding-top: 10px;
        padding-right: 10px;
    }

    .profile-public-desc-title p {
        margin-bottom: 5px;
    }

    .profile-desc-ul-div {
        padding-right: 0px;
        padding-left: 0px;
    }
    .profile-desc-ul-div2{
        padding-right: 0px;
        padding-left: 10px;
    }
    .profile-desc-ul-div3{
        padding-right: 15px;
        padding-left: 10px;
    }
    .profile-desc-ul-div2 .form-group{
        margin-bottom: 4px;
    }
    .profile-desc-ul-div2 .form-group:last-child{
        margin-bottom: 15px;
    }
    .profile-desc-ul-div2 .form-group label{
        font-size: 13px;
    }
    .profile-desc-ul-div2 .form-group .form-control{
        height: 25px;
    }
    .profile-desc-ul-div2 .form-group .form-control::placeholder{
        color: #8dc63f;
    }
    .profile-desc-ul-div ul {
        padding-right: 0px;
        list-style-type: none;
        cursor: pointer;
        margin-bottom: 0px;
    }
    .profile-rightPanel-Password label{
        color: #8dc63f;
    }
    .profile-desc-ul-div ul li {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .profile-desc-ul-div ul li a {
        color: #444444;
        text-decoration: none;
        padding-right: 10px;
    }

    .profile-desc-ul-div ul li:hover {
        background-color: #dceec5;
    }

    .profile-desc-ul-div ul li:hover a {
        color: #8bc53f;
    }

    .profile-desc-ul-div ul li.active {
        background-color: #009f4c;
        color: #fff;
    }

    .profile-desc-ul-div ul li.active a {
        color: #fff;
    }

    .profile-login-image-div {
        padding-top: 15px;
        padding-left: 0px;
    }
    .profile-login-image-div3{
        padding-right: 15px;
        padding-left: 15px;
        padding-top: 15px;
    }

    .profile-login-image-div4{
        padding-right: 15px;
        padding-left: 15px;
        padding-top: 5px;
        padding-bottom: 15px;
        border-bottom: 1px solid red;
    }
    .profile-favorites-text{
        padding-top: 15px;
    }
    .profile-form-div {
        padding-right: 3px;
    }

    .profile-form-div label {
        border: 1px solid gray;
        padding: 5px;
        width: 40%;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        margin: 0px;
        float: right;
        border-left: none;
    }

    .profile-form-div input {
        width: 60%;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-right: 5px;
        border-top-left-radius: 7px;
        border-bottom-left-radius: 7px;
        border: 1px solid gray;
        background-color: #8dc63f;
        color: #fff;
        border-right: 0px;
        direction: ltr;
        margin-bottom: 7px;
        padding-left: 10px;
    }

    .profile-form-div input::placeholder {
        color: #fff;
    }

    .profile-button-edit {
        padding-right: 0px;
    }

    .profile-button-edit button {
        width: 115px;
        background-color: #8dc63f;
        color: #fff;
        border-bottom: 2px solid gray;
        padding: 4px 12px;
    }

    .profile-button-edit button:hover {
        color: #fff;
    }

    .profile-button-edit button:focus {
        color: #fff;
    }

    .profile-button-edit-password {
        padding-right: 0px;
    }

    .profile-button-edit-password button {
        width: 115px;
        background-color: #bca74d;
        color: #fff;
        border-bottom: 2px solid gray;
        padding: 4px 12px;
    }

    .profile-button-edit-password button:hover {
        color: #fff;
    }

    .profile-button-edit-password button:focus {
        color: #fff;
    }
    .profile-button-edit-password2{
        padding-right: 0px;
    }
    .profile-button-edit-password2 button {
        width: 140px;
        background-color: #bca74d;
        color: #fff;
        border-bottom: 2px solid gray;
        padding: 4px 12px;
    }
    .profile-button-edit-password2 button:hover {
        color: #fff;
    }

    .profile-button-edit-password2 button:focus {
        color: #fff;
    }
    /*for checkbox*/
    .checkbox-container {
        display: inline-block;
        position: relative;
        padding-right: 30px;
        margin-bottom: 12px;
        margin-top: 5px;
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
        height: 20px;
        width: 20px;
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
    .profile-checkbox-div {
        padding-right: 5px;
        padding-left: 0px;
    }

    .profile-table-row1 th {
        text-align: center;
        padding: 7px;
        border: none !important;
    }

    .profile-table-row2 th {
        text-align: center;
        border: 1px solid gray !important;
        padding-top: 20px;
        padding-bottom: 19px;
    }
    .table-bordered{
        border: 1px solid gray;
    }
    .profile-table-row1 {
        color: #fff;
        background-color: #8dc63f;
    }

    .profile-table-div-padding {
        padding-right: 5px;
        padding-left: 0px;
    }
    .profile-see-product{
        padding: 20.5px;
        background-color: #009f4c;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    .profile-see-product{
        text-align: center;
        color: #fff;
    }
    .profile-see-product span{
        font-size: 21px;
    }
    .profile-see-product a{
        color: #fff;
    }
    .profile-rightPanel-save-ChangeBtn{
        padding-left: 10px;
        padding-right: 0px;
    }
    .profile-rightPanel-save-ChangeBtn button{
        width: 140px;
        background-color: #8dc63f;
        color: #fff;
        border-bottom: 2px solid gray;
        padding: 4px 12px;
    }
    .profile-rightPanel-save-ChangeBtn button:hover{
        color: #fff;
    }
    .profile-rightPanel-save-ChangeBtn button:focus{
        color: #fff;
    }
    .profile-button-save-change{
        padding-left: 10px;
        padding-right: 3px;
    }
    .profile-add-address-title p{
        font-weight: bold;
    }
    .profile-add-address-title a{
        color:#009f4c ;
        text-decoration: none;
    }
    .profile-address-checkbox{
        font-size: 12px;
        padding-top: 4px;
        margin-top: 0px;
    }
    .profile-client-address-text{
        color: #009f4c;
        font-weight: bold;
    }
    .profile-client-detail-div{
        min-height: 100px;
        border: 1px solid #009f4c;
        border-right: 20px solid #009f4c ;
        padding-left: 0px;margin: 10px 0;
    }
    .profile-client-other-detail-div{
        height: 100px;
        border: 1px solid #ccc;
        border-right: 20px solid #ccc;
        padding-left: 0px;
        margin-bottom: 15px;
    }
    .profile-client-name{
        padding-top: 10px;
    }
    .profile-client-name p{
        font-weight: bold;
        color: #009f4c;
    }
    .profile-client-address p{
        font-size: 12px;
        line-height: 1.5em;
        height: 1.5em;
        overflow: hidden;
        word-break: break-word;
    }
    .profile-client-phone p{
        font-size: 12px;
    }
    .profile-client-edit-button{
        height: 100%;
        border-right: 1px solid #009f4c;
        text-align: center;
        line-height: 100px;
        padding: 0px;
    }
    .profile-client-edit-button button{
        background-color: transparent;
        color: #8dc63f;
        font-weight: bold;
        text-align: center;
        box-shadow: none;
        border: none;
        cursor: pointer;
    }
    .profile-client-edit-button button:hover{
        border: none;
        color: #8dc63f;
    }
    .profile-client-edit-button button:focus{
        border: none;
        color: #8dc63f;
    }
    .profile-add-address-button{
        width: 140px;
        background-color: #006f35;
        color: #fff;
        border-bottom: 2px solid gray;
        padding: 4px 12px;
        float: left;
    }
    .profile-add-address-button:hover{
        color: #fff;
    }
    .profile-add-address-button:focus{
        text-decoration: none;
        color: #fff;
    }
    .profile-padding-important-style{
        padding-left: 0px;
        padding-right: 30px;
    }
    .profile-padding-important-style input[type=radio]{
        position: absolute;
        right: 0px;
        top: 0px;
        bottom: 0px;
        margin: auto;
    }
    .profile-button-div-height-style{
        height: 35px;
    }
    .profile-button-div-height-style button{
        display: block;
        margin: auto;
    }
    .profile-inner-button-div-style{
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 15px;
        height: 100%;
    }
    /*for social*/
    .social-info {
        font-size: 14px;
        width: 90px;
        margin: 0 0 10px 0;
        float: left;
        line-height: 1.25em;
        word-break: break-word;
    }
    .product-detail-social {
        height: 50px;
        background-color: #fff;
        /* border: 1px solid #ccc; */
        padding: 9px 7px;
        box-shadow: 2px 0 5px #ccc;
    }
    .product-detail-social-div {
        padding-top: 0px;
        padding-right: 0px;
        padding-left: 0px;
        padding-bottom: 5px;
    }
    .product-detail-social ul {
        float: right;
        margin: 0;
        padding: 0;
        list-style: none;
        text-align: center;
    }
    .product-detail-social ul li:first-child {
        margin-right: 0;
    }

    .product-detail-social ul li {
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 100%;
        background-color: #b0b0b0;
        margin-right: 8px;
    }

    .product-detail-social ul li a {
        font-size: 17px;
        color: #fff;
        text-align: center;
        display: block;
        padding: 5px 0 0 0;
        line-height: 1.5em;
    }
    .product-detail-social ul li.telegram {
        background-color: #0088cc;
    }

    .product-detail-social ul li.facebook {
        background-color: #405c99;
    }

    .product-detail-social ul li.facebook {
        background-color: #0088cc;
    }

    .product-detail-social ul li.linkedin {
        background-color: #6E36AA;
    }

    .product-detail-social ul li.google-plus {
        background-color: #da4b3e;
    }

    .product-detail-social ul li.pinterest {
        background-color: #c50000;
    }

    .product-detail-social ul li.canEmailToFriend {
        background-color: #3FA9F5;
    }
    /*for social*/
    .profile-detail-pic-div{
        border: 10px solid red;
        height: 300px;
    }
    .profile-product-detail-delete-btn button{
        background-color: red;
        color: #fff;
        width: 100px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .profile-product-detail-delete-btn button:hover{
        color: #fff;
    }
    .profile-product-detail-delete-btn button:focus{
        color: #fff;
    }
    .profile-product-detail-title p{
        color: #006f35;
        font-weight: bold;
        font-size: 16px;
        margin-top: 10px;
        margin-bottom: 5px;
        height: 1.3em;
        line-height: 1.5em;
        overflow: hidden;
        word-break: break-word;
    }
    .profile-product-detail-text p{
        font-size: 13px;
        height: 1.3em;
        line-height: 1.5em;
        margin-bottom: 7px;
        overflow: hidden;
        word-break: inherit;
    }
    .profile-guarantee-text p{
        color: #009f4c;
        font-weight: 500;
        height: 1.3em;
        line-height: 1.5em;
        overflow: hidden;
        word-break: break-word;
        margin-bottom:6px;
    }
    .profile-product-detail-color p{
        padding-right: 3px;
        margin-bottom: 5px;
    }
    .profile-product-detail-trace p{
        font-size: 13px;
        height: 1.3em;
        line-height: 1.5em;
        overflow: hidden;
        word-break: inherit;
    }
    .profile-product-detail-price{
        color: #006f35;
        font-weight: bold;
        font-size: 22px;
    }
    .profile-product-detail-price-toman{
        font-size: 12px;
        color: #ccc;
        font-weight: 100;
        padding-right: 5px;
    }
    .profile-basket-button{
        height: 45px;
        line-height: 45px;
        color: #fff;
        background-color: #2C544B;
        white-space: nowrap;
        margin-left: 15%;
        margin-right: 0.5%;
    }
    .profile-basket-added{
        padding-right: 10px;
    }















    @media (min-width: 992px) {

    }

    @media (max-width: 991px) {


    }

    @media screen and (max-width: 992px) {
        .container-padding {
            padding: 15px;
        }

        .profile-public-desc-right-div {
            margin-bottom: 15px;
        }

        .profile-button-edit-password {
            margin-bottom: 15px;
        }

        .profile-button-edit {
            margin-bottom: 15px;
            text-align: center;
        }
        .profile-table-div-padding{
            padding-right: 0px;
        }
        .profile-see-product{
            border-radius: 0px;
        }
        .profile-desc-ul-div2{
            padding-right: 10px;
            padding-left: 10px;
        }
        .profile-login-image-div{
            padding-right: 10px;
        }
        .profile-button-change-pass{
            float: left;
            text-align: center;
        }
        .margin-b-mines-75{
            margin-bottom: 0px;
        }
        .profile-client-edit-button{
            border-right: none;
        }
        .profile-client-phone p{
            text-align: right;
        }
        .profile-client-other-detail-div{
            min-height: 100px;
            height: auto;
        }
        .profile-product-detail-delete-btn{
            text-align: left;
            margin-top: 20px;
        }

    }

    @media (max-width: 991px) and (min-width: 768px) {


    }

    @media (max-width: 1199px) and (min-width: 992px) {

        .profile-button-edit button {
            font-size: 12px;
        }

        .profile-button-edit-password button {
            font-size: 12px;
        }
        .profile-basket-added{
            padding-right: 2px;
        }
        .profile-add-address-button{
            padding: 4px 0px;
        }
    }

    @media screen and (max-width: 767px) {

    }

    @media screen and (max-width: 700px) {

    }

    @media screen and (max-width: 600px) {
        .profile-rightPanel-save-ChangeBtn button{
            float: initial !important;
        }
        .profile-button-edit-password2 button{
            float: initial !important;
        }
    }

    @media screen and (max-width: 550px) {

    }
</style>
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