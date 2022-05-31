// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

//Cache typekit fonts so they don't reload every time
!function(e,t,n,a,c,l,m,o,d,f,h,i){c[l]&&(d=e.createElement(t),d[n]=c[l],e[a]("head")[0].appendChild(d),e.documentElement.className+=" wf-cached"),function s(){for(d=e[a](t),f="",h=0;h<d.length;h++)i=d[h][n],i.match(m)&&(f+=i);f&&(c[l]="/**/"+f),setTimeout(s,o+=o)}()}(document,"style","innerHTML","getElementsByTagName",localStorage,"tk",/^@font|^\.tk-/,100);
