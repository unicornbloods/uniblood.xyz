// From https://www.w3schools.com/howto/howto_js_slideshow.asp

window.onload = initAll;

function initAll() {
	plusSlides();
	showSlides();
}

var slideIndex = [1,1];
/* Class the members of each slideshow group with different CSS classes */
var slideId = ["BBL", "Tea"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex[no]-1].style.display = "block";
}