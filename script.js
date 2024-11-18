const printHoverElem = document.querySelector('.print-hover');
const reportHoverElem = document.querySelector('.user-report-hover');
const bodyElem = document.querySelector('body');
const headerLeftH1 = document.querySelector('.header-left h1');
const headerRightH1 = document.querySelector('.header-right a');
const menuAElems = document.querySelectorAll('.menu a');

function printHover(){
    printHoverElem.style.visibility = 'visible';
}

function printHoverOut(){
    printHoverElem.style.visibility = 'hidden';
}

function reportHover(){
    reportHoverElem.style.visibility = 'visible';
}

function reportHoverOut(){
    reportHoverElem.style.visibility = 'hidden';
}

function switchMode(){
    bodyElem.style.background = '#1B1919'; // rgba(217, 217, 217, 0.25) does not have the same effect

    headerLeftH1.style.color = 'white';
    headerRightH1.style.color = 'white';

    menuAElems.forEach(menuAElem => {
        menuAElem.style.color = 'white';
    });     
}