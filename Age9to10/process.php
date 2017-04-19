<!---- reference https://www.youtube.com/watch?v=O546TrD05IM&list=PLDmvslp_VR0wWqHJjU4yX3F5z5MoVHGk1&index=5--->
		    <!-- Author: Shengyang Yuan-->

<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    //Check to see if score is ser_error_handler
    
    if($_POST){
        $number = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next = $number+1;
        
        /*
        * Get total questions
        */
        $query = "SELECT * FROM questions";
        //Get results
        $results = $mysqli->query($query) or die ($mysqli->error._LINE_);
        $total = $results->num_rows;
        
        
        /*
        * Get correct choice
        */
        
        $query = "SELECT * FROM choices
                    WHERE question_number = $number AND is_correct = 1";
                    
        //Get result
        $result = $mysqli->query($query) or die($mysqli->error._LINE_);
        
        //Get row
        $row = $result->fetch_assoc();
        
        //Set correct choice
        $correct_choice = $row['id'];
        
        //Compare
        if($_SESSION['score']>5){
        $_SESSION['score'] = 0;
        }else
        if($correct_choice == $selected_choice){
            //Answer is correct
            $_SESSION['score']++;
        }
        
        //Check if last question
        if($number == $total){
            header("Location: final.php");
            exit();
        }else {
            header("Location: question.php?n=".$next);
        }
    }