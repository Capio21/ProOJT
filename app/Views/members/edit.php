<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
</head>
<body>
    <h2>Edit Member</h2>

    <?= form_open('/members/store') ?>
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>

    <label for="full_name">Full Name:</label>
    <input type="text" name="full_name" required>
    <br>

    <label for="address">Address:</label>
    <input type="text" name="address" required>
    <br>

    <label for="contact_number">Contact Number:</label>
    <input type="text" name="contact_number" required>
    <br>

    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" name="date_of_birth" required>
    <br>

    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <br>

    <label for="occupation">Occupation:</label>
    <input type="text" name="occupation" required>
    <br>

    <label for="membership_type">Membership Type:</label>
    <input type="text" name="membership_type" required>
    <br>

    <label for="date_joined">Date Joined:</label>
    <input type="date" name="date_joined" required>
    <br>

    <button type="submit">Add Member</button>
<?= form_close() ?>


    <a href="/members">Back to Member List</a>
</body>
</html>


