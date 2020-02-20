<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        
        <title>Login / Sign UP </title>
        <link rel="stylesheet" type="text/css" href="Styles/LoginStyle.css"/>
        <script src="JavaScript/LoginRegister.js"></script>

    </head>
    <body>
        <div class="wrapper">
            <div class="Head-part">
                
            <img src="Images/teddy.png" alt="edu image">
           
                  <ul>
                        <li >
                            <a  class="active" href="#">Home</a>
                        </li>
                        <li>
                            <a  href="#">About US</a>
                        </li>
                        <li>
                            <a  href="#">Contact</a>
                        </li>
                    </ul>
               
            </div>
            <div class="content">
                 <div class="left-side">
                
                     <img class="education-img" src="Images/free.png" alt="edu image">
                  
            </div>
                
            <div class="right-side">
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
                <form id="Login" class="inputs" action="Validation.php" method="post">
                    <input type="text" name="user" class="input-field" placeholder="User ID" required="true">
                    <input type="text" name="password" class="input-field" placeholder="Password" required="true">
                    <input type="checkbox" class="check-Box"> <span class="span">Remember Password </span>
                    <button type="submit" class="submit-button">Start To Learn</button>
                </form>
                <form id= "Sign-UP" class="inputs" action="SignUP.php" method="post">
                    <input type="text" name="user" class="input-field" placeholder="User ID" required="true">
                    <input type="text" name="password" class="input-field" placeholder="Password" required="true">
                    <input type="email" name="email" class="input-field" placeholder="E-Mail" required="true">
                    <input type="checkbox" class="check-Box"> <span class="span">I have read and agree to the Privacy Policy.</span>
                    <button type="submit" class="submit-button">Sign UP</button>
                </form>
             
            </div>
                </div>
            
           
                </div>
            
            <div class="footer">
                 <!-- Footer -->
          <footer>
              <p>
                 &copy Copyright <?php echo date("Y"); ?> TEDSCHOOL.COM

              </p>
          </footer>
            </div>
           
        </div> 
         
         
    </body>
  
</html>
