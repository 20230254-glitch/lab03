<?php
// ===============================
// LAB 3 – Mini Utility + Menu
// ===============================

require_once "functions.php";

// Lấy action từ URL
$action = $_GET['action'] ?? '';

echo "<h2>Mini Utility - PHP</h2>";

switch ($action) {

    case 'prime':
        $n = $_GET['n'] ?? null;
        if ($n === null) {
            echo "Thiếu tham số n. VD: ?action=prime&n=17";
            break;
        }
        echo "Kiểm tra số nguyên tố: $n <br>";
        echo isPrime($n) ? "$n là số nguyên tố" : "$n không phải số nguyên tố";
        break;

    case 'fact':
        $n = $_GET['n'] ?? null;
        if ($n === null) {
            echo "Thiếu tham số n. VD: ?action=fact&n=6";
            break;
        }
        echo "Giai thừa của $n = " . factorial($n);
        break;

    case 'gcd':
        $a = $_GET['a'] ?? null;
        $b = $_GET['b'] ?? null;
        if ($a === null || $b === null) {
            echo "Thiếu tham số a hoặc b. VD: ?action=gcd&a=12&b=18";
            break;
        }
        echo "UCLN($a, $b) = " . gcd($a, $b);
        break;

    default:
        echo "
        <b>Menu chức năng</b><br>
        - Kiểm tra số nguyên tố:<br>
          ?action=prime&n=17<br><br>
        - Tính giai thừa:<br>
          ?action=fact&n=6<br><br>
        - Tìm UCLN:<br>
          ?action=gcd&a=12&b=18
        ";
}
