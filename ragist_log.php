<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration and Login page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="rlstyle.css">
</head>

<body>
    <div class="aman">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>



            </div>
            <div class="social-icons">
                <img src="fb.png">
                <img src="gp.png">
                <img src="tw.png">

            </div>
            <form id="login" method="post" class="input-group" action="login.php">
                <input type="text" class="input-field" name="aadhaar" placeholder="Aadhar no./Passport no." required>
                <input type="password" class="input-field" name="password" placeholder="Enter password" required>
                <input type="checkbox" class="chech-box"><span>Remember password</span>
                <button type="submit" class="submit-btn">Log In</button>

            </form>
            <form method="POST" id="register" class="input-group" action="submit.php">
                <input type="text" class="input-field" name="aadhaar" placeholder="Aadhar no./Passport no." required>
                <input type="email" class="input-field" name="email" placeholder="E-mail ID" required>
                <input type="password" class="input-field" name="password" placeholder="Enter password" required>
                <input type="checkbox" class="chech-box"><span>I agree to the terms & conditions</span>
                <input type="submit" value="Register" class="submit-btn">
                

            </form>

        </div>

    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");
        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";

        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";

        }
    </script>

</body>

</html>