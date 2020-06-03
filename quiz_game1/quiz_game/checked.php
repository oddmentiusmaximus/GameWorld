<?php
session_start();

   $con = mysqli_connect('localhost','root');
   	mysqli_select_db($con,'quizdbase');
   ?>
<!DOCTYPE html>
<html>

    <head>
        <title></title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

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
            100% {
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

        </style>

    </head>

    <body>
        <div class="container text-center">
            <br><br>
            <h1><a href="home_new.php" class="text-center text-success text-uppercase animateuse"> Game World</a></h1>
            <br><br><br><br>
            <table class="table text-center table-bordered table-hover">
                <tr>
                    <th colspan="2" class="bg-dark">
                        <h1 class="text-white"> Results </h1>
                    </th>

                </tr>
                <tr>
                    <td ><u><b>
                       <h4> Questions Attempted</h4></u></b>
                    </td>

                    <?php
         $counter = 0;
         $Resultans = 0;
         $i=1;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            
            //print_r($_POST);
            ?>

                    <td>
                        <?php
            echo "<h4><b>Out of 5 , You have attempted ".$checked_count." Questions.</b></h4>"; ?>
                    </td>


                    <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];

            
            $q1= " select * from questions ";
            $ansresults = mysqli_query($con,$q1);
            
            while($rows = mysqli_fetch_array($ansresults)) {
              // print_r($rows['ans_id']);
            	$flag = $rows['ans_id'] == $selected[$i];
            	
            			if($flag){
            				// echo "correct ans is ".$rows['ans_id']."<br>";				
            				$counter++;
            				$Resultans++;
            				// echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
            				$counter++;
            				 //echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}					
            		$i++;		
                }
            ?>
            <tr>
            <td><h4><u><b>
                Your Total score</b></u></h4>
            </td>
            <td colspan="2">
                <?php 
                $Resultans=$Resultans*10;
                if($Resultans<=10){echo "<h4><b> Your score is ". $Resultans."&nbsp<b>.Better luck next time:(</b></h4>";}
      else if($Resultans>=40){echo "<h4><b> Your score is ". $Resultans."&nbsp<b>.GENIUS Know it all XD</b></h4>";}
      else if($Resultans>10&&$Resultans<40){echo "<h4><b> Your score is ". $Resultans."&nbsp<b>.Satisfactory :)</b></h4>";}
    }
    else{
    echo "<b><h3>Please Select Atleast One Option.</h3></b>";
    }
    }  
      ?>
            	
                    <?php
                     $counter = 0;
                     $Resultans = 0;
                     $i=1;
                        if(isset($_POST['submit2'])){
                        if(!empty($_POST['quizcheck2'])) {
                    $checked_count2=count($_POST['quizcheck2']);
                    ?>   
                    <td>
                   <?php
                    echo "Out of 5, You have attempt ".$checked_count2." option."; ?>
                    </td>
                     <?php
                    
                        $selected2 = $_POST['quizcheck2'];
                        $q2= " select * from questions_2 ";
                        $ansresults2 = mysqli_query($con,$q2);

                     while($rows = mysqli_fetch_array($ansresults2)) {   
                    // print_r($rows['ans_id']);
                    $flag = $rows['ans_id'] == $selected2[$i];

                        if($flag){
                            // echo "correct ans is ".$rows['ans_id']."<br>";				
                            $counter++;
                            $Resultans++;
                            // echo "Well Done! your ". $counter ." answer is correct <br><br>";
                        }else{
                            $counter++;
                                //echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
                        }					
                    $i++;		
                     }
                    ?>
                <tr>
                    <td>
                        Your Total score
                    </td>
                    <td colspan="2">
                        <?php 
                        $Resultans=$Resultans*10;
                        if($Resultans<=10){echo " Your score is ". $Resultans.".Better luck next time:(";}
              else if($Resultans>=40){echo " Your score is ". $Resultans.".GENIUS Know it all XD";}
              else if($Resultans>10&&$Resultans<40){echo " Your score is ". $Resultans.".Satisfactory :)";}
	            }
	            else{
	            echo "<b><h3>Please Select Atleast One Option.</h3></b>";
	            }
	            } 
	          ?>

                <?php
                     $counter = 0;
                     $Resultans = 0;
                     $i=1;
                        if(isset($_POST['submit3'])){
                        if(!empty($_POST['quizcheck3'])) {
                    $checked_count3=count($_POST['quizcheck3']);
                    ?>   
                    <td>
                   <?php
                    echo "Out of 5, You have attempt ".$checked_count3." option."; ?>
                    </td>
                     <?php
                    
                        $selected3 = $_POST['quizcheck3'];
                        $q3= " select * from questions_3 ";
                        $ansresults3 = mysqli_query($con,$q3);

                     while($rows = mysqli_fetch_array($ansresults3)) {   
                    // print_r($rows['ans_id']);
                    $flag = $rows['ans_id'] == $selected3[$i];

                        if($flag){
                            // echo "correct ans is ".$rows['ans_id']."<br>";				
                            $counter++;
                            $Resultans++;
                            // echo "Well Done! your ". $counter ." answer is correct <br><br>";
                        }else{
                            $counter++;
                                //echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
                        }					
                    $i++;		
                     }
                    ?>
                <tr>
                    <td>
                        Your Total score
                    </td>
                    <td colspan="2">
                        <?php 
                        $Resultans=$Resultans*10;
                        if($Resultans<=10){echo " Your score is ". $Resultans.".Better luck next time:(";}
              else if($Resultans>=40){echo " Your score is ". $Resultans.".GENIUS Know it all XD";}
              else if($Resultans>10&&$Resultans<40){echo " Your score is ". $Resultans.".Satisfactory :)";}
	            }
	            else{
	            echo "<b><h3>Please Select Atleast One Option.</h3></b>";
	            }
	            } 
	          ?>
                    </td>
                </tr>

                <?php 

            $name = $_SESSION['username'];
            $finalresult = " insert into usersessionss(name,u_q_id, u_a_id) values ('$name','5','$Resultans') ";
            $queryresult= mysqli_query($con,$finalresult); 
             //if($queryresult){
            	//echo "successssss";
             //}
            ?>


            </table>

            <br><br>
            <button class="btn btn-danger" value="Back" onclick="history.back()">Back
            </button>
            <a href="logout.php" class="btn btn-success"> LOGOUT </a>

        </div>
    </body>

</html>














