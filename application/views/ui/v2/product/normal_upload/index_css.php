<style>
    .padding-right{
        padding-right: 0px;
    }
    .upload-options {
        position: relative;
        height: 48px;
        background-color: #394d4d;
        cursor: pointer;
        overflow: hidden;
        text-align: center;
        transition: background-color ease-in-out 150ms;
        margin: 10px 0;
        color: #fff;
        padding: 12px 0;
        font-size: 16px;
    }
    .upload-options input {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    .upload-options label {
        display: inline-block;
        align-items: center;
        width: 100%;
        height: 100%;
        font-weight: 400;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
        overflow: hidden;
        text-align: center;
    }

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
        border-radius: 6px;
        box-shadow: 0px 0px 6px 2px #adadad;
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
</style>