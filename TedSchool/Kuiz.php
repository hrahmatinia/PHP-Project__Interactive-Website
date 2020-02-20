<?php include 'connection.php'; ?>

<?php
//get question number
$num = (int)$_GET['n'];

// get the total_questions
    $query1 = "select * from questions";
    //get result of total questions
    $result1 = $mysqli->query($query1)or die($mysqli->error.__LINE__);
    $total_questions = $result1->num_rows;
    
//get questions
$query = "select * from questions where question_number = $num ";

//get the result
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();


//get Options
$query1 = "select * from options where question_number = $num ";

//get the result
$options = $mysqli->query($query1) or die($mysqli->error.__LINE__);


?>


<html>
    <head>
        <title>Quiz</title>
        <link rel="stylesheet" type="text/css" href="Styles/Kuiz.css"/>
        <script src="JavaScript/TryitYourself.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.7/ace.js"></script>
        
    </head>
    <body >
        <header>
            
            <div class="container">
                <h1>JavaScript Quiz</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>Quiz Time.Lets see How much You Can Remember</h2>
                <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total_questions; ?></div>
                <p class="question">
                    <?php echo $question['text']?>
                </p>
                <form method="post" action="process.php">
                    <ul class="options">
                        <?php while($row = $options->fetch_assoc()):?>
                        <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"/><?php echo $row['text']  ?> </li>
                        <?php endwhile; ?>
                      
                    </ul>
                    <input type="submit" value="Submit" />  
                    <input type="hidden" name="number" value="<?php echo $num; ?>" />  
                </form>
            </div>
            
        </main>
        <footer>
            Copyright &COPY; 2020,  TEDSCHOOL.COM
        </footer>
    </body>
</html>


