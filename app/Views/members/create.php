<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background: #808080; /* Granite */
            color: #FFA500; /* Orange */
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

<<<<<<< Updated upstream
        #login-container {
            background: white;
            padding: 20px; /* Reduced padding */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px; /* Reduced width */
            text-align: left; /* Align text to the left */
            display: flex;
            flex-direction: column; /* Arrange elements vertically */
            align-items: flex-start; /* Align items to the start (left) */
            overflow: auto; /* Add overflow for scrolling */
        }

        h2 {
            font-size: 20px; /* Reduced font size */
            color: #FFA500; /* Orange */
            margin-bottom: 15px; /* Reduced margin */
        }

        label {
            display: block;
            margin-bottom: 10px; /* Reduced margin */
            font-size: 14px; /* Reduced font size */
            width: 100%; /* Take up full width */
        }

        input, select {
            width: calc(100% - 10px); /* Full width with some spacing */
            padding: 10px; /* Reduced padding */
            margin-bottom: 10px; /* Reduced margin */
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 12px; /* Reduced font size */
            display: inline-block;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 10px; /* Reduced margin */
        }

        button {
            background-color: #808080; /* Granite */
            color: #FFA500; /* Orange */
            padding: 10px 15px; /* Reduced padding */
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px; /* Reduced font size */
            width: 100%; /* Full width */
            margin-top: 10px; /* Reduced margin */
        }

        button:hover {
            background-color: #595959; /* Darker Granite */
=======
     

       

     

        .btn:hover {
            color: #000;
        }

       

        .content {
            width: 1200px;
            height: auto;
            margin: auto;
            color: #fff;
            position: relative;
        }

  
        .content .cn a {
            text-decoration: none;
            color: #000;
            transition: .3s ease;
>>>>>>> Stashed changes
        }

        #signup-link {
            margin-top: 10px; /* Reduced margin */
            font-size: 14px; /* Reduced font size */
            text-align: center; /* Center align the link */
        }
<<<<<<< Updated upstream
    </style>
</head>
<body>
    <div id="login-container">
        <h2>Add Member</h2>

        <?= form_open('/members/store') ?>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
=======

        .content span {
            color: #ff7200;
            font-size: 65px
        }

        .form {
            width: 250px;
            height: 380px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 50%, rgba(0, 0, 0, 0.8) 50%);
            position: absolute;
            top: -20px;
            left: 870px;
            transform: translate(0%, -5%);
            border-radius: 10px;
            padding: 25px;
        }

        .form h2 {
            width: 220px;
            font-family: sans-serif;
            text-align: center;
            color: #ff7200;
            font-size: 22px;
            background-color: #fff;
            border-radius: 10px;
            margin: 2px;
            padding: 8px;
        }


        
        .content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.text-section {
    flex: 1;
    padding-right: 20px; /* Adjust the spacing between text and image */
}

.image-section {
    flex-shrink: 0; /* Prevent the image from shrinking */
}

.image-section img {
    width: 500px; /* Make the image responsive */
    height: auto;
    margin-left:50px;

}


    </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
        <div class="icon">
        
        <h2 style="margin-top:50px;" class="logo">MUCOFACO.</h2>
    </div>

            
        </div> 
        <div class="content">
       

<?= form_open('/members/store') ?>

<h2>Add Member</h2>
<label for="username">Username:</label>
<input type="text" name="username" required>
<br>
>>>>>>> Stashed changes

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required>

        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <div class="form-row">
            <label for="contact_number">Contact Number:</label>
            <input type="text" name="contact_number" required>

            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" required>
        </div>

        <div class="form-row">
            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <label for="occupation">Occupation:</label>
            <input type="text" name="occupation" required>
        </div>

        <div class="form-row">
            <label for="date_joined">Date Joined:</label>
            <input type="date" name="date_joined" required>

            <label for="membership_type">Membership Type:</label>
            <input type="text" name="membership_type" required>
        </div>

<<<<<<< Updated upstream
        <button type="submit">Submit in the Admin</button>
        <?= form_close() ?>

        <a href="/login" id="signup-link" style="margin-top: 10px; text-align: center;">Back</a>
=======
<button type="submit">Submit in the Admin</button>

<a href="/login">Back</a>
<?= form_close() ?>



    
    <div class="image-section">
        <img src="../../coconut.png">
>>>>>>> Stashed changes
    </div>
</body>
</html>
