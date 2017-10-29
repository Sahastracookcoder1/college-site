<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo constant("TITLE"); ?></title>

  <!-- NOTE: Including Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

  <!-- NOTE: FontAwesome -->
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

  <!-- NOTE: Custom CSS -->
  <link rel="stylesheet" href="css/<?php echo constant('CSS');?>">
  <link rel="stylesheet" href="css/header.css">

  <!--<link rel="stylesheet" href="css/home-page.css">
  <link rel="stylesheet" href="css/content.css">
  <link rel="stylesheet" href="css/syllabus.css">
  <link rel="stylesheet" href="css/app.css">-->


  <!-- NOTE: Loading JS libraries -->
  <script src="script/jquery-3.2.1.min.js" charset="utf-8"></script>

</head>


<body>
  <div class="hdnanf">



    <header>
      <h1>Ch. Bramh Prakash Govt. Engg. College</h1>
    </header>

    <nav>
      <ul class="container-wide">
        <li><a href="index.php" class="line">Home</a></li>
        <li><a href="#" class="line">Gallery</a></li>
        <li><a href="" class="drop-academics prevent line">Academics</a></li>
        <li><a href="" class="drop-student prevent line">Student's</a></li>
        <li><a href="" class="drop-manage prevent line">Management</a></li>
        <li><a href="" class="line">About Us</a></li>
      </ul>
    </nav>
    <div id="nav-content">
      <div id="academics-section" class="hideDrop">
        <div class="container">
            <div id="departments-section">
              <h3>Departments</h3>
              <ul>
                <li>
                  <div class="list-icon">
                    <img src="img/listIcons/it.jpg" alt="IT list icon">
                  </div>
                  <a href="departmentIt.php">Information Technology</a>
                </li>

                <li>
                  <div class="list-icon">
                    <img src="img/listIcons/civil.jpg" alt="Civil list icon">
                  </div>
                  <a href="departmentIt.php">Civil</a>
                </li>

                <li>
                  <div class="list-icon">
                    <img src="img/listIcons/env.jpg" alt="Environment list icon">
                  </div>
                  <a href="departmentIt.php">Environment</a>
                </li>

                <li>
                  <div class="list-icon">
                    <img src="img/listIcons/allied.png" alt="Allied list icon">
                  </div>
                  <a href="departmentIt.php">Allied</a>
                </li>

                <li>
                  <div class="list-icon">
                    <img src="img/listIcons/applied.jpg" alt="Applied list icon">
                  </div>
                  <a href="departmentIt.php">Applied Science &amp; Humanities</a>
                </li>
              </ul>
            </div>
            <hr class="vertical-line2">
            <div id="syllabus-section">
              <h3>Syllabus</h3>
              <h4>New</h4>
              <ul class="straight">
                <li><a href="syllabus.php">IT</a></li>
                <li><a href="syllabus.php">Civil</a></li>
                <li><a href="syllabus.php">Env.</a></li>
              </ul>

              <h4>Old</h4>
              <ul class="straight">
                <li><a href="syllabus.php">IT</a></li>
                <li><a href="syllabus.php">Civil</a></li>
                <li><a href="syllabus.php">Env.</a></li>
              </ul>
            </div>
            <hr class="vertical-line2">
            <div id="tt-section">
              <h3>Time Table</h4>
            <a href="timeTable.php"><h4>Odd Semester</h4></a>
            <a href="timeTable.php"><h4>Even Semester</h4></a>
          </div>
          <hr class="vertical-line2">
          <div id="calendar-section">
            <h3>Academic Calendar</h3>
              <div class="calendar-image">
                <a href="#"><img src="img/Navigation/calendar.jpg" alt="A calendar Image">
              </a>
              </div>
            </div>
          </div>

        </div>


        <div id="student-section" class="hideDrop">
          <div class="container">
            <div id="ssp-section">
              <a href="shiningStar.php">
            <img id="ssimg" src="img/navigation/ss.png" alt="Shining Stars Image">
            <h3>Shining Stars</h3>
            </a>
              <hr class="horizontal-line1">
              <a href="placement.php">
            <img id="pimg" src="img/navigation/placements.jpg" alt="Placement image">
            <h3>Placements</h3>
            </a>
            </div>

            <hr class="vertical-line3">

            <div id="activity-section">
              <h3>Activities</h3>

              <span class="activitycontents">
                <a href="#">
                  <img src="img/navigation/sports.jpg" alt="Sports Events">
                </a>

                <a href="#">
                  <img src="img/navigation/cultural.jpg" alt="Cultural Events">
                </a>

              </span>


              <span class="activitycontents">
                <h4><a href="#">Sports</a></h4>
                <h4><a href="#">Cultural</a></h4>
              </span>
            </div>
            <hr class="vertical-line3">
            <div id="sel-section">
              <div id="scholarships">
                <a href="#">
              <img src="img/navigation/scholarships.jpg" alt="scholarships">
              <h3>Scholarships</h3>
              </a>
              </div>

              <hr class="horizontal-line1">

              <div id="el">
                <a href="#">
              <img src="img/navigation/el.jpg" alt="Education loan">
              <h3>Education loan</h3>
              </a>
              </div>
            </div>
            <hr class="vertical-line3">
            <div id="extra-section">
              <a href="#"><h3>Students List</h3></a>

              <hr class="horizontal-line1">

              <a href=""><h3>SBI Collect</h3></a>
            </div>
          </div>
        </div>

        <div id="manage-section">
          <div class="container">
            <div id="enc">
              <a href="events.php">
            <img src="img/navigation/events 2.jpg" alt=" Events and Conferences">
            <h3>Events &amp; Conferences</h3>
            </a>
            </div>

            <hr class="vertical-line3">

            <div id="committe">
              <a href="committe.php">
            <img src="img/navigation/conf.jpg" alt="Meeting">
            <h3>Committe</h3>
            </a>
            </div>

            <hr class="vertical-line3">

            <div id="budget">
              <a href="#">
            <img src="img/navigation/budget.jpg" alt=" Budget">
            <h3>Budget expenditure &amp; <br>Audit repory</h3>
          </a>
            </div>
          </div>
        </div>
      </div>

  </div>
  <div class="main-content">
