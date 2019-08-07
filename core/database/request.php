<?php

require('connection.php');

if(isset($_POST['insert'])){

  $requestedBot = $_POST['request'];
  $email = $_POST['email'];

  if(empty($requestedBot && $email)) {

    $msg = "All fields must be completed";

    header('location:/request-bot.php?msg=' . $msg);

  } else {

    $PDOQuery = "INSERT INTO politibot.botrequests(`botrequest`, `email`) VALUES(:requestedBot, :email)";

    $PDOResult = $conn->prepare($PDOQuery);

    $PDOExecute = $PDOResult->execute(array(":requestedBot"=>$requestedBot, ":email"=>$email));

    if($PDOExecute) {
      $msg = "Your bot has been requested";

      header('location:/request-bot.php?msg=' . $msg);
    } else {
      $msg = "No joy with your bot";

      header('location:/request-bot.php?msg=' . $msg);
    }

  }
}

 ?>
