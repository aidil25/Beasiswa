<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'd4rpl1a@gmail.com';                 // SMTP username
$mail->Password = 'angkatan17rpl2a';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('d4rpl1a@gmail.com', 'Beasiswa PNP');

    $mail->addAddress($_POST['email'], $_POST['nama']);
	// $mail->addAddress ("idingaidil@gmail.com", "Aidil Pimnas");
    $mail->isHTML(true);
    $mail->Subject = "Aktivasi pendaftaran User Beasiswa";
    // $mail->Body    = "Hallo";
    $mail->Body    = "Selamat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini.<br> <a href='http://localhost:8081/beasiswapolitekniknegeripadang/backend/activation.php?t=".$token."'>http://localhost:8081/beasiswapolitekniknegeripadang/backend/activation.php?t=".$token."</a>  ";
    $mail->send();

// if (!$mail->send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// } else {
//     echo "Message sent!";
//     //Section 2: IMAP
//     //Uncomment these to save your message in the 'Sent Mail' folder.
//     #if (save_mail($mail)) {
//     #    echo "Message saved!";
//     #}
// }
