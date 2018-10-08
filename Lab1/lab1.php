<!DOCTYPE html>
<?php
     session_start();
       if (!(isset($_SESSION['arr']))) {
    $_SESSION['arr'] = array();
    }
    
?>

<html>

    <head>
        <meta charset="utf-8">
	
        <title>Lab_1</title>
        <link rel="shortcut icon" href="images/duck.ico">
        <link rel="stylesheet" type="text/css" href="styles/main.css">        

        <script type="text/javascript">
            var timeout;

            function createForm(_form){
                var X = _form.X.value;
                var Y = _form.Y.value;
                var R = _form.R.value;
                makeFrame('result_frame');
                createCanvas('canvas', X, Y, R);
            }

            function makeFrame(id){
                var iframe = document.getElementById(id);
                iframe.style.display="block";
                frameFitting(id);
                for (var i=0; i<iframe.length; i++) {
                    iframe[i].onclick = function() {
                        clearInterval(timeout);
                        timeout = setInterval("frameFitting(id)",100);
                    }
                }
            }

            function frameFitting(id) {
                document.getElementById(id).width = '100%';
                document.getElementById(id).height = document.getElementById(id).contentWindow.document.body.scrollHeight+65+'px';
            }
           
        </script>

    </head>

    <body  onload="createCanvas('canvas', 0, 0, 2)">
        <center>
             <table class="main_table" >
		        <tr>
			        <div class="lab">
 				        <a href="https://se.ifmo.ru/documents"> <img name="vt_image" src="images/vt_logo.png"> </a> 
				        <span>Л</span>
                        <span>а</span>
                        <span>б</span>
                        <span>о</span>
                        <span>р</span>
                        <span>а</span>
                        <span>т</span>
                        <span>о</span>
                        <span>р</span>
                        <span>н</span>
                        <span>а</span>
                        <span>я</span>
                        <span>&nbsp</span>
                        <span>р</span>
                        <span>а</span>
                        <span>б</span>
                        <span>о</span>
                        <span>т</span>
                        <span>а</span>
                        <span>&nbsp</span>
                        <span>№</span>
                        <span>&nbsp</span>
                        <span>1</span>
  			        </div>
		        </tr>
		        <br>
		        <tr>
                    <div class="header">
                    	<span class="left">Группа P3212 </span>
                    	<span class="center"><a href="https://isu.ifmo.ru/pls/apex/f?p=2143:3:102153591906187::NO:RP:PID:242361">Редькина Ирина</a> </span>
                    	<span class="right">Вариант 28209 </span>
                	</div>
 		        </tr>
                 <br>
               
             
                 <tr>
                    <td > 
                        <form name = "test_form" class="form" action="checkPoints.php" method="get"
                         target="result_frame" >
                   
                            <p>
                                <label id="choose"> Выбор значений:</label>
                            </p>

                            <p>  
                                 <label for="X" class="select_point"> X = 
                                    <select name="X" id="X_select"  class="X_element field">
                                       <option disabled selected >Выберите значение</option> 
                                        <option name="X_select" value="-5">-5</option>
                                        <option name="X_select" value="-4">-4</option>
                                        <option name="X_select" value="-3">-3</option>
                                        <option name="X_select" value="-2">-2</option>
                                        <option name="X_select" value="-1">-1</option>
                                        <option name="X_select" value="0">0</option>
                                        <option name="X_select" value="1">1</option>   
                                        <option name="X_select" value="2">2</option>
                                        <option name="X_select" value="3">3</option>
                                    </select>
                                </label>
                            </p>

                            <p> 
                                <label for="Y" class="select_point"> Y = </label>
                                <input class="input_Y field" id="Y" type="text" maxlength="8" name="Y" placeholder="(-3 .. 5)"><br>
                            </p> 
                            <p> 
                                <table class="radio_btn">        				
        		                    <tr>
                    	                <td class="select_point"> R = </td>
        			                    <td><input type="radio" id="1" name="R" value="1" checked>1</td>
        			                    <td><input type="radio" id="2" name="R" value="2">2 </td>
        			                    <td><input type="radio" id="3" name="R" value="3">3</td>
				                        <td><input type="radio" id="4" name="R" value="4">4</td>
				                        <td><input type="radio" id="5" name="R" value="5">5</td>
        	    	                </tr>	
                                </table>
                            </p> 
                            <p align="center">
                                 <input class="submit" type="submit" name="submit" value=" ПРОВЕРИТЬ "> <br>
                            </p>
                         </form>
                         <script src = "validate.js">
                         
                        </script> 
                     </td> 
        
                    <td> 
                        <canvas id="canvas" style="background-color:#ffffff; border-radius: 20px;" width="300" height="300"></canvas>

                        <script type="text/javascript">
                            function createCanvas(id, x, y, r){
                                var canvas = document.getElementById(id),
                                context = canvas.getContext("2d");
                     
                                //очистка
                                context.clearRect(0, 0, canvas.width, canvas.height);

                                //треугольник
                                context.beginPath();
                                context.moveTo(85, 150);
                                context.lineTo(150, 150);
                                context.lineTo(150, 20);
                                context.lineTo(85, 150);
                                context.closePath();
                                context.strokeStyle = "blue";
                                context.fillStyle = "blue";
                                context.fill();
                                context.stroke();

                                //прямоугольник
                                context.beginPath();
                                context.rect(20, 150, 130, 130);
                                context.closePath();
                                context.strokeStyle = "blue";
                                context.fillStyle = "blue";
                                context.fill();
                                context.stroke();
  
                                //сектор
                                context.beginPath();
                                context.moveTo(150, 150);
                                context.arc(150, 150, 130, 0, Math.PI/2, false);
                                context.closePath();
                                context.strokeStyle = "blue";
                                context.fillStyle = "blue";
                                context.fill();
                                context.stroke();

                                //отрисовка осей
                                context.beginPath();
                                context.font = "12px Verdana";
                                context.moveTo(150, 0); context.lineTo(150, 300);
                                context.moveTo(150, 0); context.lineTo(145, 12);
                                context.moveTo(150, 0); context.lineTo(155, 12);
                                context.closePath();
                                context.strokeStyle = "black";
                                context.fillStyle = "black";
                                context.stroke();

                                context.beginPath();
                                context.fillText("Y", 160, 10);
                                context.moveTo(0, 150); context.lineTo(300, 150);
                                context.moveTo(300, 150); context.lineTo(288, 145);
                                context.moveTo(300, 150); context.lineTo(288, 155);
                                context.fillText("X", 290, 135);
                                context.closePath();
                                context.strokeStyle = "black";
                                context.fillStyle = "black";
                                context.stroke();

                                //деления X
                                context.beginPath();
                                context.moveTo(145, 20); context.lineTo(155, 20); context.fillText(r, 160, 25);
                                context.moveTo(145, 85); context.lineTo(155, 85); context.fillText((r / 2), 160, 90);
                                context.moveTo(145, 215); context.lineTo(155, 215); context.fillText(-(r / 2), 160, 220);
                                context.moveTo(145, 280); context.lineTo(155, 280); context.fillText(-r, 160, 285);

                                //деления Y
                                context.moveTo(20, 145); context.lineTo(20, 155); context.fillText(-r, 12, 140); 
                                context.moveTo(85, 145); context.lineTo(85, 155); context.fillText(-(r / 2), 70, 140);
                                context.moveTo(215, 145); context.lineTo(215, 155); context.fillText((r / 2), 205, 140);
                                context.moveTo(280, 145); context.lineTo(280, 155); context.fillText(r, 275, 140);

                                context.closePath();
                                context.strokeStyle = "black";
                                context.fillStyle = "black";
                                context.stroke();


                                //отмечаем точку
                                context.beginPath();
                                context.rect(Math.round(150 + ((x / r) * 130))-2, Math.round(150 - ((y / r) * 130))-2, 4, 4);
                                context.closePath();
                                if (((x <= 0) && (y <= 0) && (y >= -r)  && (x >= -r)) ||
                                     ((x >= 0) && (y <= 0) && ((x * x + x * x) <= (r * r))) ||
                                     ((x <= 0) && (y >= 0) && (y <= (r / 2) * x + r))) {
                                        context.strokeStyle = "white";
                                        context.fillStyle = "white";
                                    } else {
                                        context.strokeStyle = "red";
                                        context.fillStyle = "red";
                                    }
                                context.fill();
                                context.stroke();

                            }
                        </script>
                     </td> 
                </tr>
            

     
                <caption align="bottom" >
                    <iframe name="result_frame" height="150" width="700" id="result_frame"
                         allowtransparency frameborder="no" scrolling="no" seamless style="display:none" onload="frameFitting('result_frame')"></iframe>
                </caption >
            </table>

         </center>
     </body>
</html>