

<html>
    <head>

    </head>
    <body>
        
        <form action="prepa1.php" method="post" >
            <label for="">Username: </label>
            <input type="text" name="username" id=""> <br>
            <label for="">Password: </label>
            <input type="password" name="password" id=""> <br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>
<?php
    echo $_POST['username']."<br>";
    echo $_POST['password']."<br>";


?>