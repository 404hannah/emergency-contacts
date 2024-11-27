function viewMode(){
    const view = document.querySelector('.container-view');
    const manage = document.querySelector('.container-manage');
    const subform = document.querySelector('.sub-form');
    
    manage.style.display = 'none';
    view.style.display = 'flex';
    subform.style.backgroundColor = '#9B9B9B';
    
}

function manageMode(){
    const view = document.querySelector('.container-view');
    const manage = document.querySelector('.container-manage');
    const subform = document.querySelector('.sub-form');
    
    manage.style.display = 'flex';
    view.style.display = 'none';
    subform.style.backgroundColor = '#728F90';
}