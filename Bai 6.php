<?php
function startsWith($string, $startString) {
    // Lấy độ dài chuỗi con
    $len = strlen($startString);
    // So sánh phần đầu chuỗi với chuỗi con
    return substr($string, 0, $len) === $startString;
}

// Ví dụ sử dụng
$text = "Hello world!";
$prefix = "Hello";

if (startsWith($text, $prefix)) {
    echo "Chuỗi bắt đầu bằng '{$prefix}'";
} else {
    echo "Chuỗi không bắt đầu bằng '{$prefix}'";
}
?>
