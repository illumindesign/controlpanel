<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

// DATABASE ACCESS INFORMATION (Edit as needed) ===================================================
$bbcp_host = 'localhost'; #CHANGE THIS TO YOUR CONFIGURATION
$bbcp_db   = '';
$bbcp_user = '';
$bbcp_pass = '';
$charset = 'utf8';
$driver = 'mysql';

// DATABASE CONNECTION ============================================================================
$dsn = "$driver:host=$bbcp_host;dbname=$bbcp_db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try{
    $bbcp_connection = new PDO($dsn, $bbcp_user, $bbcp_pass, $opt);
} catch (PDOException $E) {
    die('<h1 style="text-align:center;">Cannot connect to database! Please check configuration.</h1>');
}