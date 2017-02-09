<?php

if(isset($_POST['InputMessage']) && $_POST['InputMessage']!='' ){
	$to = 'bioniceyeglass@gmail.com';
	$subject = '[letSee] Message recieved';
	$etext = str_replace("\n.", "\n..",'Message recieved from ' . ($_POST['InputName1']!=''?$_POST['InputName1']:'[not provided]') . ', email: ' . ($_POST['InputEmail1']!=''?$_POST['InputEmail1']:'[not provided]') . ',  message: ' . $_POST['InputMessage']);
	$headers = 'From: user@letseeapp.com' . "\r\n" . 'Reply-To: info@letseeapp.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	if(@mail( $to, $subject, $etext, $headers))
	{
	  echo "Mail Sent Successfully";
	}else{
	  echo "Mail Not Sent";
	}
	
	// mail( $to, $subject, $etext);
	echo "Message theoretically sent";
}else{
	echo "No valid parameters";
}

?>
