<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Snake Game</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/snake.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/overlay.css">
        <script>
         function on() {
        document.getElementById("overlay").style.display = "block";
    }

    function off() {
        document.getElementById("overlay").style.display = "none";
    }
    </script>
</head>
<body  bgcolor="black">
<h1 class="text-center text-white font-weight-bold text-uppercase bg-dark"> Game World </h1><br>
<div class="container" >
           
            <div class="card card-header text-warning bg-dark"><center><a href="home_new.php" style="text-decoration: none; " class="text-warning"><h1>Snake Infinity </h1></a></div>
</center>
<canvas id="snake" height="570" width="570"></canvas>

<h4><div id="score" class="container card">Score: 0</div></h4>
<h4 style="float:left;">Enjoy a game of infinty loop from the classic snake game there are no winners there are no loser just unlimited fun</h4>
<a href="javascript:(function(){var script=document.createElement('script');script.onload=function(){var stats=new Stats();document.body.appendChild(stats.dom);requestAnimationFrame(function loop(){stats.update();requestAnimationFrame(loop)});};script.src='//mrdoob.github.io/stats.js/build/stats.min.js';document.head.appendChild(script);})();" ><button type="">Stats for nerds</button></a>
<script src="js/snake.js"></script>
                    <a href=" <?php echo $_SERVER['HTTP_REFERER'] ;?>" class="btn btn-danger d-block m-auto text-black bg-dark"> Back </a> 
<a href="logout.php" class="btn btn-primary d-block m-auto text-black bg-dark"> Logout </a> <br>
<div id="overlay" onclick="off()">
  <div id="text">Press Enter to Play.</div>
</div>
</div>
</body>
</html>