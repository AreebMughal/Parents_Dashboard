<!-- <?php
// require 'sendgrid/sendgrid.php';
// require 'sendgrid/vendor/autoload.php';
require 'sendgrid-php/sendgrid-php.php';
    $email = "181400149@gift.edu.pk";
    $name = "YOUR-NAME";
    $body = "Hey man, how are you? <br><br><a href='https://google.com'>Google</a>";
    $subject = "Test email";

    $headers = array(
        'Authorization: Bearer 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
',
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => $email,
                        "name" => $name
                    )
                )
            )
        ),
        "from" => array(
            "email" => "giftannouncement178@gmail.com"
        ),
        "subject" => $subject,
        "content" => array(
            array(
                "type" => "text/html",
                "value" => $body
            )
        )
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
?> -->

<?php
// If you are using Composer (recommended)
// require 'vendor/autoload.php';

// If you are not using Composer
require("sendgrid-php/sendgrid-php.php");

// $from = new SendGrid\Mail\Mail("Example User", "giftannouncement178@gmail.com");
// $subject = "Sending with SendGrid is Fun";
// $to = new SendGrid\Mail\Mail("Example User", "181400149@gift.edu.pk");
// $content = new SendGrid\Content("text/plain", "and easy to do anywhere, even with PHP");
// $mail = new SendGrid\Mail($from, $subject, $to, $content);

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("giftannouncement178@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("181400149@gift.edu.pk", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
//$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid(getenv('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'));
$response = $sg->client->mail()->send()->post($email);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();