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






