<?php
/**Barebone Control Panel*/
/**2017 Illumin Design*/

if (!isset($access_include)) exit;

// DATABASE ACCESS INFORMATION (Edit as needed) ===================================================
$pdo_host = ''; #CHANGE THIS TO YOUR CONFIGURATION
$pdo_db   = '';
$pdo_user = '';
$pdo_pass = '';
$charset  = 'utf8';
$driver   = 'mysql';

// DATABASE CONNECTION ============================================================================
$pdo_dsn = "$driver:host=$pdo_host;dbname=$pdo_db;charset=$charset";
$pdo_opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Oh boy, here I go connecting again... ==========================================================
try{
    $pdo_connection = new PDO($pdo_dsn, $pdo_user, $pdo_pass, $pdo_opt);
} catch (PDOException $E) {
    die('<h1 style="text-align:center;">Cannot connect to database! Please check configuration.</h1>'.$E);
}