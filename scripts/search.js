function search(){
    const searchBox = document.querySelector('.search-textbox');
    searchValue = searchBox.value.trim();
    window.location.href = "result.php?search=" + encodeURIComponent(search);
}