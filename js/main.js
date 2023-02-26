// find the current scroll position
var prevScrollPos = window.pageYOffset;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollPos > currentScrollPos) {

    // hide the navbar when scrolling down
    document.getElementById("navbar").style.top = "0";
  }
  else {
    document.getElementById("navbar").style.top = "-100px";
  }

  // assign a new scroll position value
  prevScrollPos = currentScrollPos; 
}