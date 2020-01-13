    <?php
    session_start();
    
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
    
    
    $con = mysqli_connect('localhost','root');
    
        mysqli_select_db($con,'quizdbase');
    
    ?>
    <!DOCTYPE html>
    <html>

        <head>
            <title></title>
            <link rel="stylesheet" type="text/css" href="css/image.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css"
                href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <style type="text/css">
            .animateuse {
                animation: leelaanimate 0.5s infinite;
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
                20% {
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
                100% {
                    color: brown
                }
            }

            </style>
        </head>

        <body background="images/rLBZns.jpg" style="background-size:cover;
background-position:center;no-repeat;">
            <div>
                <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark  "> Welcome to Game World </h1>
                <br>

                <div class="container">

                    <div class=" col-lg-12 text-center">
                        <h3> <a href="#" class="text-uppercase text-warning"> <?php echo $_SESSION['username']; ?>,</a>
                            Please select a quiz you like</h3>
                    </div>
                    <br>
                    <div class="container "> 
                         <table  class=" d-lg-table col-lg-12 font-weight-bold gallery col-xs-12 col-sm-6 col-md-6  " align="center"> 
                            <tr align="center">
                                <td><p class="col-lg-9 col-sm-6 col-md-6"><a href="csQuiz.php"><img src="images/code-coding-conceptual-276452.jpg" alt="" ><br>
                                        <center>Computer Science Quiz<center>
                                    </a></p></td> <td><p class="col-lg-9 col-sm-6 col-md-6"><a href="tetris_demo.php"><img src="images/tetris_image.jpg" alt=""   ><center>Tetris Mania</center>
                                </a></p> 
                                </a></p></td></tr> 
                                
                                <tr align="center"><!--<td><p class="col-lg-9 col-sm-6 col-md-6"><a href="doggoQuiz.php"><img src="images/jamie-street-MoDcnVRN5JU-unsplash.jpg" alt="" ><center>Dog Quiz</center>-->
                                </a></p></td><td><p class="col-lg-9 col-sm-6 col-md-6"><a href="snake.php"><img src="images/snake.jpg" alt=""   ><center>Snake Infinity</center>
                                </a></p> 
                             </td><td><p class="col-lg-9 col-sm-6 col-md-6"><a href="mathsQuiz.php"><img src="images/addition-black-and-white-black-and-white-374918.jpg" alt="" height="240px"  ><center>Maths Quiz</center>
                                </a></p></td>
                                </tr>       
                                  
                          </table> 
                              
                        <br><br>                
                    </div>
      
                    
                
                <a href="logout.php" class="btn btn-primary d-block m-auto text-black  navbar navbar-fixed-bottom" style="margin:40px;"> Logout </a> <br >
                   
        </body>

    </html>
