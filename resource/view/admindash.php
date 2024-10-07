<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-Dashboard</title>
    <link rel="stylesheet" href="/css/admindash.css">
</head>

<body>
    <div class="main">
        <div class="user-cont">
            <div class="acc-info">
                <h1 class="user-name"><?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
                <span class="role">ADMIN</span>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#announcement">Announcement</a></li>
                    <li><a href="#records">Records</a></li>
                    <li><a href="#booking">Booking</a></li>
                </ul>
            </div>

        </div>
        <div class="content">
            <section class="announcement" id="announcement"></section>
            <section class="records" id="records">
            <div class="admin-dashboard">
                <div class="header">
                    <div class="logo">
                        <img src="/images/nobglogo.jpg" alt="Vet Cross Logo" class="nobglogo">
                        <span class="vetcross-name">VETCROSS</span>
                    </div>
                    <div class="announcement">ANNOUNCEMENT</div>
                    <button class="book-now">BOOK NOW</button>
                </div>
            </div>

            <div class="status-section">
                    <h4>Status</h4>
            <table class="status-table">
                <tr>
                    <td>✔</td>
                    <td>❌</td>
                    <td>📅</td>
                </tr>
                <tr>
                    <td>✔</td>
                    <td>❌</td>
                    <td>📅</td>
                </tr>
                <tr>
                    <td>✔</td>
                    <td>❌</td>
                    <td>📅</td>
                </tr>
                <tr>
                    <td>✔</td>
                    <td>❌</td>
                    <td>📅</td>
                </tr>
                <tr>
                    <td>✔</td>
                    <td>❌</td>
                    <td>📅</td>
                </tr>
            </table>
            </div>

            </section>
            <section class="booking" id="booking"></section>

        </div>


    </div>
</body>

</html>