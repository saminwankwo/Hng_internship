<!DOCTYPE html>
<html>
	<head>
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>What's the Time</title>
	</head>
<body>
	<div class = "wrapper">
	<div class ="sidebutton">
	<hi class = "logo">Time</hi>
     		<a href=""><button class = "btn1">Contact Us</button></a>
     		<a href=""><button class ="btn1">Login</button></a>
     		<a href=""><button class ="btn1">Sign Up</button></a>
     		
  		</div>

  	<div class="change">
  		     <?php
     		Echo "Welcome ";
            echo "<div class='d'> <p>";
     		
     		echo "<p> The time is: " .date("h:i:s a"). "<br>";
            echo "Today's date is: " .date("Y-m-d") . "<br> <p>";

            echo "</div>";


    		?>

  	</div>
<footer><p>Time,  Copyright &copy; 2018
            </p></footer>
</body>
</html>







<!-- <html> 
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tell the Time</title>
    
	<link rel="stylesheet" type="text/css" href="style.css">
	
    </head>
    <body>


    <div class="wrapper">
    	
    		<div class ="sidebutton">
    			<hi class = "logo"> Say Time</hi>
    		     		<a href=""><button class = "side1">Contact Us</button>
    		     		<a href=""><button class ="side1">Login</button></a>
    		     		<a href=""><button class ="side1">Sign Up</button></a>
    		     		
    		  </div>
    	</div>

     	<div class="date_time">
     		// <?php
     		// Echo "Welcome ";
       //      echo "<div class='d'> <p>";
     		
     		// echo "<p> The time is: " .date("h:i:s a");
       //      echo "Todoy's date is: " .date("Y-m-d") . "<br> <p>";

       //      echo "</div>";


    		?>

     	</div>
    
        <footer>
            <p>Say Time,  Copyright &copy; 2018
            </p>
        </footer>
    </div> 
    
    </body>
</html>-->
