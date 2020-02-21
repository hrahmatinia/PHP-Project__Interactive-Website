<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript Variables  </title>
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
        $basic_string = highlight_string('var a = 5;
var b = 1.4;
var b = "1234";
var c = "My Name Is Scott Brown";', true);
        $multi_Variables = highlight_string('var Name = "TED", AGE = "34", SCHOOL = MMU;', true);
        $basic_Operation = highlight_string('(5 - 2) / 3 ', true);


        $Example_string = highlight_string('<html>
 <head>
  <script type="text/javascript">
function functionOne() {
 var name = "Peter";
if(name === "Alex"){
  let hey = "Hi Alex";
  alert(hey);
} else {
  let hey = "Hi Stranger";
  alert(hey); }
}
  </script>
 </head>
<body>
<p>Try to chage variable and see what happens when you change them and click on the link</p>
<hr>
 <p><a href="#" onClick="functionOne();">Top Text</a></p>
 </body>
</html>

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
                        <a href="Comments.php" class="previous_button">&#9664;Previous</a>
                        <a href="Operators.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>JavaScript Variables</h1>


                        <hr>
                        <h3>Variables are used to store data values</h3>
                        <hr>
                        <h4>Naming variables</h4>
                        <ul>
                            <li>Variable names can not contain space.</li>
                            <li>It must start with a letter or <span>&nbsp;&nbsp;$&nbsp;&nbsp;</span> sign or underscore<span>&nbsp;&nbsp;_&nbsp;&nbsp;</span> </li>
                            <li>Variable names are case sensitive</li>
                            <li>It cannot be one of the <a href="https://www.dummies.com/web-design-development/javascript/javascript-for-kids-for-dummies-cheat-sheet/" target="_blank">reserved words</a></li>        
                        </ul>
                        <H4> Variables:</h4>
                        <p>Variables can be Numbers or Text<br>
                            Text must be in quotes.<br>
                            Number will be trated as a String or Text if it is in Quotes.

                        <p><span>a</span>,<span>b</span> and <span>c</span> are variables</p>
                        <br> 
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <hr>

                        <h4>multiple variable can be declared by just one statement</h4>

                        <div class="boxed">
                            <?php
                            echo $multi_Variables;
                            ?>
                        </div>
                        <hr>

                        <h3>Variables value can be changed anytime</h3>
                        <h3>By using <span>&#9868;</span> we can assign value to variable</h3>
                        <h3>We can use <span>let</span> keyword to create a variable</h3>
                        <h3>Before you using the variable ,it has to be declared</h3>



                        <div class="boxed">
                            <?php
                            echo $Example_string;
                            ?>
                        </div>
                        <hr>
                        <!-- try-it key is going to try it page and then linked to the JavaScript page by
                                                the same name to actually run the try it page.which the user can practice-->
                        <a href="tryItVariables.php"  target="_blank" class="tryIt_button">Practice</a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    //two button for next and previous pages
                    <a href="Comments.php" class="previous_button">&#9664;Previous</a>
                    <a href="Operators.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>
                    //side content menue
                    <div class="vertical-menu">
                        <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" >JavaScript Comments</a>
                        <a href="Variables.php" id="active">JavaScript Variables</a>
                        <a href="DataTypes.php">JavaScript Data Types</a>
                        <a href="Strings.php">JavaScript Strings</a>
                        <a href="Numbers.php">JavaScript Numbers</a>                       
                        <a href="Operators.php">JavaScript Operators</a>
                        <a href="IFElseIF.php">JavaScript if...else...elseif Statements</a>                      
                        <a href="Loops.php">JavaScript Loops</a>
                        <a href="Functions.php">JavaScript Functions</a>
                        <a href="Arrays.php">JavaScript Arrays</a>                      
                        <a href="quiz.php">JavaScript QUIZ</a>

                    </div>
                </div>
            </div>

            <footer>
                <p> &copy Copyright <?php echo date("Y"); ?> TEDSCHOOL.COM </p>
            </footer>
        </div>

    </body>
</html>





