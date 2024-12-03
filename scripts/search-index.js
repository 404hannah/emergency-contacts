let searchValue;

function search(){
    const searchBox = document.querySelector('.search-textbox');
    searchValue = searchBox.value.trim();
    window.location.href = "index.php?search=" + encodeURIComponent(searchValue);
}

function getVariable(variable) {
    const varValue = new URLSearchParams(window.location.search);
    return varValue.get(variable);
}

function result(){
    searchValue = getVariable('search');
    window.location.href = "pages/result.php?search=" + encodeURIComponent(searchValue);
}

function noResult(){
    searchValue = getVariable('search');
    window.location.href = "pages/no-result.php?search=" + encodeURIComponent(searchValue);
}