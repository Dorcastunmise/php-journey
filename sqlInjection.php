<!------------------- SQL INJECTION -------------------------
It's a code injection technique that exploits a security vulnerability
in some computer software. An injection occurs at the database level
of an application (like queries). Vulnerability is present when user input is either incorrectly
filters for string literal escaped characters embedded in SQL statements or user input is not 
strongly typed & unexpectedly executed. Using well-designed query language
interpreters can prevent SQL injections.
-->
<?php
    # When statement is executed, the placeholders get replaced with actual 
    # strings and everything is automatically escaped
    
    if (isset($_POST['email']) && isset($_POST['password']) ) {
        echo("Handling POST data...\n");
        $sql = "SELECT name FROM users WHERE email = :em AND password = :pw";
        echo "<pre>\n$sql\n</pre>\n";#
        # the user's input has to be processed
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':em' => $_POST['email'],
            ':password' => $_POST['password']
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>