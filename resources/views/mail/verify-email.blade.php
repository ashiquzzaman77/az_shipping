<!DOCTYPE html>
<html>

<head>
    <title>Email Verification</title>
    <style>
        /* Add custom styles here */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Our Application!</h1>
        <p>Please click the button below to verify your email address.</p>
        <a href="{{ $url }}" class="button">Verify Email Address</a>
        <p class="footer">If you did not create an account, no further action is required.</p>
    </div>
</body>

</html>
