<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript Numbers</title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>
<!--
This block of php again is shared between all the pages.it is just to define my sample codes.
the main reason to do this.is because I was not able to add code inside the tags if i did not
want to run the code and simply demonstrate that as a sample
-->
        <?php
        $basic_string = highlight_string('var a = 6.02;    // A number with decimals
var b = 56;       // A number without decimals', true);
        $multi_Variables = highlight_string('
var num = 255;

alert( num.toString(16) );  // ff
alert( num.toString(2) );   // 11111111', true);
       
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
                        <a href="Strings.php" class="previous_button">&#9664;Previous</a>
                        <a href="Operators.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>Numbers in JavaScript</h1>


                        <hr>
                        <h3>Numbers are arithmetic numbers </h3>
                        
                        <h3>Numbers are stored in 64-bit formats.<br>
                            we have also BigInt numbers ,which ae used for arbitrary-length numbers</h3>
                        
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <hr>
                        <br>
                        <h3>Note:<br></h3>
                         <ul>
                             <li>Hexadecimal numbers also can be used in JavaScript.</li>
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
            <a href="tryItNumbers.php"  target="_blank" class="tryIt_button">Practice</a>
                        
                    <br>
                    <br>
                    <br>
                    
                    <br>
                    <br>
 </div>
                    //previous and next pages buttons
                    <a href="Strings.php" class="previous_button">&#9664;Previous</a>
                    <a href="Operators.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>

                    //right-side content menu
                    <div class="vertical-menu">
                       <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" >JavaScript Comments</a>
                        <a href="Variables.php" >JavaScript Variables</a>
                        <a href="DataTypes.php">JavaScript Data Types</a>
                        <a href="Strings.php">JavaScript Strings</a>
                        <a href="Numbers.php" id="active">JavaScript Numbers</a>                       
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



