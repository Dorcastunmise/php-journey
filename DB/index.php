<!__

<?php
    include("database.php");

    // $username = "Patrick";
    // $password = "rock3";
    // $hash = password_hash($password, PASSWORD_DEFAULT);
    // $sql = "INSERT INTO users (User, Password)
    // VALUES('$username', '$password')";
    $sql1 = "INSERT INTO users (User, Password)
    VALUES('George Bush', 'USA')";

    try {
        mysqli_query($conn, $sql1);
        echo "User is now registered";
    } catch (mysqli_sql_exception) {
        echo "Could not register user";
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    Hallo
</body>
</html>