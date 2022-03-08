<?php 
session_start();
require 'db_connect.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<style>
    form {
    border: 3px solid #f1f1f1;
    max-width: 600px;
    margin: 0 auto;

}

input[type=text],
input[type=email],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: brown;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    box-shadow: red;
}

button:hover {
    opacity: 0.8;
}

.Regbtn {
    width: auto;
    padding: 10px 18px;
    background-color: brown;
    box-shadow: red;
    color: white;
}


.error_message {
    color: red;
    padding-bottom: 10px;
    text-align: center;
    font-weight: bold;
}

.success_message {
    color: green;
    padding-bottom: 10px;
    text-align: center;
    font-weight: bold;
}

.container {
    padding: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .Regbtn {
        width: 100%;
    }
}
</style>
</head>

<body>

<form action="" method="post">
<h2>Create an account</h2>

<div class="container">
<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter username" id="username" name="username" required>

<label for="email"><b>Email</b></label>
<input type="email" placeholder="Enter email" id="email" name="user_email" required>

<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter password" id="password" name="user_password" required>

<button type="submit">Sign Up</button>
</div>
<?php
if(isset($success_message)){
echo '<div class="success_message">'.$success_message.'</div>'; 
}
if(isset($error_message)){
echo '<div class="error_message">'.$error_message.'</div>'; 
}
?>
<div class="container" style="background-color:#f1f1f1">
<a href="index_two.php"><button type="button" class="Regbtn">Login</button></a>
</div>
</form>
</body>
</html>