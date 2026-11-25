

<?php
// تحقق إذا تم إرسال الفورم
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.html");
    exit;
}

// تنظيف البيانات لمنع أي هجمات XSS
$name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : '';
$email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : '';
$phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : '';
$message = isset($_POST["message"]) ? htmlspecialchars($_POST["message"]) : '';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تم الإرسال بنجاح - WAB Cafe</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        header .logo {
            display: flex;
            align-items: center;
        }
        header .logo-img {
            height: 40px;
            width: auto;
            object-fit: contain;
        }
        body {
            background: #f5f0e6;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .success-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            margin: 100px auto;
            max-width: 600px;
        }
        .success-box {
            background: #fdf8f0;
            border: 3px solid #5c3d2e;
            border-radius: 15px;
            padding: 3rem;
            text-align: center;
            width: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .success-icon {
            font-size: 4rem;
            color: #5c3d2e;
            margin-bottom: 1rem;
        }
        .user-info {
            background: #e9ddcf;
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1.5rem 0;
            text-align: right;
            border: 2px solid #5c3d2e;
        }
        .user-info p {
            margin: 0.8rem 0;
            color: #3a2e27;
            font-size: 1.1rem;
        }
        .back-btn {
            display: inline-block;
            margin-top: 1rem;
            padding: 1rem 2.5rem;
            background: #5c3d2e;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: 0.3s;
            font-size: 1.1rem;
            font-weight: bold;
        }
        .back-btn:hover {
            background: #8b5e3c;
            transform: translateY(-2px);
        }
        h2 {
            color: #5c3d2e;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header>
  <div class="logo">
    <img src="images/log.png" alt="WAB Cafe" class="logo-img">
  </div>
  <div id="menuToggle">
    <span></span>
    <span></span>
    <span></span>
  </div>
</header>

<!-- SIDEBAR -->
<div id="sideMenu">
  <a href="index.html">الرئيسية</a>
  <a href="products.html">منتجات</a>
  <a href="about.html">عنا</a>
  <a href="contact.html">تواصل</a>
</div>

<div class="success-container">
    <div class="success-box">
        <div class="success-icon">✓</div>
        <h2>تم إرسال رسالتك بنجاح!</h2>
        <p style="font-size: 1.2rem; margin-bottom: 1.5rem;">
            شكراً لك <strong style="color: #5c3d2e;"><?php echo $name; ?></strong> على تواصلك معنا
        </p>
        
        <div class="user-info">
            <p><strong>الاسم:</strong> <?php echo $name; ?></p>
            <p><strong>الإيميل:</strong> <?php echo $email; ?></p>
            <p><strong>رقم الهاتف:</strong> <?php echo $phone; ?></p>
            <p><strong>الرسالة:</strong> <?php echo $message; ?></p>
        </div>
        
        <p style="color: #5c3d2e; margin: 2rem 0; font-size: 1.1rem;">سنقوم بالرد على استفسارك في أقرب وقت ممكن</p>
        <a href="index.html" class="back-btn">العودة للرئيسية</a>
    </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-line">© 2025 WAB Cafe</div>
  <div class="footer-line">
    <a href="https://www.instagram.com/wabcafe.sa?igsh=YnF4dzIxaGZjdjc2" target="_blank">Instagram</a> | 
    <a href="https://www.tiktok.com/@wabcafe.sa?_r=1&_t=ZS-91fZBT1eIQH" target="_blank">TikTok</a> | 
    <a href="mailto:tmheba4@gmail.com">Email</a>
  </div>
</footer>

<script src="scripts.js"></script>
</body>
</html>