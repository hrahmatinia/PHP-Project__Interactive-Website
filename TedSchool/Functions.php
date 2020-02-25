<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript Functions</title>
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
//defining a function
function <function-name>()
{
    // code to be executed
};

//calling a function
<function-name>();', true);
        $multi_Variables = highlight_string('
<html>
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
                        <a href="Loops.php" class="previous_button">&#9664;Previous</a>
                        <a href="Arrays.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>Functions in JavaScript</h1>


                        <hr>
                        <h3>Block of code is called  <span>Function</span></h3>
                        <p>We must call <span>Function</span> in order to execute it </p>
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        
                        <h3><span>Functions </span>  help us to reuse the block of code that we might need in different area of the program</h3>
                         
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
                        <a href="tryItFunction.php"  target="_blank" class="tryIt_button">Practice</a>
                       <br>
                    <br>
                    <br>                  
                  
                    <br>
                    <br>
 </div>
                    <!--in each content page we have 2 next-page and previous-page keys-->
                    <a href="Loops.php" class="previous_button">&#9664;Previous</a>
                    <a href="Arrays.php" class="Next_button">Next&#9658;</a>

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
                        <a href="Operators.php">JavaScript Operators</a>
                        <a href="IFElseIF.php">JavaScript if...else...elseif Statements</a>                      
                        <a href="Loops.php">JavaScript Loops</a>
                        <a href="Functions.php" id="active">JavaScript Functions</a>
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




