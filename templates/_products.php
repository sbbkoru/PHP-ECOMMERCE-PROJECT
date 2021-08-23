      <?php 
      $item_id = $_GET['item_id'] ?? 1;
      foreach($product->getData() as $item) :
        if($item['item_id'] == $item_id) :
      ?>
      
      <!-- PRODUCT START -->
      <section id="product" class="py-3">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img
                src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>"
                alt="product"
                class="img-fluid"
              />
              <div class="row pt-4 font-size-16 font-baloo">
                <div class="col">
                <?php 
  if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
echo '<button type="submit" disabled class="btn btn-success form-control">
Sepette
</button>';
  } else {
    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning form-control">
    Sepete Ekle
  </button>';
  };
  ?>
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-success form-control">
                    Hemen Satın Al!
                  </button>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-5">
              <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? 'Unknown'; ?></h5>
              <small>by <?php echo $item['item_brand'] ?? "Brand" ?></small>
              <div class="d-flex">
                <div class="rating text-warning font-size-12">
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="fas fa-star"></i>
                  </span>
                  <span>
                    <i class="far fa-star"></i>
                  </span>
                </div>
                <a href="#" class="px-2 font-rale font-size-14"
                  >5,215 Oylama | 50+ Yorum</a
                >
              </div>
              <hr class="m-0" />
              <!-- ürün fiyatı -->
              <table class="my-3">
                <tr class="font-rale font-size-14">
                  <td>Satış Fiyatı:</td>
                  <td><strike>₺1599</strike></td>
                </tr>
                <tr class="font-rale font-size-14">
                  <td>İndirimli Fiyatı:</td>
                  <td class="font-size-20 text-danger">
                    ₺<span><?php echo $item['item_price'] ?? 0 ?></span
                    ><small class="text-dark font-size-12"
                      >&nbsp;&nbsp;KDV Dahil</small
                    >
                  </td>
                </tr>
                <tr class="font-rale font-size-14">
                  <td>Kazancınız:</td>
                  <td class="font-size-16 text-danger">₺<span>200</span></td>
                </tr>
              </table>
              <!--ürün fiyatı sonu -->
              <!-- ŞİRKET POLİTİKASI -->
              <div id="policy">
                <div class="d-flex">
                  <div class="return text-center mr-5 mx-3">
                    <div class="font-size-20 my-2 color-secondary">
                      <span
                        class="fas fa-retweet border p-3 rounded-pill"
                      ></span>
                    </div>
                    <a href="#" class="font-rale font-size-12"
                      >2 Hafta İçerisinde <br />
                      İade İmkanı</a
                    >
                  </div>
                  <div class="return text-center mr-5 mx-3">
                    <div class="font-size-20 my-2 color-secondary">
                      <span class="fas fa-truck border p-3 rounded-pill"></span>
                    </div>
                    <a href="#" class="font-rale font-size-12"
                      >Haftanın 7 Günü <br />
                      Kargo</a
                    >
                  </div>
                  <div class="return text-center mr-5 mx-3">
                    <div class="font-size-20 my-2 color-secondary">
                      <span
                        class="fas fa-check-double border p-3 rounded-pill"
                      ></span>
                    </div>
                    <a href="#" class="font-rale font-size-12"
                      >1 Yıllık<br />
                      Garanti</a
                    >
                  </div>
                </div>
              </div>
              <!-- ŞİRKET POLİTİKASI SONU-->
              <hr />
              <!-- ürün detayları -->
              <div
                id="order-details"
                class="font-rale d-flex flex-column text-dark"
              >
                <small>Tem 19 - Tem 22 arası teslim</small>
                <small
                  ><a href="#">TECHPOINT</a> tarafından satılmaktadır (5
                  üzerinden 4.5 | 5.163 oy)</small
                >
                <small
                  ><i class="fas fa-map-marker-alt color-primary"></i
                  >&nbsp;&nbsp; Müşteri Hizmetleri : 444 00 59</small
                >
              </div>
              <!-- ürün detayları sonu -->

              <div class="row">
                <div class="col-6">
                  <!-- renk -->
                  <div class="color my-3">
                    <div class="d-flex justify-content-between">
                      <h6 class="font-baloo">Color:</h6>
                      <div class="p-2 color-platinum-bg rounded-circle">
                        <button class="btn font-size-14"></button>
                      </div>
                      <div class="p-2 color-primary-bg rounded-circle">
                        <button class="btn font-size-14"></button>
                      </div>
                      <div class="p-2 color-secondary-bg rounded-circle">
                        <button class="btn font-size-14"></button>
                      </div>
                    </div>
                  </div>
                  <!-- renk -->
                </div>
                <div class="col-6">
                  <!-- qty başı -->
                  <div class="qty d-flex">
                    <h6 class="font-baloo">Miktar</h6>
                    <div class="px-4 d-flex font-rale">
                      <button class="qty-up border bg-light" data-id="pro1">
                        <i class="fas fa-angle-up"></i>
                      </button>
                      <input
                        type="text"
                        class="qty_input border px-2 w-50 bg-light"
                        data-id="pro1"
                        disabled
                        value="1"
                        placeholder="1"
                      />
                      <button class="qty-down border bg-light" data-id="pro1">
                        <i class="fas fa-angle-down"></i>
                      </button>
                    </div>
                  </div>
                  <!-- qty sonu-->
                </div>
              </div>

              <!-- boyut -->
              <div class="size my-3">
                <h6 class="font-baloo">Hafıza:</h6>
                <div class="d-flex justify-content-between w-75">
                  <div class="font-rubik border p-2">
                    <button class="btn p-0 font-size-14">4GB RAM</button>
                  </div>
                  <div class="font-rubik border p-2">
                    <button class="btn p-0 font-size-14">8GB RAM</button>
                  </div>
                  <div class="font-rubik border p-2">
                    <button class="btn p-0 font-size-14">16GB RAM</button>
                  </div>
                </div>
              </div>
              <!-- boyut sonu -->
            </div>

            <div class="col-12 mt-5">
              <h6 class="font-rubik">Ürün Açıklaması</h6>
              <hr />
              <p class="font-rale font-size-14">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nam
                quo quibusdam porro impedit molestiae totam in cupiditate maxime
                repellendus. Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Repellat quam quod voluptatum commodi similique! Earum
                recusandae explicabo culpa porro quos voluptatem soluta saepe,
                assumenda aperiam.
              </p>
              <p class="font-rale font-size-14">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nam
                quo quibusdam porro impedit molestiae totam in cupiditate maxime
                repellendus. Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Repellat quam quod voluptatum commodi similique! Earum
                recusandae explicabo culpa porro quos voluptatem soluta saepe,
                assumenda aperiam.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- PRODUCT END -->
      <?php 
      endif;
    endforeach;
      ?>