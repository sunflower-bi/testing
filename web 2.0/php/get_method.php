<?php
if( $_GET['name'] && $_GET['age'] ){
    echo "Welcome " .$_GET['name']. "<br>";
    echo "You are " .$_GET['age']. " years old <br>";

    exit();
}

?>

<html>
    <body>
        <form action="<?php $_php_self ?>" method="GET">
        Name: <input type="text" name="name" /><br><br>
        Age: <input type="number" name="age" /><br><br>
        <input type="submit" />
        </form>
    
    </body>
</html>