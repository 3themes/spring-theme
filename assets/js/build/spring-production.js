;(function($){
    //Add event listeners to buttons
    var menuBtn = document.getElementById('openMainMenu');
    console.log('hello');
    var sidebarBtn = document.getElementById('openSidebar');
    console.log(sidebarBtn);
    if (menuBtn.attachEvent) {
        menuBtn.attachEvent('onclick', openCloseMenu);

        if(sidebarBtn !== null) {
            sidebarBtn.attachEvent('onclick', openSidebar);
        }
    } else {

        menuBtn.addEventListener('click', openCloseMenu);

        if(sidebarBtn !== null) {
            sidebarBtn.addEventListener('click', openSidebar);
        }
    }

    function openCloseMenu() {
        var htmlEl = document.querySelectorAll('html')[0];
        var htmlElClasses = htmlEl.className;

        // Add or remove the open-menu class
        if (htmlElClasses.indexOf('open-the-menu') === -1) {
            htmlEl.className = htmlElClasses + ' open-the-menu';
        } else {
            htmlEl.className = htmlElClasses.replace(' open-the-menu', '');
        }
    }

    function openSidebar() {
        console.log('here');
        var htmlEl = document.querySelectorAll('html')[0];
        var htmlElClasses = htmlEl.className;

        // Add or remove the open-menu class
        if (htmlElClasses.indexOf('open-the-sidebar') === -1) {
            htmlEl.className = htmlElClasses + ' open-the-sidebar';
        } else {
            htmlEl.className = htmlElClasses.replace(' open-the-sidebar', '');
        }
    }
})(jQuery);