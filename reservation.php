<!-- reservation.php -->
<?php
  include 'template/header.php';
  include 'dbCon.php';

  if (!isset($_SESSION['isLoggedIn'])) {
      echo '<script>alert("You need to login first.")</script>';
      echo '<script>window.location="login.php"</script>';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Restaurant Reservations</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  
  <style>
    .restaurant-img {
      width: 300px;
      height: 550px;
    }
  </style>
</head>

<body>

<?php include 'template/nav-bar.php'; ?>
<!-- END nav -->

<?php
  $background_images = array(
    'peony.jpg', 'background2.jpg', 'background3.jpg', 'background4.jpg', 'background5.jpg',
    'background6.jpg', 'background7.jpg', 'background8.jpg', 'background9.jpg', 'background10.jpg',
    'background11.jpg', 'background12.jpg', 'background13.jpg', 'background14.jpg', 'background15.jpg'
  );

  $restaurants = array(
    array('id' => 1, 'name' => 'Peony Chinese Restaurant and Takeaway'),
    array('id' => 2, 'name' => 'Restaurant 2'),
    array('id' => 3, 'name' => 'Restaurant 3'),
    array('id' => 4, 'name' => 'Restaurant 4'),
    array('id' => 5, 'name' => 'Restaurant 5'),
    array('id' => 6, 'name' => 'Restaurant 6'),
    array('id' => 7, 'name' => 'Restaurant 7'),
    array('id' => 8, 'name' => 'Restaurant 8'),
    array('id' => 9, 'name' => 'Restaurant 9'),
    array('id' => 10, 'name' => 'Restaurant 10'),
    array('id' => 11, 'name' => 'Restaurant 11'),
    array('id' => 12, 'name' => 'Restaurant 12'),
    array('id' => 13, 'name' => 'Restaurant 13'),
    array('id' => 14, 'name' => 'Restaurant 14'),
    array('id' => 15, 'name' => 'Restaurant 15')
  );
?>

<section class="home-slider owl-carousel">
  <?php
  foreach ($restaurants as $index => $restaurant) {
    $bg_image = isset($background_images[$index]) ? $background_images[$index] : 'default.jpg';
    echo '<div class="slider-item" style="background-image: url(images/' . $bg_1 . ');" data-stellar-background-ratio="0.5">';
    echo '<div class="overlay"></div>';
    echo '<div class="container">';
    echo '<div class="row slider-text align-items-center justify-content-center">';
    echo '<div class="col-md-10 col-sm-12 ftco-animate text-center">';
    echo '<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Reservation</span></p>';
    echo '<h1 class="mb-3">Make a Reservation</h1>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
  ?>
</section>

<div class="ftco-section-reservation" style="margin-top: 145px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 reservation pt-5 px-5">
        <p style="font-size: 20px; color: #000;font-weight: bold;margin-top: -30px">Make a Reservation</p>
        <div class="block-17" style="min-height: 100px;">
          <form action="restaurant-list.php" method="POST" class="d-block d-lg-flex">
            <div class="fields d-block d-lg-flex">
              <p style="font-size: 20px;color: #000">City</p>
              <div class="select-wrap one-half">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="city" id="" class="form-control" disabled="">
                  <option value="Pokhara">Pokhara</option>
                </select>
              </div>
              <p style="font-size: 20px;color: #000">Cuisines</p>
              <div class="select-wrap one-half">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select data-plugin-selectTwo class="form-control populate" name="area" required="" style="cursor: pointer;">
                  <option value=""> -Select- </option>
                  <?php
                  $con = connect();
                  $sql = "SELECT * FROM `cuisines`;";
                  $result = $con->query($sql);
                  foreach ($result as $r) {
                    ?>
                    <option value="<?php echo $r['id']; ?>"><?php echo $r['cuisine_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <input type="submit" class="search-submit btn btn-primary" name="find" value="Find">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  foreach ($restaurants as $index => $restaurant) {
    $bg_image = isset($background_images[$index]) ? $background_images[$index] : 'peony.jpg';
    echo '<section class="ftco-section bg-light">';
    echo '<div class="container">';
    echo '<div class="row no-gutters justify-content-center mb-5 pb-5">';
    echo '<div class="col-md-7 text-center heading-section ftco-animate">';
    echo '<h2>' . $restaurant['name'] . '</h2>';
    echo '</div>';
    echo '</div>';
    echo '<div class="row d-flex">';
    echo '<div class="col-md-4 ftco-animate img" style="background-image: url(images/' . $bg_image . '); width: 300px; height: 550px;"></div>';
    echo '<div class="col-md-8 ftco-animate makereservation p-5 bg-light">';
    echo '<form action="choose-table.php" method="POST">';
    echo '<div class="row">';
    echo '<div class="col-md-6">';
    echo '<div class="form-group">';
    echo '<label for="">Name</label>';
    echo '<input type="text" name="reservation_name" class="form-control" placeholder="Your Name" required="" value="<?php echo $_SESSION[\'name\'];?>">';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<div class="form-group">';
    echo '<label for="">Phone</label>';
    echo '<input type="text" name="reservation_phone" class="form-control" placeholder="Phone" required="" value="<?php echo $_SESSION[\'phone\'];?>">';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<div class="form-group">';
    echo '<label for="">Date</label>';
    echo '<input type="date" name="reservation_date" class="form-control" placeholder="Date" required="">';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-6">';
    echo '<div class="form-group">';
    echo '<label for="">Time</label>';
    echo '<select name="reservation_time" class="form-control" placeholder="Time" required="">';
    echo '<option value="10:00am">10:00am</option>';
    echo '<option value="10:45am">10:45am</option>';
    echo '<option value="11:30am">11:30am</option>';
    echo '<option value="12:15pm">12:15pm</option>';
    echo '<option value="1:15pm">1:15pm</option>';
    echo '<option value="2:15pm">2:15pm</option>';
    echo '<option value="3:15pm">3:15pm</option>';
    echo '<option value="4:15pm">4:15pm</option>';
    echo '<option value="5:15pm">5:15pm</option>';
    echo '<option value="6:15pm">6:15pm</option>';
    echo '<option value="7:15pm">7:15pm</option>';
    echo '<option value="8:00pm">8:00pm</option>';
    echo '<option value="8:45pm">8:45pm</option>';
    echo '<option value="9:30pm">9:30pm</option>';
    echo '</select>';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-12 mt-3">';
    echo '<div class="form-group">';
    echo '<input type="hidden" name="res_id" value="' . $restaurant['id'] . '">';
    echo '<input type="submit" name="reservation" value="Submit" class="btn btn-primary py-3 px-5">';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
  }
?>

<?php include 'template/script.php'; ?>

</body>

</html>
