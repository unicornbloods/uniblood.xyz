<!doctype html>
<html lang="en">

<head>
    <title>Nuclear Tacos Order Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://www.google.com/recaptcha/api.js"
            async defer></script>
</head>

<body>
<div style="float:left; width:300px;">
    <h2 class="content"> Nuclear Tacos Inc.</h2>
    <p>
        123 MT Bravo<br>
        Bikini Atoll<br>
        Phone: 555-555-5555
    </p>
</div>
<div style="float: left; clear:right; width:300px;">
    <h3>Your one stop shop for Tacos of mass destruction.</h3>
    This centuries special is cesium-137

</div>
<div style="clear: left;">
</div>
<form name="frmOrder" method="post">

    <div style="float: left; width: 200px">
        Nuclear Weaponry<br>
        <label>
            <input type="checkbox" name="chkShrimpNuke">
            The SHRIMP - $11,999,999
        </label>
        <br>
        <label>
            <input type="checkbox" name="chkFatManNuke">
            The FAT MAN - $9,999,999
        </label>
        <br>
        <label>
            <input type="checkbox" name="chkJugheadNuke">
            The JUGHEAD - $39,999,999
        </label>
        <br>
    </div>

    <div style="float: left; width: 200px">
        Tacos<br>
        <label>
            <input type="checkbox" name="chkCessium" checked>
            Cessium 137 delight - <br>$199,999
        </label>
        <br>
        <label>
            <input type="checkbox" name="chkHardshell">
            Hardshell Taco - <br>$2.99
        </label>
        <br>
        <label>
            <input type="checkbox" name="chkSoftshell">
            Softshell - <br>$2.99
        </label>
        <br>
        <label>
            <input type="checkbox" name="chkRolled">
            Rolled Taco (burrito) - <br>$1.99
        </label>
    </div>

    <div style="float: left; width: 200px">
        Options<br>
        <label>
            <input type="checkbox" name="chkDiscretePackaging" checked>
            Discrete Packaging - $9.99
        </label>
        <br>
        <label>
            <input type="checkbox" name="chkSameDayShipping" checked>
            Same day air shipping - Free
        </label>
        <br>
        <label>
            <input type="checkbox" name="chkPriorityShipping">
            Priority Shipping - $149.99
        </label>
        <br>
        <label>
            <input type="checkbox" name="chkGiftReceipt">
            Gift Rieceipt - <br>$0.99
        </label>
    </div>

    <div style="clear: left;">
        <p>&nbsp;</p>
        <p>
            <label>
                <label>
                    <input type="text" name="txtFullName" size="30">
                    Your Name
                </label>
                <br><br>
                <label>
                    <input type="text" name="txtEmail" size="30">
                    Email address we can contact you at
                </label>
                <br><br>
                <label>
                    <input type="text" name="txtPhone" size="30">
                    Telephone number we can contact you at
                </label>
                <br><br>
                <label>
                    <input type="text" name="txtPolicePhone" size="30">
                    Telephone number we can contact the local police at (optional)
                </label>
        </p>
        <p>
            Additional Comments: <br>
            <textarea name="txtComments" cols="50" rows="6"></textarea>
        </p>

<!--        <div class="g-recaptcha"-->
<!--             data-sitekey="6LcBMdIZAAAAAMZgmKpu3UYM2rOXSokWWCPT8moe">-->
<!--        </div>-->




        <p>
            <input class="button" name="btnSubmit" type="submit"
                   formaction="mail.php" value="Send">
        </p>
    </div>


</form>
<br>
<small>Version 1.00.00</small>
<br>

</body>

</html>
