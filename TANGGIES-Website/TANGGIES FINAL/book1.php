<?php
require "connect.php";

?>



<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Table Reservation new </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" type="image/x-icon" href="blue1.png">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'EB Garamond', serif;
    }

    /* Default styling for larger screens */
    .container {
        width: 80%;
        max-width: 500px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(20px);
        color: black;
        border-radius: 10px;
        padding: 30px 40px;
        min-height: 15px;
        justify-content: center;
        margin-top: -45px;
    }

    .container h2 {
        font-size: 36px;
        text-align: center;
        color: lightblue;
        padding-bottom: 20px;
        text-decoration: underline;
    }
    .logo {
    width: 50%;
    height: auto;
    display: block;
    margin: 0 auto;
    margin-top: -80px;
}

    .background {
        background-image: url('bg.jpg');
        background-size: cover;
        background-color: rgba(0, 0, 0, 0.7);
        min-height: 110vh;
    }

    .back {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: -40px;
        margin-bottom: -40px;
    }



    label,
    input {
        color: lightblue;
        font-size: 18px;
        display: block;
        padding: 5.5px;
    }

    input,
    select {
        width: 100%;
        padding: 10px;
        border: 2px solid lightblue;
        outline: none;
        border-radius: 5px;
        background: transparent;
        color: white;
    }

    button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        
    }
    #reservationForm select option {
        background-color: lightblue;
        color: black;
    }

    #reservationForm select:hover {
        background-color: white;
        color: black;
    }

    button:hover {
        background-color: #e8edf2;
        color: blue;
    }
     
    .logo {
        width:400px;
    }

    /* Media query for smaller screens */
    @media screen and (max-width: 600px) {
        .container {
            max-width: 90%;
            
        }
        .back {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 0px;
   
    }  .logo {
    width: 50%;
    height: auto;
    display: block;
    margin: 0 auto;
    margin-top: -40px;
}
        .logo {
        width:250px;
    }

        label,
        input {
            width: 100%;
            box-sizing: border-box;
        }

        
        button {
            width: 100%;
        }
        .background {
        background-image: url('bg.jpg');
        background-size: cover;
        background-color: rgba(0, 0, 0, 0.7);
        min-height: 110vh;
    }
    }
</style>

<body>
    <div class="background">
        <a href="index.html"><img class="logo" src="final.png" alt="logo"></a>
        <div class="back">
            <div class="container">

                <h2>Table Reservation</h2>
                <form action="reg.php" target="" autocomplete="off" method="post" name="reservation" id="reservationForm">
                    

                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="date">Date of Booking:</label>
                        <input type="date" id="date" name="date" required>

                        <label for="time">Time of Booking:</label>
                        <input type="time" id="time" name="time" required>

                        <label for="people">Book for:</label>
                        <select name="people" id="people" required>
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="4+">4+</option>
                        </select><br><br>


                        <button type="submit">Book Table!</button>
                    </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            const name = document.getElementById("name").value;
            const phone = document.getElementById("phone").value;
            const email = document.getElementById("email").value;
            const date = document.getElementById("date").value;
            const time = document.getElementById("time").value;
            const people = document.getElementById("people").value;

            // Simple validation examples, you can add more checks as needed.
            if (
                    name.value.trim() === "" ||
                    !isValidEmail(email.value) ||
                    !isValidPhoneNumber(phone.value) ||
                    !isValidDateTime(date.value, time.value) ||
                    people.value === ""
                ) {
                    alert("Please fill in all fields with valid data.");
                } else {
                    // Clear the form
                    form.reset();

                    // Display a custom message in an alert
                    alert("Request accepted. We will notify you soon.");
                }

            // Validate phone number pattern.
            const phonePattern = /^[0-9]{10}$/;
            if (!phonePattern.test(phone)) {
                alert("Phone number must be a 10-digit number.");
                return;
            }

            // Validate email format.
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            // Validate the date and time to be at least 2 hours in the future.
            const selectedDateTime = new Date(date + 'T' + time);
            const now = new Date();
            const twoHoursFromNow = new Date(now.getTime() + 2 * 60 * 60 * 1000);

            if (selectedDateTime <= twoHoursFromNow) {
                alert("Booking date and time should be at least 2 hours in the future.");
                return;
            }

            // If all validations pass, you can submit the form.
            document.getElementById("reservationForm").submit();
        }
    </script>

</body>

</html>