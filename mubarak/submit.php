<?php
    if(isset($_POST['submit'])) {

        include_once 'include.php';
    //for database securitycan also be done other way but that other way is not secure
        $first = mysqli_real_escape_string($conn, $_POST['firstn']);
        $last = mysqli_real_escape_string($conn, $_POST['lastn']);
//putting data into the database table
    $sql = "INSERT INTO test (first, last) VALUES ('$first','$last');";
    $result = mysqli_query($conn, $sql);
    //success url on successful attempt
                    header("location:index.php?signup=success");
}else{
    //return page if above is not valid
    header("location: index.php");
    exit();
}   
    ?>