<!------ reference https://www.youtube.com/watch?v=y8ke8o0dLq4&list=PLDmvslp_VR0wWqHJjU4yX3F5z5MoVHGk1&index=3----->
		    <!-- Author: Shengyang Yuan-->

<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'c9';
$db_user = 'shengyang';
$db_pass = '1234';

//Create mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

//Error Handler
if($mysqli->connect_error){
    printf("Connect failed: %s\n", $mysqli->connect_error);
}

?>