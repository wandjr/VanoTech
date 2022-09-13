var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides;

  for (i = 1; i < 5; i++) {
    $("#carrossel"+i).hide(); 
  }
  slideIndex++;
  if (slideIndex > 4) {slideIndex = 1}    

  $("#carrossel"+slideIndex).show(4000);  

  setTimeout(showSlides, 6000); // Change image every 2 seconds
}