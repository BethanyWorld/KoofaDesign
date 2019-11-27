$(document).ready(function () {
    // for response menu
    $(".search-toggle").click(function () {
        $(".mobile-col-search").fadeToggle();
    });
    $(".mobile-bars-toggle").click(function () {
        $(".mobile-nav").fadeToggle();
        // $(".mobile-bars").find($(".fa")).removeClass('fa-bars').addClass('fa-remove');
    });
    // for response menu

    // for mega menu
    $(".menubar nav:first").accessibleMegaMenu({
        /* prefix for generated unique id attributes, which are required
           to indicate aria-owns, aria-controls and aria-labelledby */
        uuidPrefix: "accessible-megamenu",
        /* css class used to define the megamenu styling */
        menuClass: "nav-menu",
        /* css class for a top-level navigation item in the megamenu */
        topNavItemClass: "nav-item",
        /* css class for a megamenu panel */
        panelClass: "sub-nav",
        /* css class for a group of items within a megamenu panel */
        panelGroupClass: "sub-nav-group",
        /* css class for the hover state */
        hoverClass: "hover",
        /* css class for the focus state */
        focusClass: "focus",
        /* css class for the open state */
        openClass: "open"
    });
    // for mega menu

    $isLoginMenuVisible = false;
    //for additional login
    $(".login-div").mouseover(function () {
        $isLoginMenuVisible = true;
        $(".menubar").hide();
        $(".additional-login-div").slideDown();
    });
    $(".login-div").mouseout(function () {
        $isLoginMenuVisible = false;
        setTimeout(function () {
            if (!$isLoginMenuVisible) {
                $(".menubar").show();
                $(".additional-login-div").hide();
            }
        }, 3000);
    });
    $(".additional-login-div").mouseover(function () {
        $(".menubar").hide();
        $(this).show();
        $isLoginMenuVisible = true;
    });
    $(".additional-login-div").mouseout(function () {
        $(".menubar").show();
        $(this).hide();
    });
    //ok
    //for additional login
});