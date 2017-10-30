<?php
define("TITLE","CPBGEC | IT");
define("CSS","departmentIt.css");
define("CSS2","none.css");


?>
<?php include ('includes/headerNav.php');?>
<div id="dpit">

  <div class="menu-toggle">
    <div class="hamburger"> </div>
  </div>



  <div>
    <nav class="side-nav">
      <ul>
        <li><a href="Laboratory.html">laboratory </a></li>
        <li><a href="#">Syllabus </a></li>
        <li><a href="">Faculty </a></li>
        <li><a href="#">Time Table </a></li>
        <li><a href="#">Question Bank </a></li>
      </ul>
    </nav>
  </div>

  <section >

    <div class="civil">
      <div class="container">
      <h1> INFORMATION TECHNOLOGY</h1>
      <img src="img\handshake.jpg" alt="hand-shake" />
    </div>
  </div>

    <div class="hod">
          <div class="container">
      <h2> Head of Department </h2>
      <h3> Dr. Srinivasa K.G. </h3>
      <img src="img\kg-sir.jpg" alt=" " />
      <p> Ph.D (CS) </p>
    </div>
  </div>


    <div class="faculty">
          <div class="container">
          <div class="fac">
      <h2>Faculty</h2>
      <span class="faculty-1">
           <img src="" alt="">
           <h4> Dr. Srinivasa K.G.	</h4>
           <p>Academic Head <br> Ph.D(CS)</p>

         </span>
      <span class="faculty-2">

           <img src="" alt="">
           <h4> Ms. Seema Rani</h4>
           <p>Assistant Professor <br> MCA, MSC(CS)</p>
         </span>
      <span class="faculty-1">
           <img src="" alt="">
           <h4>Dr. Pankaj Lathar</h4>
           <p>Assistant Professor <br>M.Tech.(IT)</p>
         </span>
      <span class="faculty-2">
           <img src="" alt="">
           <h4> Mr. Mahesh Kumar Saini</h4>
           <p>Assistant Professor <br>M.Tech.(IT)</p>
         </span>
      <span class="faculty-1">
           <img src="" alt="">
           <h4>  Mr.Aditya Tandan	</h4>
           <p>Assistant Professor <br> M.Tech.(CSE)</p>
         </span>
      <span class="faculty-2">
           <img src="" alt="">
           <h4>  Mr.Shashank Saroop</h4>
           <p>Assistant Professor <br> M.Tech.(IT)</p>
         </span>
      <span class="faculty-1">
           <img src="" alt="">
           <h4>Mr.Mohit Wadhwa	</h4>
           <p>Assistant Professor <br>M.Tech.(IT)</p>
         </span>
      <span class="faculty-2">
           <img src="" alt="">
           <h4>Mr.Gulzar Ahmed</h4>
           <p>Assistant Professor <br>NET,GATE	</p>
         </span>
      <span class="faculty-1">
           <img src="" alt="">
           <h4>Ms Ruchi</h4>
           <p>Assistant Professor <br>  M.Tech(E&C)</p>
         </span>
      <span class="faculty-2">
           <img src="" alt="">
           <h4>  Mr.Harjeet Singh Chadha</h4>
           <p>Assistant Professor <br>B.Tech(CSE),ALCCS(CS)		</p>
         </span>





    </div>
  </div>
  </div>


  </section>
  <script type="text/javascript">

$('.menu-toggle').click(function() {

  $('.side-nav').toggleClass('side-nav--open',200);
  $('.menu-toggle').toggleClass('menu-toggle--open');

});


$('.content').hide();
$('.lab').on('click', function(){
  if(!($(this).children('.content').is(':visible'))){
    $('.content').slideUp();
    $(this).children('.content').slideDown();
  } else {
    $('.content').slideUp();
  }
});

  </script>
</div>
<?php include ('includes/footer.php');?>
