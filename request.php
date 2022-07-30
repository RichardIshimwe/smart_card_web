<?php
require 'cordinating.php';
 
$fname =$_POST['firstname'];
$sname =$_POST['lastname'];
$dept =$_POST['department'];
$gender =$_POST['gender'];
$phone =$_POST['phone'];
$email =$_POST['email'];
$reg =$_POST['reg'];
$pass =$_POST['password'];
$rpt_pass =$_POST['rpt-password'];
$sql ="INSERT INTO requesttb(firstname,lastname VALUES('$fname','$sname')";
mysqli_query($conn, $sql);
/*
if(isset($_POST['button1'])) {
  echo "$fname";
}
if(isset($_POST['button2'])) {
  echo "$sname";
}
$sql ="INSERT INTO requesttb(firstname,lastname,department,gender,phone,email,reg,password,rpt-password) 
VALUES('ishimwe','richard','engineer','m',0780417287,'ishimwerichard26@gmail.com',22,'1','10')";


if(isset($_POST['button2'])) {

  $sql ="INSERT INTO requesttb(firstname,lastname VALUES('$fname','$sname')";
mysqli_query($conn, $sql);
echo " $fname ";}

if(isset($_POST['button1'])) {
$sql ="INSERT INTO requesttb(firstname,lastname,department,gender,phone,email,reg,pass,rpt_pass) VALUES('ishimwe','richard','engineer','M','07804172','ishimwerichard26@gmail.com',234,'ri12ch34','ri12ch34')";


$sql ="INSERT INTO requesttb VALUES('$fname','$sname','$dept','$gender','$phone','$email',$reg,'$pass','$rpt_pass')";
mysqli_query($conn, $sql);

echo "saved";
}

if(isset($_POST['button2'])) {
  echo "$sname";
}

mysqli_close($conn);

//$name=$_GET["reg"];

*/
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
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
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
</style>  
</head>  
<body>  
<form method="post" action="">  
  <div class="container">  
  <center>  <h1> Student E-card Registeration Form</h1> </center>  
  <hr>  
  <label> Firstname   
<input type="text" name="firstname" placeholder= "Firstname" size="10" required />   
</label> 
<label> Lastname:     
<input type="text" name="lastname" placeholder="Lastname" size="10"required />   
</label>
<div>  
<label>   
Department :  
</label>   
  
<select>  
<option value="Course">Computer engineering</option>  
<option value="BCA">IT</option>  
<option value="BBA">IS</option>  
<option value="B.Tech">Computer scince</option>   
</select>  
</div>  
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>   
<input type="text" name="phone" placeholder="phone no." size="10" required/>    
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
 <label> registration number   
  <input type="text" name="reg" placeholder= "reg" size="10" required />   
  </label> 
  <p>Set a password!</p>
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password" required>  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="rpt-password" required>  
     <input type="submit" name="button1"
                value="Button1"/>
          
        <input type="submit" name="button2"
                value="Button2"/>
</form>  
</div>
</body>  
</html> 