<?php
   session_start();
    $start = microtime(true);
	
    $x = $_GET["X"];
    $y = $_GET["Y"];
    $r = $_GET["R"];
    $check;
    $currentTime = date("H:i:s", strtotime('-1 hour'));


    echo "<!DOCTYPE HTML> <html> <head> <meta charset='UTF-8'> <title>Points</title>
            <link rel='shortcut icon' href='img/favicon.ico'>
            <link rel='stylesheet' type='text/css' href='styles/main.css'>
          </head> <body style='background-image: none'> <center>";
    echo "<br><div class='container' style='padding:20px 0px;'> <br> <table class='points'>
             <caption>Результаты:</caption>
            <tr class = 'points1'>  <th scope='col' class = 'points1'>X</th> <th scope='col' class = 'points1'>Y</th> 
            <th scope='col' class = 'points1'>R</th> <th scope='col' class = 'points1'>ПОПАДАНИЕ</th> 
            <th scope='col' class = 'points1'>ВРЕМЯ</th> <th scope='col' class = 'points1'>ВРЕМЯ ВЫПОЛНЕНИЯ</th>  </tr> ";
     
    $y = str_replace(",",".",$y);
    if (is_numeric($x) && is_numeric($y) && is_numeric($r) && ($y>-3) && ($y<5) && substr($y,0) !="." && ($r>0) && ($r<6) && ($x>-6) && ($x<5)) {
    
 	$y = round($y,5);
	if (
        (($x <= 0) && ($y <= 0) && ($y >= -$r)  && ($x >= -$r)) ||
        (($x >= 0) && ($y <= 0) && (($x * $x + $y * $y) <= ($r * $r))) ||
        (($x <= 0) && ($y >= 0) && ($y <= ($r / 2) * $x + $r))
       )
          $check = "&#9989";
      else
          $check = "&#10060;";

      $time = microtime(true) - $start;
      $time = round($time,5,PHP_ROUND_HALF_UP);

      array_push ($_SESSION['arr'],"<tr> <td class = 'points1'>$x</td> <td class = 'points1'>$y</td> <td class = 'points1'>$r</td>
                    <td class = 'points1'><b>$check</b></td> <td class = 'points1'>$currentTime</td> <td class = 'points1'>$time мкс</td> </tr>");
    } 
        foreach ($_SESSION['arr'] as $item) {
          	echo $item;
        }
      echo "</table> <br> </center> </body> </html>";
?>
