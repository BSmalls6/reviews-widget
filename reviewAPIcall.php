$access_token = "<your_access_token_here>";
$query = array('comment' => 'Thank you for visiting our business!');
$request_uri = "https://mybusiness.googleapis.com/v4/accounts/111050869667910417441/locations/17405754705905257334/reviews/AIe9_BFu3rdicGrPrzdyu4PDXmqMAu-9BCJf9_HF0DxzGxsjAGw5KGl1XsdqSkbsAMdl_W2XBG4bwO3wCp0_l_8KLAV7mckl5cSyJItwPqSYGiH3ktK6nrI/reply?access_token=" . $access_token;
$curinit = curl_init($request_uri);
curl_setopt($curinit, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curinit, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($curinit, CURLOPT_POSTFIELDS, json_encode($query));
curl_setopt($curinit, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curinit, CURLOPT_HTTPHEADER, array(
  'Content-Type: application/json',
  'Content-Length: ' . strlen(json_encode($query)))
);
$json = curl_exec($curinit);
$phpObj = json_decode($json, true);
var_dump($phpObj);


