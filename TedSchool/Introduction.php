<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
introduction page is all explanation and no practice has been made here
-->
<html>
    <head>

        <title> JS Introduction  </title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>

        <div id="wrapper">
            <div id="banner">

            </div>

            <nav id="navigation">
                <ul id="nav">
                    //menu on top of the page
                    <li><a href="Introduction.php">Home</a></li>
                    <li><a href="quiz.php" target="_blank">QUIZ</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
            <div class="main">
                <div id="content-area">
                    <div>
                        //two keys for next page and previous page
                        <a href="#" class="previous_button">&#9664;Previous</a>
                        <a href="Syntax.php" class="Next_button">Next&#9658;</a> 
                    </div>
                    <div class="main-content">
                        <h1>JavaScript Introduction</h1>
                        <hr>
                        <h4>JavaScript is one of the world's most popular programming languages.</h4>
                        <hr>
                        <h3>What is JavaScript?</h3>
                        <ul>
                            <li>JavaScript is a multi-paradigm,just-in-time compiled language.</li>
                            <li>JavaScript is a high-Level programming language</li>
                            <li>JavaScript has dynamic typing and has curly bracket syntax</li>

                        </ul>

                        <h3> JavaScript is an amazing and popular language!</h3>
                        <p> JavaScript was made to make web pages brighter and more user friendly!<br>
                            it has no what so ever relation to java<br>
                            it is easy enough to be picked for the first language to learn!<br>
                        </p>

                        <hr>
                        <h3>What is it called JavaScript?</h3>
                        <ul>
                            <li>At first the called it LiveScript.</li>
                            <li>Then to make it more popular called it after the Java which was famous at the time.</li>      
                        </ul>

                        <hr>
                        <h3>What Can JavaScript Do?</h3>
                        <ul>
                            <li>JavaScript can generate dynamic page content</li>
                            <li>JavaScript can be used on the both server side and client side</li>
                            <li>JavaScript is a safe language</li>
                            <li>JavaScript can change the existing content of a web page and modify styles</li>
                            <li>It can run functions on mouse click or press keys </li>
                            <li>It is able to get and set cookies</li>
                            <li>JavaScript can save the data on the client side</li>

                        </ul>

                        <hr>
                        <h3>Why JavaScript ?</h3>
                        <ul>
                            <li>Amazing integeration with CSS and HTML</li>
                            <li>It is safe</li>
                            <li>It is simple to do simple things.s</li>
                            <li>It is supported by majority of browsers</li>        
                        </ul>
                        <br>

                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    //two buttons for next and previous pages
                    <a href="#" class="previous_button">&#9664;Previous</a>
                    <a href="Syntax.php" class="Next_button">Next&#9658;</a> 
                </div>   


                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>

                    <div class="vertical-menu">
                        <a href="Introduction.php" id="active">JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" >JavaScript Comments</a>
                        <a href="Variables.php" >JavaScript Variables</a>
                        <a href="DataTypes.php">JavaScript Data Types</a>
                        <a href="Strings.php">JavaScript Strings</a>
                        <a href="Numbers.php">JavaScript Numbers</a>                       
                        <a href="Operators.php">JavaScript Operators</a>
                        <a href="IFElseIF.php">JavaScript if...else...elseif Statements</a>                      
                        <a href="Loops.php">JavaScript Loops</a>
                        <a href="Functions.php">JavaScript Functions</a>
                        <a href="Arrays.php">JavaScript Arrays</a>                      
                        <a href="quiz.php" target="_blank">JavaScript QUIZ</a>
                    </div>
                </div>
            </div>

            <footer>
                <p> &copy Copyright <?php echo date("Y"); ?> TEDSCHOOL.COM </p>
            </footer>
        </div>

    </body>
</html>



