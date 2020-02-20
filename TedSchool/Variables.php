
<html>
    <head>

        <title>JavaScript Variables  </title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>

        <?php
        $php_start_tag = '"<?php"';
        $php_end_tag = '"?>"';
        $basic_string = highlight_string('var a = 5;
var b = 1.4;
var b = "1234";
var c = "My Name Is Scott Brown";', true);
        $multi_Variables = highlight_string('var Name = "TED", AGE = "34", SCHOOL = MMU;', true);
        $basic_Operation = highlight_string('(5 - 2) / 3 ', true);

        $Example_string = highlight_string('
var name = "Peter";
if(name === "Alex"){
  let hey = "Hi Alex";
  console.log(hey);
} else {
  let hey = "Hi Stranger";
  console.log(hey);
}', true);
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

                        
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <a href="Comments.php" class="previous_button">&#9664;Previous</a>
                    <a href="Operators.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>

                    <div class="vertical-menu">
                        <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" >JavaScript Comments</a>
                        <a href="Variables.php" id="active">JavaScript Variables</a>
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





