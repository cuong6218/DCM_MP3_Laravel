<?php

const DBHOST = 'localhost';        // Database Hostname
const DBUSER = 'duong';             // MySQL Username
const DBPASS = 'Gaubeo@';                 // MySQL Password
        const DBNAME = 'Mp3Zing3';  // MySQL Database name

        // Data Source Network
$dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . '';

// Connection Variable
$conn = null;

// Connect Using PDO (PHP Data Output)
try {
    $conn = new PDO($dsn, DBUSER, DBPASS);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
}
