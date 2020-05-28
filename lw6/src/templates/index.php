<?php
  include __DIR__ . 'common.inc.php';
  if (getRequestMethod() === 'POST')
  {
      validateForm();
  }
  else
  {
      mainPage();
  }
