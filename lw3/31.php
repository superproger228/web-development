<?php
  header("Content-Type: text/plain");
  $text = isset($_GET['text']) ? $_GET['text'] : null;
  if ($text == null)
  {
    echo 'Вы не передали параметр';
  }
  else
  {
    echo removeExtraBlanks($text);
  }

  function removeExtraBlanks(string $text): string
  {
    $result = '';
    $isBlank = true;
    for ($i = 0; $i < strlen($text); ++$i)
    {
      if ($text[$i] == ' ')
      {
        if $isBlank == false;
        {
          $result .= ' ';
          $isBlank = true;
        }
      }
      else
      {
        $result .= $text[$i];
        $isBlank = false;
      }
    }
    return $result;
  }
