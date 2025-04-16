<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include('./conn.php');

if (isset($_POST['new_enquiry'])) {
    $enquiry = [];
    // Iterate through each element in the $_POST array
    foreach ($_POST as $key => $value) {
        // Trim whitespace and escape the data to prevent SQL injection
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
            $mail->Username = 'naveenprabakaran2522@gmail.com'; // your Gmail address
            $mail->Password = 'harlecvurtpwkwvw';   // Gmail App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom($email, $f_name . ' ' . 'From Contact Form');
            $mail->addAddress('naveenprabakaran2522@gmail.com'); // your receiving address

            // Content
            $mail->Subject = 'New Enquiry from ' . $f_name;
            $mail->Body = "Name: $f_name $l_name\nEmail: $email\nPhone: $ph_no\n\nMessage:\n$message";

            $mail->send();
            // e/cho "Thank you! Your enquiry has been sent.";
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {

        // echo "Error: " . $stmt->error;
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Maharishi</title>

    <!-- Style CDN -->
    <?php include('./cdn_style.php'); ?>

    <link rel="stylesheet" href="./assets/css/contact.css">

</head>

<body>

    <div class="main">

        <?php include('./navbar.php'); ?>

        <!-- Header -->
        <div class="header">
            <div class="headerdiv">
                <!-- <video data-src="./assets/videos/Maharishi_School_2.mp4" type="video/mp4" autoplay muted loop preload="none">
                </video> -->
                <div class="headercntnt">
                    <img data-src="./assets/images/logo_main.png" class="lazy mb-4" height="100px" alt="">
                    <h6 class="mb-4" data-aos="fade-up" data-aos-delay="100">Contact Us</h6>
                    <h3 class="mb-4" data-aos="fade-up" data-aos-delay="200">Here to help you Anytime</h3>
                    <button class="headbtn mb-4" data-aos="fade-up" data-aos-delay="300">Explore Our Programs <i
                            class="fas fa-arrow-right ps-1"></i></button>
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="contactinfo">
            <div class="contactinfodiv">
                <div class="contactinfoct">
                    <h4 data-aos="fade-right" data-aos-delay="100">Contact Info</h4>
                    <!-- <h2>We are always happy to assist you</h2> -->
                </div>
                <div class="contactinfoct">
                    <h5 data-aos="fade-down" data-aos-delay="100">Address</h5>
                    <h4 data-aos="fade-down" data-aos-delay="200">___</h4>
                    <h6 data-aos="fade-down" data-aos-delay="300">Ettimanickampatti, Salem - Coimbatore By Pass NH-47,
                        Rakkipatty, Salem - 637504.</h6>
                </div>
                <div class="contactinfoct">
                    <h5 data-aos="fade-down" data-aos-delay="100">Contact Number</h5>
                    <h4 data-aos="fade-down" data-aos-delay="200">___</h4>
                    <h6 data-aos="fade-down" data-aos-delay="300"><a href="tel:+919962060007">+91 99620 60007</a></h6>
                    <h6 data-aos="fade-down" data-aos-delay="400" class="mt-0"><a href="tel:+917373008666">+91 73730
                            08666</a></h6>
                </div>
                <div class="contactinfoct">
                    <h5 data-aos="fade-down" data-aos-delay="100">Email Address</h5>
                    <h4 data-aos="fade-down" data-aos-delay="200">___</h4>
                    <h6 data-aos="fade-down" data-aos-delay="300"><a
                            href="mailto:mvmschoolsalem@gmail.com">mvmschoolsalem@gmail.com</a></h6>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="contactmain">
            <div class="contactdiv">
                <div class="contactmap">
                    <div class="contacthead">
                        <h2 class="text-start" data-aos="fade-down" data-aos-delay="100">For Enquiry</h2>
                        <h5 class="text-start" data-aos="fade-down" data-aos-delay="200">Contact Us and Get your answers
                        </h5>
                    </div>
                    <div class="contactmapdiv" data-aos="fade-up" data-aos-delay="300">
                        <div style="max-width:100%;overflow:hidden;color:red;width:100%;height:350px;">
                            <div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe
                                    style="height:100%;width:100%;border:0;" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=Ettimanickampatti,+Salem+-+Coimbatore+By+Pass+NH-47,+Rakkipatty,+Salem+-+637504.&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div>
                            <style>
                                #my-map-canvas img {
                                    max-width: none !important;
                                    background: none !important;
                                    font-size: inherit;
                                    font-weight: inherit;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="contactform">
                    <form action="" method="post" class="row">
                        <div class="col-sm-12 col-md-6 col-xl-6" data-aos="fade-down" data-aos-delay="100">
                            <label for="">First Name *</label>
                            <input type="text" id="" class="form-control" name="f_name" required>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-6" data-aos="fade-down" data-aos-delay="200">
                            <label for="">Last Name *</label>
                            <input type="text" id="" class="form-control" name="l_name" required>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-12" data-aos="fade-down" data-aos-delay="300">
                            <label for="">Email ID *</label>
                            <input type="email" id="" class="form-control" name="email" required>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-12" data-aos="fade-down" data-aos-delay="400">
                            <label for="">Contact Number *</label>
                            <input type="number" id="" class="form-control" name="ph_no" required>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-12" data-aos="fade-down" data-aos-delay="500">
                            <label for="">Message</label>
                            <textarea rows="3" id="" class="form-control" name="message"
                                placeholder="Write Your Message"></textarea>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-12 d-flex justify-content-center align-items-center"
                            data-aos="fade-down" data-aos-delay="600">
                            <button type="submit" name="new_enquiry" class="headbtn w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include('./footer.php'); ?>

    </div>

    <!-- Scripts -->
    <?php include('./cdn_script.php'); ?>

</body>

<script>
    AOS.init();
</script>

</html>