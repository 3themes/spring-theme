;(function($){
    //Add event listeners to buttons
    var menuBtn = document.getElementById('openMainMenu');
    var sidebarBtn = document.getElementById('openSidebar');
    if (menuBtn.attachEvent) {
        menuBtn.attachEvent('onclick', openCloseMenu);

        if(sidebarBtn != null) {
            sidebarBtn.attachEvent('onclick', openCloseSidebar);
        }
    } else {
        menuBtn.addEventListener('click', openCloseMenu);

        if(sidebarBtn != null) {
            sidebarBtn.addEventListener('click', openSidebar);
        }
    }

    function openCloseMenu() {
        var htmlEl = document.getElementsByTagName('html')[0];
        var htmlElClasses = htmlEl.className;

        // Add or remove the open-menu class
        if (htmlElClasses.indexOf('open-menu') === -1) {
            htmlEl.className = htmlElClasses + ' open-menu';
        } else {
            htmlEl.className = htmlElClasses.replace(' open-menu', '');
        }
    }

    function openSidebar() {

    }
})(jQuery);