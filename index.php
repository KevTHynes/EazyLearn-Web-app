<?php
//$error = "";

//$varAge = "";
if(!isset($_POST['formAge'])){
      $errorMessage = "<p>You did not select your age!</p>";
    }
  
if(isset($_POST['submit'])){
   $varAge = $_POST['formAge'];
   $errorMessage = "";
   header("Location: ".$_POST['formAge']);
    exit;
    
}




//header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Index</title>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="CSS/layout1.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand">Welcome to "My History Book"</h1>
              
            </div>
          </div>

          <div class="inner cover">
            
            <p class="lead">
           
              
              <form method="post" action="">
                <h2>1. What is your name?</h2>
                Name here: <input type="text" name="firstname"><br>
                <h2>2. How old are you?</h2>
                <!--"reference for option values in php code" http://stackoverflow.com/questions/19136904/get-dropdown-selected-value-and-redirect-that-page-on-button-click -->
                <select name="formAge">
                  <option value="">Select age</option>
                  <option value="Age5to6/home.html">5 years old</option>
                  <option value="Age5to6/home.html">6 years old</option>
                  <option value="Age7to8/home.html">7 years old</option>
                  <option value="Age7to8/home.html">8 years old</option>
                  <option value="Age9to10/home.html">9 years old</option>
                  <option value="Age9to10/home.html">10 years old</option>
                </select><br>
                <h1 class="cover-heading">Click to start learning!</h1>
               <input type="submit" name="submit" value="Begin!" class="btn btn-lg btn-default">
              </form>
            
            <img src = "Images/profowl.png" height="250" width="250">
            
          </div>

        </div>

      </div>

    </div>

  </body>
</html>
