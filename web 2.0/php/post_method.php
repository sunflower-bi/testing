<?php
if( $_REQUEST['name'] && $_REQUEST['age'] ){
    echo "Welcome " .$_REQUEST['name']. "<br>";
    echo "You are " .$_REQUEST['age']. " years old <br>";

    exit();
}

?>

<html>
    <body>
        <form action="<?php $_php_self ?>" method="POST">
        Name: <input type="text" name="name" /><br><br>
        Age: <input type="number" name="age" /><br><br>
        <input type="submit" />
        </form>
    
    </body>
</html>
