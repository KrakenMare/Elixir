<?php
$host = 'localhost';
$user = 'root';
$pass = 'TheDankestOfPasswords';
$db = 'rotmgprod';
$conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
