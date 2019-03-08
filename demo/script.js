function scrolljs(elem) {
    var a = document.getElementsByClassName('scrollable');
    
    for (i = 0; i < a.length; i++) {
        a[i].classList.remove('active')
    }
    elem.classList.add('active');
}