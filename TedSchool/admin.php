<!-- this php block is responsible for adding and deleting questions from datbase.-->

<?php include 'connection.php'; ?>
<?php
//if user press the submit button the get the attribute from the form
if (isset($_POST['submit'])) {
    //echo 'debug : submit is pressed'

    $question_text = $_POST['Question'];
    //creat an array for options.
    $option1 = $_POST['Option1'];
    $option2 = $_POST['Option2'];
    $option3 = $_POST['Option3'];
    $option4 = $_POST['Option4'];
    $correctAnswer = $_POST['correctAnswer'];
//inser thos which we get from the form to the data base   
    //question inser query
    $query = "INSERT INTO quiz (Question, option1, option2, option3, option4, correctAnswer) VALUES ('$question_text', '$option1', '$option2', '$option3', '$option4', '$correctAnswer');";
    $insert_row = $mysqli->query($query) or die($mysqli->error . __LINE__);
    echo 'successfull operation.You just added   ', $insert_row, '  new question to the data base';
}
?>
<!-- this block of php is responsible for deleting the question by ID-->
<?php
//if it is pressed,then get the id from the field and delete tha certain Id
if (isset($_POST['delete'])) {
    $QID = $_POST['QID'];
    $delete_query = "DELETE FROM quiz WHERE QID = '$QID';";
    $delete_row = $mysqli->query($delete_query) or die($mysqli->error . __LINE__);
    //if delete was successful or not user gets a message 
    if ($delete_row) {
        echo 'Question deleted';
    } else {
        echo 'Question didnt delete';
    }
}
?>
<!-- html block for form .we use this form to ad question and answers + delete 
questions with certain numbers-->
<html>
    <head>
        <title>Quiz</titel>
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

        <!--this is our form and responsible to get the question and options for answer-->
        <div class="container">
            <h2>Add Questions to the DataBase</h2>
            <form method="post" action="admin.php">

                <p>
                    <label> Question </label>
                    <input type="text" name="Question" />
                </p> 
                <p>
                    <label> Option #1</label>
                    <input type="text" name="Option1" />
                </p> 
                <p>
                    <label> Option #2</label>
                    <input type="text" name="Option2" />
                </p> 
                <p>
                    <label> Option #3</label>
                    <input type="text" name="Option3" />
                </p> 
                <p>
                    <label> Option #4</label>
                    <input type="text" name="Option4" />
                </p> 
                <p>
                    <label> Option #5--Correct Answer</label>
                    <input type="text" name="correctAnswer" />
                </p> 

                <p>

                    <input type="submit" name="submit"  value="Submit"/>
                </p> 
            </form>

            <!--this second form which just has two field is responsible to get the data to the php and sql to delete the question with certain ID-->
            <Form method="post" action="admin.php">
                <h2>If you want to delete a question,simply input question`s number and then press the Delete button</h2>
                <p>
                    <input type="number" name="QID" required/>
                </p>  
                <input type="submit" name="delete"  value="Delete"/>
            </Form>

        </div>

    </main>
    <footer>
        <p>Copyright &COPY; 2020,  TEDSCHOOL.COM</p>
    </footer>
</body>
</html>
