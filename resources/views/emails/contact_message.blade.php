<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 2px solid #0056b3; /* Outer border */
        }
        .header {
            background: #0056b3;
            color: #ffffff;
            padding: 30px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .header img {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
            line-height: 1.2;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
            color: #333;
            border-top: 1px solid #eaeaea; /* Divider under header */
        }
        .content h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #0056b3;
            border-bottom: 1px solid #eaeaea; /* Underline for section title */
            padding-bottom: 10px;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            background: #f8f8f8;
            text-align: center;
            padding: 15px;
            font-size: 0.9em;
            color: #666;
            border-top: 1px solid #eaeaea; /* Divider above footer */
        }
        .highlight {
            color: #0056b3;
            font-weight: bold;
        }
        .divider {
            margin: 20px 0;
            border-top: 1px solid #eaeaea;
        }
        @media (max-width: 600px) {
            .container {
                margin: 10px;
            }
            .header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="http://azshipping.net/storage/images/settings/icA040G3xrUQ8qXzWusDxBIXuaNWPNTuf8PKcesl.png" style="width:170px;height:40px" alt="AZ Shipping Services">
            <h1>New Contact Message</h1>
        </div>
        <div class="content">
            <h2>Contact Details</h2>
            <p><span class="highlight">Name:</span> {{ $contact->name }}</p>
            <p><span class="highlight">Email:</span> {{ $contact->email }}</p>
            <p><span class="highlight">Phone:</span> {{ $contact->phone }}</p>
            <p><span class="highlight">Subject:</span> {{ $contact->subject }}</p>
            <div class="divider"></div>
            <h2>Message</h2>
            <p>{{ $contact->message }}</p>
        </div>
        <div class="footer">
            <p>Thank you for your attention!</p>
            <p><small>This is an automated message. Please do not reply directly to this email.</small></p>
        </div>
    </div>
</body>
</html>
