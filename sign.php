 <?php
session_start();
$message = "successful";
include "connect.php";

if (isset($_POST["sinsubmit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $picture = $_FILES['picture']['name'];
    $tmp_picture = $_FILES['picture']['tmp_name'];

    $_SESSION["form_data"] = $_POST;

    if (($name && $email && $password) == "") {
        echo '<h3 style ="color: white;">Kindly fill out the form</h3>';
    } else {
        if (move_uploaded_file($tmp_picture, "upload/" . $picture)) {
            $select = mysqli_query($conn, "SELECT * FROM `sign` WHERE `email` = '$email'");
            $result = mysqli_num_rows($select);
            if ($result > 0) {
                echo '<h3 style ="color: red;">Email already exists</h3>';
                move_uploaded_file($tmp_picture, "upload/" . $picture);
            } else {
                if (mysqli_query($conn, "INSERT INTO `sign`(`name`, `email`, `password`,`picture`) VALUES ('$name','$email','$password','$picture')")) {
                    echo '<script>
                            window.onload = function() {
                                document.getElementById("login").style.transform = "translateY(-100%)";
                            };
                          </script>';
                }
            }
        }
    }
}
if (isset($_POST["logsubmit"])) {
  $login_email = $_POST['email'];
  $login_password = $_POST['password'];

  $select_login = mysqli_query($conn, "SELECT * FROM `sign` WHERE `email` = '$login_email' AND `password` = '$login_password'");
  if(mysqli_num_rows($select_login) > 0){
    $user = mysqli_fetch_assoc($select_login);
    $_SESSION["email"] = $user["email"];
    $_SESSION["password"] = $user["password"];

    echo '<h2 style= "color: green">Succesfully login</h2>';
    header("location:dashboard.php");
}

}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
  />
  <script src="https://kit.fontawesome.com/93483deb2b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="htt ps://cdnjs.cloudflare  .com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" hr ef="https://cdn.jsdelivr.net/npm/
    bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="sign.css">
</head>
<style>
  .signup input,.login input{
  width: 60%;
  height: 45px;
  background: #e0dede;
  justify-content: center;
  display: flex;
  margin: 15px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 5px;
} 
.login{
  height: 460px;
  background: #eee;
  border-radius: 60% / 10%;
  transform: translateY(-150px);
  transition: .8s ease-in-out;
}
.signup label{
  color: #fff;
  font-size: 2.3em;
  justify-content: center;
  display: flex;
  margin: 30px;
  font-weight: bold;
  cursor: pointer;
  transition: .5s ease-in-out;
} 
.btn-13{
  margin-top: 10px;
}
.btn-13:after,
.btn-13:before {
  background: linear-gradient(
    90deg,
    #fffacfd4 25%,
    transparent 0,
    transparent 50%,
    #fffacfd4 0,
    #fffacfd4 75%,
    transparent 0
  );
  content: "";
  inset: 0;
  position: absolute;
  transform: translateY(var(--progress, 100%));
  transition: transform 0.2s ease;
}
.btn-13:after {
  --progress: -100%;
  background: linear-gradient(
    90deg,
    transparent 0,
    transparent 25%,
    #fffacfd4 0,
    #fffacfd4 50%,
    transparent 0,
    transparent 75%,
    #fffacfd4 0
  );
  z-index: -1;
}
.bat {
  border-radius: 5px !important;
  border-width: 2px;
  overflow: hidden;
  width: 300px;
  height: 40px;
  margin-left: 100px;
  border: 2px solid black;
  position: relative;
}
@media (max-width:720px) {
  .signup input,.login input{
    width: 90%;
  }
  .bat {
  height: 40px;
  margin-left: 19px;
  width: 295px;
}
}
</style>
<body>
  <nav class="navbar shadow navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand fs-3" href="index.php">Skilltex.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link "  href="passion.php">Find Passion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="work.php">How we works</a>
          </li>
         
        
        </ul>
        <form class="d-flex log align-items-center gap-4" role="search">
          <li class="nav-item">
            <a class="nav-link" href="sign.php">Signup</a>
          </li>  
          <button class="btn-12"><span><a href="open.php">Find Tool</a></span></button>
        </form>
      </div>
    </div>
  </nav>                                    
    <div class="all">
      <div class="cli">
      <div class="main">
          <input type="checkbox" id="chk" aria-hidden="true">
      
          <div class="signup">
              <form action="" method="POST" enctype="multipart/form-data">
                  <label for="chk" aria-hidden="true">Sign up</label>
                  <input type="text" name="name" id="name" placeholder="name" required>

                  <input type="email" id="email" name="email" placeholder="Email" required>
                  
                  <input type="password" id="password" name="password" placeholder="Password" required>

                  <input type="file" name = "picture" id = "picture">
                  <center></center>
                  <div>
                    <a href="">  <button name="sinsubmit" class="btn-13 " type="submit"><span><a href="">Signup</a></span></button></a>
                  </div>
              </form>
          </div>
          
      


          <div class="login" id="login">
              <form action=""  method="post" enctype="multipart/form-data">
                  <label for="chk" aria-hid den="true">Login</label>
                  <input type="email" name="email" placeholder="Email" required>
                  <input type="password" name="password" placeholder="Password" required>
                  <button class="bat" name="logsubmit" type="submit"><span>Login</span></button>
              </form>
          </div>
        </div> 
      </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<script>
    function slideUpLogin() {
        // Slide up the login section after signup form submission
        document.getElementById("loginSection").style.transform = "translateY(-100%)";
    }
</script>
