<?php
$to ='peacemercy93@gmail.com';
$subject  = 'Client :'. $_POST['name'];
$website=($_POST['websiteurl'] != ' ')?$_POST['websiteurl'] : '&nbsp;';
$message = '<p>'. $_POST['mobile'] .'</p>
<p>'. $_POST['message'].
	'<br/>'.
	$website.
	'</p>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: <'.$_POST['email'].'>' . "\r\n".
"Reply-To: peacemercy93@gmail.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion(); 
//$headers .= 'Cc:support@nzeudoedufoundation.com' . "\r\n";
// send email to me period okay 
if(mail($to,$subject,$message,$headers)){
	echo('SEND');
}else{
	
	echo('error');
}








?>