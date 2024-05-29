$(function (){
  
$(".main-wrap .menu-btn").click(function(){
    $(".side-nav").fadeIn();
    $(this).fadeOut();
})
$(".side-nav>img").click(function(){
  $(".side-nav").hide();
  $(".main-wrap .menu-btn").show();
})

});


