<?php
// koneksi ke database
// Create database connection using config file
include_once("database/koneksi.php");
$data = query("SELECT * FROM barang");
// var_dump($data);

// Fetch all users data from database
// $barang = query($db, "SELECT * FROM barang");
// $data = mysqli_fetch_object($result);


// mengambil template layout
require_once 'layout/header.php';
require_once 'layout/nav_top.php';
require_once 'layout/nav_right.php';
// slide hanya untuk home
require_once 'layout/slide.php';
// var_dump($barang);
// die();

?>

<!-- content disini -->



<div class="row">
  <?php foreach ($data as $item) : ?>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="assets/img/<?= $item['img']; ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#"><?= $item['nama_barang']; ?></a>
          </h4>
          <h5>Rp.<?= $item['harga']; ?></h5>
          <p class="card-text"><?= $item['spesifikasi']; ?></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- 
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Two</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
          numquam aspernatur! Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Three</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
          numquam aspernatur!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Four</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
          numquam aspernatur!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Five</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
          numquam aspernatur! Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">Item Six</a>
        </h4>
        <h5>$24.99</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
          numquam aspernatur!</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div> -->

</div>






<?php
//akhir content
require_once 'layout/footer.php';
?>