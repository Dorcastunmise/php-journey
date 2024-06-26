# PHP

This is a server-side scripting language embedded in HTML in its simplest form. PHP allows creation of dynamic content and interaction with databases. It's known for its simplicty, speed and flexibility.

## MVC Architecture
    Scenario: Client/browser sends a request, which goes through a router. Router inturn decides which controller to execute. Controller then passes it to the model layer. Model layer passes the data to a data store/database. Then retrieves the data from the data store and passes it to the controller. Then the controller passes it to the view. The view rendered and displayed to the screen/browser/client.
    Form validation is the job of the controller. And the job should be taken to another sublayer to keep the controller thin as much as possible.

    Model: handles business logic and manages data of the application. Processes and stores the data.
    View: makes it easy to use templates
    Controller: deals with requests, responses. Handles resoucres 
        An architecture separating data and business logic from presentation layer.


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

## Strict Typing
    declare(strict_types=1);

## PHPmyadmin    
    
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

## var_dump:
    Dumps information about a variable

## spl_autoload_register([ callable $autoload_function [, bool $throw [, bool $prepend ]]]): bool
    Register given function as __autoload() implementation

## To access constants in another file
    classname::constant using the scope resolution e.g Transaction::STATUS_PAID; 
    Class constants are located once per class & not per instance (i.e there's no need to have the instance of the class to access the class constants). The constants can be accessed on the object level too. e.g
    $transaction = new Transaction();
    $transaction::STATUS_PAID;

## Abstraction
    Process whereby the internal actual implementation details of an object are hidden from the user. Encapsulation hides the internal state / information.

## Inheritance
    Avoid adding a __construct() to a child class when absent in its parent class. final keyword is used to prevent inheritance and method overwriting e.g 
        final class Toster
        
        // another file
            class TosterPro extends Toster //won't work 

    PHP 8 does not support multiple inheritance but supports multilevel inheritance.

## Abstract class
    Its like a template / base class the child class can extend from. 
    - Abstract classes cannot be instantiated but can only be extended i.e cannot create objects directly from abstract classes. 
    - Abstract classes method can only contain definition or signature of the abstract class and not an implementation.
    - It's the child class duty to implement these abstract methods. 
    - Abstract methods can either be public or protected.
    - Can only extend a single class
    - Can implement interfaces within abstract classes

## Interface
    Defines all necessary actions objects must have. 
    - All methods declared within the interface must be implemented within the concrete classes that implements the interface. An all methods declared in an interface must be public. 
    - Usually, <b>implements</b> keyword is used by a concrete class wanting to use/access an interface e.g
        interface DebtCollector {}
            // another file
                class CollectionAgency implements DebtColllector.

    - extends keyword can be used by an interface wanting to access multiple interfaces e.g
        interface DebtCollector extends CollectorClaim, CollectionAgency {}
    The negative effect is, any concrete class that implements such interface will have to provide implementation for all the methods used in the interface and also the interfaces implemented.
    - One cannot have properties in interfaces but constants.
    - Can only contain methods & constants
    - Interfaces can be used when 
        a. When a class can have multiple implementations
        b. Bunch of conditionals using instanceof or switch / if/else statements
        c. When in need of template or contract without providing implementation details

## Traits
    Used to reduce code duplication and increase code reuse. To use the trait keyword, the use keyword is needed. It will import the code from the trait into the class (or wherever its implementation is needed) at compile time. 
    Rules: 
    - Objects of traits cannot be instantiated. Except you use traits within traits or classes
    - Order of precidence: the class method defined directly in the class ...then ..trait method defined in the trait and then the base method defined in the parent class
    - Traits allow independent2 classes share common fucntionality

## Identity Operator (===) vs Comparison Operator (==)
    Comparison Operator: the two objects will be equal if they are the same instances of a class and share the same value
    Identity Operator: the two objects will be equal if they point/refer to the same instance of a class

## DocBlock (@param && @return)
    @return: used to documenta return type
    @param: used to document an argument of a function method

## Serialization 
    A process of converting a value in a string form. Methods cannot be serialized. Serialization can be used to pass values around / save them for use in database/somewhereelse. Serialization can also be used for deep copying /cloning. Serialization will serialize the properties and their classes as well except the methods. An unserialized property/object does not create same object.

## Exception
    Exception is simply an object of exception class that describes an error. It disrupts normal flow of code execution. Can be thrown manually or as a result of error in the php (from built-in functions or from one's code). On 0can only throw exceptions if the instance of the thrown object is an exception class or instance of throwable interface.

## Superglobal
    $_SERVER, $_REQUEST, $_GET, $_POST, $_SESSION
    1. $_SERVER: contains information about the server and execution environment. Use case:
    i. To build basic routing. Routing allows us to structure the app in a better way.

    2. Cookies 
    - are stored on client side
    - remains till set expiration date/when deleted
    - used for session management
    - for tracking targeted ads
    - used to store info to enhance user experience on website
    - must be set before any output

    3. Sessions 
    - are stored on the server
    - destroyed as soon as the browser is closed
    - must be started before any output otherwise issues will be faced e.g sessions cannot be sent after headers send a warning.

## HTTP Status codes
    100-199: Informational
    200-299: 200-OK, 201-Created, 204-No content
    300-399: Redirect. 301 - moved permanently, 304 - not modified.
    400-499: Client error. 401-unauthorized. 403-forbidden. 404-not found. 405-method not allowed
    500-599: Server errors. 500-internal server error. 502-bad gateway. 

## To create a table in sql
    CREATE TABLE users (
    id int UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    email varchar(255) UNIQUE NOT NULL,
    full_name varchar(255) NOT NULL,
    is_active boolean DEFAULT 0 NOT NULL,
    created_at datetime NOT NULL,
    KEY `is_active`(`is_active`)
    );

## To alter a table
    ALTER TABLE tablename ADD COLUMN columnname varchar(150), DROP COLUMN columname, MODIFY full_name varchar(150)
    ALTER TABLE `users` CHANGE `ID` `ID` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`ID`);
    ALTER TABLE `users` ADD `firstName` VARCHAR(25) NOT NULL AFTER `password`, ADD `surName` VARCHAR(25) NOT NULL AFTER `firstName`;
    

## to produce a description of table.
    DESCRIBE tablename

## Update
    UPDATE tablename SET email = 'jane@gmail.com' WHERE id = 2;
    UPDATE `users` SET `firstName` = 'Eze', `surName` = 'Nahim', `fullName` = 'Eze Nahim' WHERE `users`.`ID` = 1; UPDATE `users` SET `firstName` = 'Otito', `surName` = 'Koro', `fullName` = 'Otito Koro' WHERE `users`.`ID` = 2; UPDATE `users` SET `ID` = '3', `firstName` = 'Fred', `surName` = 'Bernad', `fullName` = 'Fred Bernad' WHERE `users`.`ID` = 5;

## Testing
    Unit Test: tests small piece of code i.e single function & mocks/fakes any needed dependencies or database connections. 
    Integeration tests: tests multiple modules or units together ( i.e method that connects to database, runs queries & returns something). Dependies can be resolved (instead of being mocked) & can use connection.

## TDD - Test Driven Development
    Tests are witten first while code is written after. Test with a test case is written. It is made to run(of course which fails). Then a code is written to make it pass. Then, the steps are repeated while refactoring and organizing the code.

## BDD - Behaviour Driven Development
    Tests are also witten first while code is written after. Behaviours are written in simple english.

## Debug
    echo - output strings, numbers, html etc
    print - works like echo, but, can only take in a single argument. e.g print 123;
    print_r() - prints single arrays and value e,g print_r([1,2,3]);
    var_dump() - returns more info like data type and length e.g var_dump(true);
    var_export() - outputs a string representation of a variable. e.g var_export('Hello');