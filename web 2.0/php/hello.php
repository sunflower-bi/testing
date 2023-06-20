<?php
echo "Hello World";
?>

include&require.php

<html>
    <body>
        <?php require("servertime.php"); ?>
        <p> This is an example to show how to include PHP file ! </p>

</body>
</html>

<!-- when include is used and the file does not exist then it will throw a warning but continue the execution,
when require is used, the file is necessary and hence the program will throw an error and halt the execution -->