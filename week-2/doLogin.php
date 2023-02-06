<?php

// to receive form data from login-form.php

$email = $_POST['emailAccount'];
$password = $_POST['passwd'];

if ($email is not ending by "itas.ca" || $email is not email) {
    header('Location: ./login/login-form.php?msg=your email is incorrect format');
    exit;
}

if (strlen($password) < 8) {
    header('Location: ./login/login-form.php?msg=your password is incorrect');
    exit;
}

$result = mysql::select from users where email  = $email;

if (!$result) {
    header('Location: ./login/login-form.php?msg=we can\'t find any account related to email - ' . $email);
    exit;
}

// verify the password

$userPassword = $result->password;

if (sha1($password) !== sha1($userPassword)) {
    header('Location: ./login/login-form.php?msg=Password or email is not right');
    exit;
}

echo "<h1>Welcome Back!</h1";