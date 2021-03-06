<style>
    /*body login form*/
    .body-white-form {
        border-radius: 3px;
        display: table;
        width: 100%;
        background-color: #fff;
        padding: 25px 35px;
        -webkit-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        margin: 12.5px 0;
    }

    .form-title h1 {
        font-size: 21px;
        font-weight: bold;
        color: #8BC53F;
        margin-top: 5px;
        margin-bottom: 15px;
        text-align: center;
    }

    .form-box {
        padding-right: 10px;
    }

    .form-register {
        float: right;
        padding-left: 0px;
        position: relative;
        min-height: 1px;
    }

    .form-box .form-holder {
        min-height: 480px;
        border: 1px solid #dccdcd;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        -o-border-radius: 3px;
        border-radius: 3px;
    }

    .form-register .form-holder {
        padding: 10px 70px 3px 60px;
    }

    .form-holder .form-group {
        margin-bottom: 10px;
    }

    .forms-boxes .form-holder {
        padding: 10px 14px;
        text-align: center;
    }

    .form-area {
        background-color: #FAFAFA;
        padding: 10px 40px 60px;
        margin: 10px 0px 60px;
        border: 1px solid GREY;
    }

    .form-register label {
        margin: 2px 0;
        padding: 0;
        font-size: 14px;
        font-weight: normal;
        word-break: break-word;
        display: inline;
    }

    .form-submit-btn {
        width: 130px;
        height: 30px;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 25px;
        margin-top: 10px;
        background-color: #E0C886;
        border-color: #A8933B;
        color: #fff;
        border-width: 1px;
        border-style: solid;
        border-top-width: 0;
        border-right-width: 0;
        border-left-width: 0;
        border-bottom-width: 2px;
    }

    .form-checkbox input:checked + label:after {
        content: '';
        display: block;
        position: absolute;
        top: 2px;
        left: 9px;
        width: 6px;
        height: 14px;
        border: solid #0079bf;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .form-white-title p {
        color: #8BC53F;
        font-size: 16px;
        font-weight: bold;
        word-break: break-word;
    }

    .login-to-site p {
        padding: 10px 0 0 0;
        margin: 0;
        text-align: center;
        font-size: 12px;
        display: table;
        width: 100%;
        text-align: center;
    }

    .login-to-site a {
        color: #8BC53F;
        display: inline-block;
        padding: 0 2px;
    }

    .body-blocks {
        padding: 15px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        -o-border-radius: 3px;
        border-radius: 3px;
        display: table;
        width: 100%;
        background-color: #fff;
        -webkit-box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        margin: 12.5px 0;
    }

    .body-guarantee-div {
        padding: 0px;
        border-radius: 3px;
        display: table;
        width: 100%;
        background-color: #fff;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        margin: 12.5px 0;
        border: 2px solid #cccccc;
    }

    .body-icons {
        border-radius: 5px;
        display: table;
        width: 100%;
        background-color: #fff;
        border: 2px solid #cccccc;
    }

    .body-icons ul {
        padding: 0px 45px;
        display: table;
        width: 100%;
        list-style-type: none;
    }

    .body-icons ul li:first-child {
        padding-right: 0;
    }

    .body-icons ul li {
        float: right;
        width: 20%;
        text-align: center;
        padding: 0 10px;
        position: relative;
    }

    .body-icons ul li a {
        color: #2d693a;
    }

    .block-image {
        height: 50px;
    }

    .block-image img {
        width: 40px;
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

    .body-guarantee li:hover {
        background-color: #3CB371 !important;
        color: #fff;
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

    .body-guarantee li a {
        padding-left: 0px;
        font-size: 13px;
        padding-top: 4px;
        color: #3CB371 !important;
        text-align: center;
        padding-right: 10px;
    }

    .login-form-holder {
        padding: 55px 55px 3px 55px !important;
        min-height: 410px !important;
    }

    .login-remember-pass {
        margin-top: 5px;
        display: block;
        margin-bottom: 45px;
        color: #8BC53F;
        font-size: 11px;
        padding-left: 0px;
        text-align: left;
    }

    .login-remember-pass p {
        float: left;
    }

    .login-title {
        padding-bottom: 0;
        line-height: 2.5em;
        font-size: 14px;
        font-weight: bold;
        color: #009E4C;
        margin-bottom: 20px;
        text-align: center;
    }

    .highlight {
        color: #8BC53F;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        text-align: right;
    }

    .login-form-holder2 {
        padding: 10px 30px !important;
    }

    .login-des {
        font-size: 14px;
        line-height: 1.7em;
        display: block;
        margin: 20px 0px;
        text-align: right;
    }

    .login-button {
        font-size: 12px;
        font-weight: bold;
        margin-top: 30px;

        color: #fff;
        background-color: #8BC53F;
        border-width: 1px;
        border-style: solid;
        border-color: #8f99a4;
        margin-bottom: 0;
        border-top-width: 0;
        border-right-width: 0;
        border-left-width: 0;
        border-bottom-width: 2px;
    }

    .lable-span {
        color: #8BC53F;
    }

    /*body login form*/

    @media screen and (max-width: 992px) {
        /*body login form*/
        .form-box {
            margin-bottom: 25px;
            padding-left: 0px;
            padding-right: 0px;
        }

        .form-box .form-holder {
            min-height: 440px;
        }

        .body-icons ul li {
            width: 100%;
        }

        .block-image {
            float: initial;
        }
        .login-remember-pass{
            padding: 0px;
            text-align: left;
            margin-bottom: 15px;
            padding-left: 15px;
        }
        .login-form-holder {
            padding: 15px 15px 0px 15px !important;
            min-height: 330px !important;
        }
        .body-white-form{
            margin-bottom: 0px;
        }
        .body-icons{
            margin-top: 0px;
            margin-bottom: 0px;
            border-bottom: none;
        }
        .body-guarantee-div{
            margin-top: 0px;
        }
        /*body login form*/
    }
</style>