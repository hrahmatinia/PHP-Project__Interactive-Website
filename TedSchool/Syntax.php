
<html>
    <head>
        
        <title> Syntax  </title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css"/>
    </head>
    <body>
        
        <?php
        $php_start_tag = '"<?php"';
        $php_end_tag = '"?>"';
        $basic_string =highlight_string("<?php
        // PHP code goes here
        ?>",true);
        
         $Example_string = highlight_string("<!DOCTYPE html>
   
        <html>
          <body>

            <h1>My first PHP page</h1>

          <?php
            echo 'Hello World!';
          ?>

          </body>
        </html>",true);
        ?>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                </ul>
            </nav>
            <div class="main">
           
            
            <div id="content-area">
                <div class="main-content">
    <h1>PHP Syntax</h1>
    <hr>
    <h4>A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</h4>
    <hr>
    <h3>Basic PHP Syntax</h3>
    <p>A PHP script can be placed anywhere in the document.<br> 
        A PHP script starts with <?php highlight_string(" <?php ");?> and ends with <?php highlight_string(" ?> ");?>: 
    </p>
   
    
    <div class="boxed">
  <?php
    
    echo $basic_string;
  ?>
     </div>
        
    <p>The default file extension for PHP files is ".php".<br>
    A PHP file normally contains HTML tags, and some PHP scripting code.<br>
    Below, we have an example of a simple PHP file, with a PHP script that uses a built-in <br>
    PHP function "echo" to output the text "Hello World!" on a web page:<br>
   </p>
   

 <hr>
    <h3>Example</h3>
    <div class="boxed">
        <?php
  echo $Example_string;
   ?>
  </div>  
    
     <hr>
    <h3>What Can PHP Do?</h3>
    <ul>
        <li>PHP can generate dynamic page content</li>
        <li>PHP can create, open, read, write, delete, and close files on the server</li>
        <li>PHP can collect form data</li>
        <li>PHP can send and receive cookies</li>
        <li>PHP can add, delete, modify data in your database</li>
        <li>PHP can be used to control user-access</li>
        <li>PHP can encrypt data</li>
      
    </ul>
    <p>With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.</p>
    
      <hr>
    <h3>Why PHP ?</h3>
    <ul>
        <li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
        <li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
        <li>PHP supports a wide range of databases</li>
        <li>PHP is free. Download it from the official PHP resource: www.php.net</li>
        <li>PHP is easy to learn and runs efficiently on the server side</li>
        
    </ul>
    
</div>
                 
            </div>
            <div id="sidebar">
                <h2>Vertical Scroll Menu</h2>

<div class="vertical-menu">
    <a href="Introduction.php" class="Intro">PHP Introduction</a>
  <a href="Syntax.php">PHP Syntax</a>
  <a href="Comments.php">PHP Comments</a>
  <a href="Variables.php">PHP Variables</a>
  <a href="EchoPrints.php">PHP echo and print Statements</a>
  <a href="DataTypes.php">PHP Data Types</a>
  <a href="Strings.php">PHP Strings</a>
  <a href="Numbers.php">PHP Numbers</a>
  <a href="Constants.php">PHP Constants</a>
  <a href="Operators.php">PHP Operators</a>
  <a href="IFElseIF.php">PHP if...else...elseif Statements</a>
  <a href="Switch.php">PHP switch Statement</a>
  <a href="Loops.php">PHP Loops</a>
  <a href="Functions.php">PHP Functions</a>
  <a href="Arrays.php">PHP Arrays</a>
  <a href="GlobalVariables.php">PHP Global Variables - Superglobals</a>
  <a href="FormHandlings.php">PHP Form Handling</a>
  <a href="FormValidation.php">PHP Form Validation</a>
  <a href="formRequierdFields.php">PHP Forms - Required Fields</a>
  <a href="Validateemails.php">PHP Forms - Validate E-mail and URL</a>
  <a href="CompleteFormExample.php">PHP Complete Form Example</a>
  <a href="Cookies.php">PHP Cookies</a>
  <a href="Sessions.php">PHP Sessions</a>
  <a href="Filters.php">PHP Filters</a>
  <a href="JSon.php">PHP and JSON</a>
  
</div>
            </div>
            </div>
            
            <footer>
                <p> All rights reserved </p>
            </footer>
        </div>
       
    </body>
</html>




