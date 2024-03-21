!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Fun</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Warna latar belakang */
            text-align: center;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        .fun-text {
            font-size: 18px;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body style="background-color: Lightblue ; ">
    <div class="container">
        <h2>Welcome to Fun Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <input type="submit" name="login" value="Login">
        </form>
        <?php
        if (isset($_POST['login'])) {
            // Dummy username dan password (gantilah dengan validasi sesungguhnya)
            $dummy_username = "members";
            $dummy_password = "gym";

            // Ambil nilai username dan password dari form
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Validasi username dan password
            if ($username === $dummy_username && $password === $dummy_password) {
                echo '<p class="fun-text">Welcome back, Fun User! Let\'s have some fun!</p>';
            } else {
                echo '<p class="error">Oops! Wrong username or password. Try again!</p>';
            }
        }
        ?>
    </div>
</body>
</html>
