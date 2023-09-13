<?php
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width,inital-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>New_abyssinia</title>
</head>    
<body> 
   <div class="wrapper">      
<nav class="nav">
   
 <div class="nav-menu" id="navMenu">
 <ul>
    <li><a href="1.html" class="link ">Maths</a> </li>
    <li><a href="2.html" class="link">Chemistery</a> </li>
    <li><a href="3.html"class="link">Biology</a> </li>
    <li><a href="4.html"class="link">Physics</a> </li>
 </ul>
 </div>
 </nav>
 </div>
 <style>
     body { 
background-image: url('3.jpg');
background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
    }
    .wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 110vh;
    background: rgba(39,39, 39, 0.4);
}
.nav{
    position: fixed;
    top: 0;
    display: flex;
    justify-content: space-around;
    width: 100%;
    height: 100px;
    line-height: 100px;
    background: linear-gradient(rgba(39,39,39,0.6),transparent );
    z-index: 100;
}
.nav-logo p{
  color: white;
  font-size: 25px;
  font-weight: 600;
}
.nav-menu ul{
    display: flex;
}
.nav-menu ul li{
    list-style-type: none;  
}
.nav-menu ul li .link{
    text-decoration: none;
    font-weight: 500;
    color: #fff;
    padding-bottom: 15px;
    margin: 0 25px;
}
.link:hover, .active{
    border-bottom: 2px solid #fff;
}
.nav-button.btn{
    width: 130px;
    height:40px;
    font-weight:500;
    background: rgba(255, 255, 255, 0.6);
    border: none;
    border-radius: 30cqw;
    cursor: pointer;
    transition: .3s ease;
}
.btn:hover{
    background: rgba(241, 231, 231, 0.3);
}
#registerBtn{
    margin-left: 15px;
}

.btn.white-btn{
    background: rgb(253, 249, 249);
    width: 130px;
    height:40px;
    font-weight:500;
    border: none;
    border-radius: 30cqw;
    cursor: pointer;
    transition: .3s ease;
}
.btn.btn.white-btn:hover{
    background: rgba(204, 194, 194, 0.5);
   
}
.btn.black-btn{
    width: 130px;
    height:40px;
    font-weight:500;
    background: #fff;
    border: none;
    border-radius: 30cqw;
    cursor: pointer;
    transition: .3s ease;
}
.btn:hover{
    background: rgba(241, 231, 231, 0.3);}
    .btn.btn.black-btn:hover{
        background: rgba(233, 224, 224, 0.5);}
.nav-menu-btn{
    display: flex;
}
.form-box{
   position: relative; 
   display: flex;
   align-items: center;
   justify-content: center;
   width: 512px;
   height: 420px;
   overflow: hidden;
   z-index: 2;
}
.login-container{
    position: absolute;
    width: 500px;
    display: flex;
    flex-direction: column;
    transition: .5s ease-in-out;
    
    }
.register-container{
position: absolute;

width: 500px;
display: flex;
flex-direction: column;
transition: .5s ease-in-out;

}

.top span{
  color: #fff;  
 font-size: small;
 padding: 10px ;
 display: flex;
 justify-content: center;
 gap: 10px;

}
.top span a{
font-weight: 500;
color: #fff;
 
}
header{
 color: #fff;
font-size: 30px;
text-align: center;
padding: 10px 0 30px 0;
justify-content: center;
display: flex;
size: 50%;
}

 </style>
 </body></html>