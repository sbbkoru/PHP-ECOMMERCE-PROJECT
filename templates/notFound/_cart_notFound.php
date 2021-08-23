
<!-- sepet kısmı başlangıç -->
      <section id="cart" class="py-3">
        <div class="container-fluid w-75">
          <h5 class="font-baloo font-size-20">Sepetiniz</h5>

          <!-- ürünler -->
          <div class="row">
            <div class="col-sm-9">
<!-- Boş Sepet -->
<div class="row border-top py-3 mt-3">
    <div class="col-sm-12 text-center py-2">
       <!-- <img src="../../assets/blog/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 200px;"> -->
        <p class="font-baloo font-size-16 text-black-50">Sepetiniz Boş! Doldurmak için hemen <a href="index.php">tıklayın.</a></p>
    </div>
</div>
              <!-- ürünler -->
            </div>
            <!-- ürünler sonu -->
            <!-- ara toplam -->
            <div class="col-sm-3">
              <div class="sub-total border text-center mt-2">
                <h6 class="font-size-12 font-rale text-success py-3">
                  <i class="fas fa-check"></i>Siparişiniz ÜCRETSİZ kargo
                  şartlarını sağlamaktadır.
                </h6>
                <div class="border-top py-4">
                  <h5 class="font-baloo font-size-20">
                    Aratoplam (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> Ürün)&nbsp;
                    <span class="text-danger"
                      >₺<span class="text-danger" id="deal-price"></span
                      ><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0 ?></span
                    >
                  </h5>
                  <button type="submit" class="btn btn-success mt-3">
                    Satın Al
                  </button>
                </div>
              </div>
            </div>
            <!-- ara toplam sonu -->
          </div>
        </div>
      </section>
      <!-- sepet kısmı son-->