<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f2f5;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            padding: 20px;
            max-width: 600px;
            margin: auto;
        }

        .error-code {
            font-size: 10rem;
            color: #333;
            margin-bottom: 10px;
        }

        .error-message {
            font-size: 2rem;
            color: #666;
            margin-bottom: 20px;
        }

        .description {
            font-size: 1.25rem;
            color: #888;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .back-home {
            display: inline-block;
            padding: 12px 25px;
            font-size: 1rem;
            color: #fff;
            background-color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-home:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="error-code">404</h1>
        <h2 class="error-message">Page Not Found</h2>
        <p class="description">Oops! The page you are looking for does not exist. It might have been moved or deleted.
        </p>
        <a href="../views/user_dashboard.php" class="back-home">Go Back to Homepage</a>
    </div>
</body>

</html>