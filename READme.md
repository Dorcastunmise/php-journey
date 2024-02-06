<<<<<<< HEAD
# PHP

This is a server-side scripting language embedded in HTML in its simplest form. PHP allows creation of dynamic content and interaction with databases. It's known for its simplicty, speed and flexibility.

## Paradigm:
    Procedural, object-oriented, functional, reflective.

## Designer:
    Rasmus Lerdorf

## Developer: 
    PHP development team, Zend Technologies, PHP Foundation

## OS:
    UNIX-like, Windows, MacOS, IBM, OpenVMS

## TYPING Discipline: 
    Dynamic, Weak, gradual

## Implementation language:
    C(primarily, some components C++)

## First appeared: 
    June 8, 1995

## Initial Acronym: 
    P = Personal 
    H = Home 
    P = Page

## Present Acronym:
    P = PHP
    H = Hypertext
    P = Preprocessor

## How PHP works:
    A browser sends a request (http request) to server, then PHP in the server processes the request, then the server sends HTML back to the browser. The server can also communicate to a database then back to the web browser.

PHP is commmonly used with <b> Relational Database </b> e.g MySQL, MsSQL Server, PostgreSQL, ORACLE

## Prerequisites:
    HTML5, MySQL, Web server (e.g XAMPP server), text editor

## Operators
    Arithmetic operators (+ - * / % **)
    Assignment operators (= += -= *= /= %= **=)
    String operators (. .=)
    Comparison operators (= == === !== !=== <> < > <= >= <=> ?? ?:)
    Error Control operators (@)
    $x = @file('index.php'); @ use to control errors
    Increment/Decrement Operators (++, --)
    Logical operators (&& || ! and or xor)
    Bitwise operators (& | ^ ~ << >>)
    Array operators (+ == === !== <> !===)
    Execution operators (``)
    Type operators (instanceof)
    Nullsafe operator (?)

## Operator Precedence
    (), **, * / %, + - 

## $_GET, $_POST
    Special variables used to collect data from HTML form data. Form's data is sent to the file in action attribute of <form> e.g <form action="some_file.php" method="get">
<b>$_GET</b> = Data is appended to URL
            Character limit
            Bookmark is possible
            Requests can be cached
            Better for a search page            
            Not secure

<b>$_POST</b> = Data is packeged in HTTP request body
                No data limit
                Cannot bookmark
                Requests are not cached
                Better for credentials submission
                More secure

## Logical operators:
    Combines conditional statements e.g &&, ||, !

## Switch:
    Replacement to using many elseif statements more efficient, less code to write

## For-loop:
    Repetition of code for specific number of times

## While-loop:
    do some code infinitely while some condition remains true

## Associative array:
    An array made of key=>value pairs e.g state and capital

## isset() & empty():
    isset() returns true if a variable is defined and not null
    empty() returns true if a variable is not declared, false, null, ""

## include():
    copies file content, then includes it to php file. Section of website becomes reusable and changes are only needed to be made in one place

## Cookie:
    Information about a user stored in a user's web-browser targeted used in advertisements, browsing preferences and other non-sensitive data
    setcookie (string $name, $value = "", $expires_or_options = 0, $path = "", $domain = "", $secure = false, $httponly = false)

## $_SESSION:
    Its a super global variable used to store info of a user across multiple pages. Once a session is created, a user is assigned a session-id. It is used for login credentials

## $_SERVER:
    A super global variable that shows nearly everything one needs to know about current web page environment. It contains headers, paths and script locations. The entries in the array are created by web server.

## Hashing:
    Used to hide important data from 3rd parties. Involves transforming sensitive data (password) into letters, numbers &/ symbols thru a mathematical process.

## Types
    4 Scalar Types: Bool, Int, Float, String
    4 Compound Types: Array, Object, Callable, Iterable
    2 Special Types: Resource, Null
    PHP supports strict typing. Its typing occurs at runtime (Php is dynamically typed)

## Strict Typing
    declare(strict_types=1);

## Array key
    {
        $array = ['a' => 1, 'b' => null];

        //this checks if the key exists
        var_dump(array_key_exists('b', $array));

        //this checks if the key exists & if it is null
        var_dump(isset($array['b']));
    }
=======
# PHP

This is a server-side scripting language embedded in HTML in its simplest form. PHP allows creation of dynamic content and interaction with databases. It's known for its simplicty, speed and flexibility.

## Paradigm:
    Procedural, object-oriented, functional, reflective.

## Designer:
    Rasmus Lerdorf

## Developer: 
    PHP development team, Zend Technologies, PHP Foundation

## OS:
    UNIX-like, Windows, MacOS, IBM, OpenVMS

## TYPING Discipline: 
    Dynamic, Weak, gradual

## Implementation language:
    C(primarily, some components C++)

## First appeared: 
    June 8, 1995

## Initial Acronym: 
    P = Personal 
    H = Home 
    P = Page

## Present Acronym:
    P = PHP
    H = Hypertext
    P = Preprocessor

## How PHP works:
    A browser sends a request (http request) to server, then PHP in the server processes the request, then the server sends HTML back to the browser. The server can also communicate to a database then back to the web browser.

PHP is commmonly used with <b> Relational Database </b> e.g MySQL, MsSQL Server, PostgreSQL, ORACLE

## Prerequisites:
    HTML5, MySQL, Web server (e.g XAMPP server), text editor

## Operator Precedence
    (), **, * / %, + - 

## $_GET, $_POST
    Special variables used to collect data from HTML form data. Form's data is sent to the file in action attribute of <form> e.g <form action="some_file.php" method="get">
<b>$_GET</b> = Data is appended to URL
            Character limit
            Bookmark is possible
            Requests can be cached
            Better for a search page            
            Not secure

<b>$_POST</b> = Data is packeged in HTTP request body
                No data limit
                Cannot bookmark
                Requests are not cached
                Better for credentials submission
                More secure

## Logical operators:
    Combines conditional statements e.g &&, ||, !

## Switch:
    Replacement to using many elseif statements more efficient, less code to write

## For-loop:
    Repetition of code for specific number of times

## While-loop:
    do some code infinitely while some condition remains true

## Associative array:
    An array made of key=>value pairs e.g state and capital

## isset() & empty():
    isset() returns true if a variable is defined and not null
    empty() returns true if a variable is not declared, false, null, ""

## include():
    copies file content, then includes it to php file. Section of website becomes reusable and changes are only needed to be made in one place

## Cookie:
    Information about a user stored in a user's web-browser targeted used in advertisements, browsing preferences and other non-sensitive data
    setcookie (string $name, $value = "", $expires_or_options = 0, $path = "", $domain = "", $secure = false, $httponly = false)

## $_SESSION:
    Its a super global variable used to store info of a user across multiple pages. Once a session is created, a user is assigned a session-id. It is used for login credentials

## $_SERVER:
    A super global variable that shows nearly everything one needs to know about current web page environment. It contains headers, paths and script locations. The entries in the array are created by web server.

## Hashing:
    Used to hide important data from 3rd parties. Involves transforming sensitive data (password) into letters, numbers &/ symbols thru a mathematical process.

## Types
    4 Scalar Types: Bool, Int, Float, String
    4 Compound Types: Array, Object, Callable, Iterable
    2 Special Types: Resource, Null
    PHP supports strict typing. Its typing occurs at runtime (Php is dynamically typed)

## Strict Typing
    declare(strict_types=1);
>>>>>>> 693c0a508b30295dc1dafd09b0823d8b4d7b82b5
