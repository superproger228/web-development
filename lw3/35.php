<?php
    header("Content-Type: text/plain");

    $email = isset($_GET['email']) ? $_GET['email'] : null;

    if ($email !== null)
    {
        $filename = 'data/' . $email . '.txt';
        $file = fopen($filename, 'r');
        $first_name = fgets($file);
        $last_name = fgets($file);
        $email = fgets($file);
        $age = fgets($file);
        echo 'First Name: ' . $first_name . "\n";
        echo 'Last Name: ' . $last_name . "\n";
        echo 'Email: ' . $email . "\n";
        echo 'Age: ' . $age . "\n";
    }
    else
    {
        echo 'Введены некорректные данные';
    }
