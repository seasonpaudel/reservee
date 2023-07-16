<!-- restaurant-list.php -->

<?php 
if (isset($_POST['find'])) {
  $selected_cuisine = $_POST['area'];

  include 'dbCon.php';
  include 'template/header.php';
?>
  <body>
    
   <?php include 'template/nav-bar.php'; ?>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <!-- Slider content -->
    </section>

    <div class="ftco-section-reservation" style="margin-top: 145px;">
      <!-- Reservation form -->
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Restaurants</span>
            <h2>Discover Our Exclusive Restaurants</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 dish-menu">
            <div class="nav nav-pills justify-content-center ftco-animate" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <!-- Nav links -->
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">
                <?php  
                  $con = connect();
                  $selected_cuisine = $_POST['area']; 

                  $sql = ""; // Initialize the SQL query variable

                  // Generate the SQL query based on the selected cuisine
                  if ($selected_cuisine === 'Chinese') {
                    $sql = "SELECT * FROM `restaurant_info` WHERE cuisine = 'Chinese' LIMIT 2";
                  } elseif ($selected_cuisine === 'Japanese') {
                    $sql = "SELECT * FROM `restaurant_info` WHERE cuisine = 'Japanese' LIMIT 2";
                  }
                  // Add more conditions for other cuisines if needed

                  // Check if the SQL query is not empty
                  if (!empty($sql)) {
                    $result = $con->query($sql);
                    foreach ($result as $r) {
                      if (isset($r['address'])) {
                        $address = $r['address'];
                      } else {
                        $address = 'Address not available';
                      }
                ?>
                  <div class="col-lg-12">
                    <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/<?php echo $r['logo']; ?>)"></div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3><?php echo $r['restaurant_name']; ?></h3>
                          </div>
                          <div class="col-lg-12">
                            <p><?php echo $address; ?></p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=<?php echo $r['id']; ?>" class="btn btn-info" style="width: 100%;margin-left: 23px;margin-top: 18px;">Book Table</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                    }
                  } else {
                    echo "No cuisine selected.";
                  }
                ?>
              <!-- <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/china.jpg)"></div>
                      <div class="text d-flex">
                        <div class="row one-half">
                          <div class="col-lg-12">
                            <h3>Peony Chinese Restaurant and Takeaway</h3>
                          </div>
                          <div class="col-lg-12">
                            <p>Gaurighat</p>
                          </div>
                        </div>
                        <div class="one-third">
                          <a href="reservation.php?res_id=1" class="btn btn-info" style="width: 100%;margin-left: 23px;margin-top: 18px;">Book Table</a>
                        </div>
                      </div>
                    </div>
                  <div class="menus d-flex ftco-animate">
                      <div class="menu-img" style="background-image: url(images/italia.jpg)"></div>
                      <div class="text d-flex">
                        <div class="row one-half">
                        	<div class="col-lg-12">
                          	<h3>Festa Italiana</h3>
                      		</div>
                          <div class="col-lg-12">
                            <p>Baidam Road</p>
                          </div>
                        </div>
                        <div class="one-third">
                        	<a href="reservation.php?res_id=2" class="btn btn-info" style="width: 100%;margin-left: 23px;margin-top: 18px;">Book Table</a>
                        </div>
                      </div>
                    </div>-->
                    

                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php include 'template/script.php'; ?>
    
  </body>
</html>
<?php 
  }
?>     