<!-- 
    1. Cookies are arbitrary pieces of data chosen by the web server and sent to the browser.
       The browser returns them intact & unchanged to the server, introducing a state (memory of previous events)
       into otherwise stateless transactions (The Web is a stateless system). 
    2. Without cookies, each retrieval of a web page is an isolated event, 
       mostly unrelated to all other views of the pages of the same site. 
    3. Cookies are marked as to the web addresses they come from. The browser only sends back cookies that were 
       originally sent by the web server.
    4. Cookies have an expiration date (some last for years, while some are short-term as they go away as the
       browser is closed)
    5. A web server recognizes a particular web browser through Cookies
    6. If a browser is contacting a server for the very first time, the browser does not send cookies in its first request.
    7. If a browser does not support cookies, PHP maintain a session by including the session identifier 
       as a parameter every GET and POST request
 -->

<?php
    // setcookie("fav_food", "pizza", time() +(86400 * 2), "/"); //86400 secs = 24hrs
    // setcookie("language", "PHP", time() + (86400 * 3), "/");
    // setcookie("Coursera", "saved application", time() + (86400 * 4), "/");

    // //to delete a cookie use subtraction instead of addition
    // setcookie("fav_food", "pizza", time() - (86400 * 2), "/");
    // //or as
    // // setcookie("fav_food", "pizza", time() - 0, "/")

    // foreach($_COOKIE as $key=>$value) {
    //     echo " {$key} = {$value} <br>";
    // }
    // if(isset($_COOKIE["fav_food"])) {
    //     echo "Buy some {$COOKIE["fav_food"]} !!";
    // }else {
    //     echo "Favourite food is unknown";
    // }

    # Cannot have any output before setcookie
    if(!isset($_COOKIE['zap'])) {
        setcookie('zap', '42', time()+3600);
    }
?>
<pre>
    <?php print_r($_COOKIE); ?>
</pre>
<p><a href="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" >Click Me!</a></p>
