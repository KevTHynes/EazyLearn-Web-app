<!-- Author: Kevin Hynes-->
<!-- php code for processing feedback: https://github.com/kevhynez/WADProject/blob/master/php/reviewProcessor.php -->

<?php
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $rating = $_POST['rating'];
   $text = $_POST['text'];
   $error[0] = "";
   $error[1] = "";
   $error[2] = "";
   
   if($_POST['name'] == ""){
      header("Location: feedback.php");
      $errorMessage[0] = '<span style = "color:red;font-size:20px;">You forgot your name!</span><br>';
    }
    if($_POST['rating'] == ""){
        header("Location: feedback.php");
      $errorMessage[1] = '<span style = "color:red;font-size:20px;">You did not rate!</span><br>';
    }
    if($_POST['text'] == ""){
        header("Location: feedback.php");
      $errorMessage[2] = '<span style = "color:red;font-size:20px;">You did left this part blank!</span><br>';
    }
    else{
        // load previous XML from file
         $xml = simplexml_load_file("../XML/feedback.xml") or die("ERROR: Cannot load feedback.xml.");
        
         // add a new feedback node
         $review = $xml->addChild('feedback');
         
         // add form data to XML
         $review->addChild('name', $name);
         $review->addChild('rating', $rating);
         $review->addChild('text', $text);
        
        // save the whole modified XML
         $xml->asXml('../XML/feedback.xml');
         
         // Display thank you
         header("Location: ../thankyou.html");
         exit;
    }
  
}
?>