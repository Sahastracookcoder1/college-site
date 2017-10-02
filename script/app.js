$(document).ready(function(){
  var targetPos = $(".scrollDiv").offset().top;

  $(window).resize(function(){
    var targetPos = $(".scrollDiv").offset().top;
    console.log(targetPos);
  })
  console.log(targetPos);

  $(window).scroll(function() {

    var scrollPos = $(this).scrollTop();
    console.log(scrollPos);
    if(targetPos>scrollPos){
      $('.scrollDiv').addClass('giveStructure');
      $('#content').addClass('fixed');
        var trans = ((100/targetPos)*scrollPos)/100;
        $('nav').css('background','rgba(250, 250, 250,'+trans+')');
        $('#override1,#override2,#override3,#override4,#override5,#override6').css("color","rgba(0, 0, 0, "+trans+")")
        opa = (((28/targetPos)*scrollPos)/28)*.28;
        $('nav').css('box-shadow','0px 5px 1px rgba(0, 4, 0,'+opa+')');


    }else{
      $('#content').removeClass('fixed');
      $('.scrollDiv').removeClass('giveStructure');
      $('nav').css('background','rgba(250, 250, 250,1)');
      $('nav').css('box-shadow','0px 5px 1px rgba(0, 4, 0, 0.28)');
    }

  })


})


/*$(window).scroll(function() {
  var targetPos = $(".a").scrollTop();

  var scrollPos = $(this).scrollTop();
  console.log(scrollPos);
  if(targetPos>scrollPos){
    $('.yo').removeClass('yo-p');
  }})*/
