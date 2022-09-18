<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Loginpage.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn">

                </div>
                <button type = "button" class="toggle-btn" onclick="login()">Login</button>
                <button type = "button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            
            <form id="login" class="input-group1"action="/jimish1.php"  method="get">
                <input type="text" name="username1" class="input-field" placeholder="User Id" required>
                <input type="password" name="password2"class="input-field" placeholder="Password" required>
                <button type="submit" class="Submit-btn1">Login</button>
                <p> if you are new please go to register page </p>
            </form>
            <form id="register" action="/jimish.php"  method="get"class="input-group2">
                <input type="text" name="username" class="input-field" placeholder="User Id" required>
                <input type="text" name="FirstName" class="input-field" placeholder="First Name" required>
                <input type="text" name="LastName" class="input-field" placeholder="last Name" required>
                <input type="email" name="eamil" class="input-field" placeholder="Email-Id" required>
                <input type="password" name="Password" class="input-field" placeholder="Password" required>
                <input type="password" name="ConfirmPassword" class="input-field" placeholder="Conform Password" required>
                <input type="checkbox" class="check-box"><span>I agree to terms and conditions</span>
                <button type="submit" class="Submit-btn2">Registered</button>
            </form>
        </div>
       
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-300px";
            y.style.left = "50px";
            z.style.left = "110px";

        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";

        }
    </script>
</body>
</html>