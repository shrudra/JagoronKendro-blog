<?php
// Load the XML feed
$xml = simplexml_load_file('feed.xml') or die('Error: Cannot load feed');
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>জাগরণ কেন্দ্র</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="css/jkfinal01-styles.css">
</head>
<body>
     

<!-- Header -->
<div class="header">
    <h1>জাগরণ কেন্দ্র</h1>
    <p>সর্বহারাদের বাংলা ওয়েবপত্র</p>
    <div class="symbol">☭</div>
</div>

<!-- Articles Section -->
<div class="main-content container">
    
    <ul>
        <?php foreach ($xml->article as $article): ?>
            <li>
                <?php if (!empty($article->image)): ?>
                    <img src="<?= htmlspecialchars($article->image) ?>" alt="<?= htmlspecialchars($article->title) ?>">
                <?php endif; ?>
                <h3>
                    <a href="article?file=<?= urlencode($article->file) ?>">
                        <?= htmlspecialchars($article->title) ?>
                    </a>
                </h3>
                <p><small>লেখা প্রকাশের তারিখ <?= htmlspecialchars($article->date) ?></small></p>
                <p><?= htmlspecialchars($article->summary) ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- Subscribe Section -->
<div class="main-content container">
    <h2>সাবস্ক্রাইব</h2>
    <p>আমাদের নিউজ লেটার সাবস্ক্রাইব করুন</p>
    <form action="subscribe.php" method="post">
        <input type="email" name="email" placeholder="আপনার ইমেইল" required>
        <button type="submit">সাবস্ক্রাইব</button>
    </form>
</div>

<div class="social-links">

  <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook"></a>
  <a href="https://wa.me/8801403507619" target="_blank" class="fab fa-whatsapp"></a>
  <a href="https://www.linkedin.com" target="_blank" class="fab fa-linkedin"></a>
  <a href="#" target="_blank" class="fa fa-envelope"></a>
  </div>

<!-- Footer -->
<div class="footer">
    <ul>
        <li><a href="#" target="_blank">আমাদের কথা</a></li>
        <li><a href="#">সাবস্ক্রাইব</a></li>
        
        <li><a href="feed.xml" target="_blank">ফিড (Feed)</a></li>
        <li><a href="#" target="_blank">ডোনেশন</a></li>
        <li><a href="#" target="_blank">যোগাযোগ</a></li>
        <li><a href="#" target="_blank">শর্তাবলী</a></li>
        <li><a href="#" target="_blank">গোপনীয়তা নীতি</a></li>
    </ul>
  
  
    <p>স্বত্ব © ২০২৪ জাগরণ কেন্দ্র | সকল লেখার স্বত্ব ও দায় তার লেখকের</p>
</div>
</body>
</html>

