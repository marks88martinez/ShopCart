var slide = document.getElementById('comparacion');
window.onmousemove = function(e){
    var x = e.clientX;
    slide.style.left = x+ 'px';
}
