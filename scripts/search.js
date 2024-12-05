let searchValue;
let searchTerm;

function search(){
    const searchBox = document.querySelector('.search-textbox');
    searchValue = searchBox.value.trim();
    window.location.href = "../index.php?search=" + encodeURIComponent(searchValue);
}

function getVariable(variable) {
    const varValue = new URLSearchParams(window.location.search);
    return varValue.get(variable);
}

function result(){
    searchTerm = getVariable('search');
    window.location.href = "result.php?search=" + encodeURIComponent(searchTerm);
}

function noResult(){
    searchTerm = getVariable('search');
    window.location.href = "no-result.php?search=" + encodeURIComponent(searchTerm);
}