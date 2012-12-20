<?php

function planner_mail($to, $subject, $body){
	$headers = "From: admin@raaj.comlu.com \r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset: UTF-8; \r\n";
	mail($to,$subject,$body,$headers);
}

function planner_mail_attachment($filename, $path, $to, $subject, $body) {
    $file = $path. "/" .$filename;
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);
    $header = "From: admin@raaj.comlu.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .= $body."\r\n\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; // use different content types here
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $header .= $content."\r\n\r\n";
    $header .= "--".$uid."--";
    mail($to, $subject, "", $header);
}

function getMailUsers(){
	return array(
		'raaj' => 'rangaraaj.v@gmail.com'
		, 'priya' => 'shabeen.rajaram@gmail.com'
		, 'babu' => 'babu.rajaram2@gmail.com'
		, 'murthy' => 'pvmoorthy50@yahoo.com'
	);
}
?>
