function menu(){
    const menuElem = document.querySelector('.menu-wrapper');
    const menuBtn = document.querySelector('.menu-button');

    if(menuBtn.style.left == '0%'){
        menuElem.style.display = 'block';
        menuBtn.style.left = '28%';
    } else {
        menuElem.style.display = 'none';
        menuBtn.style.left = '0%';
    }
}