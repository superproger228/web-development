<?php
  header("Content-Type: text/plain");

  function getQueryStringParameter(string $name): ?string
  {
    return isset($_GET[$name]) ? $_GET[$name] : null;
  }

  $first_name = getQueryStringParameter('first_name');
  $last_name = getQueryStringParameter('last_name');
  $email = getQueryStringParameter('email');
  $age = getQueryStringParameter('age');

  if ($email != null)
  {
    $filename = 'data/' . $email . '.txt';
    if (!file_exists('data/'))
    {
      mkdir('data/', 0777, true);
    }
  $file = fopen($filename, 'w');
  $text = 'Фамилия = ' . $last_name . "\r\n" . 'Имя = ' . $first_name . "\r\n" . 'Возраст = ' . $age;
  fwrite($file, $text);
  fclose($file);
  }
  else
  {
    echo 'Введены некорректные данные';
  }
?>
