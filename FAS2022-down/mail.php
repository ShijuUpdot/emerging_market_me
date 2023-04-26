<?php
//print "<pre>";
//print_r($_POST);
//exit();

$name 		=	$_POST['full-name'];
$jt			=	$_POST['job-title'];
$com_name	=	$_POST['company'];
$email		=	$_POST['email'];
$mobile		=	$_POST['mobile'];
$intrest	=	$_POST['intrest'];



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
        $mail->addAddress('mark@emergingmarketsme.com', 'Emerging Markets Middle East'); 
        $mail->addAddress('Tarek@semark.com.sa', 'Emerging Markets Middle East');     // Add a recipient
        //$mail->addAddress('kaminikakkar93@gmail.com');               // Name is optional
        

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Registration Form - Future Airport summit';
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
        								<td>Job Title </td>
        								<td>'.$jt.'</td>
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
        								<td>Interest </td>
        								<td>'.$intrest.'</td>
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
<p class="success-msg">Your Registration is successfull <br> thank you for your interest!<br>Incase of Emergency Contact: +91 8050524951<a href="home.html" class="btn btn-default">ok</a>

</p> 