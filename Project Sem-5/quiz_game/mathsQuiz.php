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
        <script>
            //function back(){var a=0;if(a==0){history.back(a--);--a;alert(a);}}
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/radio_button.css">
        <link rel="stylesheet" type="text/css"
            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/demo.css" />
        <script src="js/vendor/custom-radio.js"></script>
   
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

    <body style=" background: url(images/addition-black-and-white-black-and-white-374918.jpg)no-repeat;
    position: absolute;
    z-index: 0;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;" >
        <div >
            <h1 class="text-center text-white font-weight-bold text-uppercase bg-dark"> Game World </h1><br>
            <div class="container "><br>
                <div class="container">

                    <div class=" col-lg-12 text-center">
                    <h3> <a href="home_new.php" class="text-uppercase text-warning "> <p class="bg-primary col-lg-8 card m-auto  "> <?php echo $_SESSION['username']; ?>,</a>
                           Welcome to Mathematics Quiz </h3></p>
                    </div>
                    <div class="col-lg-8 d-block m-auto bg-success quizsetting card ">
                        <div class="card ">
                            <p class="card-header text-center"> <?php echo  $_SESSION['username'];  ?>,select
                                only 1 out of 4.Dont forget to check all boxes Best of Luck <i class="fa fa-child"></i> </p>
                        </div>
                        <br>
                        <form action="checked.php" method="post">
                            <?php
                     for($i=1;$i<6;$i++){
                   
                  
                     $ans_id = $i;

                     $sql1 = "SELECT * FROM `questions_2` WHERE `qid` = $i ";
                     	$result1 = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($result1) > 0) {
                     						while($row1 = mysqli_fetch_assoc($result1)) {
                     	?>
                            <br>
                            <div class="card bg-dark">
                                <br>
                                <h4><p class="large-10 large-centered large-12 columns  text-success"> <?php echo $i ." : ". $row1['question']; ?> </p></h4>

                                <?php
                        $sql = "SELECT * FROM `answers_2` WHERE `ans_id` = $i ";
                        	$result = mysqli_query($con, $sql);
                           if (mysqli_num_rows($result) > 0) {
                        						while($row = mysqli_fetch_assoc($result)) {
                        	?>

                                <div class="btn1 btn-primary d-block m-auto text-white">
                                    <input type="radio" class="styled " name="quizcheck2[<?php echo $row['ans_id'];?>];"
                                        value="<?php echo $row['aid']; ?>">
                                    <?php echo $row['answer']; ?>
                                    <br>
                                </div>
                                <?php
                        
                        } }
                        
                        } }}
                        
                     ?>
                            </div><br>
                            <input type="submit" name="submit2" Value="Submit" class="btn btn-success m-auto d-block bg-dark" />
                            <br>
                        </form>
                        <a href=" <?php echo $_SERVER['HTTP_REFERER'] ;?>" class="btn btn-danger d-block m-auto text-black bg-dark"> Back </a> <br>
           
                        <p id="letc"></p>
                    </div>
                    <a href="logout.php" class="btn btn-primary d-block m-auto text-black bg-dark"> Logout </a> <br>
                </div>
                <br>

            </div>


            <?php

      $startlimit  = 0;
      $q =" select * from questions_2";
      $query = mysqli_query($con,$q);
      $lastpage = mysqli_num_rows($query);

      $totalpage = ceil($lastpage / 2);
      ?>
            <div class="m-auto"><br>
                <ul class="pagination">
                    <?php
      for($i=1; $i<=$totalpage; $i++){
         ?>

                    <li class="float-left list-unstyled page-item"> <a href="mathsQuiz.php?page=<?php echo $i; ?>"
                            class="page-link"> <?php  echo $i;  ?> </a> </li>

                    <?php  
           }
        ?>
                </ul>
            </div>



    </body>

</html>
