var searchValue;

const searchBox = document.querySelector('.search-textbox');

searchBox.addEventListener("keypress", function(event) {
    if(event.key === "Enter"){
        document.getElementById('search-icon').click();
    }
});

function search(){
    searchValue = searchBox.value.trim();
    window.location.href = "index.php?search=" + encodeURIComponent(searchValue);
}