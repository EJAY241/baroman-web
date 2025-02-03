<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('../../../login&register-form/images/ppink.jpg'); /* Path to your image */
            background-size: cover; /* Make it cover the whole page */
            background-repeat: no-repeat; /* No annoying tiling */
            background-position: center; /* Center it nicely */
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .navbar {
            width: 96%;
            background: black;
            padding: 10px 2%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            position: absolute;
            top: 0;
            left: 0;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar .logo span {
            font-size: 1.5em;
            color: #DE3163;
            font-weight: bold;
        }

        .navbar .nav-links {
            display: flex;
            gap: 15px;
        }

        .navbar .nav-links a {
            text-decoration: none;
            background: linear-gradient(135deg, #DE3163, #ff7eb3);
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background 0.3s;
            color:black;
            
        }

        .navbar .nav-links a:hover {
            background: #E195AB;
        }

        .welcome-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 150px 100px;
            border-radius: 10px;
            
            animation: move-shadow 1s infinite alternate;
        }

        @keyframes move-shadow {
            0% {
                box-shadow: 0 4px 10px #ff00ff;
            }
            100% {
                box-shadow: 0 8px 20px #ff00ff;
            }
        }


        h1 {
            font-size: 3em;
            margin-bottom: 10px;
            color: #E3FCEC;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
            color: #D4F3E8;
        }

        a {
            text-decoration: none;
            background: #E195AB;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }

        a:hover {
            background: #DE3163;
        }
        .footer {
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            
            color: white;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            
            <span>ELBA</span>
        </div>
        <div class="nav-links">
            <a href="{{ route('login')}}">Log In</a>
            <a href="{{ route('register')}}">Register</a>
        </div>
    </div>
    <div class="welcome-container">
        <h1>Welcome to  ELBA!</h1>
        <p>Step into a world of tranquility, growth, and code magic. </p>
        <a href="#">Get Started</a>
    </div>
    <div class="footer">
        &copy; 2025 ELBA. All rights reserved.
    </div>
</body>
</html>
