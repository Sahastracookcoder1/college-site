<?php
define("TITLE","CPBGEC | Welcome");
define("CSS","homePage.css");
define("CSS2","app.css");

?>
  <?php include ('includes/headerNav.php');?>

    <!-- NOTE: Splash screen starting -->
    <section class="splashscreen">


      <div class="grad1">

        <div class="grad2">


          <p>aman</p>
          <!-- NOTE: To prevent screen from collapsing -->



          <div id="quote">
            <p class="quo">"If you can dream it, you can do it."</p>
            <p class="auth">- Walt Disney</p>
          </div>

          <div class="icon">
            <a href="#jsjsjs"><i class="fa fa-angle-down fa-3x"></i></a>
          </div>


        </div>
        <!-- NOTE: End of the gradient 2 -->
      </div>
      <!-- NOTE: End of the gradient 1 -->

    </section>
    <!-- NOTE: Splash screen End -->

    <!-- NOTE: To make scroll the splashscreen -->
    <div class="scrollDiv" id="jsjsjs">
      <p class="hideMe">aman</p>
    </div>

  <div id="hp">
    <section>
      <!------updates-------->

      <div class="updates">
        <div class="container">
          <h2>Updates</h2>
          <div class="notices">
            <a href="notices.php"><h3 class="hover-div">Notices <i class="fa fa-arrow-right hover-arrow" ></i></h3></a>
            <div class="updates-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <button type="button" name="button" class="updates-btn"> see </button>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <button type="button" name="button" class="updates-btn"> see </button>
            </div>
          </div>
          <div class="whats-new">
            <a href="notices.php"><h3 class="hover-div">What's New   <i class="fa fa-arrow-right hover-arrow" ></i></h3></a>
            <div class="updates-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <button type="button" name="button" class="updates-btn"> see </button>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <button type="button" name="button" class="updates-btn"> see </button>
            </div>
          </div>
        </div>
      </div>
      <!-- ----- whts happening ------   -->

      <div class="happening">
        <div class="container">
          <h2>Know What's Happening</h2>
          <div class="whats-content">
            <img src="img\Untitled-5.jpg" alt="image">
            <div id="button"><i id="buttonIcon" class="fa fa-arrow-right fa-1x"></i></div>
            <div class="visit">
              <h3>Visit</h3>
              <i class="fa fa-arrow-right hover-arrow"></i></div>
            </div>
          </div>
        </div>

        <!-- ----- About  Us ------   -->
        <div class="about">
          <div class="container">
            <h2>About Us</h2>
            <p>The Department of Training and Technical Education, Govt. of Delhi, in its mission to <br>promote and establish centre of excellence in form of Institutes has added <br>Ch.B.P.Government Engineering College at Jaffarpur, Delhi, from academic
              session <br>2007-08.</p>
            <div class="about-content">
              <img src="img\Untitled-4.jpg" alt="">

            </div>

          </div>

        </div>



        <!-- ----- locate Us ------   -->
        <div class="locate">
          <div class="container">
            <h2>Locate Us</h2>
            <p>Only a short walk from Rawata Mor , Dwarka Mor is nearest metro station </p>
            <div>
              <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224162.87983372307!2d76.81878492276323!3d28.613423762594117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0df86e89be95%3A0xa130bbe36203a873!2sCh.Brahm+Prakash+Government+Engineering+College!5e0!3m2!1sen!2sin!4v1507207208919"
                frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

          </div>

        </div>


    </section>
    </div>
    <script src="script/jquery.scrollTo.min.js" charset="utf-8"></script>
    <script src="script/jquery.localScroll.min.js" charset="utf-8"></script>
    <script type="text/javascript">

      $(".icon").localScroll();
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
          $('#hp').addClass('fixed');


        }else{
          $('#hp').removeClass('fixed');
          //$('#hp').css("margin-top","127px");
          $('.scrollDiv').removeClass('giveStructure');

        }


      })
    </script>
    <?php include ('includes/footer.php');?>
