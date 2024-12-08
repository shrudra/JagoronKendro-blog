<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Validate the email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save the email to a file (or handle subscription logic)
        file_put_contents('subscribers.txt', $email . PHP_EOL, FILE_APPEND);
        echo "সাবস্ক্রিপশন সফল হয়েছে!";
    } else {
        echo "অনুগ্রহ করে একটি বৈধ ইমেইল প্রদান করুন।";
    }
}
?>
