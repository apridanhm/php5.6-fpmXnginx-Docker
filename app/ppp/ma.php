<?php
// test dasar PHP 5.6

date_default_timezone_set('Asia/Jakarta');

echo "<h1>PHP 5.6 TEST OK</h1>";

echo "<p>Tanggal & Jam: " . date('Y-m-d H:i:s') . "</p>";

echo "<p>Versi PHP: " . PHP_VERSION . "</p>";

echo "<hr>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

