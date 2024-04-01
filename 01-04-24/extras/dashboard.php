<?php
    session_start();

    if(isset($_SESSION['username'])) {
        echo "<h3>Welcome</h3>" . "<i>".$_SESSION['username'] . "</i>". '<br>' . '<br>';
        echo '<a href="logout.php"> Logout </a>';
    } else {
        echo "<h1> Welcome Dear Distinguished </h1>";
        echo '<a href="../sessions.php"> Home </a>';
    }

?>
