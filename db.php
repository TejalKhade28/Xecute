<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DBNAME = 'task-manager';
const DB_PORT='3307';
$dbcon = new mysqli(HOST, USERNAME, PASSWORD, DBNAME,DB_PORT);

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}
?>