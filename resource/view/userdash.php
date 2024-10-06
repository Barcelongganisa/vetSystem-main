<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-Dashboard</title>
    <link rel="stylesheet" href="/css/userdash.css">
</head>

<body>
    <div class="main">
        <div class="user-cont">
            <div class="acc-info">
            <h1 class="user-name"><?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
            <span class="email"><?php echo htmlspecialchars($_SESSION['email']); ?></span>
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
            <section class="booking" id="booking"> 
            <div class="container">
            <form class="booking">
                <div class="header">
                    <img src="/images/nobglogo.jpg" alt="Vet Logo" class="nobglogo">
                    <h1>Vet Booking Form</h1>
                    <p>Please fill out this form to make an appointment</p>
                </div>
                
            <div class="pet">
                        <legend>What pet do you have?</legend>
                <container class="radio-pet">
                    <container class="pet-box">
                        <input type="radio" id="cat" name="pet" value="cat">
                        <label for="cat">Cat</label>
                    </container>
                    <container class="pet-box">
                        <input type="radio" id="dog" name="pet" value="dog">
                        <label for="dog">Dog</label>
                    </container>
                </container>
            </div>


                <div class="breed">
                    <label for="breed">What breed is your pet?</label>
                    <input type="text" id="breed" name="breed" placeholder="Enter breed">
                </div>
                    
                <div class="service">
                    <label>What type of veterinary services are you looking for?</label>
                    
                    <select name="service" id="service">
                        <option value="" disabled selected>Select a service</option>
                        <option value="consultation">Consultation</option>
                        <option value="vaccine">Vaccination and Deworming</option>
                        <option value="wellness">Wellness and Comprehensive Check</option>
                        <option value="grooming">Pet Grooming</option>
                        <option value="boarding">Pet Boarding</option>
                        <option value="homeservice">Home Call Service</option>
                    </select>
                </div>
                    
                <div class="date">
                    <label>Select a date:</label>
                    <input type="date" name="appointment-date" id="appointment-date">
                </div>
                    
                <div class="submit">
                    <button type="submit" class="submit-btn">Submit Form</button>
                </div>
                
            </form>
            
        </div>
        <div class="signup-section">
                    <p>Do you wish to create an account?</p>
                    <a href="#" class="signup-btn">Sign Up Here</a>
                </div>
            </section>

        </div>


    </div>
</body>

</html>