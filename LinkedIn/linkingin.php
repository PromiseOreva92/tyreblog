<?php
require 'init.php';

header("location: "."https://www.linkedin.com/oauth/v2/authorization/?response_type=code&client_id=".CLIENTID."&redirect_uri=".REDIRECTURI."&state="
        .CSRF."&scope=".SCOPES);

