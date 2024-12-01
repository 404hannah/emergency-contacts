let chosen;
let chosenCategory;

function getVariable(variable) {
    const varValue = new URLSearchParams(window.location.search);
    return varValue.get(variable);
}

function Municipality(){
    const municipalityElem = document.querySelector('.municipality');
    chosen = municipalityElem.value;

    chosenCategory = getVariable('category');

    if(chosenCategory == undefined){
        window.location.href = "editor.php?municipality=" + encodeURIComponent(chosen);
    } else {
        window.location.href = "editor.php?municipality=" + encodeURIComponent(chosen) + "&category=" + encodeURIComponent(chosenCategory);
    }    
}

function Category(){
    const categoryElem = document.querySelector('.category');
    chosenCategory = categoryElem.value;

    chosen = getVariable('municipality');

    if(chosen == undefined){
        window.location.href = "editor.php?category=" + encodeURIComponent(chosenCategory);
    } else {
        window.location.href = "editor.php?municipality=" + encodeURIComponent(chosen) + "&category=" + encodeURIComponent(chosenCategory);
    }
}

function getChoices(){
    const municipalityElem = document.querySelector('.municipality');
    const categoryElem = document.querySelector('.category');
    const institutionElem = document.querySelector('.institution');
    const contactInfoElem = document.querySelector('.contact-info');
    const googleMapsElem = document.querySelector('.google-maps');

    municipality = municipalityElem.value;
    category = categoryElem.value;
    institution = institutionElem.value;
    contactInfo = contactInfoElem.value;
    googleMaps = googleMapsElem.value;
}

function edit(){
    getChoices();

    window.location.href = "edit.php?municipality=" + encodeURIComponent(municipality) + "&category=" + encodeURIComponent(category) + "&institution=" + encodeURIComponent(institution) + "&contact-info=" + encodeURIComponent(contactInfo) + "&google-maps=" + encodeURIComponent(googleMaps);
}

function add(){
    getChoices();

    window.location.href = "add.php?municipality=" + encodeURIComponent(municipality) + "&category=" + encodeURIComponent(category) + "&institution=" + encodeURIComponent(institution) + "&contact-info=" + encodeURIComponent(contactInfo) + "&google-maps=" + encodeURIComponent(googleMaps);
}