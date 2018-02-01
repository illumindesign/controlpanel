/**Barebone Control Panel*/
/**2017 Illumin Design*/

function ajaxInit () {
    var MessageRequest = false;
    try {
        MessageRequest = new ActiveXObject("MSXML2.XMLHTTP");
    } catch (exception1) {
        try {
            MessageRequest = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (exception2) {
            MessageRequest = false;
        }
    }

    if (!MessageRequest && window.XMLHttpRequest) {
        MessageRequest = new XMLHttpRequest();
    }

    return MessageRequest;
}

function setOpacity (e, v) {
    if (v >= 1) v = 0.98;
    else if (v <= 0) v = 0;
    document.getElementById(e).style.opacity = v;
}

function toggleTopMenu () {
    var i, topMenu = document.getElementById('topmenu').style;

    if (topMenu.display == 'none' || topMenu.display == '') {
        topMenu.display = 'block';
        topMenu.visibility = 'visible';
        for (i=1;i<=10;i++) setTimeout('setOpacity(\'topmenu\', '+i/10+')', 10*i);
    } else {
        topMenu.display = null;
        topMenu.visibility = null;
        topMenu.opacity = null;
    }
}