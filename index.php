	// TOPLU GÖNDERME
  
  $api = "API_KEY";
	$no = [PHONE_NUMBER,];
	$message = urlencode("Deneme Mesaj");

	foreach ($no as $item) {
		file_get_contents("https://platform.clickatell.com/messages/http/send?apiKey=" . $api . "&to=" . $item . "&content=" . $message);
	}

  
  // TEKLİ GÖNDERME

  
  $api = "API_KEY";
	$no = "PHONE_NUMBER";
	$message = urlencode("Deneme Mesaj");
 
	file_get_contents("https://platform.clickatell.com/messages/http/send?apiKey=" . $api . "&to=" . $item . "&content=" . $message); 
