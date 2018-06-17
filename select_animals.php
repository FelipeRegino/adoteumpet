<?php
    require_once('connect.php');

    $sql = "SELECT id, foto, nome  FROM animal";
    $results = $conn->query($sql);
    $results = $results->fetch_all(MYSQLI_ASSOC);

    $conn->close();
?>