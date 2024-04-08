<?php
require_once('db_conn.php');

function display_data(){
    global $conn;
    $query = "SELECT * FROM users";
    $result = $conn->query($query);
    return $result;
}
?>
