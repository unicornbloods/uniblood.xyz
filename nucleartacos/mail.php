<?php

//Session starts must be the first code in script.
session_start();

// Turn on maximum error reporting.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$userIP = $_SERVER['REMOTE_ADDR'];
//$recaptchaResponse = $_POST['g-recaptcha-response'];
//$secretkey = "6LcBMdIZAAAAAEmQPnH6jMP8RtgKQs6rJyDlBy6k";
//$request = file_get_contents(
//    "https://www.google.com/recaptcha/api/siteverify?secret={$secretkey}&response={$recaptchaResponse}&remoteip={$userIP}"
//);

//if(!strstr($request, "true")) {
//    $_SESSION['error'] = "reCAPTCHA failed.";
//    header("Location: error.php" . SID);
//    exit;
//}

if (!empty($_POST['txtEmail'])) {
    $txtEmail = $_POST['txtEmail'];
} else {
    $_SESSION['error'] = "Email address missing.";
    header("Location: error.php" . SID);
    exit;
}

// Had problems if various form controls are not filled in, then the
// variables may not exist. This is solved by checking for the
// existance of everything and setting everyhting to a known state.


if (!empty($_POST['txtFullName'])) {
    $txtFullName = $_POST['txtFullName'];
} else {
    $txtFullName = "Name not entered.";
}

if (!empty($_POST['txtPhone'])) {
    $txtPhone = $_POST['txtPhone'];
} else {
    $txtPhone = "Phone not entered.";
}

if (!empty($_POST['txtPolicePhone'])) {
    $txtPhone = $_POST['txtPolicePhone'];
} else {
    $txtPhone = "Police phone not entered.";
}

if (!empty($_POST['txtComments'])) {
    $txtComments = $_POST['txtComments'];
} else {
    $txtComments = "Comments not entered.";
}

$price = 0; // Initial price.

if (!empty($_POST['chkPriorityShipping'])) {
    $chkPriorityShipping = "Priority Shipping Selected.";
    $price += 149.99;
} else {
    $chkPriorityShipping = "Standard Shipping.";
}

if (!empty($_POST['chkGiftReceipt'])) {
    $chkGiftReceipt = "Gift Receipt requested.";
    $price += 0.99;
} else {
    $chkGiftReceipt = "";
}

if (!empty($_POST['chkShrimpNuke'])) {
    $chkSHRIMP = "SHRIMP";
    $price += 11999999;
} else {
    $chkSHRIMP = "";
}

if (!empty($_POST['chkFatManNuke'])) {
    $chkFATMAN = "FAT MAN";
    $price += 9999999;
} else {
    $chkFATMAN = "";
}

if (!empty($_POST['chkJugheadNuke'])) {
    $chkJUGHEAD = "JUGHEAD";
    $price += 39999999;
} else {
    $chkJUGHEAD = "";
}

if (!empty($_POST['chkCessium'])) {
    $chkCessium = "Cessium Delight";
    $price += 199999;
} else {
    $chkCessium = "";
}

if (!empty($_POST['chkHardshell'])) {
    $chkHardshell = "Hardshell Taco";
    $price += 2.99;
} else {
    $chkHardshell = "";
}

if (!empty($_POST['chkSoftshell'])) {
    $chkSoftshell = "Softshell Taco";
    $price += 2.99;
} else {
    $chkSoftshell = "";
}

if (!empty($_POST['chkRolled'])) {
    $chkRolled = "Rolled Taco";
    $price += 1.99;
} else {
    $chkRolled = "";
}

if (!empty($_POST['chkDiscretePackaging'])) {
    $chkDiscretePackaging = "Discrete Packaging selected";
    $price += 9.99;
} else {
    $chkDiscretePackaging = "";
}

if (!empty($_POST['chkSameDayShipping'])) {
    $chkSameDayShipping = "Same day Launch selected";
    $price += 0;
} else {
    $chkSameDayShipping = "";
}

$purchasableItems = array($chkSHRIMP, $chkFATMAN, $chkJUGHEAD, $chkCessium, $chkHardshell, $chkSoftshell, $chkRolled,
    $chkDiscretePackaging, $chkSameDayShipping, $chkPriorityShipping, $chkGiftReceipt);

$purchasedItems = array();

foreach ($purchasableItems as $arrayItem) {

    if ($arrayItem == "") {
        return;
    }

    array_push($purchasedItems, ' . $arrayItem . " \r\n"');

}

$body =
    $txtFullName . " - Your Name.
" . $txtEmail . " - Email we can contact you at.
" . $txtPhone . " - Telephone number we can contact you at.

Items purchased:
" . $purchasedItems . "
" . $chkSHRIMP . "
" . $chkFATMAN . "
" . $chkJUGHEAD . "
" . $chkCessium . "
" . $chkHardshell . "
" . $chkSoftshell . "
" . $chkRolled . "
" . $chkDiscretePackaging . "
" . $chkSameDayShipping . "
" . $chkPriorityShipping . "
" . $chkGiftReceipt . "
Your order price is: $" . number_format($price,2) . "

" . $txtComments . " - Additional comments." ;

// Compose a confirmation message.

$bodyconfirm = "Thank you for submitting an order.
Here is a summary of the information that you provided:

"
    . $body .
    "

The police will be in contact with you shortly!
    
    Nuclear Tacos Inc.
    123 MT Bravo
    Bikini Atoll
    Phone: 555-555-5555";
// End of confirmation message.

$_SESSION['bodyconfirm'] = $bodyconfirm;

// Send the email with the data to the company email account.
//mail('orders@uniblood.xyz', '*** Order from website ***', $body,
//    "From: \"$txtFullName\" <$txtEmail>\r\n" .
//    "Reply-To: \"$txtFullName\" <$txtEmail>\r\n" .
//    "X-Mailer: PHP /" . phpversion());
//
//// Send confirmation email with the data to the customer
//mail($txtEmail, 'Confirmation email - Nuclear Tacos Inc.', $bodyconfirm,
//    "From: \"Nuclear Tacos Inc.\" <orders@uniblood.xyz>\r\n" .
//    "Reply-To: \"Nuclear Tacos Inc.\" <orders@uniblood.xyz>\r\n" .
//    "X-Mailer: PHP/" . phpversion());


// This has to be a reletive URL for session ID Appending to work.
// Remember to send session ID With URL.

header("Location: thanx.php?" . SID);
?>

