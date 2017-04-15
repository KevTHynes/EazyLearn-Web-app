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
        <link href="../../CSS/layout1.css" rel="stylesheet">
    
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
                    
                      var msg = "Select a country to begin!";
                      
                      alert(msg); 
                    
                    }
                  
                </script>
                    <ul>
                      <li><a href="../home.html" class="round green">Home</a></li>
                      <li><a href="../puzzle.html" class="round red">Puzzle</a></li>
                    	<li><a href="../achieve.html" class="round yellow">Grades</a></li>
                    	<li><a href="#" onClick="show_alert()" class="round pink">Help</a></li>
                    </ul> 
            </nav>
        
        <main>
                <h1>You're Done!</h1>
                <h3>Congrata! You have completed the test</h3>
                <h2>Final Score: <?php echo $_SESSION['score']; ?></h2>
                <a href="question.php?n=1" class="start">Take Again</a>
        </main>
        </div>
        
    </body>
</html>