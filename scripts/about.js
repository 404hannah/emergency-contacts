function switchMode(){
    const bxModeId = document.getElementById('bx-mode');
    const bodyElem = document.querySelector('body');
    const headerLeft = document.querySelector('.header-left');
    const headerRight = document.querySelector('.header-right');
    const headerLeftA = document.querySelector('.header-left a');
    const headerRightA = document.querySelector('.header-right a');
    const sectionH2Elem = document.querySelector('section h2');
    const aboutBox = document.querySelector('.about-box');
    const aboutBoxH4 = document.querySelector('.about-box h4');
    const aboutBoxA = document.querySelector('.about-box a');

    const aboutBoxPs = document.querySelectorAll('.about-box p');
    const aboutBoxLiElems = document.querySelectorAll('.about-box li');

    if(bxModeId.classList == 'bx bxs-moon bx-lg'){
        bxModeId.classList.remove("bxs-moon", "bx-lg");
        bxModeId.classList.add("bx-sun", "bx-lg");

        bodyElem.style.background = '#1B1919'; // rgba(217, 217, 217, 0.25) does not have the same effect

        headerLeft.style.backgroundColor = '#1D5C67';
        headerRight.style.backgroundColor = '#1D5C67';

        headerLeftA.style.color = 'white';
        headerRightA.style.color = 'white';
        sectionH2Elem.style.color = 'white';

        aboutBox.style.backgroundColor = '#1D5C67';     
        
        aboutBoxPs.forEach(aboutBoxP => {
            aboutBoxP.style.color = 'white';
        });   

        aboutBoxH4.style.color = 'white';
        
        aboutBoxLiElems.forEach(aboutBoxLiElem => {
            aboutBoxLiElem.style.color = 'white';
        });
        
        aboutBoxA.style.color = 'lightblue';
    } else {
        bxModeId.classList.remove("bx-sun", "bx-lg");
        bxModeId.classList.add("bxs-moon", "bx-lg");

        bodyElem.style.background = '#C7E5F4';

        headerLeft.style.backgroundColor = '#4A777E';
        headerRight.style.backgroundColor = '#4A777E';

        headerLeftA.style.color = '#0B0B0B';
        headerRightA.style.color = '#0B0B0B';
    }
}