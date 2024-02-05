<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5) 50%, rgba(0, 0, 0, 0.5) 50%), url(1.jpg);
            background-position: center;
            background-size: cover;
            height: 100vh;
        }

        .navbar {
            width: 1200px;
            height: 75px;
            margin: auto;
        }

       

        .logo {
            color: #FFA500; /* Orange */
            font-size: 35px;
            font-family: 'Times New Roman', Times, serif;
            padding-left: 138px;
            float: left;
            padding-top: 10px;
            margin-top: 5px
        }

      
     

      

        .content {
            width: 1200px;
            height: auto;
            margin: auto;
            color: #FFA500; /* Orange */
            position: relative;
        }

        .content .par {
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: 'Times New Roman', Times, serif;
            letter-spacing: 1.2px;
            line-height: 30px;
        }

        .content h1 {
            font-family: 'Times New Roman', Times, serif;
            font-size: 50px;
            padding-left: 20px;
            margin-top: 9%;
            letter-spacing: 2px;
        }

        .content .cn {
            width: 160px;
            height: 40px;
            background: #FFA500; /* Orange */
            border: none;
            margin-bottom: 10px;
            margin-left: 20px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: .4s ease;
        }

        .content .cn a {
            text-decoration: none;
            color: #000;
            transition: .3s ease;
        }

        .cn:hover {
            background-color: #fff;
        }

        .content span {
            color: #FFA500; /* Orange */
            font-size: 65px
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
    max-width: 200%; /* Make the image responsive */
    height: auto;
}
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
        .orange-button {
            background-color: #FFA500; /* Orange */
            color: #000;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>

    <div class="main">
        <div class="navbar">
       
            <div class="icon">
        
                <h2 class="logo">MUCOFACO.</h2>
            </div>

            
        </div> 
        <div class="content">
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
        <br>
        <a href="/" class="orange-button">Back</a>
    </div>
    
    <div class="image-section">
        <img src="../../coconut.png">
    </div>
</div>

    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
