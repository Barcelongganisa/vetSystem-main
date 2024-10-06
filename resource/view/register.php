<?php
use App\Core\Database;
use App\Models\User;
use App\Controllers\UserController;

require_once __DIR__ . '/../../vendor/autoload.php';

session_start();

$database = new Database();
$dbConnection = $database->connect();
$userModel = new User($dbConnection);
$userController = new UserController($userModel);

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $userController->login($_POST["email"], $_POST["password"]);

    if ($user) {
        // User is valid and activated
        $otp = rand(100000, 999999);
        session_regenerate_id();
        $_SESSION["user_id"] = $user["id"]; // Store user ID in session
        $_SESSION["role"] = $user["role"]; // Store user ID in session
        $_SESSION["user_name"] = $user["name"]; // Store user name in session for display
        $_SESSION["email"] = $user["email"]; // Store user name in session for display
        $_SESSION["otp"] = $otp; // Store OTP in session

        // Load the mailer and send OTP
        $mail = require __DIR__ . "/auth/mailer.php";
        $mail->setFrom('noreply@yourdomain.com', 'Your App');
        $mail->addAddress($user["email"]);
        $mail->Subject = 'Your OTP Code';
        $mail->Body = "Your OTP code is: $otp";

        if ($mail->send()) {
            header("Location: /otp-verify");
            exit;
        } else {
            $is_invalid = true;
        }
    } else {
        $is_invalid = true; // Invalid login or account not activated
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <div class="container"> <!-- Changed from <container> to <div> -->
        <div class="main">
            <span class="close-icon" onclick="redirectToLanding()">×</span>
            <input type="checkbox" id="chk" aria-hidden="true">
            <div class="signup">
                <form id="signup" method="post" action="/process-signup">
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="name" id="name" placeholder="User name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="text" name="cNumber" id="cNumber" placeholder="Contact Number" required>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <button type="submit" name="signupbtn" id="signupbtn">Sign up</button>
                </form>
            </div>
            <div class="login">
                <form method="post">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="email" id="email" name="email" placeholder="Email"
                        value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" required>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <a href="/forgot-password">Forgot Password?</a>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row pop-up" id="successMessage" style="display: none;">
        <div class="box small-6 large-centered">
            <a href="#" class="close-button" id="closePopup">&#10006;</a>
            <h3>Ready to send the Activation Link!</h3>
            <p>Press "Okay" to send the activation link to your email.</p>
            <a href="#" class="button" id="okay">Okay</a>
        </div>
    </div>
    <script src="/js/register.js"></script>
</body>

</html>