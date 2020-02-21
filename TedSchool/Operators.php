<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript Operators</title>
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
var a = 5;         // assign the value 5 to a
var b = 2;         // assign the value 2 to b
var c = a + b;     // assign the value 7 to c 
var c = a - b;     // assign the value 3 to z 
var c = a / b;     // assign the value 2 to z 
var c = a * b;     // assign the value 10 to z 
var c = x % y;     // assign the value 1 to z ', true);
        $multi_Variables = highlight_string('
var txt1 = "Hi ";
txt1 += "Ted";', true);
       
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
                        <a href="Numbers.php" class="previous_button">&#9664;Previous</a>
                        <a href="IFElseIF.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>Operators in JavaScript</h1>


                        <hr>
                        <h3>We have for four important operators </h3>
                         <ul>
                             <li><span>&#10010;</span></li>
                             <li><span>&#9472;</span></li>
                             <li><span>&#9585;</span></li>
                             <li><span>&#10033;</span></li>
                         </ul>
                        <h3><span>&#10010;</span> to add variables<br></h3>
                        <h3><span>&#9472;</span> to subtracting variables<br></h3>
                        <h3><span>&#9585;</span> to dividing variables<br></h3>
                        <h3><span>&#10033;</span> to multiplying variables<br></h3>
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <hr>
                        <br>
                        <h3>Note:<br></h3>
                         <ul>
                             <li>we can also <span>Concatinate </span> strings with <span>&#10010;</span></li>
                             <li>Binary numbers Also can be used in JavaScript</li>
                             <li>Octal numbers Also can be used in JavaScript</li>
                         </ul>
                            <p>We can change numbers from normal numbers to Hexadecimal or Binary by   <span> .toString()</span>    property</p>
                         <div class="boxed">
                            <?php
                            echo $multi_Variables;
                            ?>
                        </div>
                        <hr>
    
                        <br>
                        <br>

                       
                        <hr>
                        <!-- try-it key is going to try it page and then linked to the JavaScript page by
                       the same name to actually run the try it page.which the user can practice-->
            <a href="tryItOperation.php"  target="_blank" class="tryIt_button">Practice</a>
                        
                    <br>
                    <br>
                    <br>
                    
                    <br>
                    <br>
 </div>
                    //previous and next pages buttons
                    <a href="Numbers.php" class="previous_button">&#9664;Previous</a>
                    <a href="IFElseIF.php" class="Next_button">Next&#9658;</a>

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
                        <a href="Operators.php" id="active">JavaScript Operators</a>
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



