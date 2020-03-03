<!DOCTYPE html>
<html lang="en">
<?php
   
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action= "submit.php" method="POST">
    <input type = "text" name="firstn" placeholder ="Firstname"><br>
    <input type = "text" name="lastn" placeholder ="Lastname"><br>
    <button type ="submit" name ="submit">Submit</button>
    </form>

    <P>Displaying my input:</p>
    <?php
    //conection to database
    include_once 'include.php';
//selecting all data from table
    $sql = "SELECT * FROM test;";
    //database query
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
//checking for none empty database
    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo $row ['first'] . "<br>";
            echo $row ['last'] . "<br>";
        }

    }
    ?>
 
</body>
</html>