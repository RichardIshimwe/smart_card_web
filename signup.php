<?php
  require 'cordinating.php';
/*$sql ="INSERT INTO unregister(first_name,last_name,email,reg,password) VALUES('tsr','gsd','gfhg',23,'eef')";

  mysqli_query($conn, $sql);
  mysqli_close($conn);*/


 




if(isset($_POST["button1"])) {
echo "SUBMITED";
$names = $_REQUEST["full"];
$user =$_REQUEST["user"];
$gender =$_REQUEST["gender"];
$reg = $_REQUEST["depart"];
$email =$_REQUEST["email"];
$password =$_REQUEST["phone"];
$phone = $_REQUEST["campus"];
$passcode = $_REQUEST["password"];
 $sql ="INSERT INTO usertb(reg,full_names,password,email,pass,department,gender,phone) VALUES('$user','$names','$password','$email','$passcode','$reg','$gender','$phone')";
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
  <center>  <h1> SIGNUP FORM</h1> </center>  
  <hr>  
  <label> user name <br/>   
  <input type="text" name="user" placeholder= "" size="10" required />   
  </label> 
  <br/> <label> full names <br/>   
  <input type="text" name="full" placeholder= "" size="10" required />   
  </label> 
  <br/> <label> phone number <br/>   
  <input type="text" name="phone" placeholder= "" size="10" required />   
  </label> 
  <br/><label for="email"><br/> <b>Email</b><br/>  
 <input type="text" placeholder="Enter Email" name="email" required> </label>  
  <br/> <label for="psw"><b>Password</b></label> <br/>  
    <input type="password" placeholder="Enter Password" name="password" required>   
    <br/><label> department <br/>   
  <input type="text" name="depart" placeholder= "DEPARTMENT" size="10" required />   
  </label> 
  <br/><label> Gender <br/>   
  <input type="text" name="gender" placeholder= "M/F" size="10" required />   
  </label> 
  <br/><label> campus name <br/>   
  <input type="text" name="campus" placeholder= "campus name" size="10" required />   
  </label> 
  <br/> <input type="submit" name="button1"
                value="SUBMIT" id="button"/><br/> 
</form>  
</div>
</body>  
</html> 