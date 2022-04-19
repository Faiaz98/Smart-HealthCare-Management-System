<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../shms/class/phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../shms/class/phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php';
require '../shms/class/phpmailer/vendor/autoload.php';

require_once "../shms/class/phpmailer/vendor/autoload.php";
//include('class/Appointment.php');
function send_mail($to,$subject,$mailbody)
{
	$mail = new PHPMailer;
			$mail->SMTPDebug = 3;
			$mail->IsSMTP();
			$mail->Host = "smtp.gmail.com";
			$mail->SMTPAuth = true;
			$mail->Username = "faiaz.sama@gmail.com";
			$mail->Password = "xgvvkyibrmceaahl";
			$mail->SMTPSecure = "tls";
			$mail->port = 587;
			$mail->From = "faiaz.sama@gmail.com";
			$mail->FromName = "Smart HealthCare";
			$mail->AddAddress($to);
			$mail->IsHTML(true);
			$mail->Subject = $subject;

			// $message_body = '
			// <p>For verify your email address, Please click on this <a href="'.$object->base_url.'verify.php?code='.$patient_verification_code.'"><b>link</b></a>.</p>
			// <p>Sincerely,</p>
			// <p>Smart HealthCare</p>
			// ';
			$mail->Body = $mailbody;
			echo "Message has been sent";
			if($mail->Send())
			{
				//echo '<div class="alert alert-success">Please Check Your Email for email Verification</div>';
				$success = '<div class="alert alert-success">Please Check Your Email for email Verification</div>';
			}
			else
			{
				echo '<p>Your message has been sent!</p>';
				
				$error = '<div class="alert alert-danger">' . $mail->ErrorInfo . '</div>';
			}
}
?>