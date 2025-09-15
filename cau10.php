<!DOCTYPE html>
<html>
<head>
    <title>Câu 10 - Trung bình cộng của mảng</title>
</head>
<body>
    <h2>Tính trung bình cộng của mảng</h2>
    
    <?php
    function tinhTrungBinh($arr) {
        if (count($arr) == 0) {
            return "Mảng rỗng, không tính được";
        }
        $tong = array_sum($arr);
        $soPhanTu = count($arr);
        return $tong / $soPhanTu;
    }
    
    $mang = [1, 2, 3, 4, 5];
    echo "Mảng: " . implode(", ", $mang) . "<br>";
    echo "Trung bình cộng: " . tinhTrungBinh($mang);
    ?>
</body>
</html>