<?php 

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'quizdb');

?>
<!DOCTYPE html>
<html>

    <head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body background="images/background-blur-bright-220067.jpg">
    <div>
     <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark  "><center> Welcome to Game World </center></h1>
        <div class="container"> 

            <form action="registration.php" method="post">
                <div class="login-box">
                    <h1> SignUp Form </h1>
                    <div class="textbox">
                        <i class="fas fa-user"></i>
                        <label for="user ">New Username: </label>
                        <input type="text" name="user" id="user" required>
                    </div>

                    <div class="textbox">
                        <i class="fa fa-key"></i>
                        <label for="pass ">New Password: </label>
                        <input type="password" name="pass" id="pass" required>
                    </div>
                    <button type="submit" class="btn"> SignUp </button>
                    <a href="login.php" style="color:red;" >
                        <marquee style="border:grey 1px Solid; " >
                            <h3 class="text-danger"><||====<i class="fa fa-cog fa-spin"></i>=========<i
                                        class="fa fa-cog fa-spin "></i>D Wanna go Back click me</h3>
                        </marquee>
                    </a>
            </form>
        </div>
      </div>
    </body>

</html>
