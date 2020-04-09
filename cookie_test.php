<?php
# Cookies can store values in the users browser
# You can't expect that users will have cookies enabled
# Create a cookie with name, value, expiration date 86400secs (1 day)
# and make available to your entire site
# You modify cookie vales by running setcookie again
# Delete a cookie by setting the expiration in the past
# setcookie("my_cookie", "", time() - 86400, "/");

setcookie("my_cookie", "sample value", time() + 86400, "/");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Title</title>
    </head>
    <body>
    <?php
   # Check if cookie is set
    if(!isset($_COOKIE["my_cookie"])){
      echo "Cookie Not Set<br>";
    } else {
      # Output cookie value
      echo "Cookie Value : " . $_COOKIE["my_cookie"] . "<br>";
    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>