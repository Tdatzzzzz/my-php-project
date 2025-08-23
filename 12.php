<?php
// Chuỗi ban đầu
$string = "Hello World!";

// Loại bỏ ký tự cuối cùng bằng rtrim()
$result = rtrim($string, substr($string, -1));

// In kết quả
echo "Chuỗi ban đầu: " . $string . "\n";
echo "Chuỗi sau khi loại bỏ ký tự cuối: " . $result . "\n";
?>