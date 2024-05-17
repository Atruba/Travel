<?php 
include "connect.php";  // Include the database connection settings
include 'register.php'; // Include the registration and login handling script
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="logtest.css" />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <title>Sign Up and Sign In</title>
</head>

<body>
    <div class="container">

        <!-- Sign-Up Form -->
        <div id="signup">
            <h2>Sign Up</h2>
            <form method="POST" action="logtest.php">
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required />
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="tel" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}"
                        title="Ten digits code" />
                    <label for="phone">Phone Number</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required />
                    <label for="password">Password</label>
                </div>
                <input type="submit" value="Sign Up" name="signUp">
            </form>
            <button onclick="showSignIn()">Already registered? Sign In</button>
            <div class="social-links">
          <a href="google-oauth.php"><i class="fa-brands fa-google"></i></a>
        </div>
        </div>

        <!-- Sign-In Form -->
        <div id="signin" class="hidden">
            <h2>Sign In</h2>
            <form method="POST" action="logtest.php">
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email" required />
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required />
                    <label for="password">Password</label>
                </div>
                <input type="submit" value="Sign In" name="signIn">
            </form>
            <button onclick="showSignUp()">New here? Sign Up</button>
            <div class="social-links">
          <a href="google-oauth.php"><i class="fa-brands fa-google"></i></a>
        </div>
        </div>

    </div>
    <script src="logtest.js"></script>
</body>

</html>