<?php 

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'quizdb');

?>

<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <link rel="stylesheet" href="css\style.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <style type="text/css">
        .animateuse {
            animation: leelaanimate 2s infinite;
        }

        @keyframes leelaanimate {
            0% {
                color: red
            }

            ,
            10% {
                color: yellow
            }

            ,
            50% {
                color: blue
            }

            40% {
                color: green
            }

            ,
            50% {
                color: pink
            }

            60% {
                color: orange
            }

            ,
            80% {
                color: black
            }

            ,
            20% {
                color: brown
            }
        }
        .a{
             background-image:url("images/astro-astronomy-background-956999.jpg");
             

        }

        </style>
    </head>
    <body class="a" style="background-size:cover;background-position:center">

        <div >
            <h1 align="center"  style="font-size:400%;color:grey" class="animateuse" style="font-size:120%"> Welcome to Game World
            </h1>
            <div>
            <a href="Games_Available.php" style="float:right;color:#FFAA"><img src="images/right-arrow.png" height="300px" ><h2> Check to  see available games</h2></a>
           
            <div class="login-box" style="margin:10px;padding-top:30px">
                <h2> Login Form </h2>
                <form action="login.php" method="post">
                    <div class="textbox ">
                        <i class="fas fa-user"></i>
                        <label for="user "> Username: </label>
                        <input type="text" name="user" id="user" required>
                    </div>
                    <div class="textbox">
                        <i class="fa fa-key"></i>
                        <label for="pass "> Password: </label>
                        <input type="password" name="pass" id="pass" required>
                    </div>
                    <button type="submit" class="btn" style="  border: 2px solid #4caf50;"> Login </button>
              <p style="font-size:120%;">  <input class="form-check-input" type="checkbox" name="remember" > Remember me</p>
                    <h3>Haven't signed up yet??
                        <a href="signUp.php" style="color:hotpink;font-size:120%" >
                            <marquee direction="right" style="border:red 1px Solid;padding:10px">
                                Click me D====<i class="fa fa-cog fa-spin"></i>=========<i
                                        class="fa fa-cog fa-spin"></i>||>
                            </marquee>
                        </a></h3>
                </form>
            

           
            </div>

        </div>


    
    </body>

</html>
