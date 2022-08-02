<?php
  require 'cordinating.php';
/*$sql ="INSERT INTO unregister(first_name,last_name,email,reg,password) VALUES('tsr','gsd','gfhg',23,'eef')";

  mysqli_query($conn, $sql);
  mysqli_close($conn);*/
if(isset($_POST["button2"])) {
echo "button2 ppressed";
$email =$_REQUEST["email"];
$password =$_REQUEST["password"];
$reg = $_REQUEST["reg"];


 $sql ="INSERT INTO login_form(reg,email,pass) VALUES('$reg','$email','$password')";
mysqli_query($conn, $sql);
mysqli_close($conn);

}
 
?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style> 
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: rgb(56, 136, 56) ;
  font-size: 20px;
  font-weight: bolder;
}  
.container {  
padding: 50px;
background-color: darkgreen;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 40%;  
  padding: 15px;  
  margin: 5px 0 5px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1; 
  border-radius:5px; 
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1; 
  background-color: greenyellow; 
}  
a{
  text-decoration: none;
  color:white;
  font-size:20px;
}
</style>  
</head>  
<body>  
<form method="post" action="">  
  <div class="container">  
  <font><a href="home.php"><<<< home </a></font>
  <center>  <h1> LOGIN FORM</h1> </center>  
  <hr>  
   <label> user name <br/>   
  <input type="text" name="reg" placeholder= "reg" size="10" required />   
  </label> 
 <label for="email"><br/> <b>Email</b><br/>  
 <input type="text" placeholder="Enter Email" name="email" required> </label>  
  <br/> <label for="psw"><b>Password</b></label> <br/>  
    <input type="password" placeholder="Enter Password" name="password" required>         
    <br/><br/><input type="submit" name="button2"
                value="log in" id="button"/>
      <input type="submit" name="button1"
                value="Sign up" id="button"/><br/> 
</form>  
</div>
</body>  
</html> 