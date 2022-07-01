<?php
include "./assets/utils/config.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/styles/index.css" />
    <title>PetShopQu</title>
  </head>
  <body>
    <div class="banner">
      <div class="navbar">
        <img src="assets/img/petfood.png" class="logo" />
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Cart</a></li>
          <li><a href="#">Register</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>

      <div class="content">
        <h1>Welcome to PetShopQu</h1>
        <p>
          Website yang menyediakan kebutuhan hewan peliharaan anda<br />Pet Food
          ? Medicine ? Accessories? semuanya ada disini
        </p>
        <div>
          <button type="button" class="discover-btn">DISCOVER</button>
        </div>
      </div>
    </div>

    <div class="product"  >
      <div class="our-product">
        <h1>Our Product</h1>
        <p>
          asjkdhajsdkajsdnkajsdbjwabjksdjkwbakjsbdjkwjabjsdbjwbajsbd
          mnwabjsbdjwaksd <br />
          kasjdnjwbakjsn d,s a,dnwnajksndmn asnmdmwbajhsjdbwhjabshjdbjhwabh
          bajsbdjw
        </p>

        <div class="container">
          <div class="item-food">
            <div class="item-pet-food">
              <p>Food</p>
              <img
                src="assets/img/petfood.png"
                alt="Pet Food"
                class="img-pet-food"
              />
            </div>
            <div>
              <button type="button" class="btn-pet-food">Discover</button>
            </div>
          </div>

          <div class="item-food">
            <div class="item-pet-food">
              <p>Medicine</p>
              <img
                src="assets/img/petfood.png"
                alt="Pet Food"
                class="img-pet-food"
              />
              <div>
                <button type="button" class="btn-pet-food">Discover</button>
              </div>
            </div>
          </div>

          <div class="item-food">
            <div class="item-pet-food">
              <p>Accessories</p>
              <img
                src="assets/img/petfood.png"
                alt="Pet Food"
                class="img-pet-food"
              />
            </div>
            <button type="button" class="btn-pet-food">Discover</button>
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
