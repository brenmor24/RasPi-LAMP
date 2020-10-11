<?php // query2.php
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "select * from foodList";
    $result = $conn->query($query);
    if (!$result) die($conn->error);

    echo 'Favorite Foods' . '<br>' . '<br>';

    $result->data_seek(0);
    echo '1) ' . $result->fetch_assoc()['meal'] . '<br>';

    $result->data_seek(1);
    echo '2) ' . $result->fetch_assoc()['meal'] . '<br>';

    $result->data_seek(2);
    echo '3) ' . $result->fetch_assoc()['meal'] . '<br>';

    $result->data_seek(3);
    echo '4) ' . $result->fetch_assoc()['meal'] . '<br>';

    $result->data_seek(4);
    echo '5) ' . $result->fetch_assoc()['meal'] . '<br>';

    $result->data_seek(5);
    echo '6) ' . $result->fetch_assoc()['meal'] . '<br>';

    $result->data_seek(6);
    echo '7) ' . $result->fetch_assoc()['meal'] . '<br>';

    $result->data_seek(7);
    echo '8) ' . $result->fetch_assoc()['meal'] . '<br>';

    

    $result->close();
    $conn->close();
?>