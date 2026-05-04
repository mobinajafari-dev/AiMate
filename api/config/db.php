<?php

const mysql_host = "127.0.0.1";

const mysql_user = "root";

const mysql_password = "";

const mysql_database = "aimate";

const mysql_charset = "utf8mb4";

$dsn = "mysql:host=".mysql_host.";dbname=".mysql_database.";charset=".mysql_charset;

// 2. تعریف Options برای امنیت و مدیریت خطا
$options = [
    // خطاها را به صورت استثناء (Exception) پرتاب کن
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // حالت واکشی (Fetch Mode) پیش‌فرض را روی آرایه انجمنی قرار بده
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // شبیه‌سازی Prepared Statements را خاموش کن (برای امنیت)
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// 3. ایجاد اتصال در بلاک Try-Catch
try {
    // شیء PDO را با DSN، نام کاربری، رمز عبور و Options ایجاد می‌کنیم
    $connection = new PDO($dsn, mysql_user, mysql_password, $options);
} catch (\PDOException $e) {
    // در صورت بروز خطا در اتصال، پیام را لاگ می‌کنیم و یک پیام کلی نمایش می‌دهیم
    // در محیط توسعه:
    // die("Connection Error: " . $e->getMessage());

    // در محیط عملیاتی (ایمن‌تر):
    die("Database connection failed. Please try again later.");
}