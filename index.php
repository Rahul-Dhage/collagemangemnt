
<head>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
<style>
       
    </style>
</head>

<body>
   <?php
    include("./components/header.php");
    session_start();
    
   ?>
    <div class="hero">
        <section class="hero-div">
           <h2>Get all the help you need to create a professional CV in minutes.</h2>
            <p>Getting started with us is easy , few simple steps and you are good to go !</p>
            <a class="button" href="#get-started">Get started</a>
        </section>
       </div>
       <section class="get-started" id="get-started">
           <h4>Follow this simple 5 steps </h4>
           <ul>
               <li>Create an account , its free !</li>
               <li>Fill the simple form , your details</li>
               <li>Choose the template you wish to </li>
               <li>Cross check your CV/Resume</li>
               <li>And finally print your document :)</li>
           </ul>
       </section>
    <main class="container-fluid">
    
       
        <div class="flex-container">
            <a href='./user/cv.php?temp=0' class="card">
                
                    <img class="img-temp" src="cv-temp.jpg" alt="CV template">
                 
                <div class="card-title-it">
                    <p><strong>Build your professional CV</strong></p>
                </div>
</a>
            <a href='./user/cv.php?temp=1' class="card">
                
                    <img class="img-temp" src="cv-temp.jpg" alt="CV template">
                 
                <div class="card-title-it">
                    <p><strong>Build your professional CV</strong></p>
                </div>
</a>
            <a href='./user/cv.php?temp=2' class="card">
                
                    <img class="img-temp" src="cv-temp.jpg" alt="CV template">
                 
                <div class="card-title-it">
                    <p><strong>Build your professional CV</strong></p>
                </div>
</a>

        </div>







    </main>

<?php include("components/footer.php"); ?>
</body>