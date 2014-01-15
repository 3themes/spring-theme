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
var timer;

window.onresize = onResizeFunction;

function onResizeFunction() {
    clearTimeout(timer);
    timer = setTimeout(function() {
        sizeTest(true);
    }, 100);
}

var matching = false;

dataAttributeAdd();

var newHtml = '<div class="sidebar--leftcol"></div><div class="sidebar--rightcol"></div>';
document.querySelectorAll('.content--sidebar')[0].insertAdjacentHTML('beforeend', newHtml);

sizeTest(false);

function sizeTest(resize) {
    if(Modernizr.mq('(min-width: 48.5em) and (max-width: 62.5em)')) {
        reorderWidgets();
        console.log('order widgets');
    } else if (resize) {
        unorderWidgets();
    }
}

function reorderWidgets() {
    if (matching === false) {
        matching = true;

        var widgets = document.querySelectorAll('.widget'),
            widgetsLength = widgets.length,
            col1 = document.querySelectorAll('.sidebar--leftcol')[0],
            col2 = document.querySelectorAll('.sidebar--rightcol')[0],
            height1 = col1.offsetHeight,
            height2 = col2.offsetHeight,
            node;

        for(var i = 0; i < widgetsLength; i++) {
            node = widgets[i];
            if(height1 <= height2) {
                col1.appendChild(node);
            } else {
                col2.appendChild(node);
            }

            height1 = col1.offsetHeight;
            height2 = col2.offsetHeight;
        }
    }
}

function unorderWidgets() {
    if (matching === true) {
        matching = false;
        var widgets = document.querySelectorAll('.widget'),
            widgetsLength = widgets.length,
            sidebar = document.querySelectorAll('.content--sidebar')[0],
            node;

        for(var i = 0; i < widgetsLength; i++) {
            for(var j = 0; j < widgetsLength; j++) {
                if(j === i) {
                    node = widgets[j];
                    sidebar.appendChild(widgets[j]);
                }
            }
        }
    }
}

function dataAttributeAdd() {

    var widgets = document.querySelectorAll('.widget'),
        widgetsLength = widgets.length;

    for(var i = 0; i < widgetsLength; i++) {
        widgets[i].setAttribute('data-order', i);
    }
}
