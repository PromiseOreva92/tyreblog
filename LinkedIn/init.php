<?php
session_start();

define("CLIENTID", "777ozgvg35ay0e");
define("CLIENTSECRET", "PM2VjB9Q0UnrbQAf");
define("REDIRECTURI", "https://premierrecord/blog/LinkedIn/callback.php");
define("CSRF", random_int(111111,999999));
define("SCOPES", "r_liteprofile r_emailaddress w_share");

