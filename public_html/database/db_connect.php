<?php 

// Database name
$database_name = "/home/henry/code/demo-php-sqlite/public_html/database/my_db.db";

// Database Connection
$db = new SQLite3($database_name);

// Create Table "books" in Database (if doesn't exist)
$query = "CREATE TABLE IF NOT EXISTS books (name STRING, author STRING)";

$db->exec($query);