<?php

require_once "../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "../app/captcha.php";

    $cf_turnstile_response = $_POST["cf-turnstile-response"];
    $cf_connecting_ip = $_SERVER["REMOTE_ADDR"];

    $captcha_success = validate_captcha($cf_turnstile_response, $cf_connecting_ip);

    if ($captcha_success) {
        echo "Captcha success!";
    } else {
        echo "Captcha failed!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="/css/index.css" />
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
</head>
<body>
    <div class="container">
        <form class="feedback-form" method="POST">
            <label>Feedback</label>
            <input type="text" name="feedback" placeholder="feedback" />
            <div class="cf-turnstile" data-sitekey="<?php echo $TURNSTILE_SITE_KEY; ?>"></div>
            <input type="submit" value="Submit" />
        </form>
    </div>
</body>
</html>
