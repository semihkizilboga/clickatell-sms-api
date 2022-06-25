<?php


  // TOPLU GÖNDERME
  
        $api = "API_KEY";

	$numbers = ["05353512525","05353512525","05353512525"];
	$message = urlencode("Deneme Mesaj");

	foreach ($numbers as $item) {
		file_get_contents("https://platform.clickatell.com/messages/http/send?apiKey=" . $api . "&to=" . $item . "&content=" . $message);
	}

  
  // TEKLİ GÖNDERME

 
	$no = "05353512525";
	$message = urlencode("Deneme Mesaj");
 
	file_get_contents("https://platform.clickatell.com/messages/http/send?apiKey=" . $api . "&to=" . $item . "&content=" . $message); 


?>
