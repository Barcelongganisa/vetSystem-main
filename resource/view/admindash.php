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
            <section class="records" id="records"></section>
            <section class="booking" id="booking"></section>

        </div>


    </div>
</body>

</html>