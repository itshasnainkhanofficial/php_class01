<?php

// Explain what is cookie
// Cookie is a piece of data saved in browser and sent to server and back
// on every request/response

// How to set cookies
setcookie('name', 'Kashan', time() + 60);

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

// How to update cookie
setcookie('name', 'Kamran', time() + 2 * 60);

// How to delete cookie
setcookie('name', 'Kamran', time() - 1);

