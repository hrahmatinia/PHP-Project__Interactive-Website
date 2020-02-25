<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript Loops</title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>
        <!--
        This block of php again is shared between all the pages.it is just to define my sample codes.
        the main reason to do this.is because I was not able to add code inside the tags if i did not
        want to run the code and simply demonstrate that as a sample
        -->
        <?php
        $basic_string = highlight_string('
var number="";
var i;
for (i = 0; i < 10; i++) {
  number +=  i + "<br>";
}', true);
        $multi_Variables = highlight_string('
var number = ""
var i = 0;

do {
  number +="<br>" +i;
  i++;
}
while (i < 10); ', true);
        ?>
        <div id="wrapper">
            <div id="banner">

            </div>

            <nav id="navigation">
                <ul id="nav">
                    <!--top menu -->
                    <li><a href="Introduction.php">Home</a></li>
                    <li><a href="quiz.php" target="_blank">QUIZ</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
            <div class="main">


                <div id="content-area">
                    <div>
                        <!--in each content page we have 2 next-page and previous-page keys-->
                        <a href="IFElseIF.php" class="previous_button">&#9664;Previous</a>
                        <a href="Functions.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>Loops in JavaScript</h1>


                        <hr>
                        <h3>We can use Loops to do something repeatedly in JavaScript</h3>

                        <ul>
                            <li><span>for </span></li>
                            <li><span>while</span></li>

                        </ul>
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <p>The out put is :</p>
                        <ul>
                            <li><span>0 </span></li>
                            <li><span>1</span></li>
                            <li><span>2</span></li>
                            <li><span>3</span></li>
                            <li><span>4</span></li>
                            <li><span>5</span></li>
                            <li><span>6</span></li>
                            <li><span>7</span></li>
                            <li><span>8</span></li>
                            <li><span>9</span></li>

                        </ul>
                        <hr>
                        <br>
                        <h3>while loop<br></h3>
                        <ul>
                            <li><span>while </span> loop is running as long as a certain condition is true</li>
                        </ul>

                        <div class="boxed">
                            <?php
                            echo $multi_Variables;
                            ?>
                        </div>
                        <hr>

                        <h3>while loop result would be the same here<br></h3>

                        <hr>
                        <!--try-it key is going to try it page and then linked to the JavaScript page by
                        the same name to actually run the try it page.which the user can practice-->
                        <a href="tryItLoop.php"  target="_blank" class="tryIt_button">Practice</a>
                        <br>
                        <br>
                        <br>                  

                        <br>
                        <br>
                    </div>
                    <!--in each content page we have 2 next-page and previous-page keys-->
                    <a href="IFElseIF.php" class="previous_button">&#9664;Previous</a>
                    <a href="Functions.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>

                    <div class="vertical-menu">
                        <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" >JavaScript Comments</a>
                        <a href="Variables.php" >JavaScript Variables</a>
                        <a href="DataTypes.php">JavaScript Data Types</a>
                        <a href="Strings.php">JavaScript Strings</a>
                        <a href="Numbers.php">JavaScript Numbers</a>                       
                        <a href="Operators.php">JavaScript Operators</a>
                        <a href="IFElseIF.php">JavaScript if...else...elseif Statements</a>                      
                        <a href="Loops.php" id="active">JavaScript Loops</a>
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

