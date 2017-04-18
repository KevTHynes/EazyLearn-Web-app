<?php
  session_start();
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

    <title>Home</title>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="layout1.css" rel="stylesheet">

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

    <div class="site-wrapper">
      <div id="navbar">
          <nav>
            <script> 

                function show_alert() { 
                  var msg = "Select a country, then click the button to start the lesson!";
                  alert(msg); 
                }
                function play(){
                  var audio = document.getElementById("audio");
                  audio.play();
                }
              
            </script>
                <ul>
                  <li><a href="home.html" class="round green">Home</a></li>
                  <li><a href="puzzle.html" class="round red">Puzzle</a></li>
                	<li><a href="#" onClick="play(), show_alert()" class="round pink">Help</a></li>
                </ul> 
              </nav>
          <audio id="audio" src="../Audio/homepage.mp3" ></audio>
          <div class="container">
          
            <div class="row">
              <div class="col-xs-12 col-lg-12">
               <h1>Hello <?php echo $_SESSION['fname']; ?>! Welcome, now go have some fun!</h1>

              </div>
            </div>
            
            <div class="row">
            
              <div class="col-xs-12">
                <!---- MODAL POPUP referencehttps://www.youtube.com/watch?v=bT9Tta7xWdo------>
                
                <!----ireland----->
                <div class="modal" id="ireland">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">Ireland</h2>
                      </div>
                      <div class="modal-body">
                        <p>Ireland (Listeni/ˈaɪərlənd/; Irish: Éire [ˈeːɾʲə] ( listen); Ulster-Scots: Airlann pronounced [ˈɑːrlən]) is an island in the North Atlantic. It is separated from Great Britain to its east by the North Channel, the Irish Sea, and St George's Channel. Ireland is the second-largest island of the British Isles, the third-largest in Europe, and the twentieth-largest on Earth.</p>
                      </div>
                      <div class="modal-footer">
                        <a href="patrick.html"><button class="btn" >History lesson</button></a>
                      </div>
                    </div><!---end modal content--->
                  </div><!-- end. modal-dialog--->
                </div>
                
                <!----iceland----->
                <div class="modal" id="iceland">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">Iceland</h2>
                      </div>
                      <div class="modal-body">
                        <p>Iceland (Listeni/ˈaɪərlənd/; Irish: Éire [ˈeːɾʲə] ( listen); Ulster-Scots: Airlann pronounced [ˈɑːrlən]) is an island in the North Atlantic. It is separated from Great Britain to its east by the North Channel, the Irish Sea, and St George's Channel. Ireland is the second-largest island of the British Isles, the third-largest in Europe, and the twentieth-largest on Earth.</p>
                      </div>
                      <div class="modal-footer">
                        <a href="patrick.html"><button class="btn" >History lesson</button></a>
                      </div>
                    </div><!---end modal content--->
                  </div><!-- end. modal-dialog--->
                </div>
                
                <!----UK----->
                <div class="modal" id="uk">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">UK</h2>
                      </div>
                      <div class="modal-body">
                        <p>UK (Listeni/ˈaɪərlənd/; Irish: Éire [ˈeːɾʲə] ( listen); Ulster-Scots: Airlann pronounced [ˈɑːrlən]) is an island in the North Atlantic. It is separated from Great Britain to its east by the North Channel, the Irish Sea, and St George's Channel. Ireland is the second-largest island of the British Isles, the third-largest in Europe, and the twentieth-largest on Earth.</p>
                      </div>
                      <div class="modal-footer">
                        <a href="patrick.html"><button class="btn" >History lesson</button></a>
                      </div>
                    </div><!---end modal content--->
                  </div><!-- end. modal-dialog--->
                </div>
                
                <!----norway----->
                <div class="modal" id="norway">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">Norway</h2>
                      </div>
                      <div class="modal-body">
                        <p>Norway (Listeni/ˈaɪərlənd/; Irish: Éire [ˈeːɾʲə] ( listen); Ulster-Scots: Airlann pronounced [ˈɑːrlən]) is an island in the North Atlantic. It is separated from Great Britain to its east by the North Channel, the Irish Sea, and St George's Channel. Ireland is the second-largest island of the British Isles, the third-largest in Europe, and the twentieth-largest on Earth.</p>
                      </div>
                      <div class="modal-footer">
                        <a href="patrick.html"><button class="btn" >History lesson</button></a>
                      </div>
                    </div><!---end modal content--->
                  </div><!-- end. modal-dialog--->
                </div>
                
                <!----france----->
                <div class="modal" id="france">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title">France</h2>
                      </div>
                      <div class="modal-body">
                        <p>France (Listeni/ˈaɪərlənd/; Irish: Éire [ˈeːɾʲə] ( listen); Ulster-Scots: Airlann pronounced [ˈɑːrlən]) is an island in the North Atlantic. It is separated from Great Britain to its east by the North Channel, the Irish Sea, and St George's Channel. Ireland is the second-largest island of the British Isles, the third-largest in Europe, and the twentieth-largest on Earth.</p>
                      </div>
                      <div class="modal-footer">
                        <a href="patrick.html"><button class="btn" >History lesson</button></a>
                      </div>
                    </div><!---end modal content--->
                  </div><!-- end. modal-dialog--->
                </div>
                
                <!------END MODAL------->
              </div>
            </div>
          
          <div class="row">
            
            <div class="col-xs-12 col-lg-3">
            </div>
            <!------iceland------->
            <a href="#" data-toggle="modal" data-target="#iceland">
              <div class="col-xs-12 col-lg-3">
               <img src="../Images/Iceland.png" height="100" width="100">
               <p>Iceland</p>
              </div>
            </a>
            <!------Norway------->
            <a href="#" data-toggle="modal" data-target="#norway">
              <div class="col-xs-12 col-lg-3">
               <img src="../Images/Norway.png" height="100" width="100">
               <p>Norway</p>
              </div>
            </a>
            <div class="col-xs-12 col-lg-3">
            </div>
            </div>
            
            <!-----row two----->
            <div class="row">
            <!------ireland------->
            <a href="#" data-toggle="modal" data-target="#ireland">
              <div class="col-xs-12 col-lg-6">
               <img src="../Images/Ireland.png" height="100" width="100">
               <p>Ireland</p>
              </div>
            </a>
            <!------uk------->
            <a href="#" data-toggle="modal" data-target="#uk">
              <div class="col-xs-12 col-lg-6">
               <img src="../Images/UK.png" height="100" width="100">
               <p>UK</p>
              </div>
            </a>
            </div>
            
            <!-----row three----->
            <div class="row">
            <!------france------->
            <a href="#" data-toggle="modal" data-target="#france">
              <div class="col-xs-12 col-lg-12">
               <img src="../Images/France.png" height="100" width="100">
               <p>France</p>
              </div>
            </a>
            </div>
            
        </div>
      </div>
    </div>
    <hr>
    <div class = "mastfoot">
  <a href="../PHP/feedback.php">Let us know what you think by clicking here</a>
</div>
  </body>
</html>