<?php

// $name=elgg_get_logged_in_user_entity()->name;

require $_SERVER["DOCUMENT_ROOT"].'/constants.php'; 
$token= $_COOKIE['token'];

$filename = $_FILES['file']['name'];
$filedata = $_FILES['file']['tmp_name'];
$filesize=$_FILES['file']['size'];

$file = fopen($filedata, "rb");

$url = ROOT_URL.'/vospace-2.0/1/files_put/dropbox/test/'.rawurlencode(basename($_FILES["file"]["name"])).'?overwrite=true';

$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PUT, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Auth-Token:'.$token,'Content-Type:application/file'));		
curl_setopt($ch, CURLOPT_INFILE, $file);
curl_setopt($ch, CURLOPT_INFILESIZE, $filesize);

$response = curl_exec($ch);
curl_close($ch);

if ($response) {
  echo $response;
}
else {
  echo "Upload Failed!";
}

?>