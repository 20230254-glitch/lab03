<?php
// ===============================
// LAB 3 – Mini Utility Functions
// ===============================

// Hàm tìm số lớn nhất
function findMax($a, $b) {
    return ($a > $b) ? $a : $b;
}

// Hàm tìm số nhỏ nhất
function findMin($a, $b) {
    return ($a < $b) ? $a : $b;
}

// Hàm kiểm tra số nguyên tố
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// Hàm tính giai thừa
function factorial($n) {
    if ($n < 0) return null;
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Hàm tìm UCLN (GCD)
function gcd($a, $b) {
    while ($b != 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return abs($a);
}
