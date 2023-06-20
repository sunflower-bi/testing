<html>
    <body>
        <form action="dbaction.php" method="post">
            NAME: <input type="text" name="name"><br><br>
            AGE: <input type="number" name="age"><br><br>
            GENDER: <input type="radio" name="gender" value="M">Male
                    <input type="radio" name="gender" value="F">Female <br><br>
            <input type="submit">
        </form>
        <p>click on the below button to open another php file</p>
        <input type="button" value="click me" onclick="widnow.location='testdb.php'">
    </body>
</html>