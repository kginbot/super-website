<?php
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>collection of video</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="icon" type="image/x-icon" href="photo/kasa.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
           li a{
      color: white;
     text-align: center;
     display: block;
     padding: 10px 12px;
   text-decoration: none;
           }
           li a:hover{
    background-color:black;
}
.active{
    background-color: gray;
}
li.dropdown {
  display: inline-block;
}
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



   </style> 
</head>
<body id="video">
    
<div id="bar">
    <li id="bli"> <a class="active" href="HOME.php"><strong>home</strong></a></li>
    <li id="bli"><a href="about.php"><strong>about</strong></a></li>
     <li id="bli"><a href="rigster.php"><strong>Register</strong></a></li>
  <li id="bli" class="dropdown"><a href="intertiement.php" class="dropdown"><strong>intertiemnt</strong></a>
        <div class="dropdown-content">
            <a href="video.php">video</a>
             <a href="audio.php">audio</a>
             <a href="book.php">book</a>
            
        </div>
    </li>  
    <img src="photo/kasa.jpg" width="50" height="40" alt="kassa"style="margin-left:680px; border-radius: 50px;margin-top: 25px">
    <!--<a href="about.php" target="_blank">about!</a>-->
    <!---<button onclick="document.location='about.php'">about</button>--->
</div>
   

		<img src="photo/kasa.jpg" alt="kasahun ayele" width="100" height="100" style="margin-left:600px; border-radius: 50px; margin-top: 10px;">
		<h1 style="color:white; text-align: center;">below you can get all new entertiement video</h1><br>
		<video width="200" height="150" controls>
			<source src="video/bestu.mp4" type="video/mp4">
				</video>
				<video width="200" height="150" controls>
				<source src="video/inst.mp4" type="video/mp4">
					</video>
					<video width="200" height="150" controls>
					<source src="video/4kilo.mp4" type="video/mp4">
					</video>
						<video width="200" height="150" controls>
					<source src="video/yenieta.mp4" type="video/mp4">
		               </video>
		              <button onclick="document.location='Desktop/congra vvv'">more video</button>





<p style="margin-top: 200px; padding-top: 20x; text-align: center; margin-bottom: 0px; color: whitesmoke;height:30px">2023 &copy; Assosa University All Rights Reserved</p>
</body>
</html>