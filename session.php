<!--
    1. In most server applications, as soon as a new (unmarked) browser is opened,
        a session is created. 
    2. A session cookie is stored in browser. It indicates session ID in use. 
        It gives the browser a unique mark. 
    3. The creation and destruction of sessions is handled by the web framework or some 
        utility code used in applications.
    4. Login info & shopping cart info are stored in the session in the server
    5. The session is in the web server. The cookie unlocks the sesson & can also reassociate
        the session.
    6. sesson_destroy() does not change the session ID but deletes the keys in it. 
        So, it empties the session out
    7. session_start() has to be made before using the session/any output
    8. session_start() is used to i. Make a new session ii. Restore an old session
    9. Sessions are server controlled and are protected from the users direct access to it.
    10. PHP applications can make changes to the $_SESSION variable (end-users can't).
    11. Generally, if there are no cookies for a web site in the browser, PHP will make a new session as
        soon as the user tries to access the url.
    12. non-session cookies stored on the hard drive of the user's computer
    13. The typical session identifier is a large random number chosen by the server
    14. If a browser does not support cookies, PHP maintain a session by including 
        the session identifier as a parameter every GET and POST request


-->
<?php 
    session_start();
    if(!isset($_SESSION['pizza'])) {
        echo 'Session is empty';
        $_SESSION['pizza'] = 0;
    } elseif($_SESSION['pizza'] < 3) {
        $_SESSION['pizza'] = $_SESSION['pizza'] + 1;
        echo 'Added one....\n;';
    } else {
        session_destroy();
        session_start();
        echo ' Session Restarted';
    }

?>
<p><a href="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>"></a></p>
<P>Session ID is: <b><?php  echo(session_id()); ?></b></P>
<pre>
    <?php print_r($_SESSION); ?>
</pre>
