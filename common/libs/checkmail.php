<?php
    
    namespace common\libs;
    use common\libs\smtp_validateEmail;
class checkmail{


// include SMTP Email Validation Class
public function exitsmail($gmail)
{
// the email to validate
$email = $gmail;
// an optional sender
$sender = 'user@mydomain.com';
// instantiate the class
$SMTP_Validator = new SMTP_validateEmail();
// turn on debugging if you want to view the SMTP transaction
// do the validation
$results = $SMTP_Validator->validate(array($email), $sender);


if ($results[$email]) {
$check=$email.' is '.($results[$email] ? 'valid' : 'invalid')."\n";
echo "<script>alert('mail tồn tại')</script>";
} else {
echo "<script>alert('mail chưa tồn tại')</script>";
}

}
}
?>
