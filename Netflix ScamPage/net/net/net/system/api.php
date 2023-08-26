<?php
// توكن البوت الخاص بك
$botToken = '6209398848:AAFWSpYUbwzNKdzxJVPEtYxvRZIztV49P18';

// معرف المحادثة (chat_id)
$chatId = '1742931040';

$msg = 'Hello, this is hits nitflxe!';

$website = "https://api.telegram.org/bot" . $botToken;

$params = [
    'chat_id' => $chatId,
    'text' => $msg,
];

// تهيئة cURL
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

// إرسال الطلب واستلام النتيجة
$result = curl_exec($ch);

// إغلاق اتصال cURL
curl_close($ch);
?>
