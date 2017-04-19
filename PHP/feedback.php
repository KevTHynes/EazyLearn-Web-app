
<!DOCTYPE html>
<html>
    <head>
        <title>Tell us what you're thinking</title>
        <link href="../CSS/layout1.css" rel="stylesheet">
        <!-- "form vaidator: https://www.w3schools.com/js/js_validation.asp" -->
        <script>
function validateTheForm() {
    var x = document.forms["feedbackForm"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    var y = document.forms["feedbackForm"]["rating"].value;
    if (y == "") {
        alert("You forgot to rate!");
        return false;
    }
    var z = document.forms["feedbackForm"]["text"].value;
    if (z == "") {
        alert("You forgot to leave your comment!");
        return false;
    }
}
</script>
    </head>
    <body>
        <div class="site-wrapper">
            <div id="navbar">
                </div>
                <div class="container">
                    <form name="feedbackForm" onsubmit="return validateTheForm()" method="post" action="feedbackprocessor.php">
                        
                        <h1>Please let us know how we did!</h1>
                        
                        1. Enter your name:
					    <input name="name" id="name" placeholder="Your first name will do :)"><br><br>
                        
                        2. How would you rate our service?<br>
    					<label class="radio-inline" name="rating">
    					<input type="radio" name="rating" value="1">1/5</label>
    					<input type="radio" name="rating" value="2">2/5</label>
    					<input type="radio" name="rating" value="3">3/5</label>
    					<input type="radio" name="rating" value="4">4/5</label>
    					<input type="radio" name="rating" value="5">5/5</label><br><br>
					
    					3. How could we improve?<br>
    					<textarea id="text" name="text" rows="10" cols="30" style="minwidth:100%"></textarea><br><br>
    					
					    <input id="submit" name="submit" type="submit" value="Submit" class="btn-default">
                    </form>
                    
                    </div>
                    </div>
                   
    </body>
</html>