<?php

// require('core/database/connection.php');

if(isset($_POST['insert'])){

  $requestedBot = $_POST['name'];
  $email = $_POST['email'];

  if(empty($requestedBot && $email)) {

    $msg = "All fields must be completed";

    header('location:/request-bot.php?msg=' . $msg);

  }
}

 ?>
