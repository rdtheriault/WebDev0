//sort hat
var sortHat = document.getElementById("sort-hats");
function ifClickSortHats() {
window.location.assign("shop.php?filter=hat");
}
sortHat.addEventListener("click", ifClickSortHats); 

//sort Shirts
var sortShirts = document.getElementById("sort-shirts");
function ifClickSortShirts() {
window.location.assign("shop.php?filter=shirt");
}
sortShirts.addEventListener("click", ifClickSortShirts); 

//sort sweater
var sortSweaters = document.getElementById("sort-sweaters");
function ifClickSortSweaters() {
window.location.assign("shop.php?filter=sweater");
}
sortSweaters.addEventListener("click", ifClickSortSweaters); 

//sort mug
var sortMugs = document.getElementById("sort-mugs");
function ifClickSortMugs() {
window.location.assign("shop.php?filter=Mugs");
}
sortMugs.addEventListener("click", ifClickSortMugs); 