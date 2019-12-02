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
        min-height: 100px;
        border: 1px solid #ccc;
        background-color: #fff;
        padding-right: 0px;
        padding-left: 0px;
        padding-bottom: 20px;
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
        padding-left: 0px;
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