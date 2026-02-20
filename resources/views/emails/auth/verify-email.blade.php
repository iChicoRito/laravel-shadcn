<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Verify Your Email</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 40px auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .header { background: #18181b; padding: 32px; text-align: center; }
        .header h1 { color: #ffffff; margin: 0; font-size: 22px; }
        .body { padding: 32px; color: #374151; }
        .body p { line-height: 1.6; }
        .btn { display: inline-block; margin: 24px 0; padding: 12px 32px; background: #18181b; color: #ffffff; text-decoration: none; border-radius: 6px; font-weight: bold; }
        .footer { padding: 16px 32px; text-align: center; font-size: 12px; color: #9ca3af; border-top: 1px solid #e5e7eb; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ config('app.name') }}</h1>
        </div>
        <div class="body">
            <p>Hello,</p>
            <p>Thank you for registering. Please verify your email address by clicking the button below:</p>
            <a href="{{ $verificationUrl }}" class="btn">Verify Email Address</a>
            <p>If you did not create an account, no further action is required.</p>
            <p>This link will expire in <strong>24 hours</strong>.</p>
        </div>
        <div class="footer">
            <p>If you're having trouble clicking the button, copy and paste the URL below into your browser:</p>
            <p>{{ $verificationUrl }}</p>
        </div>
    </div>
</body>
</html>