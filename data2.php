<?php

if(isset($_POST['name'])){
    $name =$_POST['name'];
    echo "My name is : ".$name;
}

?>

<form action="data2.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>