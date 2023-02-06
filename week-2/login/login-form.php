<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $errorMsg = isset($_GET['msg']) && !empty($_GET['msg']) ? $_GET['msg'] : '';

    if ($errorMsg) {
        echo $errorMsg;
    }
    ?>
    <form action="../doLogin.php" method="post">
        <label for="user-email" title="Enter your password">
            Email
        </label>
        <input id="user-email" type="email" name="emailAccount" placeholder="Enter your email" required>
        <label for="password1">
            Password
        </label>
        <input id="password1" type="text" name="passwd" placeholder="Enter your password" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>