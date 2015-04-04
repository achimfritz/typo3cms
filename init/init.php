<?php

$user = 'dev';
$password = 'dev';
$host = 'localhost';
$database = 'typo3cms_live';

$conn = new mysqli($host, $user, $password);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error . "\n");
}

// Create database
$sql = 'CREATE DATABASE ' . $database . ' DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci';
if ($conn->query($sql) === TRUE) {
    echo 'Database created successfully' . "\n";
} else {
    die('Error creating database: ' . $conn->error . "\n");
}

$conn->close();

$cmd = 'zcat ' . __DIR__ . '/typo3cms_live.sql.gz| mysql -h ' . $host . ' -u ' . $user . ' --password=' . $password . ' ' . $database;
exec($cmd, $output, $return);
if ($return !== 0) {
	die('Error cannot insert dump' . "\n");
} else {
    echo 'Database insert successfully' . "\n";
}
$cmd = 'cp -rp ' .  __DIR__ . '/shared ' . ' ' . __DIR__ . '/../../';
exec($cmd, $output, $return);
if ($return !== 0) {
	die('Error cannot create shared' . "\n");
} else {
    echo 'shared folder created successfully' . "\n";
}

