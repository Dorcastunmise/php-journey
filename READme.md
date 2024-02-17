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

# PHPmyadmin    
    
1. Difference between CHAR and VARCHAR

CHAR and VARCHAR are both data types used to store character strings in relational database management systems (RDBMS), such as MySQL, PostgreSQL, and others. However, they have some key differences in terms of storage and usage:

Fixed vs. Variable Length:

CHAR: Stands for character, and it is a fixed-length data type. When you declare a column as CHAR(10), for example, it will always occupy 10 characters of storage, regardless of the actual length of the data stored. If you store a shorter string, it will be padded with spaces to fill the fixed length.
VARCHAR: Stands for variable character, and it is a variable-length data type. If you declare a column as VARCHAR(10), it will only use as much storage as needed for the actual length of the data stored. There is no padding with spaces.
Storage Efficiency:

CHAR: Can be less storage-efficient, especially when dealing with shorter strings, as it always reserves the fixed amount of space.
VARCHAR: More storage-efficient, especially for columns that may contain varying lengths of data.
Performance:

CHAR: Can be more efficient for fixed-length data and can perform better in certain scenarios where fixed-length storage is an advantage.
VARCHAR: Can be more efficient in terms of storage, especially for columns with varying data lengths, and might perform better in scenarios where the length of the data varies widely.
Use Cases:

CHAR: Suitable for fixed-length data, such as storing codes, codes, or other identifiers with a consistent length.
VARCHAR: More suitable for variable-length data, like names, addresses, or descriptions, where the length can vary.
Example:

sql
Copy code
CREATE TABLE ExampleTable (
    char_column CHAR(10),
    varchar_column VARCHAR(10)
);

INSERT INTO ExampleTable (char_column, varchar_column) VALUES
    ('abc', 'abc'),
    ('12345', '12345');
In this example, the char_column will always occupy 10 characters of storage, while the varchar_column will only use the necessary amount of storage for the actual data ('abc' and '12345' in this case).

2. Different Indexes in a Database:
a. Primary Key:
Purpose: Uniquely identifies each record in a table.
Properties:
Unique: No two rows can have the same primary key value.
Not Null: Cannot have a NULL value.
Automatically indexed: Most database systems automatically create an index for the primary key.
b. Unique Index:
Purpose: Ensures that all values in a column are unique.
Properties:
Similar to a primary key but does not automatically create a clustered index.
Allows NULL values but treats each NULL as a unique value.
c. Index:
Purpose: Improves the speed of data retrieval operations on a database table.
Properties:
Creates an ordered list of values, along with a pointer to the location of the data in the table.
Speeds up the retrieval of rows from the table but can slow down the data input, modification, and deletion.
d. Fulltext Index:
Purpose: Used for full-text searches on text-based columns.
Properties:
Designed for large text fields.
Allows searching for words or phrases within the text efficiently.
3. SQL Operators:
a. LIKE Operator:
Purpose: Used to search for a specified pattern in a column.
Usage:
LIKE 'pattern': Matches a specific pattern.
LIKE '%pattern%': Matches any sequence of characters (including none) in the middle of a string.
b. = Operator:
Purpose: Tests equality.
Usage:
= value: Matches an exact value.
c. IN(...) Operator:
Purpose: Tests whether a specified value matches any value in a list.
Usage:
IN (value1, value2, ...): Matches any of the specified values.
When to Use Each Operator:
LIKE:

Use when you want to search for a pattern within a string, e.g., names starting with a specific letter or containing a particular substring.
= Operator:

Use when you want an exact match for a specific value.
IN(...) Operator:

Use when you want to check if a value matches any value in a list.
Considerations:

Use LIKE for partial matching.
Use = for exact matches.
Use IN(...) when checking against multiple possible values.
It's important to choose the appropriate operator based on the specific requirements of your query and the type of comparison you need.