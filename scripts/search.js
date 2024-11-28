function search(){
    const searchBox = document.querySelector('.search-textbox');
    searchValue = searchBox.value.trim();
    window.location.href = "index.php?search=" + encodeURIComponent(searchValue);
}

function result(){
    alert("1");
    window.location.href = "result.php?search=" + encodeURIComponent(searchValue);
}

function noResult(){
    alert("2");
    window.location.href = "no-result.html?search=" + encodeURIComponent(searchValue);
}