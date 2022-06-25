<?php

  // ALL SEND
  $api = "API_KEY";
  $numbers = ["05353512525","05353512525","05353512525"];
  $message = urlencode("Deneme Mesaj");

  foreach ($numbers as $item) {
    file_get_contents("https://platform.clickatell.com/messages/http/send?apiKey=" . $api . "&to=" . $item . "&content=" . $message);
  }

  // SINGLE SEND
  $no = "05353512525";
  file_get_contents("https://platform.clickatell.com/messages/http/send?apiKey=" . $api . "&to=" . $item . "&content=" . $message); 

?>
