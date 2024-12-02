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

    municipality = municipalityElem.value;
    category = categoryElem.value;
    institution = institutionElem.value;
}

function edit(){
    getChoices();

    window.location.href = "edit.php?municipality=" + encodeURIComponent(municipality) + "&category=" + encodeURIComponent(category) + "&institution=" + encodeURIComponent(institution);
}

function add(){
    getChoices();

    window.location.href = "add.php?municipality=" + encodeURIComponent(municipality) + "&category=" + encodeURIComponent(category) + "&institution=" + encodeURIComponent(institution);
}