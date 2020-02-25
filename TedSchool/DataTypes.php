<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript Data Types  </title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>
        <!--
        This block of php again is shared between all the pages.it is just to define my sample codes.
        the main reason to do this.is because I was not able to add code inside the tags if i did not
        want to run the code and simply demonstrate that as a sample
        -->
        <?php
        $basic_string = highlight_string('let x = 5 + "TED";', true);
        $multi_Variables = highlight_string('
var a;           // Now x is undefined
a = {firstName:"Ted", lastName:"Julian"};          // Now x is an obkect
a = 9;      // Now x is a Number
a = "Alex";      // Now x is a string', true);
        $typeof_Operation = highlight_string('

typeof 0              // Returns "number"
typeof 314            // Returns "number"
typeof 3.14           // Returns "number"
typeof (3)            // Returns "number"
typeof (3 + 4)        // Returns "number"
typeof ""             // Returns "string"
typeof "John"         // Returns "string"
typeof "John Doe"
typeof null', true);


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
                        <!--in each content page we have 2 next-page and previous-page keys-->
                        <a href="Variables.php" class="previous_button">&#9664;Previous</a>
                        <a href="Strings.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>Data Types in JavaScript</h1>


                        <hr>
                        <h3>There are different data types in JavaScript</h3>
                        <hr>
                        <ul>
                            <li>Numbers.</li>
                            <li>String</li>
                            <li>Objects</li>
                            <li>Boolean</li>
                            <li>undefined</li>


                        </ul>
                        <h4>Data Types are quiet important</h4>

                        <p> We have to be careful at the time when we need for example add to variables together. </p>
                        <p>For example if we add an integer to a string,then JavaScript treat the number as a string <br>
                            Text must be in quotes.<br>
                            Number will be treated as a String or Text if it is in Quotes.
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <hr>
                        <br>
                        <H2>JavaScript has Dynamic Types</H2>
                        <p>It means we can just define a variable and then assign that variable different times to different data types</p>
                        <br> 
                        <div class="boxed">
                            <?php
                            echo $multi_Variables;
                            ?>
                        </div>
                        <hr>
                        <br>
                        <h4>We can use the <span> typeof </span> operator to see what is the type of the variable</h4>

                        <br>

                        <div class="boxed">
                            <?php
                            echo $typeof_Operation;
                            ?>
                        </div>
                        <hr>
                        <!--try it key is going to try it page and then linked to the JavaScript page by
                        the same name to actually run the try it page.which the user can practice-->
                        <a href="tryItDataType.php"  target="_blank" class="tryIt_button">Practice</a>

                        <br>
                        <br>
                        <br>

                        <br>
                        <br>
                    </div>
                    <!--in each content page we have 2 next-page and previous-page keys-->
                    <a href="Variables.php" class="previous_button">&#9664;Previous</a>
                    <a href="Strings.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>

                    <div class="vertical-menu">
                        <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" >JavaScript Comments</a>
                        <a href="Variables.php" >JavaScript Variables</a>
                        <a href="DataTypes.php" id="active">JavaScript Data Types</a>
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






