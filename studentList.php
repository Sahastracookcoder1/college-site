<?php
define("TITLE","CPBGEC | Students List");
define("CSS","style.css");
define("CSS2","none.css");

?>
<?php include ('includes/headerNav.php');?>

<section id="list">
  <h1>list of students</h1>
  <img src="img/list.png" alt="list-icon">
</section>


<p id="button" class="accordion">information technology</p>
<div class="panel">
  <p><a href=""> first year</a> </p>
  <p><a href="">second year</a></p>

  <p><a href="">third year</a></p>
  <p><a href="">fourth year</a></p>
</div>
<p class="accordion">environmental engineering</p>
<div class="panel">


  <p><a href="">third year</a></p>
  <p><a href="">fourth year</a></p>
</div>
<p class="accordion">civil engineering</p>
<div class="panel">
  <p><a href=""> first year</a> </p>
  <p><a href="">second year</a></p>

  <p><a href="">third year</a></p>
  <p><a href="">fourth year</a></p>

</div>

<script type="text/javascript">
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
  }
</script>

<?php include ('includes/footer.php');?>
