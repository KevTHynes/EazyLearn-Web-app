<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Author: Shengyang Yuan, Kevin Hynes-->
    <!---- MODAL POPUP referencehttps://www.youtube.com/watch?v=bT9Tta7xWdo------>
    <!-- reference for audio on click: http://stackoverflow.com/questions/18826147/javascript-audio-play-on-click -->
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

    <!-- Custom styles for this template -->
    <link href="../CSS/layout1.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">
      <div id="navbar">
          <nav>
             <!-- reference for audio on click: http://stackoverflow.com/questions/18826147/javascript-audio-play-on-click -->
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
                  <li><a href="home.php" class="round green">Home</a></li>
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
                        <p>Iceland (Listeni/ˈaɪslənd/; Icelandic: Ísland pronounced: [ˈistlant])[7] is a Nordic island country in the North Atlantic Ocean. It has a population of 332,529 and an area of 103,000 km2 (40,000 sq mi), making it the most sparsely populated country in Europe.</p>
                      </div>
                      <div class="modal-footer">
                        <a href=""><button class="btn" >Not yet available</button></a>
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
                        <p>The United Kingdom of Great Britain and Northern Ireland, commonly known as the United Kingdom (UK) or Britain, is a sovereign country in western Europe.</p>
                      </div>
                      <div class="modal-footer">
                        <a href="uklesson.html"><button class="btn" >History lesson</button></a>
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
                        <p>Norway (Listeni/ˈnɔːrweɪ/ nawr-way; Norwegian: About this sound Norge (Bokmål) or About this sound Noreg (Nynorsk)),[11] officially the Kingdom of Norway, is a sovereign and unitary monarchy whose territory comprises the western portion of the Scandinavian Peninsula plus the island Jan Mayen and the archipelago of Svalbard.</p>
                      </div>
                      <div class="modal-footer">
                        <a href=""><button class="btn" >Not yet available</button></a>
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
                        <p>France (French: [fʁɑ̃s]), officially the French Republic (République française [ʁepyblik fʁɑ̃sɛz]), is a country with territory in western Europe and several overseas regions and territories.</p>
                      </div>
                      <div class="modal-footer">
                        <a href=""><button class="btn" >Not yet available</button></a>
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
  <p>Let us know what you think? provide us with some feedback by clicking<a href="../PHP/feedback.php">HERE!</a></p>
</div>
  </body>
</html>
