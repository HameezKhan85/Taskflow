<?php
// Assume you have already filled $data as provided
$emailContentAdmin = str_replace(
    ['{{user_name}}', '{{email}}', '{{contact_number}}', '{{product_name}}', '{{size}}', '{{material}}', '{{color}}', '{{quantity}}', '{{message}}', '{{full_name}}', '{{user_email}}', '{{user_phone}}'],
    [$data['fname'], $data['email'], $data['cNumber'], $data['productName'], $data['depth'], $data['stocks'], $data['colors'], $data['quantity'], $data['message'], $data['fname'], $data['email'], $data['cNumber']],
    $templateAdmin
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: #ec1712;
            color: #ffffff;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
            font-size: 16px;
            color: #333333;
        }
        .content h3 {
            color: #0f65da;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #666666;
            background-color: #0f65da;
            color: #ffffff;
            border-radius: 0 0 8px 8px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0f65da;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #f90202;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>User Inquiry Received</h1>
        </div>
        <div class="content">
            <h3>Dear Emenac Packaging NZ Team,</h3>
            <p>You have received a new inquiry from a user. Below are the details of the inquiry:</p>
            <ul>
                <li><strong>Full Name:</strong> {{full_name}}</li>
                <li><strong>Email:</strong> {{user_email}}</li>
                <li><strong>Contact Number:</strong> {{user_phone}}</li>
                <li><strong>Product Name:</strong> {{product_name}}</li>
                <li><strong>Size:</strong> {{size}}</li>
                <li><strong>Material:</strong> {{material}}</li>
                <li><strong>Color Options:</strong> {{color}}</li>
                <li><strong>Quantity:</strong> {{quantity}}</li>
                <li><strong>Message:</strong> {{message}}</li>
            </ul>
            <p>For further assistance or questions, you can reach out to the user using the provided contact details.</p>
            <p>Best regards,</p>
            <p>The Emenac Packaging NZ Team</p>
        </div>
        <div class="footer">
            <p>&copy; 2025 Emenac Packaging NZ. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
