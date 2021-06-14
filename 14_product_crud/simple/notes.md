<?php
// https://www.tutorialrepublic.com/php-tutorial/php-mysql-crud-application.php
1. PHP 5 and later can work with a MySQL database using:

- MySQLi extension (the "i" stands for improved)
- PDO (PHP Data Objects)
2. Earlier versions of PHP used the MySQL extension. However, this extension was deprecated in 2012.
## Should I Use MySQLi or PDO?
If you need a short answer, it would be "Whatever you like".

- Both MySQLi and PDO have their advantages:

- PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

- So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.

- Both are object-oriented, but MySQLi also offers a procedural API.

- Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.


- In this, and in the following chapters we demonstrate three ways of working with PHP and MySQL:

1. MySQLi (object-oriented)
2. MySQLi (procedural)
3. PDO


- create table using the following query 
```
CREATE TABLE employees (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
salary int(30) NOT NULL,
) 
```


// // https://www.javatpoint.com/php-pdo#:~:text=Advantage%20of%20PDO,uniform%20access%20across%20several%20databases.
?>