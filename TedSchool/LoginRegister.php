<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>Login / Sign UP </title>
        <link rel="stylesheet" type="text/css" href="Styles/LoginStyle.css"/>
        <script src="LoginRegister.js"></script>

    </head>
    <body>
        <div class="wrapper">
            <div class="form-box">
                <div class="LogReg-box">
                    <div id="button"></div>
                    <button id= "LoginButton" type ="button" class="toggle-btn" >Login</button>
                    <button id="SignUPButton" type ="button" class="toggle-btn">Sign UP</button>
                </div> 
                <div class="Social-Media">
                <a href="https://www.facebook.com/hrahmatinia" ><img src="Images/Icons/fb.png"></a>
                <a href="https://twitter.com/Hrahmatinia" ><img src="Images/Icons/tw.png"></a>
                <a href="https://www.instagram.com/hrahmatinia/?hl=en" ><img src="Images/Icons/insta.png"></a>
                </div>
                <form id="Login" class="inputs">
                    <input type="text" class="input-field" placeholder="User ID" required="true">
                    <input type="text" class="input-field" placeholder="Password" required="true">
                    <input type="checkbox" class="check-Box"> <span>Remember Password </span>
                    <button type="submit" class="submit-button">Login</button>
                </form>
                <form id= "Sign-UP" class="inputs">
                    <input type="text" class="input-field" placeholder="User ID" required="true">
                    <input type="text" class="input-field" placeholder="Password" required="true">
                    <input type="email" class="input-field" placeholder="E-Mail" required="true">
                    <input type="checkbox" class="check-Box"> <span>I have read and agree to the Privacy Policy.</span>
                    <button type="submit" class="submit-button">Sign UP</button>
                </form>
             
            </div>
           
        </div>  
    </body>
</html>
