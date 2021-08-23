<?php

      // require mysql bağlantısı
      require('./database/dbController.php');

      // require product class
      require('./database/Product.php');

            // require cart class
            require('./database/Cart.php');

      // database object
      $db = new dbController();

      // product object
      $product = new Product($db);
      $urunler = $product->getData();
      
      // cart object
      $Cart = new Cart($db);
      print_r($Cart->getCartId($product->getData('cart')));




?>
