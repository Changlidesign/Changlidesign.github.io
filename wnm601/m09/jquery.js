$(document).ready(function(){
  $("button.one").click(function(){
    $("img").fadeIn();
  });

  $("button.three").click(function(){
    $("img").fadeOut();
  });

  $("button.two").click(function(){
    $("div.list").slideToggle("slow");
  });

});