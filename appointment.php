<?php

$str="hello string";  
$x=200;  
$y=44.6;  
print "string is: $str $y<br/>";  
echo "integer is: $x <br/>";  
echo "float is: $y <br/>";  
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
<form>  
  <div class="container">  
<center>  <h1> Appointment</h1>   </center>
  <hr>  
  <label> Firstname   
<input type="text" name="firstname" placeholder= "Firstname" size="10" required />   
</label> 
<label> Lastname:     
<input type="text" name="lastname" placeholder="Lastname" size="10"required />   
</label>
<label> registration number   
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
    <textarea name="" id="" cols="30" rows="10">reason</textarea>
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
<input type="button" name="store" value="register" >
<input type="button" name="unstore" value="unregister" >
</form>  
</div>
</body>  
</html> 