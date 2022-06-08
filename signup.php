<html>

<head>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href='./styles/sign.css'>
    <link rel="stylesheet" href='./styles/home.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    
    </style>
</head>

<body>
   <?php
    include("./components/header.php");
    ?>
    <h6 class="show-alert">

    </h6>
    <main class="container-fluid">
        <div class="from">
            <form action="./user/signup.php" class="f" method="post">
               <h4>Create an account</h4>
                <div>
                    <input required type="text" placeholder="Full name" name="name" ><br>
                    <input required type="email" placeholder="Email" name="email"><br>
                    <input required type="text" placeholder="Phone" pattern='[0-9]{10}' name="phone"><br>
                    <input required type="password" placeholder="Password" name="password"><br>
                    <input required type="password" placeholder="Confirm Password" name="c_password"><br>
                   <button class="button">Create account</button>
                </div>
                <a href="./login.php" class="link"> Already has an account, login here</a>
            </form>
        </div>
    </main>

    <?php include("components/footer.php"); ?>
    <script>
    const form = document.querySelector('form')
    form.onsubmit = e => {
      e.preventDefault();
      const data = new FormData(form);

      const req = new XMLHttpRequest();
      req.open('post' , 'user/signup.php' , true)
      req.send(data)
      req.onload = ()=> {
      const {massage , status} = JSON.parse(req.responseText);

      if(status == "error"){ style = "warn"}
      else {style = "success"}
      
      const span = document.querySelector('.show-alert');
      span.classList.add(style);
      span.innerHTML = massage ;

      if(status == 'success'){
        setTimeout(() => {
          location.href = "index.php";
        }, 1500);
      }
      }

      req.onreadystatechange = () => {
        console.log(req.readyState)
      }
    }
    </script>
</body>

</html>
