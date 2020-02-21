<!--this is admin login page which is similar to the index.
the difference is that here admin an not register and he/she should have already username an password.
username and password both are (Admin) in this case-->

<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="vieport" content="width-device-width, initoal-scale=1.0">
        <title>Admin Login </title>
        <link rel="stylesheet" type="text/css" href="Styles/Admin_Login_Style.css"/>


    </head>
    <body>
        <div class="wrapper">
            <div class="Head-part">

                <img src="Images/teddy.png" alt="edu image">
                <a class="admin" href="index.php">Home/Log Out</a>
                <img class="logo" src="Images/js.jpg" alt="JavaScript">


            </div>
            <div class="content">
                <div class="left-side">

                    <img class="education-img" src="Images/free.png" alt="edu image">

                </div>

                <div class="right-side">
                    <div class="form-box">
                        <div class="LogReg-box">
                            <div id="button"></div>
                            <button id= "LoginButton" type ="button" class="toggle-btn" >Admin Login</button>
                        </div> 

                        <!--Social media button.they are just linking to my personal accounts.
                        I wanted to do something like user can register with google or Facebook,
                        but you need permission from those companies to be able to do that-->
                        <div class="Social-Media">
                            <a href="https://www.facebook.com/hrahmatinia" ><img src="Images/Icons/fb.png" alt=""></a>
                            <a href="https://twitter.com/Hrahmatinia" ><img src="Images/Icons/tw.png" alt=""></a>
                            <a href="https://www.instagram.com/hrahmatinia/?hl=en" ><img src="Images/Icons/insta.png" alt=""></a>
                        </div>

                        //admin login form
                        <form id="Login" class="inputs" action="Admin_Validation.php" method="post">
                            <input type="text" name="name" class="input-field" placeholder="User ID" required>
                            <input type="text" name="password" class="input-field" placeholder="Password" required>
                            <button type="submit" class="submit-button">Go To Admin Page</button>
                        </form>

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

        </div>
    </body>

</html>
