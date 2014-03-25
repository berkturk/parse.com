<?php
function parse($message)
{
	$ch = curl_init(); 
	 
	$arr = array();
	array_push($arr, "X-Parse-Application-Id: ApplicationID");
	array_push($arr, "X-Parse-REST-API-Key: Rest Api Key");
	array_push($arr, "Content-Type: application/json");
	 
	curl_setopt($ch, CURLOPT_HTTPHEADER, $arr);
	curl_setopt($ch, CURLOPT_URL, 'https://api.parse.com/1/push');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, '{ "channel": "","data": { "alert": "'.$message.'" } }');
	 
	curl_exec($ch);
	curl_close($ch);
}
echo parse('Bildirim');
?>