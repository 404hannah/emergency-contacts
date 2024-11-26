function printHover(){
    const printHoverElem = document.querySelector('.print-hover');
    printHoverElem.style.visibility = 'visible';
}

function printHoverOut(){
    const printHoverElem = document.querySelector('.print-hover');
    printHoverElem.style.visibility = 'hidden';
}

function reportHover(){
    const reportHoverElem = document.querySelector('.user-report-hover');
    reportHoverElem.style.visibility = 'visible';
}

function reportHoverOut(){
    const reportHoverElem = document.querySelector('.user-report-hover');
    reportHoverElem.style.visibility = 'hidden';
}

function switchMode(){
    const bxModeId = document.getElementById('bx-mode');
    const bodyElem = document.querySelector('body');
    const headerLeft = document.querySelector('.header-left');
    const headerRight = document.querySelector('.header-right');
    const headerLeftA = document.querySelector('.header-left a');
    const headerRightA = document.querySelector('.header-right a');
    const menuWrapper = document.querySelector('.menu-wrapper');
    const menuButton = document.querySelector('.menu-button');
    const menuButtonDiv1 = document.querySelector('.menu-button .div1');
    const menuButtonDiv2 = document.querySelector('.menu-button .div2');
    const printElem = document.querySelector('.print');
    const reportElem = document.querySelector('.user-report');

    const menuAElems = document.querySelectorAll('.menu a');

    if(bxModeId.classList == 'bx bxs-moon bx-lg'){
        bxModeId.classList.remove("bxs-moon", "bx-lg");
        bxModeId.classList.add("bx-sun", "bx-lg");

        bodyElem.style.background = '#1B1919'; // rgba(217, 217, 217, 0.25) does not have the same effect

        headerLeft.style.backgroundColor = '#1D5C67';
        headerRight.style.backgroundColor = '#1D5C67';

        headerLeftA.style.color = 'white';
        headerRightA.style.color = 'white';

        menuWrapper.style.backgroundColor = '#1D5C67';
        menuButton.style.backgroundColor = '#1D5C67';
        menuButtonDiv1.style.backgroundColor = 'white';
        menuButtonDiv2.style.backgroundColor = 'white';

        menuAElems.forEach(menuAElem => {
            menuAElem.style.color = 'white';
        });     

        printElem.style.borderColor = '#959595';
        reportElem.style.borderColor = '#959595';
    } else {
        bxModeId.classList.remove("bx-sun", "bx-lg");
        bxModeId.classList.add("bxs-moon", "bx-lg");

        bodyElem.style.background = '#C7E5F4';

        headerLeft.style.backgroundColor = '#4A777E';
        headerRight.style.backgroundColor = '#4A777E';

        headerLeftA.style.color = '#0B0B0B';
        headerRightA.style.color = '#0B0B0B';

        menuWrapper.style.backgroundColor = '#4A777E';
        menuButton.style.backgroundColor = '#4A777E';
        menuButtonDiv1.style.backgroundColor = 'black';
        menuButtonDiv2.style.backgroundColor = 'black';

        menuAElems.forEach(menuAElem => {
            menuAElem.style.color = '#0B0B0B';
        });     

        printElem.style.borderColor = '#2F3030';
        reportElem.style.borderColor = '#2F3030';
    }
}

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