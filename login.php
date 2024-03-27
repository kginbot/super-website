<?php
 /* $servername= localhost;
  $username= username;
  $password=password;
  $conn= new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
      die("conection faild:".$conn->connect_error);
  }
  $sql="INSERT INTO login(username,password) value('kasahun','12345')";
  if($conn->query($sql)===true){
      echo "new recourd create successfuliy";
     }
 else {
         echo "erorr".$sql."<br>".$conn->erorr;    
}
 $conn->close();*/



     ?>
<!DOCTYPE   html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
         <link rel="stylesheet" type="text/css" href="css.css">
       <link rel="icon" type="image/x-icon" href="photo/kasa.jpg">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        
    </head>
    <body class="login-page">
        <img src="photo/kasa.jpg" width="70" height="60" alt="kassa" style="margin-left:60px; border-radius:50px">
        <div class="login">
            <div class="formlog">
                <form action="login.php" method="POST">
                <input type="text" 
                        placeholder="username">
                <input type="password" 
                        placeholder="password">
                <button >login</button>
                <p>not registered--->  <a href="rigster.php"><b>Register</b></a></p>
            </form>
          </div>     
        </div>
        <!---https://www.youtube.com/watch?v=t1rAvY5fV_w--->
    </body>
</html>

