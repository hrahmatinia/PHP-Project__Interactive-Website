<!--
this frame is common between all the linked pages.it is basically the frame
that contain my material.text.menu,links and php.
-->
<html>
    <head>

        <title>JavaScript String</title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>
<!--
This block of php again is shared between all the pages.it is just to define my sample codes.
the main reason to do this.is because I was not able to add code inside the tags if i did not
want to run the code and simply demonstrate that as a sample
-->
        <?php
        $basic_string = highlight_string('var carName1 = "Double quote";  // Double quotes
var carName2 = `Single quote`;  // Single quotes', true);
        $multi_Variables = highlight_string('
var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var sln = txt.length;', true);
        $charAt = highlight_string('
let str = `Hello`;

// the first character
alert( str[0] ); //H
alert( str.charAt(0) ); //H

// the last character
alert( str[str.length - 1] ); // 0', true);

       
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
                        <a href="DataTypes.php" class="previous_button">&#9664;Previous</a>
                        <a href="Numbers.php" class="Next_button">Next&#9658;</a>
                    </div>
                    <div class="main-content">               


                        <h1>Strings in JavaScript</h1>


                        <hr>
                        <h3>Text in JavaScript is String </h3>
                        
                        <h3>characters inside quotes are String.<br>
                            Quotes can be single or double</h3>
                        <div class="boxed">
                            <?php
                            echo $basic_string;
                            ?>
                        </div>
                        <hr>
                        <br>
                        <h3>Note:<br></h3>
                         <ul>
                             <li>There is no separate type for single character.</li>
                             <li>The internal format for strings is always UTF-16</li>
                         </ul>
                            <p>String has    <span>length</span>    property</p>
                         <div class="boxed">
                            <?php
                            echo $multi_Variables;
                            ?>
                        </div>
                        <hr>
    
                        <br>
                        <H2>Character Access</H2>
                        <p>To access character in certain position we can use   <span>charAt()</span></p>
                        <br> 
                        <div class="boxed">
                            <?php
                            echo $charAt;
                            ?>
                        </div>
                       
                        <br>

                       
                        <hr>
                         <!-- try-it key is going to try it page and then linked to the JavaScript page by
                        the same name to actually run the try it page.which the user can practice-->
            <a href="tryItString.php"  target="_blank" class="tryIt_button">Practice</a>
                        
                    <br>
                    <br>
                    <br>
                    
                    <br>
                    <br>
 </div>
                    //next and previous pages button
                    <a href="DataTypes.php" class="previous_button">&#9664;Previous</a>
                    <a href="Numbers.php" class="Next_button">Next&#9658;</a>

                </div>

                <div id="sidebar">
                    <h2>Vertical Scroll Menu</h2>
                //side content menu
                    <div class="vertical-menu">
                       <a href="Introduction.php"  >JavaScript Introduction</a>
                        <a href="Syntax.php" >JavaScript Syntax</a>
                        <a href="Comments.php" >JavaScript Comments</a>
                        <a href="Variables.php" >JavaScript Variables</a>
                        <a href="DataTypes.php">JavaScript Data Types</a>
                        <a href="Strings.php" id="active">JavaScript Strings</a>
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

