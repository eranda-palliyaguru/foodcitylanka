<?php include('hed.php'); ?>


    <main class="ps-main">
      <div class="test">
        <div class="container">
          <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                </div>
          </div>
        </div>
      </div>
      <div class="ps-product--detail pt-60">
        <div class="ps-container">
          <div class="row">
            <?php $id=$_GET['id'];
            $stmt = $db->query("SELECT * FROM product WHERE id='$id' ORDER by id DESC limit 0,11");
            while ($row = $stmt->fetch())
            { $product_id=$row['id'];  ?>
            <div class="col-lg-10 col-md-12 col-lg-offset-1">
              <div class="ps-product__thumbnail">
                <div class="ps-product__preview">
                  <div class="ps-product__variants">
                    <div class="item"><img src="images/product/<?php echo $row['img1'] ; ?>" alt=""></div>
                    <?php
                    $stmt2 = $db->query("SELECT * FROM img_hub WHERE product_id='$id' ");
                    while ($row2 = $stmt2->fetch()){  ?>
                    <div class="item"><img src="images/product/<?php echo $row2['name']; ?>" alt=""></div>
                  <?php } ?>
                  </div>
                </div>
                <div class="ps-product__image">
                  <div class="item"><img class="zoom" src="images/product/<?php echo $row['img1'] ; ?>" alt="" data-zoom-image="images/product/<?php echo $row['img1'] ; ?>"></div>
                  <?php
                  $stmt2 = $db->query("SELECT * FROM img_hub WHERE product_id='$id' ");
                  while ($row2 = $stmt2->fetch()){  ?>
				   <div class="item"><img class="zoom" src="images/product/<?php echo $row2['name']; ?>" alt="" data-zoom-image="images/product/<?php echo $row2['name']; ?>"></div>
<?php } ?>

                </div>
              </div>
              <div class="ps-product__thumbnail--mobile">
                <div class="ps-product__main-img"><img src="images/product/<?php echo $row['img1'] ; ?>" alt=""></div>
                <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on">
                  <img src="images/product/<?php echo $row['img1'] ; ?>" alt="">
                  <?php
                  $stmt2 = $db->query("SELECT * FROM img_hub WHERE product_id='$id' ");
                  while ($row2 = $stmt2->fetch()){  ?>
                  <img src="images/product/<?php echo $row2['name']; ?>" alt="">
                <?php } ?></div>
              </div>
              <div class="ps-product__info">
                <h1><?php echo $row['name']; ?></h1>
                <p class="ps-product__category"><a href="#"> <?php echo $row['brand']; ?></a></p>
                <h1 class="price">Rs.<?php echo $row['sell_price']; ?></h1>
                <div class="ps-product__block ps-product__quickview">
                  <h4>QUICK REVIEW</h4>
                  <p><?php echo $row['about']; ?></p>
                </div>
                <div class="ps-product__block ps-product__style">
                  <h4>CHOOSE YOUR STYLE</h4>
                  <ul>
                    <li><a href="product-detail.html"><img src="images/product/<?php echo $row['img1'] ; ?>" alt=""></a></li>
                    <li><a href="product-detail.html"><img src="images/shoe/sidebar/2.jpg" alt=""></a></li>
                    <li><a href="product-detail.html"><img src="images/shoe/sidebar/3.jpg" alt=""></a></li>
                    <li><a href="product-detail.html"><img src="images/shoe/sidebar/2.jpg" alt=""></a></li>
                  </ul>
                </div>
                <div class="ps-product__block ps-product__size">
                  <h4>CHOOSE SIZE<a href="#">Size chart</a></h4>
                  <select class="ps-select selectpicker">
                    <option value="1">Select Size</option>
                    <option value="2">4</option>
                    <option value="3">4.5</option>
                    <option value="3">5</option>
                    <option value="3">6</option>
                    <option value="3">6.5</option>
                    <option value="3">7</option>
                    <option value="3">7.5</option>
                    <option value="3">8</option>
                    <option value="3">8.5</option>
                    <option value="3">9</option>
                    <option value="3">9.5</option>
                    <option value="3">10</option>
                  </select>
                  <div class="form-group">
                    <input class="form-control" type="number" value="1">
                  </div>
                </div>
                <div class="ps-product__shopping"><a class="ps-btn mb-10" href="cart.html">Add to cart<i class="ps-icon-next"></i></a>
                  <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="ps-product__content mt-50">
                <ul class="tab-list" role="tablist">
                  <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
                  <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
                  <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAG</a></li>
                  <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a></li>
                </ul>
              </div>
              <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                </div>

                <div class="tab-pane" role="tabpanel" id="tab_03">
                  <p>Add your tag <span> *</span></p>
                  <form class="ps-product__tags" action="_action" method="post">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="">
                      <button class="ps-btn ps-btn--sm">Add Tags</button>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab_04">
                  <div class="form-group">
                    <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
                  </div>
                  <div class="form-group">
                    <button class="ps-btn" type="button">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>


    <?php include('foote.php'); ?>
