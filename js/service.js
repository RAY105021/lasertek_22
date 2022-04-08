 /*客服浮動*/
(function (y, e, s, i, n, g) {
    i = y.createElement(e);
    i.async = 1;
    i.src = s;
    n = y.getElementsByTagName(e)[0];
    n.parentNode.insertBefore(i, n);
})(document, 'script', 'https://8.cami.yesing.com/patrol/elasticity_v2/department/default/metronome');

 /*回上一頁位置*/
function goBack() {
    window.history.go(-2);
}