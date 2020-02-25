<!--
this frame is common between all the linked pages.it is basically the fram that contain my material.text.menu,links and php
-->

<html>
    <head>

        <title>JavaScript Array</title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>
        <!--
        This block of php again is shared between all the pages.it is just to define my sample codes.
        the main reason to do this.is because I was not able to add code inside the tags if i didnt
        want to run the code and simply demonstrate that as a sample
        -->
        <?php
        $basic_string = highlight_string('
//defining an Array
var <array-name> = [element0, element1, element2,... elementN];', true);
        $multi_Variables = highlight_string('
<!DOCTYPE html>
<html>
<body>
	<h1>Demo: JavaScript Array Object</h1>
	<p id="Array1"></p>
	<p id="Array2"></p>
		
	<script>
		var stringArray = new Array();
		stringArray[0] = "one";
		stringArray[1] = "two";
		stringArray[2] = "three";


		var mixedArray = new Array(1, "two", 3, "four");

		document.getElementById("Array1").innerHTML = stringArray;
		document.getElementById("Array2").innerHTML = mixedArray;
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
                        <a href="Functions.php" class="previous_button">&#9664;Previous</a>
                        <a href="quiz.php" target="_blank" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>Array in JavaScript</h1>


                        <hr>
                        <h3>Array is like variable ,but it has the functionality of holding multiple value for one variable</h3>
                        <p>values can be differentiate by numeric  <span>index</span>, starting with zero</p>
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>

                        <h3>We can also define an  <span>Array</span>  as constructor using <span>new</span> keyword</h3>

                        <hr>
                        <br>
                        <h3>Example<br></h3>

                        <div class="boxed">
                            <?php
                            echo $multi_Variables;
                            ?>
                        </div>

                        <hr>
                        <!--try it key is going to try it page and then linked to the JavaScript page by
                        the same name to actually run the try it page.which the user can practice-->
                        <a href="tryItArray.php"  target="_blank" class="tryIt_button">Practice</a>
                        <br>
                        <br>
                        <br>                  

                        <br>
                        <br>
                    </div>
                    <!--in each content page we have 2 next-page and previous-page keys-->
                    <a href="Functions.php" class="previous_button">&#9664;Previous</a>
                    <a href="quiz.php" target="_blank" class="Next_button">Next&#9658;</a>

                </div>

                <!--This is a side bar or menu which contains all my pages and quiz-->
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
                        <a href="Loops.php">JavaScript Loops</a>
                        <a href="Functions.php">JavaScript Functions</a>
                        <a href="Arrays.php" id="active">JavaScript Arrays</a>                      
                        <a href="quiz.php" target="_blank">JavaScript QUIZ</a>

                    </div>
                </div>
            </div>

            <footer>
                <p>&copy Copyright <?php echo date("Y"); ?> TEDSCHOOL.COM </p>
            </footer>
        </div>

    </body>
</html>

