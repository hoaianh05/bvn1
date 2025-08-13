<?php
// Bật hiển thị lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Thông tin trang
$title = "Trang chào mừng với PHP";
$welcomeMessage = "Xin chào! Đây là trang web PHP đầu tiên của bạn chạy trên MAMP.";
$date = date('d/m/Y H:i:s');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color: rgba(255,255,255,0.8);
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #ccc;
        }
        h1 {
            margin: 0;
            color: #004d80;
        }
        main {
            padding: 30px;
            text-align: center;
        }
        .box {
            background-color: white;
            padding: 20px;
            max-width: 500px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            background-color: rgba(255,255,255,0.8);
            position: fixed;
            width: 100%;
            bottom: 0;
            border-top: 2px solid #ccc;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>
    <main>
        <div class="box">
            <p><?php echo $welcomeMessage; ?></p>
            <p>Thời gian hiện tại: <strong><?php echo $date; ?></strong></p>
        </div>
    </main>
    <footer>
        &copy; <?php echo date('Y'); ?> - Tạo bởi PHP & MAMP
    </footer>
</body>
</html>
