<?php

print_r($_COOKIE);


// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);