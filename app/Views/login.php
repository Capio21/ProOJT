<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
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
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        h2 {
            font-size: 24px;
            color: #FFA500; /* Orange */
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 15px;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 25px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            background-color: #808080; /* Granite */
            color: #FFA500; /* Orange */
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
        }

        button:hover {
            background-color: #595959; /* Darker Granite */
        }

        .error {
            color: red;
            margin-bottom: 15px;
            font-size: 16px;
        }

        #signup-link {
            margin-top: 30px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div id="login-container">
        <h2>MOCUFACO MEMBER Login</h2>

        <?php if (isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
            <div class="error"><?= $validation->listErrors() ?></div>
        <?php endif; ?>

        <?= form_open('/login') ?>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?= set_value('username') ?>" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        <?= form_close() ?>

        <div id="signup-link">
            <p>Not a member of the coop? <a href="/members/create">Sign Up</a></p>
        </div>
    </div>
</body>
</html>
