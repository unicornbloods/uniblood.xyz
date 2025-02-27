<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <title>Thank You</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1> Error </h1>
<?php
print(nl2br($_SESSION['error']));
unset($_SESSION);
session_destroy();
?>

<p>
    <input type="button" name="back" value="Back"
           onclick="history.back()">
</p>

<br><br>
<p>Version 1.00.00</p>
</body>

</html>
