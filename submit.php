<?php

require_once('conn.php');
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['contact_us'])) {
    $enquiry = [];

    foreach ($_POST as $key => $value) {
        $enquiry[$key] = mysqli_real_escape_string($conn, trim($value));
    }
    extract($enquiry);
    $c_on = date('Y-m-d H:i:s');
    $new_enq = "INSERT INTO `contact_enq` (`f_name`, `l_name`, `email`, `ph_no`, `message`, `status`, `c_on`, `c_by`)
        VALUES ('$f_name', '$l_name', '$email', '$ph_no', '$message', '1', '$c_on', 'Admin')";
    $sts_enq = mysqli_query($conn, $new_enq);
    if ($sts_enq) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'naveenprabakaran2522@gmail.com'; // Your Gmail address
            $mail->Password = 'harlecvurtpwkwvw'; // Gmail App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            // Recipients
            $mail->setFrom($email, $f_name . ' ' . 'From Contact Form');
            $mail->addAddress('naveenprabakaran2522@gmail.com'); // your receiving address
            // Content
            $mail->Subject = 'New Enquiry from ' . $f_name;
            $mail->Body = "Name: $f_name $l_name\nEmail: $email\nPhone: $ph_no\n\nMessage:\n$message";
            $mail->send();
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        // echo "Error: " . $stmt->error;
    }
}

if (isset($_POST['popup_enquiry'])) {
    require_once('conn.php'); // Make sure this is at the top
    $enquiry = [];
    foreach ($_POST as $key => $value) {
        $enquiry[$key] = mysqli_real_escape_string($conn, trim($value));
    }
    extract($enquiry);
    $c_on = date('Y-m-d H:i:s');
    $new_enq = "INSERT INTO `popup_enq` (`name`, `contact_no`, `email`, `prev_class`, `class`, `message`, `c_on`)
        VALUES ('$name', '$contact_no', '$email', '$prev_class', '$class', '$message', '$c_on')";
    $sts_enq = mysqli_query($conn, $new_enq);

    if ($sts_enq) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'naveenprabakaran2522@gmail.com';
            $mail->Password = 'harlecvurtpwkwvw'; // Avoid keeping this in plaintext
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom($email, $name . ' From Popup Form');
            $mail->addAddress('naveenprabakaran2522@gmail.com');
            $mail->Subject = 'New Enquiry from ' . $name;
            $mail->Body = "Name: $name\nEmail: $email\nPhone: $contact_no\nPrevious Class: $prev_class\nClass: $class\nMessage: $message";
            $mail->send();

            echo "<script>alert('Enquiry submitted successfully!'); location.reload();</script>";
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
