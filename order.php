<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> order</title>
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
<h2>place your order</h2>

<div class="container">
<label for="username"><b> Meal</b></label>
<input type="text" placeholder="Enter meal" id="meal" name="meal" required>

<label for="email"><b> Quantity</b></label>
<input type="quantity" placeholder="Enter quantity" id="quantity" name="quantity" required>

<label for="password"><b> Location</b></label>
<input type="location" placeholder="Enter your location" id="location" name="location" required>

<button type="submit"> Submit</button>
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
</div>
</form>
</body>
</html>