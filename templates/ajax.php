<?php

      // require mysql bağlantısı
      require('../database/dbController.php');

      // require product class
      require('../database/Product.php');

            // database object
            $db = new dbController();

            // product object
            $product = new Product($db);

            if(isset($_POST['item_id'])){
                $result = $product->getProduct($_POST['item_id']);
                echo json_encode($result);
            }

?>