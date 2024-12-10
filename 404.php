<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: #282c34;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 6rem;
            margin: 0;
            animation: float 2s ease-in-out infinite alternate;
        }

        p {
            font-size: 1.5rem;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
            color: #282c34;
            background: #61dafb;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #21a1f1;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .moon {
            position: absolute;
            top: 10%;
            left: 10%;
            width: 100px;
            height: 100px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .star {
            position: absolute;
            width: 5px;
            height: 5px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
            animation: twinkle 1.5s infinite alternate ease-in-out;
        }

        @keyframes twinkle {
            0% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        /* Random star positions */
        .star:nth-child(1) {
            top: 30%;
            left: 25%;
        }

        .star:nth-child(2) {
            top: 50%;
            left: 75%;
        }

        .star:nth-child(3) {
            top: 70%;
            left: 40%;
        }

        .star:nth-child(4) {
            top: 20%;
            left: 60%;
        }

        .star:nth-child(5) {
            top: 80%;
            left: 20%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="moon"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <a href="/">Go Back Home</a>
    </div>
</body>

</html>