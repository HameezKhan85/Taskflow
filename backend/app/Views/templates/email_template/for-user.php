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
            background-color: #f90202;
            color: #ffffff;
            border-radius: 8px 8px 0 0;
        }
      
        .content {
            padding: 20px;
            font-size: 16px;
            color: #333333;
        }
        .content h3 {
            color: #f90202;
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
            background-color: #f90202;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0f65da;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Your Inquiry!</h1>
        </div>
        <div class="content">
            <h3>Dear {{user_name}},</h3>
            <p>Thank you for reaching out to us. We have received your inquiry and will get back to you shortly. Below are the details of your request:</p>
            <ul>
                <li><strong>Product Name:</strong> {{product_name}}</li>
                <li><strong>Size:</strong> {{size}}</li>
                <li><strong>Materials:</strong> {{material}}</li>
                <li><strong>Color Options:</strong> {{color}}</li>
                <li><strong>Quantity:</strong> {{quantity}}</li>
                <li><strong>Message:</strong> {{message}}</li>
                <li><strong>Full Name:</strong> {{full_name}}</li>
                <li><strong>Email:</strong> {{user_email}}</li>
                <li><strong>Contact Number:</strong> {{user_phone}}</li>
            </ul>
            <p>If you have any further questions, feel free to contact us. We're here to help!</p>
            <p>Best regards,</p>
            <p>The Emenac Packaging NZ Team</p>
        </div>
        <div class="footer">
            <p>&copy; 2025 Emenac Packaging NZ. All rights reserved.</p>
            <a href="https://www.emenacpackaging.co.nz/" class="btn">Visit Our Website</a>
        </div>
    </div>
</body>
</html>
