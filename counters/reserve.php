<?php 
    include 'db_conn.php';
    $sql = "SELECT * FROM booking";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>