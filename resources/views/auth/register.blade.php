<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, white, #DE3163);
        }
        .container {
            display: flex;
            width: 600px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
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
        .left, .right {
            background: #fff;
            padding: 40px;
            width: 50%;
        }
        .alt-section {
            background: linear-gradient(135deg, #DE3163, #ff7eb3);
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(135deg, #DE3163, #ff7eb3);
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .remember {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            margin-top: 10px;
        }
        .remember input {
            margin-right: 5px;
        }
        .signup {
            margin-top: 20px;
        }
        .signup a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #DE3163;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .back-button:hover {
            background: #E195AB;
        }
    </style>
</head>
<body>
    
<a href="javascript:history.back()" class="back-button">← Back</a>
<form method= "POST" action="{{ route('register')}}">
@csrf
    <div class="container">
    <div class="container" id="signup">
        <div class="alt-section">
            <h2>Welcome to ELBA</h2>
            <p>Already have an account?</p>
            <a href="{{ route('login')}}" class="btn">Sign In</a>
        </div>
        <div class="right">
            <h2>Sign Up</h2>
            <input type="text" class="input-field" placeholder="Full Name" :value = "old('full name')">
            <input type="email" class="input-field" placeholder="Email" :value = "old('email')">
            <input type="password" class="input-field" placeholder="Password" :value = "old('password')"> 
            <button class="btn">Sign Up</button>
        </div>
    </div>
    </div>
    </form>
</body>
</html>
