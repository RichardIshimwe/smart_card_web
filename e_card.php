<?php
  require 'cordinating.php';

if(isset($_POST["button2"])) {
echo "button2 ppressed";

$reg =$_REQUEST["reg"];
$first =$_REQUEST["firstname"];
$second =$_REQUEST["lastname"];
$dept =$_POST["department"];
$phone =$_REQUEST["phone"];
$gender =$_POST["gender"];
$email =$_REQUEST["email"];
$password =$_REQUEST["password"];
$sql ="INSERT INTO requesttb1(reg,first_name,second_name,department,phone,email,password) VALUES('$reg','$first','$second','$dept','$phone','$email','$password')";
mysqli_query($conn, $sql);
mysqli_close($conn);
  }
if(isset($_POST["button1"])) {
  echo "button1 ppressed";
  }
?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style> 

#buto

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
  <center>  <h1> Student E-card Registeration Form</h1> </center>  
  <hr>  
  <br/>  <label> Firstname  <br/> 
<input type="text" name="firstname" placeholder= "Firstname" size="10" required />   
 </label>
 <br/> <label> Lastname:  <br/>    
<input type="text" name="lastname" placeholder="Lastname" size="10"required />   
</label>
<br/> <label>department:   <br/>   
<input type="text" name="department" placeholder="department" size="10"required />
</label>
<br/> <label>gender:    <br/>  
<input type="text" name="gender" placeholder="M/F" size="10"required />
</label>
<br/> <label>   
Phone :<br/> 
</label>   
<input type="text" name="phone" placeholder="phone no." size="10" required/>    
 <label for="email"><br/> <b>Email</b><br/>  
 <input type="text" placeholder="Enter Email" name="email" required> </label>  
 <br/> <label> username <br/>   
  <input type="text" name="reg" placeholder= "user name" size="10" required />   
  </label> 
  <br/> <label for="psw"><b>Password</b></label> <br/>  
    <input type="password" placeholder="Enter Password" name="password" required>         
    <br/><br/><input type="submit" name="button2"
                value="SUBMIT" id="button"/><br/> 
</form>  
</div>
</body>  
</html> 