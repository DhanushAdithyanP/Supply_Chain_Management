<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
            background-image: url('welcome.jpg'); /* Replace 'background.jpg' with the path to your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
        }
        .welcome-box {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .redirect-button {
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #f2aaaa;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .redirect-button:hover {
            background-color: #f2aaaa;
        }
    </style>
    <script>
        function redirectToLogin() {
            window.location.href = 'login.php';
        }
    </script>
</head>
<body>
    <div class="welcome-box">
        <h1>Welcome To the Supply Chain Management System</h1>
        <h2>Made By: </h2>
        <h2>Krish Hashia U03NM21T006025</h2>
        <h2>P Dhanush Adithyan U03NM21T006034</h2>
        <h2>Chetan Kumar M A U03NM21T040010</h2>
        <p>Click the button below to go to the login page.</p>
        <button class="redirect-button" onclick="redirectToLogin()">Go to Login</button>
    </div>
</body>
</html>
