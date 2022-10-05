var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides;

  for (i = 1; i < 6; i++) {
    $("#carrossel"+i).hide(); 
  }
  slideIndex++;
  if (slideIndex > 5) {slideIndex = 1}    

  $("#carrossel"+slideIndex).show(4000);  

  setTimeout(showSlides, 6000); // Change image every 2 seconds
}

function validar()
{
  if(email.value=="")
  {
    alert("Digite um email");
  }
}

function Alterar()
{
  formulario.action="update.php";

  formulario.submit();
}