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

      $to = "david@sellmysnaps.com";

      $from = $_POST['email'];

      $request = $_POST['request'];

      $subject = "Politi-bot requested";

      $subjectSender = "Confirmation of Politi-bot form submission";

      $message = "You received a bot request from " . $email . " for " . $request . ".";

      $messageSender = "You requested " . $request . " at Politi-bot.";

      $headerFrom = "From:" . $from;

      // $headerTo = "To:" . $to;

      mail($to,$subject,$message,$headerFrom);

      mail($from,$subjectSender,$messageSender,$headerFrom);

      $msg = "Your bot has been requested. You will receive email confirmation shortly.";

      header('location:/request-bot.php?msg=' . $msg);
    } else {
      $msg = "No joy with your bot";

      header('location:/request-bot.php?msg=' . $msg);
    }

  }
}

 ?>
