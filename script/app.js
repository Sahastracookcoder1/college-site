$(document).ready(function() {
  /*var targetPos = $(".scrollDiv").offset().top;

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
  */
  /* To know whether the user is scrolling up or down*/
  var position = $(window).scrollTop();

  $(window).scroll(function() {
    currentScrollPos = $(this).scrollTop();
    if (currentScrollPos > position) {
      console.log('Scrolling downwards');
      $('header').addClass("hide");
    } else {
      console.log('Scrolling upwards');
      $('header').removeClass("hide");
    }
    position = currentScrollPos;
  })

  /* Making the dropdown menu*/
  var click1 = 0;
  $(".drop-academics").click(function() {

    if (!click1) {
      if(click2 || click3){
        if (click2) {
          $("#student-section").animate({
            top: "-343px"
          });
          $('.drop-student').toggleClass('activeLine activeText')
          click2 = 0;
          $("#academics-section").animate({
            top: "96px"
          });
          $('.drop-academics').toggleClass('activeLine activeText')
          click1 = 1;
        }else{
          $("#manage-section").animate({
            top: "-343px"
          });
          $('.drop-manage').toggleClass('activeLine activeText')
          click3 = 0;
          $("#academics-section").animate({
            top: "96px"
          });
          $('.drop-academics').toggleClass('activeLine activeText')
          click1 = 1;
        }

      }else{
        $("#academics-section").animate({
          top: "96px"
        });

        $('.drop-academics').toggleClass('activeLine activeText')

        click1 = 1;
      }
    } else {
      $("#academics-section").animate({
        top: "-343px"
      });
      $('.drop-academics').toggleClass('activeLine activeText')
      click1 = 0;
    }

  });


  var click2 = 0;
  $(".drop-student").click(function() {

    if (!click2) {
      if(click1 || click3){
        if (click1) {
          $("#academics-section").animate({
            top: "-343px"
          });
          $('.drop-academics').toggleClass('activeLine activeText')
          click1 = 0;
          $("#student-section").animate({
            top: "96px"
          });
          $('.drop-student').toggleClass('activeLine activeText')
          click2 = 1;
        }else{
          $("#manage-section").animate({
            top: "-343px"
          });
          $('.drop-manage').toggleClass('activeLine activeText')
          click3 = 0;
          $("#student-section").animate({
            top: "96px"
          });
          $('.drop-student').toggleClass('activeLine activeText')
          click2 = 1;
        }

      }else{
        $("#student-section").animate({
          top: "96px"
        });
        $('.drop-student').toggleClass('activeLine activeText')
        click2 = 1;
      }
    } else {
      $("#student-section").animate({
        top: "-343px"
      });
      $('.drop-student').toggleClass('activeLine activeText')
      click2 = 0;
    }

  });

  var click3 = 0;
  $(".drop-manage").click(function() {

    if (!click3) {
      if(click1 || click2){
        if (click1) {
          $("#academics-section").animate({
            top: "-343px"
          });
          $('.drop-academics').toggleClass('activeLine activeText')
          click1 = 0;
          $("#manage-section").animate({
            top: "96px"
          });
          $('.drop-manage').toggleClass('activeLine activeText')
          click3 = 1;
        }else{
          $("#student-section").animate({
            top: "-343px"
          });
          $('.drop-student').toggleClass('activeLine activeText')
          click2 = 0;
          $("#manage-section").animate({
            top: "96px"
          });
          $('.drop-manage').toggleClass('activeLine activeText')
          click3 = 1;
        }

      }else{
        $("#manage-section").animate({
          top: "96px"
        });
        $('.drop-manage').toggleClass('activeLine activeText')
        click3 = 1;
      }



    } else {
      $("#manage-section").animate({
        top: "-343px"
      });
      $('.drop-manage').toggleClass('activeLine activeText')
      click3 = 0;
    }

  });

  $(".prevent").click(function(e) {
    e.preventDefault();
  });


});



/*$(window).scroll(function() {
  var targetPos = $(".a").scrollTop();

  var scrollPos = $(this).scrollTop();
  console.log(scrollPos);
  if(targetPos>scrollPos){
    $('.yo').removeClass('yo-p');
  }})*/
