var cImages = document.getElementsByClassName("carouselImage");
var cLabels = document.getElementsByClassName("carouselLabel");
var numOfElems = cImages.length;
var currIndex = 0;

function updateCarousel() {
  for (var i = 0; i < numOfElems; i++) {
    if (i === currIndex) {
      cImages[i].classList.remove("hidden");
      cLabels[i].classList.remove("hidden");
    } else {
      cImages[i].classList.add("hidden");
      cLabels[i].classList.add("hidden");
    }
  }
  currIndex = (currIndex + 1) % numOfElems;
}

updateCarousel();
setInterval(updateCarousel, 5000);
