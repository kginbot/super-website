<?php
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>rigster</title>
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
       </style>
</head>
<body id="rigster">
<div id="bar">
	<li id="bli"><a class="active" href="HOME.php"><strong>home</strong></a></li>
    <li id="bli"><a href="about.php"><strong>about</strong></a></li>
    <li id="bli"><a href="rigster.php"><strong>Register</strong></a></li>
    <li id="bli"><a href="intertiement.php"><strong>intertiemnt</strong></a></li>
    
     <img src="photo/kasa.jpg" width="30" height="20" alt="kassa"style="margin-left:830px; border-radius: 50px;margin-top: 15px">
    <!--<a href="about.php" target="_blank">about!</a>-->
    <!---<button onclick="document.location='about.php'">about</button>--->
</div>
<img src="photo/kasa.jpg" alt="kasahun ayele" width="100" height="100" style="margin-left:580px; border-radius: 50px; margin-top: 10px;">
<div id="rwllcome">
    <p style="font-style: oblique;"><b>hello wellcome to hahu webpage</b></p>
    <p style="font-style: oblique;"><b>please rigster to page below</b></p>
</div>
<div style="text-align:center;">
    <div class="rform">
        <div class="rsform" >
    <form action="/action_page.php" target="_blank" method="post" novalidate>
				<label for="fname">first name</label>
				<input type="text" name="fname" id="fname"><br><br>
				<label for="lname">last name</label>
				<input type="text" id="lname" name="lname"><br><br>
				<label for="phone"> phone </label>
				<input type="phone" id="phone" name="phone"><br><br>
				<label for="email"> email</label>
				<input type="email" id="email" name="email"><br><br>
				 <input type="submit" onclick="alert('hello kasahun')" name="submit" value="submit">
	                         <input type="Reset" onclick="alert('are you sure')" name="Reset">
                        			</form>
                                                </div>
                                                  </div>
		                                </div><br>
                
		
        
        <div style="text-align:center;">
	<form>
	<label for="sex">sex:</label>
	<input type="radio" id="sex" value="male">
	<label>male</label>
	<input type="radio" id="sex" value="fmale">
	<label>fmale</label><br><br>

							<label for="cont">chiose contry.</label>
							<select id="cont" size="3">
							<option id="cont">ethiopia</option>
							<option id="cont">russia</option>
							<option id="cont">china</option>
							<option id="cont">armenia</option>
							</select><br>
							<p>comment her.</p>
							<textarea id="coment" rows="10" cols="20"></textarea><br><br>
							<label id="myfile">select you file</label>
							<input type="file" id="myfile" name="myfile"><br><br>
						    <input type="submit" onclick="alert('hello kasahun')" name="submit" value="submit">
						    <button type="button" onclick="alert('are you sure')" class="btn btn-danger">reset</button>


</form>








</div>
<p style="margin-top: 200px; padding-top: 20px; text-align: center; margin-bottom: 0px; color: whitesmoke;height:30px">2023 &copy; Assosa University All Rights Reserved</p>
</body>
</html>