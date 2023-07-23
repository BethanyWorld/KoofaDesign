<style>

    .profile-form-div input ,
    .profile-form-div select {
        width: calc(100% - 145px) !important;
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
        background-color: #fd4a1a;
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

    .profile-add-address-title p{
        font-weight: bold;
    }
    .profile-add-address-title a{
        color:#fd4a1a ;
        text-decoration: none;
    }
    .profile-address-checkbox{
        font-size: 12px;
        padding-top: 4px;
        margin-top: 0px;
    }
    .profile-client-address-text{
        color: #fd4a1a;
        font-weight: bold;
    }
    .profile-client-detail-div{
        min-height: 100px;
        border: 1px solid #fd4a1a;
        border-right: 20px solid #fd4a1a ;
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
        color: #fd4a1a;
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
        border-right: 1px solid #fd4a1a;
        text-align: center;
        line-height: 100px;
        padding: 0px;
    }
    .profile-client-edit-button button{
        background-color: transparent;
        color: #fd4a1a;
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
        color: #fd4a1a;
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