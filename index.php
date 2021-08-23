<?php
ob_start();
// header ekleme
include('header.php');

?>

<?php

// banner area ekleme
include('./templates/_banner-area.php');

// çok satanlar ekleme
include('./templates/_top-sale.php');

// özel fırsatlar ekleme
include('./templates/_special-price.php');

// yeni gelenler ekleme
include('./templates/_new-phones.php');

// blog ekleme
include('./templates/_blogs.php');

?>

<?php

// footer ekleme
include('footer.php');
ob_end_flush();
?>