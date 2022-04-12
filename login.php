<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form class="form-signin" method="POST">
        <h2>Login</h2>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button><br><br>
        <a href="index.php" class="btn btn-lg btn-primary btn-block">Registration</a>
</div>

<?php
session_start();
require('connect.php');
if(isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='username' and password='password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    if ($count == 1) {
    $_SESSION['username'] = $username;
    } else {
        $false = "Ошибка!";
    }
}
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "<a href='logout.php' 
<div class='d-grid gap-2 col-1 mx-auto'>
  <button class='btn btn-sm btn-secondary' type='button'>Logout</button>
</div>
</a>";
    { ?>
        <p align="center">Вы успешно зарегистрировались! Через 10 секунд будет произведено перенаправление на главную страницу</p>
        <script> window.setTimeout(function() { window.location = 'form.php'; }, 10000) </script>
    <?php }
}
?>

</body>
</html>