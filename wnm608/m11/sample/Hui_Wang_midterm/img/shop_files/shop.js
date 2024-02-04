var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}



$("li").mouseover(function(){
 $(this).find(".drop-down").slideDown(300);
 $(this).find(".accent").addClass("animate");
 $(this).find(".item").css("color","#FFF");
}).mouseleave(function(){
  $(this).find(".drop-down").slideUp(300);
   $(this).find(".accent").removeClass("animate");
   $(this).find(".item").css("color","#000");
});

