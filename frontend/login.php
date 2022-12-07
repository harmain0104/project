<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
html, body{
  display: grid;
  height: 100vh;
  width: 100%;
  place-items: center;
  background: linear-gradient(to right, #bd7a22 0%, #dda338 100%);
}
::selection{
  background: #c28f3e;

}
.container{
  background: #fff;
  max-width: 350px;
  width: 100%;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
}
.container form .title{
  font-size: 30px;
  font-weight: 600;
  margin: 20px 0 10px 0;
  position: relative;
}
.container form .title:before{
  content: '';
  position: absolute;
  height: 4px;
  width: 33px;
  left: 0px;
  bottom: 3px;
  border-radius: 5px;
  background: linear-gradient(to right, #d4d259 0%, #b6d5da 100%);
}
.container form .input-box{
  width: 100%;
  height: 45px;
  margin-top: 25px;
  position: relative;
}
.container form .input-box input{
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 16px;
  border: none;
}
.container form .underline::before{
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  background: #ccc;
  left: 0;
  bottom: 0;
}
.container form .underline::after{
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  background: linear-gradient(to right, #c6c774 0%, #918f20 100%);
  left: 0;
  bottom: 0;
  transform: scaleX(0);
  transform-origin: left;
  transition: all 0.3s ease;
}
.container form .input-box input:focus ~ .underline::after,
.container form .input-box input:valid ~ .underline::after{
  transform: scaleX(1);
  transform-origin: left;
}
.container form .button{
  margin: 40px 0 20px 0;
}
.container .input-box input[type="submit"]{
  background: linear-gradient(to right, #db9410 0%, #f1c26a 100%);
  font-size: 17px;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.container .input-box input[type="submit"]:hover{
  letter-spacing: 1px;
  background: linear-gradient(to left, #c7be45 0%, #dbc12d 100%);
}
.container .option{
  font-size: 14px;
  text-align: center;
}
.container .facebook a,
.container .twitter a{
  display: block;
  height: 45px;
  width: 100%;
  font-size: 15px;
  text-decoration: none;
  padding-left: 20px;
  line-height: 45px;
  color: #fff;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.container .facebook i,
.container .twitter i{
  padding-right: 12px;
  font-size: 20px;
}
.container .twitter a{
  background: linear-gradient(to right,  #9e4d0b 0%, #8a641e 100%);
  margin: 20px 0 15px 0;
}
.container .twitter a:hover{
  background: linear-gradient(to left,  #e7f14e 0%, #c0bc9c 100%);
  margin: 20px 0 15px 0;
}
.container .facebook a{
  background: linear-gradient( to right,  #af6325 0%, #d6882f 100%);
  margin: 20px 0 50px 0;
}
.container .facebook a:hover{
  background: linear-gradient( to left,  #f0c243 0%, #ff6600 100%);
  margin: 20px 0 50px 0;
}

    </style>
</head>

<body>
         

    <div class="container">
      <form action="" method="POST">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" name="username" placeholder="Enter username" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password"  name="password" placeholder="Enter password" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="" value="login">
        </div>
      </form>
        <div class="option">or Connect With Social Media</div>
        <div class="twitter">
          <a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
        </div>
        <div class="facebook">
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
        </div>

        <?php 
                   include "config.php";
            


                   if(isset($_POST["login"]))
                    {
                        
                        $username = $_POST["username"];
                        $password = $_POST["password"];


                        $query = "SELECT `username`, `email` , `role` FROM `users` WHERE `username` = '{$username}' or 'email'='{$username}' AND `password` = '{$password}'"; 

                        $result = mysqli_query($conn, $query);


                        if(mysqli_num_rows($result)>0)
                        {

                            while($row = mysqli_fetch_assoc($result))
                            {

                                session_start();

                                $_SESSION["username"] = $row["username"];
                                $_SESSION["email"] = $row["email"];
                                $_SESSION["role"] = $row["role"];
                                header("location:signup.php");

                            }
                        }
                        else
                        {
                            echo "username and password incorrect";

                        }
                    }
                    ?>

        <script>
            function formValidate() {
                var user = document.getElementById("uname").value;
                var email = document.getElementById("emai").value;
                var pwd = document.getElementById("pwd1").value;
                var cnfrmpwd = document.getElementById("pwd2").value;
    
                if (user == "") {
                    document.getElementById("s1").innerHTML = "Enter atleast One character"
                    return false;
                }
                if (!isNaN(user)) {
                    document.getElementById("s1").innerHTML = "Number not allowed in names"
                    return false;
                }
                if (user.length <= 2) {
                    document.getElementById("s1").innerHTML = "Name should not be less tha two characters"
                    return false;
    
                }
                if (email.indexOf("@") <= 0) {
                    document.getElementById("s2").innerHTML = "please Enter correct Format"
                }
                if (pwd == "") {
                    document.getElementById("s3").innerHTML = "Enter Password"
                    return false;
    
                }
                if (pwd.length < 8) {
                    document.getElementById("s3").innerHTML = "Password should not less tha eight characters"
                    return false;
    
                }
    
                if (cnfrmpwd.length < 8) {
                    document.getElementById("s4").innerHTML = "Pssword do not match"
                    return false;
    
                }
                if (cnfrmpwd != pwd) {
                    document.getElementById("s4").innerHTML = "Pssword do not match"
                    return false;
    
                }
    
            }
    
    
        </script>
       
    



</body>

</html>