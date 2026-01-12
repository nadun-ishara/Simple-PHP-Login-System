<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #fff;
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .user-avatar {
            width: 100px;
            height: 100px;
            background: #20405e;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin: 0 auto 20px;
            font-size: 50px;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #777;
            margin-bottom: 25px;
            
        }

        .logout-btn {
            text-decoration: none;
            background: #db4437;
            color: #fff;
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: 600;
            transition: 0.3s;
            display: inline-block;
        }

        .logout-btn:hover {
            background: #c1352b;
            box-shadow: 0 5px 15px rgba(219, 68, 55, 0.4);
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="user-avatar">
            <i class="fa-solid fa-user"></i>
        </div>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h1>
        <p>You have successfully logged in.<br> This is your Dashboard.</p>
        
        <a href="logout.php" class="logout-btn">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </a>
    </div>

</body>
</html>