<!-- Deleting data ...It's  -->
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=database', 'oluwatunmise', 'password');
    
    if(isset($_POST['user_id'])) {
        $sql = "DELETE FROM users WHERE user_id = :zip";
        echo "<pre>\n$sql\n</pre>\n";
        $statement = $pdo->prepare($sql);
        $statement->execute(array(':zip' => $POST['user_id']));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Delete a user</p>
    <form action="<?php htmlspecialchars($_POST($_SERVER('PHP_SELF')))?>" method="post">
        <p>ID to delete</p>
        <input type="text" name="user_id">
        <p><input type="submit" value="Delete"></p>
    </form>
</body>
</html>