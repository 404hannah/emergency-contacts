function viewMode(){
    const view = document.querySelector('.container-view');
    const manage = document.querySelector('.container-manage');
    const form = document.querySelector('form');
    
    manage.style.display = 'none';
    view.style.display = 'flex';
    form.style.backgroundColor = '#9B9B9B';
    
}

function manageMode(){
    const view = document.querySelector('.container-view');
    const manage = document.querySelector('.container-manage');
    const form = document.querySelector('form');
    
    manage.style.display = 'flex';
    view.style.display = 'none';
    form.style.backgroundColor = '#728F90';
    
}