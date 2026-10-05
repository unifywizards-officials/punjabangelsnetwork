<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        /* Add your email-specific CSS here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .logo {
            max-width: 100px;
            height: auto;
            margin: 0 auto;
        }
        .message {
            text-align: center;
            padding: 20px 0;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <img class="logo" src="{{ asset('path/to/your/logo.png') }}" alt="Your Logo"> -->
            <img class="logo" src="https://occ-0-3647-3646.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABQr3KP5nDaBi4Q6q1XI2Q9BoptbUfDx4tKls68OKTkFS51hwHO84QdeIXn5jypLB6yoxeVsxz-QRrXEt8khITCfYdYwZgu2p_L4r.jpg" alt="Your Logo">
        </div>
        <div class="message">
            <p>Hi, I am Tommy Shelby</p>
            <p>We've received your request, and we will get back to you as soon as possible.</p>
            <p>Thanks</p>
            <p>Peaky Blinder Gang</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Peaky Blinder Gang. All rights reserved.
        </div>
    </div>
</body>
</html>
