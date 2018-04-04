<?php


$pdo = new PDO(
  'mysql:host=localhost;dbname=guest_list_booking','root', 'rootroot'
);


if (count($_POST) >0)
{
  $seatNumber = filter_input(INPUT_POST, 'seatNumber', FILTER_VALIDATE_INT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) // is the given value a email?

}




var_dump($_POST);