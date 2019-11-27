<script type="text/javascript">


    $(document).ready(function() {
        $('.multiselect .selectBox select').hover(
            function () {
                $isLoginMenuVisible = true;
                $index =  $(this).index();
                if($index == 0){
                    $(".checkboxes").eq($index).css('right', '0px').show();
                }
                else{
                    $width = $(this).width();
                    $left = $(this).offset().left;
                    $margin = 1170 - ($left -$width) - 0;
                    $(".checkboxes").eq($index).css('right', $margin + 'px').show();
                }
            },
            function () {
                $index =  $(this).index();
                $isLoginMenuVisible = false;
                if (!$isLoginMenuVisible) {
                    $(".checkboxes").eq($index).hide();
                }
            }
        );


        $(".checkboxes").mouseover(function () {
            $(this).show();
            // $(this).prev('.selectBox').find('select').css('backgroundColor' , 'red');
            $isLoginMenuVisible = true;
        });
        $(".checkboxes").mouseout(function () {
            $(this).hide();
            // $(this).prev('.selectBox').find('select').css('backgroundColor' , '#fff');
        });
    })
    $(document).ready(function () {
        var slider1 = new RangeSlider('#slider1', 'بازه قیمت از', 0, 100);

        $('#reverse').on('click', function () {
            slider1.reverseSelection();
        });
    });
    $("head").append("<!--RangeSlider by Tobias Birth--><style>.no_select{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:move}.range_slider{position:relative;margin-left:3%;width:94%;padding-top:8px;margin-bottom: 40px;}.bar{width:100%;background-color:#ddd;height:2px}.bar .selected{background-color:#8BC53F}.bar.reversed{background-color:#007acc}.bar.selected.reversed{background-color:#ddd}.bar_clickable{left:-4%;width:108%;height:32px;top:3px;position:absolute}.handle{border:1px solid #ccc;border-radius:3px;width:10px;height:16px;position:absolute;top:2px;cursor:pointer;background-color:#ddd;transform:translate(-50%,0);-moz-transform:translate(-50%,0);-webkit-transform:translate(-50%,0)}.value{display:inline-block;width:50px;padding:0}.left{left:0}.right{left:100.06%}span.suffix_tbx{border:1px solid #acacac;display:inline-block;margin-top:13px}.suffix_tbx input{border:0;padding:2px}</style><!--End of RangeSlider by Tobias Birth-->");

    function RangeSlider(f, a, b, d) {
        this.sliderID = f;
        this.einheit = a;
        this.drag = false;
        var e = this;
        $(this.sliderID).addClass("range_slider");
        $(this.sliderID).html('<!--RangeSlider by Tobias Birth--><div class="bar" minValue="' + b + '" maxValue="' + d + '"><div class="bar selected"></div><div class="bar_clickable"></div><div class="handle left"></div><div class="handle right"></div><span class="suffix_tbx"><input type="text" class="value left" value="0.0">' + this.einheit + '</span><span class="suffix_tbx" style="float:right;"><input type="text" class="value right"  value="100.0">' + this.einheit + "</span></div><!-- End of RangeSlider by Tobias Birth-->");
        this.minValue = $(this.sliderID + " .bar").attr("minValue");
        this.maxValue = $(this.sliderID + " .bar").attr("maxValue");
        this.range = this.maxValue - this.minValue;
        this.sliderWidth = $(this.sliderID + " .bar").css("width").replace(/(px|%)/i, "") * 1;
        this.step = this.range / this.sliderWidth;
        this.currentHandle = $(this.sliderID + " .handle.left");
        this.startPos = this.currentHandle.offset().left;
        this.offset = this.currentHandle.css("left");
        $(this.sliderID + " .handle.left," + this.sliderID + " .handle.right").on("mousedown touchstart", function (c) {
            e.drag = true;
            e.currentHandle = $(this);
            e.startPos = c.pageX;
            e.offset = e.currentHandle.css("left");
            $("body").addClass("no_select")
        });
        $(document).on("mousemove touchmove", function (c) {
            if (e.drag) {
                e.moveHandle(c.pageX)
            }
        });
        $(document).on("mouseup touchend", function () {
            $("body").removeClass("no_select");
            if (e.drag) {
                $(e.sliderID).trigger("range:change")
            }
            e.drag = false
        });
        $(this.sliderID + " .bar_clickable").on("click", function (c) {
            e.moveHandle(c.pageX)
        });
        e.updateValues();
        $(this.sliderID).attr("leftValue", 0);
        $(this.sliderID).attr("rightValue", 100);
        $(this.sliderID + " .value.left").val("10,000,000");
        $(this.sliderID + " .value.right").val("10000")
    }

    RangeSlider.prototype.moveHandle = function (d) {
        var a = d - this.startPos + 1 * this.offset.replace(/(px|%)/i, "");
        var f = $(this.sliderID + " .handle.left").position().left;
        var b = $(this.sliderID + " .handle.right").position().left;
        this.sliderWidth = $(this.sliderID + " .bar").css("width").replace(/(px|%)/i, "") * 1;
        this.step = this.range / this.sliderWidth;
        if (a < 0) {
            a = 0
        }
        if (a > this.sliderWidth) {
            a = this.sliderWidth
        }
        if ((a > b) && (this.currentHandle.hasClass("left"))) {
            a = b + 6
        }
        if ((a < f) && (this.currentHandle.hasClass("right"))) {
            a = f + 6
        }
        this.currentHandle.css("left", a);
        var c = $(this.sliderID + " .handle.left").position().left;
        var e = $(this.sliderID + " .handle.right").position().left - c;
        $(this.sliderID + " .bar .selected").css({"margin-left": c, width: e});
        this.updateValues()
    };
    RangeSlider.prototype.updateValues = function () {
        var b = $(this.sliderID + " .handle.left").css("left").replace(/(px|%)/i, "") * this.step;
        var d = $(this.sliderID + " .handle.right").css("left").replace(/(px|%)/i, "") * this.step;
        $(this.sliderID).attr("leftValue", b);
        $(this.sliderID).attr("rightValue", d);
        var c = $(this.sliderID).attr("leftValue") * 1;
        var a = $(this.sliderID).attr("rightValue") * 1;
        $(this.sliderID + " .value.left").val(c.toFixed(2));
        $(this.sliderID + " .value.right").val(a.toFixed(2))
    };
    RangeSlider.prototype.reverseSelection = function () {
        if ($(this.sliderID + " .bar").hasClass("reversed")) {
            $(this.sliderID + " .bar").removeClass("reversed");
            $(this.sliderID + " .bar .selected").removeClass("reversed")
        } else {
            $(this.sliderID + " .bar").addClass("reversed");
            $(this.sliderID + " .bar .selected").addClass("reversed")
        }
    };
</script>