<?php
session_start();
require("user/conn.php");
if(!isset($_SESSION['user_id']) || $_SESSION['logged_in'] != true ){
 header('location:login.php');
 die();
}

$q = 'select * from user where email = "'.$_SESSION["user_id"].'" ';
$run = mysqli_query($link , $q);
$email = '';
if(mysqli_num_rows($run)){
    $data = mysqli_fetch_assoc($run);
    $email = $data['email'];
}
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="./styles/form.css">
     <link rel="stylesheet" href="./styles/home.css">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Personal Details : buildCV</title>
 </head>
 <body>
     <?php
     include("./components/header.php");
     ?>
     <div class="modal modal--closed">
         <div class="modal--body success warn">
             <h4 class="modal--body__text">
                
             </h4>
         </div>
     </div>
     <main>
         <h2 class="heading">Create a beutyful resume/CV with us by simply feeling this easy form</h2>
         <small>You can always edit this and can make changes as per requirement  once you save this  form </small>
         <form  method="post" autocomplete="off">
           <div class="progress-bar">
               <ul>
                   <li class='current'>1. Personal details</li>
                   <li>2. Academic details</li>
                   <li>3. Work History </li>
                   <li>4. Skills</li>
               </ul>
           </div>
         <span class="scroll-down">Step 1</span>
            <section>
                 <h4 class="sub-heading">About you</h4>
                 <div class="inputs">
                     <h4 class="label">Enter full name : </h4>
                     <input required type="text" name="name" placeholder="john doe">
                    
                     <h4 class="label">Profession : </h4>
                     <input required type="text" name="proffesion" placeholder="eg Full stack developer">

                     <h4 class="label">Contact number : </h4>
                     <input required  type="text" name="contact" pattern="[0-9]{10}" title="Please enter a valid phone number">

                     <h4 class="label">Email address : </h4>
                     <input required type="email"  readonly name="email" value='<?php  echo $email; ?>' >

                       <h4 class="label">Address : </h4>
                   <textarea required name="address"  rows="5"> eg .las vegas, USA</textarea>
                       <h4 class="label">Proffesional summary : </h4>
                   <textarea required name="summary"  rows="5"> </textarea>
                     
                 </div>
             </section>
            
            <button  class='submit sub-heading' type="submit">Submit data</button>
        </form>
     </main>
     <script src="./javascript/form.js" defer></script>
     <script src="./javascript/personal-data-form.js" defer></script>
     <?php include("components/footer.php"); ?>
 </body>
 </html>