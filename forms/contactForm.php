<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if(isset($_POST['sendMail'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

//        require_once "PHPMailer/PHPMailer.php";
//        require_once "PHPMailer/SMTP.php";
//        require_once "PHPMailer/Exception.php";
//
        $mail = new PHPMailer();
//
//        // smtp settings
//        $mail->isSMTP();
//        $mail->Host = "smtp.gmail.com";
//        $mail->SMTPAuth = true;
//        $mail->Username= "wisdometpetscenter@gmail.com";
//        $mail->Password= "WisdometPetCenter2021";
//        $mail->Port = 456;
//        $mail->SMTPSecure = "ssl";



        // email settings
        $mail->isHTML(true);
        $mail->setFrom($email,$name);
        $mail->addAddress("wisdometpetscenter@gmail.com");  /* error come from here to be solve */
        $mail->Subject = ("$email ($subject)");
        $mail->Message = $message;

        if($mail->send()) {
            $status = "success";
            $response = "Email sent successfully";
        }else{
            $status = "failed";
            $response = "Something Went Wrong";
        }
        exit(json_encode(array("status" => $status, "response" => $response)));
    }
// WisdometPetCenterCare2021 email password