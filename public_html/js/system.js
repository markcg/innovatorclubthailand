var responsive_menu = {
    menuResp: ".menu-responsive",
    button: ".menu-button",
    toggle: true,
    innitialize: function () {
        $(responsive_menu.button).on("click", function () {
            if (responsive_menu.toggle) {
                $(responsive_menu.menuResp).show().toggleClass("slideInRight").toggleClass("slideOutRight");
                responsive_menu.toggle = false;
            } else {
                $(responsive_menu.menuResp).toggleClass("slideOutRight").toggleClass("slideInRight");
                responsive_menu.toggle = true;
            }
        });
    },
};