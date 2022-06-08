<php>

<head>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href="./styles/sign.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>

</head>
<style>
   form input{
        border: 2px solid var(--main);
    }
</style>
<body>
<?php include("components/header.php");?>
<h6 class="show-alert">

</h6>

<main class="container-fluid">
        <div class="from">
            <form action="action.php"  autocomplete='off' method="post">
                <h4>Login here !</h4>
                <input type="email" placeholder="Email" required name="email"><br>
                <input type="password" placeholder="Password" required name="password"><br>
                <button class="button" type="submit" > Login</button>
                
                <a class="link" href="resetpassword.php">
                    Frorget the password
                </a>
                <a class="link" href="signup.php"> Dont have an account , create one !</a>
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
  req.open('post' , 'user/login.php' , true)
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
    console.log('logging...')
    req.responseText
  }
}
    </script>
</body>
