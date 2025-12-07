<?php
// Simple PHP application for Elastic Beanstalk
$version = "v1.0";  // ← Ye change karenge Task 3 me
$hostname = gethostname();
$ip = $_SERVER['SERVER_ADDR'] ?? 'Unknown';
?>
<!DOCTYPE html>
<html>
<head>
    <title>My PHP App on Elastic Beanstalk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f0f0f0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 { color: #FF9900; }
        .info { 
            background: #e8f4f8;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
        .version {
            font-size: 28px;
            font-weight: bold;
            color: #0066cc;
        }
        .highlight {
            background: #fffacd;
            padding: 10px;
            border-left: 4px solid #ffa500;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Welcome to Elastic Beanstalk!</h1>
        
        <div class="info highlight">
            <h3>Application Version:</h3>
            <p class="version"><?php echo $version; ?></p>
        </div>
        
        <div class="info">
            <h3>Server Information:</h3>
            <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
            <p><strong>Server Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
            <p><strong>Hostname:</strong> <?php echo $hostname; ?></p>
            <p><strong>IP Address:</strong> <?php echo $ip; ?></p>
        </div>
        
        <div class="info">
            <h3>Application Status:</h3>
            <p>✅ PHP application is running successfully on AWS Elastic Beanstalk!</p>
            <p>🎉 Deployment completed!</p>
        </div>
        
        <?php
        // Display a random message
        $messages = [
            "Great job setting up Elastic Beanstalk!",
            "Your PHP app is live on AWS!",
            "Congratulations on your deployment!",
            "AWS Elastic Beanstalk rocks!"
        ];
        $randomMessage = $messages[array_rand($messages)];
        ?>
        
        <div class="info">
            <h3>Random Message:</h3>
            <p><em><?php echo $randomMessage; ?></em></p>
        </div>
    </div>
</body>
</html>
