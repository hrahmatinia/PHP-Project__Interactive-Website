<!--
this frame is common between all the linked pages.it is basically the fram that contain my material.text.menu,links and php
-->
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="vieport" content="width-device-width, initoal-scale=1.0"> 
        <title>JavaScript Comments  </title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>

        <!--
This block of php again is shared between all the pages.it is just to define my sample codes.
the main reason to do this.is because I was not able to add code inside the tags if i didnt
want to run the code and simply demonstrate that as a sample
        -->
        <?php
        $php_start_tag = '"<?php"';
        $php_end_tag = '"?>"';
        $basic_string = highlight_string("//This is a comment 
var a;

//a is a variable and this is a comment
a = 10;", true);
        $multi_comments = highlight_string('/*
this is a 
multi
Line
Comments:
*/

function testNum(a) {
  if (a < 0) {
    return "Negative";
  } else {
    return "positive";
  }
}

console.log(testNum(-5));
// expected output: "Negative"', true);
        $basic_Operation = highlight_string('(5 - 2) / 3 ', true);

        $Example_string = highlight_string('<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Functions</h2>

<p>This example calls a function which performs a calculation and returns the result:</p>

<p id="demo"></p>

<script>
//var x = myFunction(4, 3);  {by adding // infront of the line this line is a comment now and we can run program with the next line}
var x = myFunction(5, 7);
document.getElementById("demo").innerHTML = x;

function myFunction(a, b) {
  return a * b;
}
</script>

</body>
</html>', true);
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

                //in each content page we have 2 next-page and previous-page keys
                <div id="content-area">
                    <div>
                        <a href="Syntax.php" class="previous_button">&#9664;Previous</a>
                        <a href="Variables.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>JavaScript Comments</h1>


                        <hr>
                        <h4>to make JavaScript code more readable we should use comments</h4>
                        <hr>
                        <h4>Single Line Comments</h4>
                        <p> This symbol&nbsp;<span>&nbsp; &#8725; &#8725;   &nbsp;&nbsp;  </span>is used for single line comments<br> 
                            <br>  
                        </p>


                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <hr>

                        <h4>Multi Line Comments</h4>
                        <p> This symbol&nbsp;<span>&nbsp; &#8725;&lowast;    &nbsp;&nbsp;  </span>is used to start comments and this <span>&nbsp; &lowast;&#8725;    &nbsp;&nbsp;  </span>is used to finish Multi Line comments<br> 
                            <br>  
                        </p>


                        <div class="boxed">
                            <?php
                            echo $multi_comments;
                            ?>
                        </div>
                        <hr>

                        <h3>Sometimes in testing we use comments to prevents execution</h3>
                        <p>if we add single line command symbol<span>&nbsp; &#8725; &#8725;   &nbsp;&nbsp;  </span>,infront of a line of code then<br>
                            we made that line to a comment

                        </p>


                        <div class="boxed">
                            <?php
                            echo $Example_string;
                            ?>
                        </div>
                        <hr>
                        <!--try it key is going to try it page and then linked to the JavaScript page by
                                                the same name to actually run the try it page.which the user can practice-->
                        <a href="TryitComment.php"  target="_blank" class="tryIt_button">Practice</a>


                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <hr>

                        <br>               


                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    //in each content page we have 2 next-page and previous-page keys
                    <a href="Syntax.php" class="previous_button">&#9664;Previous</a>
                    <a href="Variables.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>

                    <div class="vertical-menu">
                        <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" id="active">JavaScript Comments</a>
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




