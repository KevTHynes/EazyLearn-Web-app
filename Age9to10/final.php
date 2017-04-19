<!---- reference https://www.youtube.com/watch?v=Q-bDMreVm_A&index=2&list=PLDmvslp_VR0wWqHJjU4yX3F5z5MoVHGk1--->
		    <!-- Author: Shengyang Yuan-->

<?php session_start(); ?>
<!DOCTYPE html>
<html>
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
    
    
    <body>
        <div class="container">
            <nav>
                <script> 
    
                    function show_alert() { 
                    
                      var msg = "Click take quiz again to try it again!";
                      
                      alert(msg); 
                    
                    }
                  
                </script>
                    <ul>
                      <li><a href="home.php" class="round green">Home</a></li>
                      <li><a href="puzzle.html" class="round red">Puzzle</a></li>
                      <li><a href="#" onClick="show_alert()" class="round pink">Help</a></li>
                    </ul> 
            </nav>
        
        <main>
                <h1>You're Done!</h1>
                <h3>Congratulations! You have completed the test</h3>
                <h2>Final Score: <?php echo $_SESSION['score']; ?></h2>
                <a href="question.php?n=1" class="start">Take Again</a>
        </main>
        </div>
        
    </body>
</html>