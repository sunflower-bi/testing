<html>
    <head> <title> returning value through php function </title> </head>
    <body>

        <?php 
        function addFunction($num1,$num2){
            $sum=$num1+$num2;
            return $sum;
        }

        $return_num=addFunction(10,20);
        echo "Returned value from the function is ". $return_num ."<br> <br>";

        ?>

    </body>
</html>