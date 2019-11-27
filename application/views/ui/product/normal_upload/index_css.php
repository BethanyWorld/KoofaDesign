<style>
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