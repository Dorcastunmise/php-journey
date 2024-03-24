<?php
require_once 'db.php';   # to avoid including the file multiple times
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>PHP Data Objects (PDO)</title>
</head>
<body>
    <header>
        <h1> PHP Data Objects (PDO)</h1>
    </header>
    <main>
        <p> Database Connected!</p>
        <?php
        $user   = '';
        $em     = '';
        # to retrieve & display data without passing parameters
        $basicSQL  = "SELECT * FROM users";
        $recordset = $conn->query($basicSQL);

        while($row = $recordset->fetch()) echo'row <br>';

        #passing parameters using prepare() and execute() method
        $namedSQL = "SELECT * FROM users WHERE fullName = ?";
        $userName = 'Fred Bernad';
        $prepared = $conn->prepare($namedSQL);
        $prepared->execute(array($userName)); #taking array values to place them in prepared statements and execute them

        # checking number of rows
        if($prepared->rowcount() > 0) {
            # $prepared->setFetchMode(PDO::FETCH_NUM);
            # $prepared->setFetchMode(PDO::FETCH_BOTH);

            $prepared->setFetchMode(PDO::FETCH_ASSOC); #accessing it as an assoiciative array
            echo '<table>';

            # looping though the arrays (i.e recordset rows)
            while($row = $prepared->fetch()) {
                echo '<tr>';
                echo '<td>' . $row['ID'] .'</td>';
                echo '<td>' . $row['email'] .'</td>';
                echo '<td>' . $row['password'] .'</td>';
                echo '<td>' . $row['firstName'] .'</td>';
                echo '<td>' . $row['surName'] .'</td>';
                echo '<td>' . $row['fullName'] .'</td>';


                echo '</tr>';
            }

            echo '</table>';
        }else {
            echo "'<p>' . no existing records matches value . '</p>'";
        }

        # Using Named Parameters
        $namedSQL = "SELECT ID, email, fullName FROM users WHERE fullName=:un OR email LIKE :em";
        $user = "Otito Koro";
        $em = "@yahoo.com";

        $named = $conn->prepare($namedSQL);
        $named->execute(array(':em'=>$em ,':un'=>$user));

        echo '<table>';

        if($named->rowcount() > 0) {
            # $named->setFetchMode(PDO::FETCH_NUM);
            # $named->setFetchMode(PDO::FETCH_BOTH);

            #$named->setFetchMode(PDO::FETCH_ASSOC); accessing it as an assoiciative array

            # placing/binding first column(ID) that returns into other columns
            $named->bindColumn(1, $id);
            $named->bindColumn(2, $e);
            $named->bindColumn(3, $f);

            echo '<table>';

            # looping though the arrays (i.e recordset rows)
            while($row = $named->fetch()) {
                echo '<tr>';
                /*
                echo '<td>' . $row['ID'] .'</td>';
                echo '<td>' . $row['email'] .'</td>';
                echo '<td>' . $row['password'] .'</td>';
                echo '<td>' . $row['firstName'] .'</td>';
                echo '<td>' . $row['surName'] .'</td>';
                echo '<td>' . $row['fullName'] .'</td>';
                */
                echo '<td>' . $id .'</td>';
                echo '<td>' . $e .'</td>';
                echo '<td>' . $f .'</td>';

                echo '</tr>';
            }

            echo '</table>';
        }else {
            echo "'<p>' . no existing records matches value . '</p>'";
        }

        echo '</table>';

        ?>
    </main>
</body>
</html>