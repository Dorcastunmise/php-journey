<!-- 
    $pdo = new PDO('mysql:host=localhost;dbname=database', 'oluwatunmise', 'password');
    $statement = $pdo->query("SELECT 'hello, dear MySQL user!' AS _message FROM DUAL");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $pdo = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo htmlentities($row['_message']);
-->

<?php
    $pdo = new PDO('mysql:host=localhost;dbname=database', 'oluwatunmise', 'password');
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        echo("<pre>\n".$sql."\n</pre>\n");
        $statement = $pdo->prepare($sql);
        $statement->execute(array(
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':password' => $_POST['password']));
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
    <p>Add a new user</p>
    <form action="<?php htmlspecialchars($_SERVER("PHP_SELF"))?>" method="post">
        <p>Name: <input type="text" name="name" size="40"></p>
        <p>Email: <input type="text" name="email"></p>
        <p>Password: <input type="text" name="password"></p>
        <p><input type="submit" value="Add New"></p>
    </form>
</body>
</html>