<?php
# Notes For CRUD in php

## Crud
- C reate
- R ead
- U pdate
- D elete
## Create database
    
CREATE TABLE employees (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
salary int(30) NOT NULL,
) 

## Three ways
1. Mysqli
    1. procedural
    2. OOP
2. PDO (OOP)

## Should I Use MySQLi or PDO?
If you need a short answer, it would be "Whatever you like".

- Both MySQLi and PDO have their advantages:

- PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

- So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.

- Both are object-oriented, but MySQLi also offers a procedural API.

- Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.

## Prepared Statements and Bound Parameters
A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.

## Prepared statements basically work like this:
- Prepare: An SQL statement template is created and sent to the database. Certain values are left unspecified, called parameters (labeled "?"). Example: INSERT INTO MyGuests VALUES(?, ?, ?)
- The database parses, compiles, and performs query optimization on the SQL statement template, and stores the result without executing it
- Execute: At a later time, the application binds the values to the parameters, and the database executes the statement. The application may execute the statement as many times as it wants with different values
- Compared to executing SQL statements directly, prepared statements have three main advantages:
    1. Prepared statements reduce parsing time as the preparation on the query is done only once (although the statement is executed multiple times)
    2. Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query
    3. Prepared statements are very useful against SQL injections.

### Binding
- (for mysqli)
$stmt = $conn->prepare("INSERT INTO employees (firstname, salary ) VALUES (? , ?)");
$stmt->bind_param("si", $firstname , $salary);
$firstname = "Yasir";
$salary = 5000;
$stmt->execute();


- (for pdo)
$stmt = $conn->prepare("INSERT INTO employees (firstname) VALUES (:firstname)");
$stmt->bindParam(':firstname', $firstname);
$firstname = "Nehal";
$stmt->execute();
  
1. i - integer
2. d - double
3. s - string
4. b - BLOB

BLOB stands for Binary Large Object that can hold a variable amount of data. It’s used for storing binary data and for the columns of high-capacity binary storage. You can store any file type including PDF documents, MP3 Files and Video Files.
to learn more about BLOB datatype read this [https://tableplus.com/blog/2019/10/mysql-blob.html]



?>