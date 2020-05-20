<?php
  header("Content-Type: text/plain");
  $identifier = isset($_GET['identifier']) ? $_GET['identifier'] : null;

  if ($identifier == null)
  {
    echo 'Вы не передали параметр';
  }
  else
  {
    if (checkIdentifier($identifier))
    {
      echo $identifier . 'является идентификатором'
    }
    else
    {
      echo $identifier . 'не является идентификатором'
    }

  }

  function checkIdentifier(string $identifier): bool
  {
    $result = true;
    $letters = ['a' .. 'z'];
    $digits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    if (ctype_digit($identifier[0]))
    {
      $result = false;
    }
    else
    {
      for ($i = 0; $i < strlen($identifier); ++$i)
      {
        if (in_array($identifier[$i], $letters) || in_array($identifier[$i], $digits) && $result)
        {
          $result = true;
        }
        else
        {
          $result = false;
          break;
        }
      }
    }
    return $result;
  }
