<style>
    /*.cropper-canvas{*/
    /*    width: 600px !important;*/
    /*    height: 420px !important;*/
    /*    transform: translateX(0.57143px) !important;*/
    /*}*/
    /*.cropper-container img{*/
    /*    width: 600px !important;*/
    /*    height: 420px !important;*/
    /*    transform: translateX(1.42109e-14px) !important;*/
    /*}*/
    /*.cropper-container img{*/
    /*    width: 600px !important;*/
    /*    height: 315px !important;*/
    /*    transform: translateX(-10.3175px) translateY(-7px) !important;*/
    /*}*/
    /*.cropper-crop-box{*/
    /*    width: 580px !important;*/
    /*    height: 300px !important;*/
    /*    transform: translateX(10.8889px) translateY(60px) !important;*/
    /*}*/
    /*.cropper-container{*/
    /*    width: 100% !important;*/
    /*    height: 100% !important;*/
    /*}*/
    /*.cropper-image{*/
    /*    display: none;*/
    /*}*/
    .padding-right-for-pc{
         padding-right: 0px;
     }
    #carousel-div{
        display: none;
    }
    .upload-image1{
        display: none;
    }
    .text-left{
        text-align: left;
    }
    .upload-options{
        position: relative;
        /* height: 40px; */
        background-color: #394d4d;
        cursor: pointer;
        overflow: hidden;
        text-align: center;
        transition: background-color ease-in-out 150ms;
        margin: 10px 0;
        color: #fff;
        padding: 8px 0;
        font-size: 12px;
        width: 100%;
        border-radius: 0px;
    }
    .upload-options:hover{
        background-color: #394d4d;
    }

    .upload-options:focus{
        background-color: #394d4d;
    }
    /*.upload-options input {*/
    /*    width: 0.1px;*/
    /*    height: 0.1px;*/
    /*    opacity: 0;*/
    /*    overflow: hidden;*/
    /*    position: absolute;*/
    /*    z-index: -1;*/
    /*}*/
    /*.upload-options label {*/
    /*    display: inline-block;*/
    /*    align-items: center;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    font-weight: 400;*/
    /*    text-overflow: ellipsis;*/
    /*    white-space: nowrap;*/
    /*    cursor: pointer;*/
    /*    overflow: hidden;*/
    /*    text-align: center;*/
    /*}*/

    .upload-image-container{
        display: none;
        padding:0;
    }
    #remove-upload-file{
        position: absolute;
        z-index: 100;
        left: 0;
        top: 0;
        color: white;
        background: red;
        padding: 10px;
        cursor: pointer;
    }
    #upload-image{
        width: 100%;
        height: 100%;
    }
    @media screen and (max-width: 992px) {
        .padding-right-for-pc {
            padding-right: 15px;
        }
    }





</style>
<style>

    .product-info {
        color: #2D693A;
        font-size: 14px;
        font-weight: bold;
        margin-top: 0px;
        line-height: 1.5em;
        margin-bottom: 0px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .price-box {
        display: inline-block;
        padding: 10px 0px 0px 0px;
    }

    .item_price {
        font-size: 14px;
        margin-bottom: 0;
        padding-bottom: 0;
        line-height: 1.1em;
        color: #896a16;
        width: 100%;
        float: right;
        height: 1em;
        text-align: left;
        position: relative;
        left: 8px;
        overflow: hidden;
    }

    .item_price .unit {
        font-weight: inherit;
    }
    .cropper-bg {
        background-image: linear-gradient(#fff,#fff) !important;
    }

	.slider-active-buttons{

	}
    .slider-active-buttons span{
	    display: inline-block;
	    font-size: 22px;
	    margin-left: 10px;
	    margin-bottom: 10px;
	    color: #b9b9b9;
        cursor: pointer;
    }
    .slider-active-buttons span.active{
	    color: #ff0000;
	    font-weight: 900;
    }
</style>