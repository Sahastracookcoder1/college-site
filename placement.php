<?php
define("TITLE","CPBGEC | Placements");
define("CSS","placement.css");

?>
<?php include ('includes/headerNav.php');?>

<div>
	<div class="placement-div">
		<div class="placement-text">  Training And Placement Cell </div>
		<div class="placement-accordian-div" >
			<div class="placement-accordian"> Training And Placement Officer </div>

				<div class="placement-panel">
					<div class="placement-panel-div">
		                <span style="font-size: 22px; font-weight:bold;">  Dr. Srinivasa K.G  </span><br>
                       Training & Placement Officer <br>
                        Contact no.:- 011-25318158 <br>
                        Email:- tpo.gecdelhi@gmail.com, tpo@gecdelhi.ac.in
			</div>
			</div>
               <hr style="opacity: 0.7">
			<div class="placement-accordian">  Training Placement and Student's Personality Development Committee</div>
				<div class="placement-panel">

			          <table>
                      <tr>
                        <td><b> Name and Desingation</b></td>
                        <td><b> Status In Committe</b>  </td>
                      </tr>
                       <tr>
                         <td>Dr. Srinivasa K.G , Associate Professor</td>
                         <td>Chairperson</td>
                       </tr>
                         <tr>
                         <td>Mr. Aneyatullah Niyaji, Asst. Professor</td>
                         <td>Convener</td>
                       </tr>
                         <tr>
                         <td>Mr. Harjeet Singh Chadha, Asst. Professor</td>
                         <td> Member</td>
                       </tr>
                         <tr>
                         <td>Mr. Aditya Tandon, Asst. Professor</td>
                         <td> Member</td>
                       </tr>  <tr>
                         <td> Ms. Mimansa Gulati, Asst. Professor</td>
                         <td> Member</td>
                       </tr>  <tr>
                         <td>Dr. Jayati Ghosal, Asst. Professor</td>
                         <td> Member</td>
                       </tr>
                     </table>

			</div>

			 <hr style="opacity: 0.7">
			<div class="placement-accordian">   Placement Co-ordinator</div>
                <div class="placement-panel">

			          <table>
                        <tr style="border-bottom: 1px solid black;">
                          <td> <b>Name</b> </td>
                          <td class="tabel-td"> <b>Branch/Year</b> </td>
                        </tr >

                        <tr>
                          <td>Saurabh Mishra </td>
                          <td> IT, 4th Year</td>
                        </tr>
                        <tr>
                          <td>  Roopali Garg</td>
                          <td> IT, 4th Year </td>
                        </tr>
                        <tr>
                          <td>  Pankaj Kumar</td>
                          <td>  IT, 4th Year</td>
                        </tr>
                        <tr>
                          <td>  Jyoti Rani </td>
                          <td> IT, 4th Year </td>
                        </tr>
                        <tr>
                          <td>  Vivek Kumar Singh</td>
                          <td> IT, 4th Year </td>
                        </tr>
                       </table>

			</div>
           <hr style="opacity: 0.7">
           <div class="placement-accordian"> Placement</div>
                           <div class="placement-panel">
					 <p> Mr. Ritesh Kukreja B Tech (IT) Fourth Year is selected in NEC Technology India Pvt Ltd. with salary package of 3.25 lac. </p>
                     <div> <span><a href="#" title="Download Attachment"> Placement 2010</a> </span> <br>
                      <br>
                           <span> <a href="#" title="Download Attachment"> Placement 2011</a></span>
			</div>
			 <hr style="opacity: 0.7">
			              	</div>
		</div>
	</div>
</div>

<script type="text/javascript">
		var acc = document.getElementsByClassName("placement-accordian");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }
}

</script>
<?php include ('includes/footer.php');?>
