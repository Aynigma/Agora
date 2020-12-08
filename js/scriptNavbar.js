var x = document.getElementById("search-box-div");

function showsearch() {
    var x = document.getElementById("search-box-div");

    x.style.display = "block";
}


function hide() {
    var x = document.getElementById("search-box-div");
    x.style.display = "none";
}


function hidesearch() {
    setTimeout(hide, 1000);
}