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

        // chosen.value = encodeURIComponent(chosen); 
    } else {
        window.location.href = "editor.php?municipality=" + encodeURIComponent(chosen) + "&category=" + encodeURIComponent(chosenCategory);
        
        /* chosen.value = encodeURIComponent(chosen); 
        chosenCategory.value = encodeURIComponent(chosenCategory); */
    }    
}

function Category(){
    const categoryElem = document.querySelector('.category');
    chosenCategory = categoryElem.value;

    chosen = getVariable('municipality');

    if(chosen == undefined){
        window.location.href = "editor.php?category=" + encodeURIComponent(chosenCategory);

        // chosenCategory.value = encodeURIComponent(chosenCategory);
    } else {
        window.location.href = "editor.php?municipality=" + encodeURIComponent(chosen) + "&category=" + encodeURIComponent(chosenCategory);  
        
        /* chosen.value = encodeURIComponent(chosen); 
        chosenCategory.value = encodeURIComponent(chosenCategory); */
    }
}