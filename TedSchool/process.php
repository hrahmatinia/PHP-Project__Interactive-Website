<?php
include 'connection.php';
?>

<?php session_start() ?>
<?php
//check the score if it is set

if(!isset($_SESSION['score'])){
$_SESSION['score'] = 0;
}

if($_POST){
   //grabbing what ever choice for any question that user submits
    $num =$_POST['number'];
    $selected_option = $_POST['choice'];
    $Next = $num+1;
    
    
    // get the total_questions
    $query1 = "select * from questions";
    //get result of total questions
    $result1 = $mysqli->query($query1)or die($mysqli->error.__LINE__);
    $total_questions = $result1->num_rows;
    
    //get correct choice
    
    $query = "select * from options where question_number = $num and correctAnswer= 1" ;
   
    //get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    //get row
    $row = $result->fetch_assoc();
    
    //set the correct option
    $correct_option = $row['id'];
    
    //compare the user selection
    
    if($correct_option == $selected_option){
        //correct Answer.if it is correct then score++
        $_SESSION['score']++;
    }
    //if we reached the last question then move to result page
    if($num == $total_questions){
        header("Location: result.php");
        exit();
        //if not go to the next question
    }else {
        header("Location: Kuiz.php?n=".$Next);
        
    }
}




