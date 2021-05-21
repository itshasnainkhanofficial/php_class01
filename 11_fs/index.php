<?php
// Magic constants, they change their values based on their execution
// echo __FILE__ . '<br>';
// echo __DIR__ . '<br>';
// echo __LINE__. '<br>';

// Create directory
// mkdir('test');

// Rename directory
// rename('test', 'test2');

// Delete directory
// rmdir('test');

// // Read files and folders inside current directory
// $files = scandir('./');
// echo '<pre>';
// var_dump($files);
// echo '</pre>';


// // Read files and folders inside parent directory
// $files = scandir('../');
// echo '<pre>';
// var_dump($files);
// echo '</pre>';


// // // file_get_contents, file_put_contents
// $lorem = file_get_contents('lorem.txt'); // get content of file
// echo $lorem;
// echo '<br>';

// file_put_contents('lorem.txt', "First line " . $lorem);

// // file_get_contents from URL
// $jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
// // The json_decode() function is used to decode or convert a JSON object to a PHP object
// $users = json_decode($jsonContent , false); // true to convert into associative array , false for object
// echo "<pre>";
// var_dump($users);
// echo "</pre>";


// $jsonobj = '{"Kamran":35,"Ali":37,"kashan":43}'; // json data

// $obj = json_decode($jsonobj); // by default false , convert into php object

// echo $obj->Kamran;
// echo $obj->Ali;
// echo $obj->kashan;


// $jsonobj = '{"Kamran":35,"Ali":37,"kashan":43}'; // json data

// $arr = json_decode($jsonobj, true); // convert into asociative array

// echo $arr["Kamran"];
// echo $arr["Ali"];
// echo $arr["kashan"];






// // Check if file exists or not
// file_exists('lorem.txt'); // return boolean
// is_dir("test"); // checking if directory present // return boolean

// // Get file size
// filesize('lorem.txt');

// // Delete file
// unlink('lorem.txt');

// // https://www.php.net/manual/en/book.filesystem.php
