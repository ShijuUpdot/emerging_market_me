<?php
//print "<pre>";
//print_r($_POST);
//exit();

$name 		=	$_POST['name'];
$file			=	$_POST['file'];
$com_name	=	$_POST['company'];
$email		=	$_POST['mail'];
$mobile		=	$_POST['mobile'];
$position	=	$_POST['role'];
$exp	=	$_POST['exp'];
$subject	=	$_POST['subject'];
$message	=	$_POST['message'];



require 'PHPMailer/PHPMailerAutoload.php';



        $mail = new PHPMailer;

        //$mail->SMTPDebug = 2;                               // Enable verbose debug output


        //$mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'glamorage.linkedin@gmail.com';                 // SMTP username
        $mail->Password = 'glamorage_1234';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->setFrom($email, $name);
        $mail->addAddress('mark@emergingmarketsme.com', 'Emergingmarketsme'); 
        //$mail->addAddress('kaminikakkar93@gmail.com', 'Emergingmarketsme');     // Add a recipient
        //$mail->addAddress('kamini.k@traiconevents.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
       //$mail->addCC('marketing@traiconevents.com','Traiconevents');
        //$mail->addBCC('imran@traiconevents.com','imran');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Registration Form - Emergingmarketsme  2020';
        $mail->Body    = '
        				<html>
        					<head>
	        					<title>Registration</title>
	        					<style>
	        						table{
	        							width: 75%;
	        							background: #E5E5E5;
	        						}
	        						tr th{
	        							background: #7CA52B;
	        							color: #fff;
	        							padding: 5px;
	        						}
	        						tr td: first-child{
	        							text-align: left;
	        						}
	        						tr td: last-child{
	        							text-align: left;
	        						}
	        						td{
	        							padding: 5px;
	        							border: 1px solid #111;
	        						}
	        					</style>
        					</head>
        					<body>
        						<table>
        							<tr>
        								<th>Required details</th>
        								<th>User Data</th>
        							</tr>
        							<tr>
        								<td>Full Name </td>
        								<td>'.$name.'</td>
        							</tr>
        							<tr>
        								<td>File </td>
        								<td>'.$file.'</td>
        							</tr>
        							<tr>
        								<td>Company Name </td>
        								<td>'.$com_name.'</td>
        							</tr>
        							<tr>
        								<td>E-mail Id </td>
        								<td>'.$email.'</td>
        							</tr>
        							<tr>
        								<td>Mobile Number </td>
        								<td>'.$mobile.'</td>
        							</tr>
        							
        							<tr>
        								<td>Past Organization </td>
        								<td>'.$sponsors.'</td>
        							</tr>
        							<tr>
        								<td>Years of experience </td>
        								<td>'.$exp.'</td>
        							</tr>
									
                                    <tr>
        								<td>Subject </td>
        								<td>'.$subject.'</td>
        							</tr>
                                    <tr>
        								<td>Message </td>
        								<td>'.$message.'</td>
        							</tr>
        						</table>
        					</body>
        				</mthl>
        				';
        $mail->AltBody = '';

        //echo $mail->Body;
        //exit();
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }  
?>
<p class="success-msg">Your Registration is successfull <br> thank you for your interest!<br>Incase of Emergency Contact: +91 9916304951<a href="home.html" class="btn btn-default">ok</a>

</p> 