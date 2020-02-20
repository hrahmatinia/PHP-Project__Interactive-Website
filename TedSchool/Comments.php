
<html>
    <head>

        <title>JavaScript Comments  </title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>

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
                    <li><a href="quiz.php">QUIZ</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="About.php">About US</a></li>
                    <li><a href="LoginRegister.php">Logout</a></li>
                </ul>
            </nav>
            <div class="main">


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

                    <a href="Syntax.php" class="previous_button">&#9664;Previous</a>
                    <a href="Variables.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>

                    <div class="vertical-menu">
                        <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" id="active">JavaScript Comments</a>
                        <a href="Variables.php">JavaScript Variables</a>
                        <a href="EchoPrints.php">JavaScript echo and print Statements</a>
                        <a href="DataTypes.php">JavaScript Data Types</a>
                        <a href="Strings.php">JavaScript Strings</a>
                        <a href="Numbers.php">JavaScript Numbers</a>
                        <a href="Constants.php">JavaScript Constants</a>
                        <a href="Operators.php">JavaScript Operators</a>
                        <a href="IFElseIF.php">JavaScript if...else...elseif Statements</a>
                        <a href="Switch.php">JavaScript switch Statement</a>
                        <a href="Loops.php">JavaScript Loops</a>
                        <a href="Functions.php">JavaScript Functions</a>
                        <a href="Arrays.php">JavaScript Arrays</a>
                        <a href="GlobalVariables.php">JavaScript Global Variables - Superglobals</a>
                        <a href="FormHandlings.php">JavaScript Form Handling</a>
                        <a href="FormValidation.php">JavaScript Form Validation</a>
                        <a href="formRequierdFields.php">JavaScript Forms - Required Fields</a>
                        <a href="Validateemails.php">JavaScript Forms - Validate E-mail and URL</a>
                        <a href="CompleteFormExample.php">JavaScript Complete Form Example</a>
                        <a href="Cookies.php">JavaScript Cookies</a>
                        <a href="Sessions.php">JavaScript Sessions</a>
                        <a href="Filters.php">JavaScript Filters</a>
                        <a href="JSon.php">JavaScript and JSON</a>

                    </div>
                </div>
            </div>

            <footer>
                <p> All rights reserved </p>
            </footer>
        </div>

    </body>
</html>




