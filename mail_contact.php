<?php 
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];
?>



<?php
// multiple recipients
$to  = 'info@nikro.lk'; // note the comma


// subject
$subject = '-- Contact | Inquiry Details --';

// message
$message = '<table border="0" width="250">
	<tr>
		<td>Full Name</td>
		<td>: '.$fname.'</td>
	</tr>
	<tr>
		<td>Phone</td>
		<td>: '.$phone.'</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>: '.$email.'</td>
	</tr>
	<tr>
		<td>Message</td>
		<td>: '.$msg.'</td>
	</tr>
	
</table>
';

// To send HTML mail, the Content-type header must be set

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers

$headers .= 'From: www.nikro.lk <info@nikro.lk>' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);
echo "<script type='text/javascript' >window.location ='index.html';</script>";
?>
