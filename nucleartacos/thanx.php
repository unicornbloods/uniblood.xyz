<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <title>Thank You</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php

print(nl2br($_SESSION['bodyconfirm']));
unset($_SESSION);
session_destroy();
?>
<br><br>
A confirmation email has been sent to the email address that you provided.

<p>Version 1.00.00</p>
</body>

</html>