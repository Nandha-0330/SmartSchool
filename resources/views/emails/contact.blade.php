<!-- resources/views/emails/enquiry.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 15px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>Contact Form Submission</h2>

        <p><strong>Name:</strong> {{ $data['dzName'] }}</p>
        <p><strong>Email:</strong> {{ $data['dzEmail'] }}</p>
        <p><strong>Message:</strong> {{ $data['dzMessage'] }}</p>
        <p><strong>Phone:</strong> {{ $data['dzphone'] }}</p>

        <footer>
            <p>This email was sent from your website's contact form. Please do not reply to this email.</p>
        </footer>
    </div>
</body>
</html>
