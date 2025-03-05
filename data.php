<?php

if(isset($_GET["name"])){
    $name =$_GET["name"];
    echo "My name is : ".$name;
}

?>

<form action="data.php" method="get">
    Your name : <input type="text" name="name" placeholder="Enter your name">
    <input type="submit" value="Submit">
</form>