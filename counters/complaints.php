<?php 
    include 'db_conn.php';
    $sql = "SELECT * FROM complaint";
    $query = $connection->query($sql);

    echo "$query->num_rows";

?>