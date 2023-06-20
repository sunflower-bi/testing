<html>
    <head> <title> Passing argument by value and by reference </title> </head>
    <body>

        <?php 
        function addFive($num){
            $num+=5;
        }
        function addSix(&$num){
            $num+=6;
        }

        $orignum=10;

        addFive($orignum);
        echo "The original number is ". $orignum ."<br> <br>";

        addSix($orignum);
        echo "The original number is ". $orignum ."<br> <br>";

        ?>

    </body>
</html>