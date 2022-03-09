<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> order</title>
        <!-- adding icon library-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="navigation.css">
    <style>
    body {
        background-image: url(images/enggal-mukti-M_rP0MPjDIc-unsplash.jpg);
        background-size: cover;
        background-attachment: fixed;
    }
    form {
    border: ;
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
<header style="" class="" id="">
    <div class="navigation" id="top-horizontal-bar">
        <nav>
            <div class="navigation-bar" id="top-nav">
                <div class="">
                    <h1 style="padding: 14px 17px; text-align: center;" class="" id=""> Food's Sake</h1>
                    <p style="padding: 14px 17px; text-align: center;" class="" id=""> For food's sake, eat!</p>
                </div>
                <a target="" href="home.php" class=""><b> Home</b></a>
                <a target="" href="menu.php" class=""><b> Menu</b></a>
                <a target="" href="services.php" class=""><b> Services</b></a>
                <a target="" href="order.php" class="active"><b> Order</b></a>
                <!-- <a target="" href="#" class=""><b> About</b></a> -->
                <!-- <div class="dropdown">
                    <button class="dropbtn"><b> About</b>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#"> Our principles</a>
                        <a href="#"> Our story</a>
                        <a href="#"> Our partners</a>
                        <a href="#"> Our standards</a>
                    </div> -->
                <a target="" href="contact.php" class=""><b> Contact</b></a>
                <div class="social_media">
                    <a target="" href="" class="fa fa-facebook"></a>
                    <a target="" href="https://www.instagram.com/chef_reagan_otieno/https://www.instagram.com/chef_reagan_otieno/" class="fa fa-instagram"></a>
                    <a target="" href="" class="fa fa-twitter"></a>
                    <a target="" href="" class="fa fa-whatsapp"></a>
                </div>
            </div>
        </nav>
    </div>
</header>
<body>
<form action="" method="post">
<h2 style="text-align: center;">Dear client, place your order!</h2>

<div class="container">
<label for="username"><b> Meal</b></label>
<input type="text" placeholder="Enter meal" id="meal" name="meal" required>

<label for="email"><b> Quantity</b></label>
<input type="quantity" placeholder="Enter quantity" id="quantity" name="quantity" required>

<label for="password"><b> Location</b></label>
<input type="location" placeholder="Enter your location" id="location" name="location" required>

<button type="submit"> Submit</button>
</div>
<div class="container" style="background-color; ">
</div>
</form>
</body>
</html>