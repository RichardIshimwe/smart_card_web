<?php
  require 'cordinating.php';
/*$sql ="INSERT INTO unregister(first_name,last_name,email,reg,password) VALUES('tsr','gsd','gfhg',23,'eef')";

  mysqli_query($conn, $sql);
  mysqli_close($conn);*/
if(isset($_POST["button2"])) {
echo "button2 ppressed";
$first =$_REQUEST["firstname"];
$second =$_REQUEST["lastname"];
$reg = $_REQUEST["reg"];
$message =$_REQUEST["message"];
$phone = $_REQUEST["phone"];
$email = $_REQUEST["email"];
$password =$_REQUEST["password"];
 $sql ="INSERT INTO apointmenttb(first_name,lastname,username,mesage,phone,email,pass) VALUES('$first','$second','$reg','$message','$phone','$email','$password')";
mysqli_query($conn, $sql);
mysqli_close($conn);

}
 
?>
<!DOCTYPE html>  
<html>  
<head>  
  <title>apointment</title>
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
  border-radius: 20px;
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
<center>  <h1> Appointment</h1>   </center>
  <hr>  
  <label> Firstname   
<input type="text" name="firstname" placeholder= "Firstname" size="10" required />   
</label> 
<label> Lastname:     
<input type="text" name="lastname" placeholder="Lastname" size="10"required />   
</label>
<label> User mame   
    <input type="text" name="reg" placeholder= "reg" size="10" required />   
    </label> 
<div>  
<label>   
Appointment with :  
</label>   
  
<select>  
<option value="Course">lecture
</option>  
<option value="BCA">guild concil staff</option>  
<option value="BBA">head of departement</option>  
<option value="B.Tech">Cordinator</option>   
</select>  
</div>  
<div>
    <textarea name="message" id="" cols="30" rows="10">reason</textarea>
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
<label for="psw"><b>Password</b></label> <br/>  
    <input type="password" placeholder="Enter Password" name="password" required>  
    <br/><br/><input type="submit" name="button2"
                value="SUBMIT" id="button"/><br/> 
</form>  
</div>
</body>  
</html> 