<!--- reference https://www.youtube.com/watch?v=ZLC8BLCrxCU&index=4&list=PLDmvslp_VR0wWqHJjU4yX3F5z5MoVHGk1--->
<?php include 'database.php'; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <?php
    //set question number
    $number = (int) $_GET['n'];
    
    /*
    * Get total questions
    */
    $query = "SELECT * FROM questions";
    //Get results
    $results = $mysqli->query($query) or die ($mysqli->error._LINE_);
    $total = $results->num_rows;
        
        
    /*
    *Get question
    */
    
    $query = "SELECT * FROM questions
                WHERE question_number = $number";
                
    //Get result
    $result = $mysqli->query($query) or die($mysqli->error._LINE_);
    
    $question = $result->fetch_assoc();
    
    
    /*
    *Get Choices
    */
    
    $query = "SELECT * FROM choices
                WHERE question_number = $number";
                
    //Get results
    $choices = $mysqli->query($query) or die($mysqli->error._LINE_);
    

?>
    <head>
        <meta charset="utf-8"/>
        <title>PHP Quizzer</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
    
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
        <link href="../CSS/layout1.css" rel="stylesheet">
    
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <div class="container">
            <nav>
                <script> 
    
                    function show_alert() { 
                    
                      var msg = "Select an answer!";
                      
                      alert(msg); 
                    
                    }
                  
                </script>
                    <ul>
                      <li><a href="home.html" class="round green">Home</a></li>
                      <li><a href="puzzle.html" class="round red">Puzzle</a></li>
                      <li><a href="#" onClick="show_alert()" class="round pink">Help</a></li>
                    </ul> 
            </nav>
        

        <main>
            <h3>Question <?php echo $question['question_number']; ?> out <?php echo $total; ?></h3>
            <h2>
                <?php echo $question['text']; ?>
            </h2>
            <form method="post" action="process.php">
                <ul class="choices">
                    <?php while($row = $choices->fetch_assoc()): ?>
                        <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"/><?php echo $row['text']; ?></li>
                    <?php endwhile; ?>
                </ul>
                <input type="submit" value="submit" class="btn-default"/>
                <input type="hidden" name="number" value="<?php echo $number; ?>"/>
            </form>
        </main>
        </div>
    </body>
</html>