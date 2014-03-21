<?php 

	 
	include_once 'tools/easyemail.php'; 
	//or you can use the last version of my class like this: include_once 'http://www.lellysinformatica.com/php/easy_email.php'; 
	//The email's subject 
	$subject = "Cadastro realizado no Canil Blessing of God"; 
	
	//The email's message 
	$msg = "<html> 
	        <body> 
	        <p>A pessoa referente ao e-mail (".$_POST['email'].") gostaria de receber as novidades do Site.</p> 
	        </body> 
	        </html>"; 
	
	//Inicialize a new easy_email object 
	//destinatario e from 
	$easy_email = new EasyEmail('alayo05@gmail.com, alberto.alvarez81@gmail.com', 'alayo05@gmail.com'); 
	
	/* 
	 * You can customize you email like this: 
	 *  
	 * $easy_email->setIsHTML = true;  This will tell the email to include or not the HTML body on the header. The default is true. 
	 * $easy_email->setShowFrom = true; This will show the sender in the destination's mailbox. The default is true. 
	 */ 
	
	$easy_email->sendEmail($subject, $msg); //Send the email 
	
	//We verify if the email was succefull sent 
	if ($easy_email->getIsSent()) 
	    echo 'Sent'; 
	else 
	    echo 'Fail'; 
?> 