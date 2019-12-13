<style>
    /*helper*/
    .margin-top-20 {
        margin-top: 20px;
    }
    .margin-t-30{
        margin-top: 30px;
    }
    .left-text-align {
        text-align: left;
    }

    .right-text-align {
        text-align: right;
    }

    .padding-left {
        padding-left: 0px;
    }

    .margin-t-15 {
        margin-top: 15px;
    }

    .margin-t-5 {
        margin-top: 5px;
    }
    .text-right{
        text-align: right;
    }
    .text-left{
        text-align: left;
    }
    .text-center {
        text-align: center;
    }
    .margin-t-0{
        margin-top: 0px !important;
    }
    .margin-b-10{
        margin-bottom: 10px;
    }
    .rightFloat{
        float: right;
    }
    .padding-t-15{
        padding-top: 15px;
    }
    /*helper*/

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
        color: #3cb371;
        float: right;
        font-weight: bold;
        padding-right: 7px;
        padding-left: 0px;
        font-size: 13px;
    }

    /*for user*/
    .step-login-image-div {
        border: 1px solid #3cb371;
    }

    .step-login-image-div i {
        color: #3cb371;
    }

    #main {
        background-color: #f3f3f0;
    }

    .nav > li > a:focus, .nav > li > a:hover {
        background: transparent !important;
    }

    .design-process-section .text-align-center {
        line-height: 25px;
        margin-bottom: 12px;
    }

    .design-process-content {
        border: 1px solid #e9e9e9;
        position: relative;
        padding: 16px 34% 30px 30px;
    }

    .design-process-content img {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        max-height: 100%;
    }

    .design-process-content h3 {
        margin-bottom: 16px;
    }

    .design-process-content p {
        line-height: 26px;
        margin-bottom: 12px;
    }

    .process-model {
        list-style: none;
        padding: 0;
        position: relative;
        margin: 20px auto 0px;
        border: none;
        z-index: 0;
    }

    .process-model li::after {
        background: #3CB371 none repeat scroll 0 0;
        bottom: 0;
        content: "";
        display: block;
        height: 1px;
        margin: 0 auto;
        position: absolute;
        left: -83px;
        top: 18px;
        width: 85%;
        z-index: -1;
    }

    .process-model li.visited::after {
        background: #8dc63f;
    }

    .process-model li:last-child::after {
        /*width: 0;*/
        width: 55%;
        left: -25px;
    }

    .process-model li:first-child::before {
        bottom: 0;
        content: "";
        display: block;
        height: 0px;
        margin: 0 auto;
        position: absolute;
        right: 4px;
        top: 16px;
        width: 55%;
        z-index: -1;
        border: 1px dashed #009f4c;
    }

    .process-model li {
        display: inline-block;
        width: 16%;
        text-align: center;
        float: none;
    }

    .nav-tabs.process-model > li.active > a, .nav-tabs.process-model > li.active > a:hover, .nav-tabs.process-model > li.active > a:focus, .process-model li a:hover, .process-model li a:focus {
        border: none;
        background: transparent;

    }

    .process-model li a {
        padding: 0;
        border: none;
        color: #606060;
    }

    .process-model li.active,
    .process-model li.visited {
        color: #D6DA28;
    }

    .process-model li.active a,
    .process-model li.active a:hover,
    .process-model li.active a:focus,
    .process-model li.visited a,
    .process-model li.visited a:hover,
    .process-model li.visited a:focus {
        color: #8dc63f;
    }

    .process-model li.active p,
    .process-model li.visited p {
        font-weight: 600;
        color: #8BC53F;
    }

    .process-model li i {
        display: block;
        height: 35px;
        width: 35px;
        text-align: center;
        margin: 0 auto;
        background: #f3f3f0;
        border: 5px solid #3CB371;
        line-height: 35px;
        font-size: 30px;
        border-radius: 50%;
        position: relative;
    }

    .process-model li.active i, .process-model li.visited i {
        background: #f3f3f0;
        border-color: #8BC53F;
    }

    .process-model li.active i span, .process-model li.visited i span {
        background-color: #8dc63f;
    }

    .process-model li p {
        font-size: 14px;
        margin-top: 11px;
        color: #8dc63f;
    }

    .process-model.contact-us-tab li.visited a, .process-model.contact-us-tab li.visited p {
        color: #606060 !important;
        font-weight: normal
    }

    .process-model.contact-us-tab li::after {
        display: none;
    }

    .process-model.contact-us-tab li.visited i {
        border-color: #e5e5e5;
    }

    .step-by-step-inner-circle {
        height: 10px;
        width: 10px;
        border-radius: 100%;
        background-color: #3CB371;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        margin: auto;
    }

    .step-padding-div {
        padding: 0px;
    }

    .step-inner-circle {
        height: 30px;
        width: 30px;
        background-color: #fff;
        border-radius: 100%;
        position: absolute;
        right: 10px;
        top: 0px;
        bottom: 0px;
        margin: auto;
        line-height: 30px;
        text-align: center;
    }

    .step-inner-circle span {
        font-size: 20px;
        color: #286246;
        text-align: center;
        line-height: 35px;
        margin: auto;
        font-weight: bold;
    }

    .step-text-p {
        padding-right: 10px;
    }

    .step-text-p p {
        line-height: 45px;
        color: #fff;
        font-weight: bold;
    }

    .step-payment-div-main {
        min-height: 200px;
        padding-right: 0px;
        padding-left: 10px;
    }

    .step-payment-div {
        position: relative;
        min-height: 350px;
        padding-right: 0px;
        padding-left: 0px;
        border: 1px solid #dccdcd;
        background-color: #fff;
        padding-bottom: 10px;
    }
    .step-payment-div-main-big {
        padding-left: 0px;
    }

    .step-guest-payment p {
        padding-top: 15px;
        color: #3CB371;
        font-weight: bold;
        text-align: center;
    }

    .step-no-membership-purchase p {
        word-break: break-word;
        line-height: 1.8em;
    }

    .step-membership-benefits p {
        word-break: break-word;
        /* height: 3.5em; */
        line-height: 1.8em;
        text-align: justify;
        word-spacing: -1px;
    }
    .step-six-final-register-button{
        width: 240px;
    }
    .step-general-specifications {
        padding-top: 15px;
        padding-right: 10px;
        padding-left: 0px;
    }

    .step-discount-text {
        text-align: center;
    }

    .step-discount-text p {
        color: #8BC53F;
        font-weight: bold;
        padding-top: 5px;
    }

    .step-discount-des p {
        line-height: 1.8em;
        text-align: center;
        word-break: break-word;
    }

    .step-form label {
        font-weight: normal;
    }

    .step-form .form-group {
        margin-bottom: 5px;
    }

    .step-form input {
        height: 25px;
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
        height: 18px;
        width: 18px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 3px;
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

    .step-remember-me-text {
        color: #3cb371;
        font-size: 13px;
    }

    .step-forget-password p {
        color: #8bc53f;
        margin-top: 5px;
        font-size: 13px;
        font-weight: bold;
    }

    /*for accordion*/
    .step-panel-heading{
        background-color: #7C7C7C !important;
        color: #fff !important;
        border: none !important;
    }
    .step-panel-heading .panel-title{
        font-size: 14px;
    }
    .step-panel-heading .panel-title a:focus{
        text-decoration: none;
    }
    .step-left-panel-accordion{
        min-height: 160px;
        padding: 0px;
    }
    .form-inline .form-group {
        margin-right: 10px;
    }

    .well-primary {
        color: rgb(255, 255, 255);
        background-color: rgb(66, 139, 202);
        border-color: rgb(53, 126, 189);
    }

    .glyphicon {
        margin-right: 5px;
    }
    /*for accordion*/

    .step-panel-body .panel-body{
        padding-right: 10px;
        background-color:#f3f3f0 ;
    }
    .step-panel-body .panel-body p{
        margin-bottom: 5px;
        color: gray;
    }
    .step-padding-style-all-div{
        padding-right: 0px;
    }

    /*for step form*/
    .contact_form input{
        font-family: FontAwesome;
    }
    .contact_form label{
        float: right;
        text-align: left !important;
    }
    .contact_form .inputGroupContainer{
        float: right;
    }
    .contact_form .input-group{
        width: 100%;
    }
    .contact_form input , .contact_form select , .contact_form textarea{
        border-radius: 5px !important;
    }
    .well{
        background-color: transparent;
        border: none;
        padding-bottom: 0px;
        margin-bottom: 0px;
    }
    .selectpicker{
        padding-right: 0px;
        padding-left: 0px;
        color: #286246;
        font-weight: bold;
        font-size: 11px;
    }
    .gender-div-style label{
        padding-right: 30px;
    }
    .contact_form textarea{
        resize: none;
        height: 110px;
    }
    .contact_form input:focus , .contact_form input:hover{
        border-color: #D3B155;
        box-shadow: inset 0 0px 0px #D3B155, 0 0 0px #D3B155;
        background-color: transparent !important;
    }
    .step-form-checkbox{
        text-align: center;
    }
    .step-form-checkbox label{
        padding-left: 15px;
        padding-right: 0px;
        text-align: left !important;
        float: initial !important;
    }
    .step-form-checkbox .checkmark{
        right: 10px;
    }

    /*for step form*/


    .step-padding-style-part-three{
        padding-top: 50px;
    }
    .step-address-selection p ,.step-address-selection a {
        text-decoration: none;
        color: #D3B155 ;
        font-weight: bold;
    }
    /*for add button address*/
    .profile-add-address-button{
        width: 140px;
        background-color: #286246;
        color: #fff;
        border-bottom: 2px solid #205039;
        padding: 4px 12px;
        float: left;
        cursor: pointer;
    }
    .profile-add-address-button:hover{
        color: #fff;
    }
    .profile-add-address-button:focus{
        text-decoration: none;
        color: #fff;
    }
    /*for add button address*/

    /*for one address detail*/
    .profile-client-other-detail-div{
        min-height: 50px;
        border: 1px solid #ccc;
        border-right: 20px solid #ccc;
        padding-left: 0px;
        margin-bottom: 15px;
    }
    .profile-client-other-detail-div.active{
        border: 1px solid #286246;
        border-right: 20px solid #286246;

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
    .profile-client-address{
        margin-top: 14px;
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
    .profile-inner-button-div-style{
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 15px;
        height: 100%;
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
    /*for one address detail*/

    /*for step 6 table*/
    #sailorTableArea{
        min-height: 300px;
        overflow-x: auto;
        overflow-y: auto;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
        padding-bottom: 0px;
    }
    #sailorTable{
        white-space: normal;
    }
    #sailorTable thead tr{
        background-color: #7C7C7C;
        color: #fff;

    }
    #sailorTable thead tr th{
        text-align: center;
        border: 1px solid #849895;
        font-weight: normal;
    }
    #sailorTable tbody tr td{
        text-align: center;
        border: 1px solid #E0E0E0;
        color: #286246;
        font-weight: bold;
    }
    #sailorTable tbody tr td:last-child{
        border-left: 10px solid #d3b155;
    }
    #sailorTable tbody{
        min-height: 266px;
    }
    #sailorTable tbody tr.active td:last-child{
        border-left: 10px solid #286246;
    }

    #sailorTable tbody tr td:first-child{
        text-align: left;
    }
    #sailorTable tbody tr.active td:first-child{
        text-align: right;
    }
    #sailorTable tbody tr.active td{
        background-color: transparent;
    }
    tbody {
        display:block;
        height:200px;
        overflow:auto;
    }
    thead, tbody tr {
        display:table;
        width:100%;
        table-layout:fixed;
    }

    /*for step 6 table*/


    .step-product-price{
        color: #286246;
        font-weight: bold;
    }
    .step-product-toman-text{
        color: #ccc;
        font-size: 9px;
        padding-left: 15px;
        padding-right: 10px;
    }
    .step-send-date-div label{
        color: #286246;
        font-weight: bold;
        padding-top: 6px;
    }
    #left-side .panel{
        background-color: transparent;
        box-shadow: none;
    }
    #left-side .panel-heading{
        padding: 0px;
    }
    #left-side .panel-body{
        padding: 0px;
    }

    .step-forgot-something {
        font-size: 13px;
        text-align: center;
        padding-top: 13px;
    }
    .step-forgot-something a{
        color: #d3b155;
        font-weight: bold;
        text-decoration: underline;
        cursor: pointer;
        font-size: 12px;
    }
    .responsive-payment-div{
        padding-left: 22px;
    }
    .total-payment{
        background-color: transparent;
        border: 1px solid #ccc;
        color: #286246;
        font-weight: bold;
        float: left;
        padding-top: 13px;
        padding-bottom: 13px;
        padding-left: 25px;
        padding-right: 25px;
    }

    .total-payment-price{
        cursor: pointer;
        background-color: #286246;
        color: #fff;
        border-radius: 0px;
        float: left;
        margin-right: 1px;
        padding-top: 3px;
        padding-bottom: 3px;
        padding-left: 30px;
        padding-right: 30px;
    }
    .total-payment-price:hover{
        color: #fff;
    }

    /*for button*/
    .step-form-button{
        margin-bottom: 10px;
    }
    .step-button-continue:hover, .step-button-continue:focus {
        color: #fff;
    }
    .step-button-continue {
        width: 140px;
        background-color: #286246;
        color: #fff;
        border-bottom: 2px solid #205039;
        padding: 4px 12px;
        margin-top: 15px;
    }
    .back-button-background{
        background-color: #7C7C7C;
    }
    .step-button-margin-top-2 {
        margin-top: 0px;
        backgrosund-color: #8bc53f;
    }
    .step-one-login-continue-button-different-color button{
        position: relative;
        left: 15px;
        margin-top: 0px;
        background-color: #d3b155;
    }
    .step-one-login-continue-button{
        position: absolute;
        bottom: 15px;
    }
    /*for button*/









































    /*Start Media*/
    @media screen and (max-width: 992px) {
        .padding-response {
            padding: 0px;
        }
        .process-model li i {
            display: block;
            height: 30px;
            width: 30px;
            text-align: center;
            margin: 0 auto;
            background: #f3f3f0;
            border: 2px solid #009f4c;
            line-height: 30px;
            font-size: 30px;
            border-radius: 50%;
            position: relative;
        }

        .process-model li p {
            font-size: 11px;
            margin-top: 11px;
            color: #8dc63f;
        }

        .process-model li::after {
            background: #3CB371 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            display: block;
            height: 1px;
            margin: 0 auto;
            position: absolute;
            left: -55px;
            top: 18px;
            width: 90%;
            z-index: -1;
        }

        .process-model li:last-child::after {
            /* width: 0; */
            width: 40%;
            left: 5px;
        }

        .step-padding-div {
            padding-right: 15px;
            padding-left: 15px;
        }

        .process-model li:first-child::before {
            right: 15px;
            width: 35%;
        }

        .step-no-membership-purchase p {
            text-align: center;
        }

        .step-general-specifications {
            text-align: center;
        }

        .discount-login-image-div {
            margin: auto;
            text-align: center;
            float: initial;
        }

        .step-padding-style-all-div{
            padding-right: 0px;
            padding-left: 0px;
        }
        .step-payment-div-main{
            padding-left: 0px;
        }
        /*for step form checkbox*/
        .step-form-checkbox .checkmark {
            right: 0px;
        }
        .step-form-checkbox label {
            padding-left: 0px;
            padding-right: 5px;
            text-align: left !important;
            float: initial !important;
        }
        /*for step form checkbox*/

        /*for step form button*/
        .step-form-button button{
            float: initial !important;
            text-align: center !important;
        }
        /*for step form button*/
        /*for one address detail*/
        .profile-client-phone p {
            text-align: right;
        }
        .profile-client-other-detail-div {
            height: auto;
            min-height: 50px;
        }
        .step-new-address-panel-div-padding{
            padding-right: 0px;
        }
        .profile-client-address p{
            height: auto;
        }
        .profile-client-address{
            margin-top: 10px;
        }
        .step-one-login-continue-button{
            text-align: center;
        }
        .step-one-login-continue-button-different-color button{
            left: 0px;
        }
        /*for one address detail*/

        /*for step 6 button*/
        .responsive-payment-div{
            text-align: center;
            margin-bottom: 20px;
            padding: 0px;
        }
        .total-payment-price{
            float: initial;
        }
        .total-payment{
            float: initial;
        }
        /*for step 6 button*/
    }

    @media (max-width: 991px) and (min-width: 768px) {
        .process-model li p {
            font-size: 11px;
            margin-top: 11px;
            color: #8dc63f;
        }
    }

    @media (max-width: 1199px) and (min-width: 992px) {
        .process-model li::after {
            left: -70px;
        }

        .process-model li:last-child::after {
            /* width: 0; */
            width: 60%;
            left: -17px;
        }

        .process-model li:first-child::before {
            right: 3px;
        }

        .step-remember-me-text {
            padding-right: 25px;
        }

        .step-forget-password p {
            font-size: 11px;
        }

        /*for step 6 button*/
        .step-form-button{
            padding: 0px;
        }
        /*for step 6 button*/
        .padding-response {
            padding: 0px;
        }
        /*for step one*/
        .discount-login-image-div {
            height: 20px;
            width: 20px;
            line-height: 20px;
        }
        .discount-login-image-div i {
            font-size: 12px;
        }
        .profile-public-desc-left-text {
            line-height: 20px;
            padding-right: 5px;
            font-size: 11px;
        }
        .step-membership-benefits p {
            word-spacing: -4px;
        }
        .step-discount-text p{
            font-size: 12px;
        }
        .step-payment-div{
            min-height: 390px;
        }
        /*for step one*/
    }

    @media screen and (max-width: 800px) {
        .process-model li p {
            font-size: 10px;
            margin-top: 11px;
            color: #8dc63f;
            font-weight: bold;
        }

        .process-model li:last-child::after {
            /* width: 0; */
            width: 30%;
            left: 10px;
        }

        .process-model li:first-child::before {
            right: 20px;
            width: 30%;
        }
    }

    @media screen and (max-width: 600px) {
        .process-model li p {
            font-size: 9px;
            margin-top: 11px;
            color: #8dc63f;
        }

        .process-model li::after {
            left: -48px;
        }
    }

    @media screen and (max-width: 560px) {
        .more-icon-preocess.process-model li span {
            font-size: 1px;
            height: 10px;
            line-height: 46px;
            width: 10px;
        }

        .more-icon-preocess.process-model li::after {
            top: 16px;
        }

        .process-model li:last-child::after {
            /* width: 0; */
            width: 20%;
            left: 14px;
        }

        .process-model li p {
            font-size: 8px;
            margin-top: 11px;
            color: #8dc63f;
            font-weight: bold;
        }
    }

    @media screen and (max-width: 380px) {
        .process-model.more-icon-preocess li {
            width: 16%;
        }

        .more-icon-preocess process-model li span {
            font-size: 16px;
            height: 35px;
            line-height: 32px;
            width: 35px;
        }

        .more-icon-preocess.process-model li p {
            font-size: 8px;
        }

        .more-icon-preocess.process-model li::after {
            top: 18px;
        }

        .process-model.more-icon-preocess {
            text-align: center;
        }

        .process-model li p {
            font-size: 11px;
            margin-top: 11px;
            color: #8dc63f;
        }
    }
    /*Start Media*/
    .address{
        cursor: pointer;
    }
</style>