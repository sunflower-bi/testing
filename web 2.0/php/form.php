<html>
    <body>
        <form>
            Enter First Number 
            <input type="number" name="number1" /><br><br>
            Enter Second Number 
            <input type="number" name="number2" /><br><br>

            <input type="submit" name="submit" value="ADD" />
        </form>
    </body>

    <?php
    $number1=$_GET['number1'];
    $number2=$_GET['number2'];

    $result=$number1+$number2;
    
    echo "The sum of $number1 and $number2 is $result."
    ?>
</html>