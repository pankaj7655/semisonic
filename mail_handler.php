<?php
 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_tel = $_POST['tel'];
$message = $_POST['message'];

$email_from = $visitor_email;

$email_subject = "New Form Submission";

$email_body = " 
<html>

<head>
    <title>Document</title>
</head>

<body>
<p>Dear Sir/mam,<p>

    <table border='1' style='width: 50%;'>
        <tr>
            <th>
                <img src='http://www.digitalrishikul.com/assets/images/education/logo.png' alt='logo'>
            </th>
            <th colspan='3'>
                <p style='font-size: 25px; text-decoration: underline; text-align:center'>Student Contact Detail.
                </p>
            </th>
        </tr>
        <tr>
            <th style='background-color: aqua;'>NAME</th>
            <td style='padding: 15px; font-size: 18px;'>$name</td>
        </tr>
        <tr>
            <th style='background-color: aqua;'>E-MAIL</th>
            <td style='padding: 15px; font-size: 18px;'>$visitor_email</td>

        </tr>
        <tr>
            <th style='background-color: aqua;'>MOBILE NO.</th>
            <td style='padding: 15px; font-size: 18px;'>$visitor_tel</td>
        </tr>
        <tr>
            <th style='background-color: aqua;'>MESSAGE</th>
            <td style='padding: 15px; font-size: 18px;'>$message</td>
        </tr>

    </table>
    <p style='margin-bottom: 0px;'>Thanks&regards</p>
    <p style='margin-top: 0px;'>$name</p>
</body>

</html>";

// Always set content-type when sending HTML email
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$email_from."\r\n".
    'Reply-To: '.$visitor_email."\r\n" .
    'X-Mailer: PHP/' . phpversion();

$to = "digitalrishikul@gmail.com";

$success = mail($to,$email_subject,$email_body,$headers);
 
 // Send email 
if($success){ 
    echo true;
}else{ 
   echo false;
}

exit;
?>