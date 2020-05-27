<?php
  header("Content-Type: text/plain");
  $inputText = isset($_GET['password']) ? $_GET['password'] : null;
  if ($inputText !== null)
  {
    echo countPasswordDifficulty($inputText);
  }
  else
  {
    echo 'Введены некорректные данные';
  }

  function countPasswordDifficulty(string $password): int
  {
    $digits = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
    $difficulty = strlen($password) * 4;
    $digitsCount = 0;
    $upperCaseLettersCount = 0;
    $lowerCaseLettersCount = 0;
    $hasDigits = false;
    $hasLetters = false;
    for ($i = 0;$i < strlen($password);$i++)
    {
      if (in_array($password[$i], $digits))
      {
        $digitsCount++;
        $hasDigits = true;
      }
      if (ctype_upper($password[$i]))
      {
        $upperCaseLettersCount++;
        $hasLetters = true;
      }
      if (ctype_lower($password[$i]))
      {
        $lowerCaseLettersCount++;
        $hasLetters = true;
      }
      if (substr_count($password[$i], $password) > 1)
      {
        $difficulty = $difficulty - substr_count($password[$i], $password);
      }
    }
    if (!$hasDigits)
    {
      $difficulty = $difficulty - strlen($password);
    }
    if (!$hasLetters)
    {
      $difficulty = $difficulty - strlen($password);
    }
    $difficulty = $difficulty + $digitsCount * 4;
    $difficulty = $difficulty + ((strlen($password) - $upperCaseLettersCount) * 2);
    $difficulty = $difficulty + ((strlen($password) - $lowerCaseLettersCount) * 2);
    return $difficulty;
  }
?>
