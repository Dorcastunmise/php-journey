<?php
    include("database.php");
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["ID"] . "<br>";
            echo $row["User"] . "<br>";
            echo $row["Register_date"] . "<br>";
        }
    }else {
        echo "No user found";
    }
    mysqli_close($conn);
?>