<?php
// checks to see if app.php is running and if not then run app.php
    $website = require_once __DIR__.'/../app/app.php';
    $website->run();
?>
