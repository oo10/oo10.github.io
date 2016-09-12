
        (function (doc, win) {
            var docEl = doc.documentElement,
                    resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                    recalc = function () {
                        var clientWidth = docEl.clientWidth;
                        if (!clientWidth) return;
                        docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                    };
            // Abort if browser does not support addEventListener
            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);

//var a = document.getElementsByTagName('html')[0];
//var b = document.documentElement.clientWidth;
//var c = b / 6.4;
//if (c >= 100) c = 100;
//a.style.fontSize = c + 'px';
//function $(id){
//  return document.getElementById(id);
//}
