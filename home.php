<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="smart.css" >
    <title>home</title>
    <script src="javascrip.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  
}
P{
  margin: 0;
    padding: 0;
    }
body{
    background: #fcfcfc;
    font-family: sans-serif;
}
footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 100vw;
    padding-top: 2px;
    color: #fff;
    border-radius: 10px;
}
.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h3{
    font-size: 2.1rem;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 3rem;
}
.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
    color: #cacdd2;
}
.socials{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 1rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;
    border-radius: 50%;

}
.socials a i{
    font-size: 1.1rem;
    width: 20px;
    transition: color .4s ease;

}

.socials a:hover i{
    color: aqua;
}

.footer-bottom{
    background: #000;
    width: 100vw;
    padding: 20px;

    text-align: center;
}
.footer-bottom p{
    text-align: center;
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
}
.footer-bottom p a{
  color:#44bae8;
  font-size: 16px;
  text-decoration: none;
}
.footer-bottom span{
    text-transform: uppercase;
    opacity: .4;
    font-weight: 200;
}
.footer-menu{
  margin-bottom: 20px;
}
.footer-menu ul{
  display: flex;
}
.footer-menu ul li{
padding-right: 10px;
display: block;
}
.footer-menu ul li a{
  color: #cfd2d6;
  border: 1.3px solid white;
  padding: 6px 15px;
  border-radius: 50px;
  text-decoration: none;
}
.footer-menu ul li a:hover{
  color: #27bcda;
}

@media (max-width:500px) {
.footer-menu ul{
  display: inline;
}
.footer-menu ul li{
  margin-bottom: 20px;
}
}
.button13{
        float:right;
        }
button{
    padding: 5px;
    background-color:mediumseagreen;
    border:none;
}
button:hover{
    padding:5px;
    background-color: green;
    color:white;
}
a{
    text-decoration: none;
    color:white;
}
    </style>
</head>
<body>
<div class="nav_bar">
    <table border="0" width="100%" id="table12">
      <tr id="tr1">
        <td id="td1" colspan="10"><h2>SMART CARD</h2></td>
      </tr>
    </table>
    <div id="menu">
        <ul>
          <li id="categories0"><a href="home.html">HOME</a> </li>
                              <li id="categories1"><a href="#">SERVICE</a>
            </li>
                </li>
                       <li id="aboutus.php"><a href="#">ABOUT US</a>
            </li>
            </li>
            <li id="categories">
                <a href="#">REQUEST +</a>
                <ul>
                    
                    <li><a href="appointment.php" target="_blank">APPOINTMENT </a></li>
                    <li><a href="unregister.php" target="_blank">UNREGISTER</a></li>
                    <li id="da">
                        <a href="e_card.php" target="_blank">E-CARD</a>
                        <ul>
                            <li><a href="request.php" target="_blank"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                </ul></li>
           </li>
        </ul>
    </div>
</div>
<div class="button13">
    <button ><a href="login.php">LOG IN</a></button>
    <button><a>SIGN UP</a></button>
</div>
<div>

      <table border="0" width="100%" id="table1">
      <tr >
        <td><img id="image1" src="tap to pay.jpg"></td><td colspan="3"><h1 id="info1">MOVE WITH THE TIME!</h1><br><h3 id="info2">one card can hold almost every information.</h3></td>
      </tr>
    </table>
    <footer>
        <div class="footer-content">
            <p>Smardt card is a website where you will keep track of your things is going on.<br>for more informationr click on the bellow logo</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
            </ul>
    </footer>
</body>
</html>
