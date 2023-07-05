<div class="col-md-3 col-xs-12 rightFloat profile-public-desc-right-div sidebar">
    <div class="col-md-12 col-xs-12 profile-desc-ul-div">
        <?php
        function endsWith($haystack, $needle)
        {
            return substr_compare($haystack, $needle, -strlen($needle)) === 0;
        }

        $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        ?>
        <ul>
            <li class=<?php if (endsWith($url, 'User/Home') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home'); ?>">اطلاعات شخصی</a>
            </li>
            <li class=<?php if (strpos($url, 'address') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home/address'); ?>">نشانی های من</a>
            </li>
            <li class=<?php if (strpos($url, 'wishList') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home/wishList'); ?>">محصولات مورد علاقه</a>
            </li>
            <li class=<?php if (strpos($url, 'orders') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home/orders'); ?>">سفارش ها</a>
            </li>
            <li class=<?php if (strpos($url, 'orders11') !== false) echo "active"; ?>>
                <a href="<?php echo base_url('User/Home/doLogOut'); ?>">خروج</a>
            </li>
        </ul>
    </div>
</div>

<style>
    /*helper*/
    .margin-t-5 {
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

    .rightFloat {
        float: right;
    }

    .leftFloat {
        float: left;
    }

    .margin-t-25 {
        margin-top: 25px;
    }

    .padding-b-30 {
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

    .discount-login-image-div-heart {
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
    .profile-public-desc-right-div2 {
        background-color: transparent;
        border: none;
    }

    .profile-public-desc-left-div {
        min-height: 65vh;
        border: 1px solid #ccc;
        background-color: #fff;
        padding: 45px 0;
        direction: rtl;
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

    .profile-desc-ul-div2 {
        padding-right: 0px;
        padding-left: 10px;
    }

    .profile-desc-ul-div3 {
        padding-right: 15px;
        padding-left: 10px;
    }

    .profile-desc-ul-div2 .form-group {
        margin-bottom: 4px;
    }

    .profile-desc-ul-div2 .form-group:last-child {
        margin-bottom: 15px;
    }

    .profile-desc-ul-div2 .form-group label {
        font-size: 13px;
    }

    .profile-desc-ul-div2 .form-group .form-control {
        height: 25px;
    }

    .profile-desc-ul-div2 .form-group .form-control::placeholder {
        color: #8dc63f;
    }

    .profile-desc-ul-div ul {
        padding-right: 0;
        list-style-type: none;
        cursor: pointer;
        margin-bottom: 0;
    }

    .profile-rightPanel-Password label {
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

    .profile-desc-ul-div ul li {
        color: #fff;
        direction: rtl;
        text-align: justify;
        padding: 12px 0;
    }

    .profile-desc-ul-div ul li.active {
        background-color: #fd4a1a;
        color: #fff;
        direction: rtl;
        text-align: justify;
        padding: 12px 0;
    }

    .profile-desc-ul-div ul li.active a {
        color: #fff;
    }

    .profile-login-image-div {
        padding-top: 15px;
        padding-left: 0px;
    }

    .profile-login-image-div3 {
        padding-right: 15px;
        padding-left: 15px;
        padding-top: 15px;
    }

    .profile-login-image-div4 {
        padding: 10px;
        margin: 0 0;
    }


    .profile-login-image-div4:nth-child(odd) {
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
    }
    .profile-login-image-div4:nth-child(even) {
        border-bottom: 1px solid #ccc;
        border-left: 1px solid #ccc;
    }
    .profile-login-image-div4.no-border {
        border-bottom: 0;
    }

    .profile-login-image-div4:nth-child(even):before {
        content: ' ';
        background: #ffffff;
        position: absolute;
        width: 20px;
        height: 20px;
        left: -10px;
        z-index: 1000000;
        bottom: -10px;
    }

    .profile-favorites-text {
        padding-top: 15px;
    }

    .profile-form-div {
        padding-right: 3px;
    }

    .profile-form-div label {
        padding: 5px;
        width: 100px;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        margin: 0px;
        float: right;
        border-left: none;
    }

    .profile-form-div input {
        width: calc(100% - 100px);
        padding-top: 5px;
        padding-bottom: 5px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border: 1px solid gray;
        direction: ltr;
        margin-bottom: 7px;
        padding-right: 10px;
        text-align: right;
    }

    .profile-form-div input::placeholder {
        color: #fff;
    }

    .profile-button-edit {
        padding-right: 0px;
    }

    .profile-button-edit button {
        width: auto;
        background-color: #fd4a1a;
        color: #fff;
        border-bottom: 0px solid gray;
        padding: 10px 20px;
        margin-bottom: 30px;
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
        width: auto;
        background-color: #fd4a1a;
        color: #fff;
        border-bottom: 0px solid gray;
        padding: 10px 20px;
    }

    .profile-button-edit-password button:hover {
        color: #fff;
    }

    .profile-button-edit-password button:focus {
        color: #fff;
    }

    .profile-button-edit-password2 {
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

    .table-bordered {
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

    .profile-see-product {
        padding: 20.5px;
        background-color: #fd4a1a;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .profile-see-product {
        text-align: center;
        color: #fff;
    }

    .profile-see-product span {
        font-size: 21px;
    }

    .profile-see-product a {
        color: #fff;
    }

    .profile-button-save-change {
        padding-left: 10px;
        padding-right: 3px;
    }

    .profile-add-address-title p {
        font-weight: bold;
    }

    .profile-add-address-title a {
        color: #fd4a1a;
        text-decoration: none;
    }

    .profile-address-checkbox {
        font-size: 12px;
        padding-top: 4px;
        margin-top: 0px;
    }

    .profile-client-address-text {
        color: #fd4a1a;
        font-weight: bold;
    }

    .profile-client-detail-div {
        min-height: 100px;
        border: 1px solid #fd4a1a;
        border-right: 20px solid #fd4a1a;
        padding-left: 0px;
    }

    .profile-client-other-detail-div {
        height: 100px;
        border: 1px solid #ccc;
        border-right: 20px solid #ccc;
        padding-left: 0px;
        margin-bottom: 15px;
    }

    .profile-client-name {
        padding-top: 10px;
    }

    .profile-client-name p {
        font-weight: bold;
        color: #fd4a1a;
    }

    .profile-client-address p {
        font-size: 12px;
        line-height: 1.5em;
        height: 1.5em;
        overflow: hidden;
        word-break: break-word;
    }

    .profile-client-phone p {
        font-size: 12px;
    }

    .profile-client-edit-button {
        height: 100%;
        border-right: 1px solid #fd4a1a;
        text-align: center;
        line-height: 100px;
        padding: 0px;
    }

    .profile-client-edit-button button {
        background-color: transparent;
        color: #fd4a1a;
        font-weight: bold;
        text-align: center;
        box-shadow: none;
        border: none;
        cursor: pointer;
    }

    .profile-client-edit-button button:hover {
        border: none;
        color: #8dc63f;
    }

    .profile-client-edit-button button:focus {
        border: none;
        color: #8dc63f;
    }

    .profile-add-address-button {
        width: 140px;
        background-color: #006f35;
        color: #fff;
        border-bottom: 2px solid gray;
        padding: 4px 12px;
        float: left;
    }

    .profile-add-address-button:hover {
        color: #fff;
    }

    .profile-add-address-button:focus {
        text-decoration: none;
        color: #fff;
    }

    .profile-padding-important-style {
        padding-left: 0px;
        padding-right: 30px;
    }

    .profile-padding-important-style input[type=radio] {
        position: absolute;
        right: 0px;
        top: 0px;
        bottom: 0px;
        margin: auto;
    }

    .profile-button-div-height-style {
        height: 35px;
    }

    .profile-button-div-height-style button {
        display: block;
        margin: auto;
    }

    .profile-inner-button-div-style {
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
    .profile-detail-pic-div {
        height: 140px;
    }

    .profile-product-detail-title button {
        background-color: white;
        color: #bcbcbc;
        padding: 6px 10px;
        border: 2px solid #bcbcbc;
        float: left;
        position: absolute;
        left: 0;
        top: 2px;
        z-index: 10000;;
    }



    .profile-product-detail-title p {
        color: #000000;
        font-weight: bold;
        font-size: 12px;
        margin-top: 0;
        margin-bottom: 5px;
        height: 1.3em;
        line-height: 1.5em;
        overflow: hidden;
        word-break: break-word;
    }

    .profile-product-detail-text p {
        font-size: 12px;
        line-height: 2.5em;
        margin-bottom: 0;
        overflow: hidden;
        word-break: inherit;
    }

    .profile-guarantee-text p {
        color: #fd4a1a;
        font-weight: 500;
        height: 1.3em;
        line-height: 1.5em;
        overflow: hidden;
        word-break: break-word;
        margin-bottom: 6px;
    }
    .profile-product-detail-price  {
        font-weight: 900;
        font-size: 14px;
        margin-top: 68px;
    }
    .profile-product-detail-price .price {
        color: #797979;
    }
    .profile-product-detail-price a {
        color: #ffffff;
        background: #4abdad;
        padding: 2px 8px;
        font-size: 12px;
        float: left;
    }

    .profile-product-detail-color p {
        padding-right: 3px;
        margin-bottom: 5px;
    }

    .profile-product-detail-trace p {
        font-size: 13px;
        height: 1.3em;
        line-height: 1.5em;
        overflow: hidden;
        word-break: inherit;
    }



    .profile-product-detail-price-toman {
        font-size: 12px;
        color: #ccc;
        font-weight: 100;
        padding-right: 5px;
    }

    .profile-basket-button {
        height: 45px;
        line-height: 45px;
        color: #fff;
        background-color: #2C544B;
        white-space: nowrap;
        margin-left: 15%;
        margin-right: 0.5%;
    }

    .profile-basket-added {
        padding-right: 10px;
    }


    .main-form {
        direction: rtl;
        background: #fff;
        margin: 40px 0;
        padding: 0;
        padding-bottom: 15px;
    }
    .sidebar{
        direction: rtl;
        background: #fff;
        margin: 25px 0;
        padding: 0;
        border: 15px solid #f3f3f0;
    }

    .form-title {
        color: #4abdad;
        margin: 0;
        margin-bottom: 30px;
        margin-top: 15px;
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

        .profile-table-div-padding {
            padding-right: 0px;
        }

        .profile-see-product {
            border-radius: 0px;
        }

        .profile-desc-ul-div2 {
            padding-right: 10px;
            padding-left: 10px;
        }

        .profile-login-image-div {
            padding-right: 10px;
        }

        .profile-button-change-pass {
            float: left;
            text-align: center;
        }

        .margin-b-mines-75 {
            margin-bottom: 0px;
        }

        .profile-client-edit-button {
            border-right: none;
        }

        .profile-client-phone p {
            text-align: right;
        }

        .profile-client-other-detail-div {
            min-height: 100px;
            height: auto;
        }

        .profile-product-detail-delete-btn {
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

        .profile-basket-added {
            padding-right: 2px;
        }

        .profile-add-address-button {
            padding: 4px 0px;
        }
    }

    @media screen and (max-width: 767px) {

    }

    @media screen and (max-width: 700px) {

    }

    @media screen and (max-width: 600px) {
        .profile-rightPanel-save-ChangeBtn button {
            float: initial !important;
        }

        .profile-button-edit-password2 button {
            float: initial !important;
        }
    }

    @media screen and (max-width: 550px) {

    }
</style>