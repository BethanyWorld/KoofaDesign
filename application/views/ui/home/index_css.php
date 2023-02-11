<style>
    .slider2-text{
        margin-top: 5px;
        text-align: left;
        padding: 2px 5px;
        font-size: 12px;
        height: 5em;
        line-height: 1.75em;
        overflow: hidden;
    }
    .remaining-time-text{
        padding-top: 5px;
        color: #000;
        margin-bottom: -1px;

    }
    .demo{
        font-size: 25px;
        color: #000;
        font-family: monospace;
        letter-spacing: 2px;
        font-weight: bold;
    }


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
        background: linear-gradient(to left , #19422d , #000);
        position: absolute;
        z-index: 3000;
        right: 0px;
        padding-top: 15px;
        padding-left: 5px;
        text-align: left;
    }

    .div-on-slider2 h2{
        margin-bottom: 5px;
        font-size: 14px;
        line-height: 25px;
    }
    .slider2-desc {
        color: #e1e2e2;
        font-weight: bolder;
        font-size: 15px;
        margin-bottom: 0px;
        text-align: left;
    }
    .slider2-price{
        color: #d5b55e;
        font-size: 30px;
        font-weight: 500;
    }
    .slider2-price span{
        font-size: 20px;
        font-weight: normal;
    }
    .slider2-discountPrice{
        margin-bottom: -5px;
    }
    .slider2-p-margin{
        margin-bottom: 5px;
        font-size: 12px;
        line-height: 20px;
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
        margin-top: 10px;
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



    .owl-carousel .owl-stage:after{
        display: none;
    }

    #thumbs2 .owl-stage-outer{
        height: 350px;
        overflow: auto ;
        padding: 0px 0px 0px 10px;
        direction: ltr;
    }

.finish-time{
    font-size: 12px;
    color: red;
    font-weight: bold;
    font-family: vazir;
    padding: 10px 6px;
}

    @media (max-width: 992px){
        #thumbs2 .item a p {
            text-align: right;
            margin-bottom: 0px;
            font-size: 10px;
            height: 3em;
            line-height: 1.5em;
            overflow: hidden;
        }
        #thumbs2 .owl-stage-outer {
            height: 356px;
        }
    }

    @media screen and (max-width: 767px) {
        .div-on-slider2{
            width: 100%;
            bottom: 0px;
            top: auto;
            height: 145px;
        }

    }

    @media screen and (max-width: 600px){
        .slider2-price {
            color: #d5b55e;
            font-size: 20px;
            font-weight: 500;
        }
        .slider2-price span {
            font-size: 12px;
            font-weight: normal;
        }
        #thumbs2 .owl-stage-outer {
            height: 275px;
        }
    }


    /*for back to top btn*/
    #button {
        display: inline-block;
        background-color: #009f4c;
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 0px;
        right: 0px;
        transition: background-color .3s, opacity .5s, visibility .5s;
        opacity: 0;
        visibility: hidden;
        z-index: 20000;
    }
    #button::after {
        content: "\f077";
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        color: #fff;
    }
    #button:hover {
        cursor: pointer;
        background-color: #333;
    }
    #button:active {
        background-color: #555;
    }
    .show {
        opacity: 1;
        visibility: visible;
    }

    @media (min-width: 500px) {
        #button {
            margin: 30px;
        }
    }

    /*for back to top btn*/
</style>
