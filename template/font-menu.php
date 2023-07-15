<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Menu</span>
            <h2>Discover Our Exclusive Menu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">

            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link py-3 px-4 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="flaticon-meat"></span> Main</a>
              <a class="nav-link py-3 px-4" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="flaticon-cutlery"></span> Dessert</a>
              <a class="nav-link py-3 px-4" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="flaticon-cheers"></span> Drinks</a>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                <div class="col-lg-6">
  <?php 
  $sql2 = "SELECT * FROM `menu_item` WHERE food_type = 'non-veg' LIMIT 5";
  $result2 = $con->query($sql2);
  foreach ($result2 as $r2) {
  ?>
  <div class="menus d-flex ftco-animate">
    <div class="menu-img" style="background-image: url(images/<?php echo $r2['image']; ?>);"></div>
    <div class="text d-flex">
      <div class="one-half">
        <h3><?php echo $r2['item_name']; ?></h3>
        <?php if (isset($r2['madeby'])) { ?>
          <p><span><?php echo $r2['madeby']; ?></span></p>
        <?php } ?>
      </div>
      <div class="one-forth">
        <span class="price"> Rs.<?php echo $r2['price']; ?></span><br> 
      </div> 
    </div>
  </div>
 <?php } ?>
                    <!-- <div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/pothot.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Hotpot</h3>
      <p><span>Soup</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.800</span>
    </div>
  </div>
</div>
<div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/pizza.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Pizza</h3>
      <p><span>Cheese</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.750</span>
    </div>
  </div>
</div>
<div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/sushi.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Sushi</h3>
      <p><span>Fish</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.600</span>
    </div>
  </div>
</div>
<div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/kimchi.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Kimchi jjigae</h3>
      <p><span>Kimchi</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.300</span>
    </div>
  </div>
</div>
<div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/chicken.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Orange chicken</h3>
      <p><span>Chicken</span>, <span>orange zest</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.680</span>
    </div>
  </div>
</div> -->
                  </div>

                  <div class="col-lg-6">
  <?php 
  $sql2 = "SELECT * FROM `menu_item` WHERE food_type = 'dinner' LIMIT 5";
  $result2 = $con->query($sql2);
  foreach ($result2 as $r2) {
  ?>
  <div class="menus d-flex ftco-animate">
    <div class="menu-img" style="background-image: url(images/<?php echo $r2['image']; ?>);"></div>
    <div class="text d-flex">
      <div class="one-half">
        <h3><?php echo $r2['item_name']; ?></h3>
        <?php if (isset($r2['madeby'])) { ?>
          <p><span><?php echo $r2['madeby']; ?></span></p>
        <?php } ?>
      </div>
      <div class="one-forth">
        <span class="price"> Rs.<?php echo $r2['price']; ?></span><br> 
      </div> 
    </div>
  </div>
 <?php } ?>
     <!--  <div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/khana.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Nepali khana set</h3>
      <p><span>Rice</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.500</span>
    </div>
  </div>
</div>
<div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/ribs.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Pork ribs</h3>
      <p><span>Pork</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.950</span>
    </div>
  </div>
</div>
<div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/tofu.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Mapo tofu</h3>
      <p><span>Tofu</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.580</span>
    </div>
  </div>
</div>
<div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/spaghetti.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Spaghetti</h3>
      <p><span>Spaghetti strips</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.780</span>
    </div>
  </div>
</div>
<div class="menus d-flex ftco-animate">
  <div class="menu-img" style="background-image: url(images/chocochip icecream.jpg);"></div>
  <div class="text d-flex">
    <div class="one-half">
      <h3>Chocochip Icecream</h3>
      <p> <span>Whipped cream</span></p>
    </div>
    <div class="one-forth">
      <span class="price">Rs.250</span>
    </div>
  </div>
</div> -->
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="row">
                  <div class="col-lg-6">

                    <?php 
                      $sql2 = "SELECT * FROM `menu_item` WHERE food_type = 'dessert' LIMIT 5";
                      $result2 = $con->query($sql2);
                      foreach ($result2 as $r2) {
                    ?>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/<?php echo $r2['image']; ?>);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3><?php echo $r2['item_name']; ?></h3>
                          <?php if(isset($r2['madeby'])){?>
                          <p><span><?php echo $r2['madeby']; ?></span></p>
                          <?php }?>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.<?php echo $r2['price']; ?></span><br> 
                        </div> 
                      </div>
                    </div>
                    <?php } ?>

               <!--      <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/tiramisu.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Tiramisu</h3>
                          <p><span>Egg</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.420</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/cheesecake.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Cheese cake</h3>
                          <p><span>Cream Cheese</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.450</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/dumpling.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Dumpling</h3>
                          <p><span>Chicken</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.300</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/tempura.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Tempura</h3>
                          <p><span>Shrimp</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.740</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/tonkatsu.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Tonkatsu</h3>
                          <p><span>Meat</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.780</span>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div><!-- END -->

              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="row">
                  <div class="col-lg-6">
                            <?php 
                      $sql2 = "SELECT * FROM `menu_item` WHERE food_type = 'Drink' LIMIT 5";
                      $result2 = $con->query($sql2);
                      foreach ($result2 as $r2) {
                    ?>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(dashboard/item-image/<?php echo $r2['image']; ?>);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3><?php echo $r2['item_name']; ?></h3>
                          <p><span><?php echo $r2['madeby']; ?></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">₹ <?php echo $r2['price']; ?></span><br> 
                        </div> 
                      </div>
                    </div>
                    <?php } ?>
<!--                     <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-1.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Lemon Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.90</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-2.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Guava Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.50</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-3.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Sprite</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.60</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-4.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Cola</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.70</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-5.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Wine</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.70</span>
                        </div>
                      </div>
                    </div> -->
                  </div>

                  <div class="col-lg-6">
                            <?php 
                      $sql2 = "SELECT * FROM `menu_item` WHERE food_type = 'Drink' LIMIT 5 , 5";
                      $result2 = $con->query($sql2);
                      foreach ($result2 as $r2) {
                    ?>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(dashboard/item-image/<?php echo $r2['image']; ?>);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3><?php echo $r2['item_name']; ?></h3>
                          <p><span><?php echo $r2['madeby']; ?></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">₹ <?php echo $r2['price']; ?></span><br> 
                        </div> 
                      </div>
                    </div>
                    <?php } ?>
<!--                     <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-6.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Beer</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.50</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-7.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Mango Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.60</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-8.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Apple Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.80</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-9.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Strawberry Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.80</span>
                        </div>
                      </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/drink-10.jpg);"></div>
                      <div class="text d-flex">
                        <div class="one-half">
                          <h3>Orange Juice</h3>
                          <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                        <div class="one-forth">
                          <span class="price">Rs.100</span>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
  