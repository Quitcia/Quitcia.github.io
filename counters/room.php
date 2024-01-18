<?php 
    include 'db_conn.php';
    $sql = "SELECT * FROM room WHERE deleteStatus = '0'";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>