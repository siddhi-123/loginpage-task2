<?php
include('wd_config.php');
$id="";
$fn="";
$ln="";
$e="";
$p="";
$cp="";
if(isset($_POST["uname"]))
{
$id=$_POST["uname"];
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$e=$_POST["email_id"];
$p=$_POST["pwd"];
$cp=$_POST["cpwd"];
if($p!=$cp){
    echo "<div class=fixed>Passwords do not match</div>";
}else{
$sql="insert into users(uname,fname,lname,email_id,pwd,cpwd,role) values('$id','$fn','$ln','$e','$p','$cp','user')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<script>
    alert('Registration successful');
    window.location.href='login.php';
    </script>";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="home.jpg" type="image/jpg">
    <title>User Registration</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpeg">
    <script src="assets/js/loader.js"></script>
    <script src="js/passval.js"></script>
    <link rel="stylesheet" href="style.ssignup.css" />
</head>
  <body>
  <section>
            <div class="circle"></div>
            <header>
                <a href="#"><img class="logo" src="images/samplelogo.png" ></a>
                <div class="name">
                    <center><h3>User Sign Up</h3></center>
                </div>
            </header>
    <div class="container">
      <span class="big-circle"></span>
      <img src="shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
         <center>
          <div class="info">
            <div class="information">
              <p><a href="https://github.com/siddhi-123">Checkout My Github Account</a></p>
            </div>
          </div>

        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="signup.php"  method= POST>
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="login.php"><b>Login</b></a></span>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="uname" id="uname" value="<?=htmlentities($id)?>" placeholder="Username" required="">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" name="fname" id="fname" value="<?=htmlentities($fn)?>" placeholder="Firstname" required="">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="lname" id="lname" value="<?=htmlentities($ln)?>" placeholder="Lastname" required="">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="email_id" id="email_id" value="<?=htmlentities($e)?>" placeholder="Email" required="">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="pwd" id="password" value="<?=htmlentities($p)?>" placeholder="Password" required="" onInput="check()">
                <i class="bx bx-lock-alt"></i>
                <i id="see" onclick="see()" class="fa fa-eye"></i>
                <i id="show" onclick="show()" class="fa fa-question-circle-o"></i>
            </div>
            <div class="pass" id="pass">
                    <div id="count">Length : 0</div>
                    <i id="check0" class="fa fa-check-circle"></i><span>Length more than 5.</span><br>
                    <i id="check1" class="fa fa-check-circle"></i><span>Length not more than 10.</span><br>
                    <i id="check2" class="fa fa-check-circle"></i><span>Contains numerical character.</span><br>
                    <i id="check3" class="fa fa-check-circle"></i><span>Contains special character.</span>
                </div>
            <div class="input-box">
                <input type="password" class="input-field" name="cpwd" id="password2" value="<?=htmlentities($cp)?>" placeholder="Confirm Password" required="">
                <i class="bx bx-lock-alt"></i>
                <i id="see2" onclick="see2()" class="fa fa-eye"></i>
            </div>
            <div class="input-box">
            <input type="submit" class="submit">
            </div>
            <p id = "output"> </p>
        </div>
    </div> 
</form>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>