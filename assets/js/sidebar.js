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
            sidebar = document.querySelectorAll('.content--sidebar')[0];

        console.log(widgets);

        for(var i = 0; i < widgetsLength; i++) {
            for(var j = 0; j < widgetsLength; j++) {
                var orderNbr = widgets[j].getAttribute('data-order');
                if(orderNbr == i) {
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
