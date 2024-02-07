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
        }

        #signup-link {
            margin-top: 10px; /* Reduced margin */
            font-size: 14px; /* Reduced font size */
            text-align: center; /* Center align the link */
        }
    </style>
</head>
<body>
    <div id="login-container">
        <h2>Add Member</h2>

        <?= form_open('/members/store') ?>
        <label for="username">Username:</label>
        <input type="text" name="username" required>

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

        <button type="submit">Submit in the Admin</button>
        <?= form_close() ?>

        <a href="/login" id="signup-link" style="margin-top: 10px; text-align: center;">Back</a>
    </div>
</body>
</html>