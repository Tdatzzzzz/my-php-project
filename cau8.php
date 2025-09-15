<!DOCTYPE html>
<html>
<head>
    <title>Câu 8 - Giải phương trình bậc 2</title>
</head>
<body>
    <h2>Giải phương trình bậc 2: ax² + bx + c = 0</h2>

    <form method="post">
        a: <input type="number" name="a" required><br><br>
        b: <input type="number" name="b" required><br><br>
        c: <input type="number" name="c" required><br><br>
        <button type="submit" name="giai">Giải</button>
    </form>

    <?php 
    function giaiBac2($a, $b, $c) {
        if ($a == 0) {
            if ($b == 0) {
                if ($c == 0) {
                    return "Phương trình có vô số nghiệm";
                } else {
                    return "Phương trình vô nghiệm";
                }
            } else {
                $x = -$c / $b;
                return "Phương trình bậc 1, nghiệm: x = $x";
            }
        } else {
            $delta = $b * $b - 4 * $a * $c;
            if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
            } elseif ($delta == 0) {
                $x = -$b / (2 * $a);
                return "Phương trình có nghiệm kép: x = $x";
            } else {
                return "Phương trình vô nghiệm thực";
            }
        }
    }

    if (isset($_POST['giai'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        echo "<p><b>Kết quả:</b> " . giaiBac2($a, $b, $c) . "</p>";
    }
    ?>
</body>
</html>
