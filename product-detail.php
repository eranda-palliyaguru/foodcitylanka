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
                <h1><?php echo $row['name']; ?></h1><h3>(<?php echo $row['size']; ?>)</h3>
                <p class="ps-product__category"><a href="#"> <?php echo $row['brand']; ?></a></p>
                <h1 class="price">Rs.<?php echo $row['sell_price']; ?></h1>


  <form action="add_cart.php" method="post">
                <div class="ps-product__block ps-product__size">
                  <h4>QTY</h4>

                  <div class="form-group">
                    <input class="form-control" type="number" value="1" name="qty">
                  </div>
                </div>


                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="ps-product__shopping"><button class="ps-btn mb-10" type="submit" >Add to cart<i class="ps-icon-next"></i></button>

                  </form>
                </div>
              </div>



              <div class="clearfix"></div>



              <div class="ps-product__content mt-50">
                <ul class="tab-list" role="tablist">
                  <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">About this Product</a></li>
                  <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
                  <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAG</a></li>
                  <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a></li>
                </ul>
              </div>
              <div class="tab-content mb-60">
                <div class="tab-pane active" role="tabpanel" id="tab_01">
                    <p><?php echo $row['about']; ?></p>
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

              <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0">
                <img class="rev-slidebg" src="images/slider/ad2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                </li>

            </div>
          <?php } ?>
          </div>
        </div>
      </div>


    <?php include('foote.php'); ?>
