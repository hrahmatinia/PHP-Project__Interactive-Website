<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript Syntax  </title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>
<!--
This block of php again is shared between all the pages.it is just to define my sample codes.
the main reason to do this.is because I was not able to add code inside the tags if i did not
want to run the code and simply demonstrate that as a sample
-->
        <?php
        $php_start_tag = '"<?php"';
        $php_end_tag = '"?>"';
        $script_tag = highlight_string('"<script></Script>"',true);
        $basic_string = highlight_string("var a;

a = 10;", true);
        $If_statement =  highlight_string('function testNum(a) {
  if (a > 0) {
    return "positive";
  } else {
    return "NOT positive";
  }
}

console.log(testNum(-5));
// expected output: "NOT positive"', true);
        $basic_Operation = highlight_string("(5 - 2) / 3 ", true);

        $Example_string = highlight_string('<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Functions</h2>

<p>This example calls a function which performs a calculation and returns the result:</p>

<p id="demo"></p>

<script>
var x = myFunction(4, 3);
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


                <div id="content-area">
                    <div>
                        <!--in each content page we have 2 next-page and previous-page keys-->
                       <a href="Introduction.php" class="previous_button">&#9664;Previous</a>
                    <a href="Comments.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>JavaScript Syntax</h1>


                        <hr>
                        <h4>syntax is set of rules that defines how to program in JavaScript</h4>
                        <hr>
                        <h4>we should use <span><?php
                            echo $script_tag;
                            ?>
                            </span>tag in HTML to run JavaScript</h4>
                        <hr>
                        <h3>Variables</h3>
                        <p>purpose of variables is to store data values.<br> 
                            <span>VAR</span> is used to declare variables and <span>=</span> is used to assign variables.
                        </p>


                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <hr>
                        <h3>Operations</h3>
                        <p>Arithmetic operations are used to do the maths in JavaScript<br> 
                            <span>&#10010;</span> and <span>&#9472;</span> and <span>&#9585;</span> and <span>&#10033;</span> are used to calculate.
                        </p>


                        <div class="boxed">
                            <?php
                            echo $basic_Operation;
                            ?>
                        </div>
                        <hr>
                        <h3>KeyWords</h3>
                        <p>Keywords are used to tell the browser to do something<br> 
                            For Example the <span>IF</span> tells the browser to do something if only a condition is met.
                        </p>


                        <div class="boxed">
                            <?php
                            echo $If_statement;
                            ?>
                        </div>
                        
                        <!-- try-it key is going to try it page and then linked to the JavaScript page by
                       the same name to actually run the try it page.which the user can practice-->
                        <a href="TryitSyntsx.php"  target="_blank" class="tryIt_button">Practice</a>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        <hr>
                        <h3>Example</h3>
                        <div class="boxed">
                            <?php
                            echo $Example_string;
                            ?>
                        </div>  
                        <!-- try-it key is going to try it page and then linked to the JavaScript page by
                        the same name to actually run the try it page.which the user can practice-->
                        <a href="Tryit_PHP_Syntax.php" target="_blank" class="tryIt_button">Practice</a>

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
                    <!--next and previous pages button-->
                    <a href="Introduction.php" class="previous_button">&#9664;Previous</a>
                    <a href="Comments.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>
                      <!--side content menu-->
                    <div class="vertical-menu">
                        <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" id="active">JavaScript Syntax</a>
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




