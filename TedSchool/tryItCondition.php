<!--
This is a frame that i used for the try it page.
it has been repeated in each and every try it page.
i have tried to have it as a template.but i could not fix it at the end.
the only difference is the JavaScript page link in each page is different.
-->
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="vieport" content="width-device-width, initoal-scale=1.0">
        <title>TRY IT YOURSELF</title>
        <link rel="stylesheet" type="text/css" href="Styles/TryIt_StyleSheet.css"/>
        <script src="JavaScript/tryItCondition.js"></script>
        <script src="JavaScript/Hamburger.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/ace.js"></script>

    </head>
    <body onload="load()">

        <div class="wrapper">
            <div class="nav" >
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>
                <div class="menu">
                    <a href="Introduction.php">Home</a>
                    <a href="quiz.php" target="_blank">QUIZ</a>
                    <a href="index.php"><span>Log Out</span></a>

                </div>
            </div>  
            <div class="main-Container">
                <div class="editor" id="editor">

                </div>
                <iframe class="iframe" id="iframe"> </iframe>  
            </div>
            <div class="footer">
                <footer>
                    <p> &copy Copyright <?php echo date("Y"); ?> TEDSCHOOL.COM </p>
                </footer>
            </div>
        </div>
    </body>
</html>

