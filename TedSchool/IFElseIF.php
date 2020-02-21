<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript Conditions</title>
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
if (age < 18) {
  bartender = "May I have your ID please?";
}', true);
        $multi_Variables = highlight_string('
switch(expression) {
  case a:
    // code block
    break;
  case b:
    // code block
    break;
  default:
    // code block
}', true);
       
        ?>
        <div id="wrapper">
            <div id="banner">

            </div>

            <nav id="navigation">
                <ul id="nav">
                    <li><a href="Introduction.php">Home</a></li>
                    <li><a href="quiz.php" target="_blank">QUIZ</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
            <div class="main">


                <div id="content-area">
                    <div>
                         //in each content page we have 2 next-page and previous-page keys
                        <a href="Operators.php" class="previous_button">&#9664;Previous</a>
                        <a href="Loops.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>Conditions in JavaScript</h1>


                        <hr>
                        <h3>We can use conditions to make decisions in JavaScript</h3>
                        <p></p>
                         <ul>
                             <li><span>if</span></li>
                             <li><span>else if</span></li>
                             <li><span>switch</span></li>
                         </ul>
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <hr>
                        <br>
                        <h3>Note:<br></h3>
                         <ul>
                             <li><span>if </span> must be in lowercase</li>
                         </ul>
                        <p> <span>switch</span> is used to act different in different condition</p>
                         <div class="boxed">
                            <?php
                            echo $multi_Variables;
                            ?>
                        </div>
                        <hr>
    
                        <br>
                        <br>

                       
                        <hr>
                        <!--try it key is going to try it page and then linked to the JavaScript page by
                        the same name to actually run the try it page.which the user can practice-->
            <a href="tryItCondition.php"  target="_blank" class="tryIt_button">Practice</a>
                        
                    <br>
                    <br>
                    <br>
                    
                    <br>
                    <br>
 </div>
                     //in each content page we have 2 next-page and previous-page keys
                    <a href="Operators.php" class="previous_button">&#9664;Previous</a>
                    <a href="Loops.php" class="Next_button">Next&#9658;</a>

                </div>

                //sidebar menu(content menu)
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
                        <a href="IFElseIF.php" id="active">JavaScript if...else...elseif Statements</a>                      
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



