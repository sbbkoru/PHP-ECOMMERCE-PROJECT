<?php
// header ekleme
ob_start();
include('header.php');
?>

<?php

// sepet ekleme (doluysa veya boşsa)
count($product->getData('cart')) ? include('./templates/_cart-template.php') : include('./templates/notFound/_cart_notFound.php');


// istek listesi ekleme (doluysa veya boşsa)
count($product->getData('wishlist')) ? include('./templates/_wishlist_template.php') : include('./templates/notFound/_wishlist_notFound.php');

// yeni gelenler ekleme
include('./templates/_new-phones.php');

?>

<?php
// footer ekleme
include('footer.php');
ob_end_flush();
?>