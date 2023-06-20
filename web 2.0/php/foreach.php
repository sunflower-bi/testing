<html>
    <body>

    <h1> Foreach loop </h1>
    <?php
    $arr = array(12,73,83,27,83);
    $count=1;
    foreach ($arr as $val){
        echo "Value of element $count is $val <br>";
        $count++;
    }
    ?>

</body>
</html>