<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div class="header">
            <img src="../logo.jpg" alt="logo" class="logo">
            <ul class="menu">
                    <li class=""> <a class="" href="../index.php"> Home </a> </li>
                    <li class=""> <a class="" href="../login.php"> Login </a> </li>
                    <li class=""> <a class="" href="../personal.php"> Account </a> </li>
                    <li class=""> <a class="" href="../logout.php"> Logout</a> </li>
                    <li class=""> <a class="" href="../About.php"> About </a> </li>
                </ul>
            </div>
        </header>
      
    </body>
    </html>
    
<?php

session_start();
// error
error_reporting(0);
require("conn.php");
if(!isset($_SESSION['user_id']) || $_SESSION['logged_in'] != true){
 header('location:../login.php');
 die();
}else{

// echo "showing template no : ".$_GET['temp'] . "<br>";
// echo "Generating template for user : ". $_SESSION['user_id'];
$user = $_SESSION['user_id'];
$pq = "SELECT * from personal where email = '$user'";
$pr = mysqli_query($link , $pq);
if(mysqli_num_rows($pr)){

  $pd = mysqli_fetch_assoc($pr);
}

$aq = "SELECT * from academic where user = '$user'";

$ar = mysqli_query($link , $aq);

$data = "";
if(mysqli_num_rows($ar)){
  while($ad = mysqli_fetch_assoc($ar)){
    $data.= '
    <div class="workdata">
                <div id="workstatus" class="workstatus">
                <br>
                  <p><b>
                    Degree/Diploma :  <br /> 
                    Passing Year :  <br />
                    Univercity/Board :  <br />
                    Percentage/CGPA : 
                    </b>
                  </p>
                </div>
                <div id="workdata2">
                <br>
                <p>
                  '.$ad['qualification'].'  <br /> 
                  '.$ad['year'].'  <br />
                  '.$ad['board'].' <br />
                  '.$ad['marks'].' 
                  
                </p>
                
                </div>
              </div>
    ';

}

}


// work history

$aq = "SELECT * from work_data where user = '$user'";

$ar = mysqli_query($link , $aq);

$work = "";

if(mysqli_num_rows($ar)){
  while($ad = mysqli_fetch_assoc($ar)){
    $work.= '
    <div class="workdata">
                <div id="workstatus" class="workstatus">
                <br>
                  <p><b>
                    Designation :  <br /> 
                    Starting Year :  <br />
                    Ending year :  <br />
                    Organisation : 
                    </b>
                  </p>
                </div>
                <div id="workdata2">
                <br>
                <p>
                  '.$ad['desig'].'  <br /> 
                  '.$ad['starton'].'  <br />
                  '.$ad['endon'].' <br />
                  '.$ad['organization'].' 
                  
                </p>
                
                </div>
              </div>
    ';
  

}

}
// education 


$sq = "SELECT * from skill where user = '$user'";

$sr = mysqli_query($link , $sq);

$skill = "";
if(mysqli_num_rows($sr)){
  while($sd = mysqli_fetch_assoc($sr)){
    $skill.= '<li class="skill">'. $sd['skill'] . ' (' . $sd['level'] . ') </li>';

}

}


echo  '
<div>
  <html>
    <head>
      <!-- Including the bootstrap CDN -->
      
      <link rel="stylesheet" href="../styles/home.css">
      <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <link
        href="https://fonts.googleapis.com/css?family=Poppins"
        rel="stylesheet"
      />
      <style>
      .skill{
        font-size:.8rem;
      }

        .nav {
          background-color: #17ce82;
          padding: 10px 70px 10px 70px;
        }

        a {
          color: black;
        }

        .template1 {
          background-color: red;
          display: flex;
          size: 3508px 2480 px;
          height: 297mm;
          width: 210mm;
          font-family: Century Gothic;
          box-shadow: 0px 0px 1px;
        }

        .llbox {
          width: 50px;
          background-color: white;
        }

        .left_box {
          background-color: #003d73;
          width: 300px;

          color: white;
        }

        .left_box h2 {
          padding: 15px;
          padding-bottom: 1px;
        }

        .prof {
          font-size: 18px;
          padding: 0px 15px 10px 15px;
          font-style: bold;
        }

        .sectiontitle {
          background-color: #00315c;
          font: 16px;
          padding: 3px 15px 3px 15px;
        }

        .Contact {
          font-size: 11px;
          padding: 15px;
        }

        n .ul {
          font-size: 11px;
          padding: 15px;
          padding-top: 0px;
        }

        .ul li {
          font-size: 11px;
          margin: 15px;
        }

        .right_box {
          background-color: rgb(241, 244, 247);
          width: 100%;
        }

        .maintemp {
          margin: 10px auto;
          align-items: center;
          align-content: center;
          width: fit-content;
        }

        .work_summry {
          padding: 15px;
          font-size: 12px;
        }

        .outer {
          height: 100%;
          padding: 15px;
        }

        .work_summry {
          font: 16px;
          color: #00315c;
          padding: 15px;
          box-shadow: 0px 1px 0px rgb(189, 181, 181);
        }

        .work_History {
          padding: 1px;
          box-shadow: ;
        }

        .work_History p {
          padding: 1px;
          box-shadow: 0px 1px 0px rgb(189, 181, 181);

          font-size: 20;
        }

        .workdata {
          display: flex;
          flex-direction: row;
          padding-bottom: 10px;
          box-shadow: 0px 1px 0px rgb(189, 181, 181);
        }

        .workstatus {
          font-size: 13px;
        }

        #workdata2 {
          font-size: 13px;
          margin-left: 50px;
        }

        .mro {
          margin: 0px;
        }

        .alltitle {
          padding: 1px;
          box-shadow: 0px 1px 0px rgb(189, 181, 181);
          font-size: 20;
        }

        .mar-fon {
          margin-left: 140px;
          font-size: 13px;
        }

        .afbox {
          box-shadow: 0px 1px 0px rgb(189, 181, 181);
        }
      </style>
      <title>Dashboard</title>
    </head>

    <body>
      <main class="maintemp">
        <div class="template1">
          <div class="left_box">
            <h2 id="name"> 
              '. $pd["name"].'
             </h2>
            <p id="prof" class="prof">'.$pd['proffession'].'</p>

            <div class="sectiontitle" id="SECTIONNAME_CNTC">
              Contact<span class="rename-section text-rename"> </span>
            </div>

            <!-- contact -->
            <div class="Contact">
              <p>
                  <address>

                      <b>Address</b><br />
                      '.$pd['address'].'
                    </address>
              </p>
              <p id="Phone">
                <b>Phone</b><br />
                '.$pd['contact'].'
              </p>
              <p id="Email">
                <b>Email</b><br />
                '.$pd['email'].'
              </p>
            </div>

            <div class="sectiontitle" id="SECTIONNAME_CNTC">
              Skills<span class="rename-section text-rename"> </span>
            </div>
            <ul>
            '.$skill.'
            </ul>
         
            <!--Languages-->
            <div class="sectiontitle" id="SECTIONNAME_CNTC">
              Languages<span class="rename-section text-rename"></span>
              
            </div>

            <ul>
           
            <li>English</li>
            </ul>
          </div>
          <div class="right_box">
            <div class="outer">
              <div class="work_summry">
              <h2> Proffession summary : </h2>
                <p>'.$pd['summary'].'</p>
              </div>

              <!-- Work History
              <div class="Work_History">
                <p class="mro"><b>Work History</b></p>
              </div>
              <div class="workdata">
                <div id="workstatus" class="workstatus">
                  <p>
                    Start date <br />End date / <br />
                    Current
                  </p>
                </div>
                <div id="workdata2">
                  <label for="job_title"> <b>Job Titlee</b> </label>
                  <p id="Employer">
                    Employer, city ,State <br />Description Describe job
                  </p>
                </div>
              </div>

              <!-- Education -->

              <div class="alltitle">
                <p class="mro"><b>Education</b></p>
              </div>
            '. $data.'

              <!-- Affiliations -->
              <div class="alltitle">
                <p class="mro"><b>Work history</b></p>
              </div>
            '.$work.'

              <!-- Accomplishments-->

              <div class="alltitle">
                <p class="mro"><b></b></p>
              </div>
             
            </div>
          </div>
        </div>
      </main>

      </script>
    </body>
  </html>
</div>';
}
?>
<div style="margin:20px auto ; text-align:center;">
  <button>
  <a href="printcv.php" target="_blank" rel="noopener noreferrer">Print</a>
  </button>
</div>

<?php
      include("../components/footer.php");
?>