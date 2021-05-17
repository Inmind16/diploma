<?php
    $first = $_POST['first'];
    $second = $_POST['second'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $first = htmlspecialchars($first);
    $second = htmlspecialchars($second);
    $tel = htmlspecialchars($tel);
    $email = htmlspecialchars($email);

    $first = urldecode($first);
    $second = urldecode($second);
    $tel = urldecode($tel);
    $email = urldecode($email);

    $first = trim($first);
    $second = trim($second);
    $tel = trim($tel);
    $email = trim($email);

    echo $first;

    



?>