
<!DOCTYPE html >
<html <?php language_attributes();?>>
  <head>
  <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset');?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <link rel="stylesheet" href="~/lib/Font-Awesome/css/fontawesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 
  </head>
  <body style="overflow-x: hidden;">
    <header class="header-area" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link disabled" href="#">SHOP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">OUR STORY</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link disabled" href="#">EXPERTISE</a>
          </li>
          <img src="<?php echo get_theme_file_uri('/images/Vector_Smart_Object.png');?>" alt="logo" class="logo" >
          </div>
        </ul>
        <a class="nav-link nav-dg disabled" href="#">CONTACTS</a>
        <form class="form-inline my-3 my-lg-0">
          <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
          <i class="fa fa-shopping-cart nav-item"style="font-size:30px"></i>
          <i class="fa fa-user" style="font-size:30px"></i>
        </form>
      </div>
    </nav> 
    <div class="home-image">
        <p>Super Soft,Stylish bed room Linen<br>
       Made With Love
     </p>
     <img src="<?php echo get_theme_file_uri('/images/bedroom.png');?>" >
   </div>
    <div class="product-desc">
      <p >
        Our premium products got the finest quality cotton that create an exquisite lightweight textile that’s both soft and crisp – guaranteed to give you a wonderful night’s sleep.
      </p>
    </div>
    <div class="wrapper">
      <div style="margin-left: 0px" class="grid-item1" >
        <p class="grid-itempp">
          Shop Bed Linens
        </p>
        <img src="<?php echo get_theme_file_uri('/images/Layer_22.png');?>"  height="500px" width="600px">
          
        </div>
        <div class="grid-item1">
          <p class="grid-itempp">
            Shop Bath Towels
          </p>
          <img src="<?php echo get_theme_file_uri('/images/Layer_20.png');?>"  height="500px" width="600px">
        </div>
        <div style="margin-left: 0px" class="grid-item1">
          <p class="grid-itempp" >
            Shop Bath Robes
          </p>
          <img src="<?php echo get_theme_file_uri('/images/Layer_23.png');?>"  height="500px" width="600px">

        </div>
        <div class="grid-item1 " >
          <p class="grid-itempp "   >
            Shop Home Fragrances
</p> 
          <img src="<?php echo get_theme_file_uri('/images/JASMINE_copy.png');?>"  height="500px" width="600px">
        </div>
        <div class="best-sell">
          <div class="image-1">
          <img src="<?php echo get_theme_file_uri('/images/Layer_26.png');?>"  height="400px" width="400px">

            <h6>Product Name</h6>
              <h7>AED XXX</h7>
              <p>Available in 5 colours</p>
            </div>
            <div class="image-2">
            <img src="<?php echo get_theme_file_uri('/images/Layer_24.png');?>"  height="400px" width="400px">
              <h6>Product Name</h6>
              <h7>AED XXX</h7>
              <p>
                Special Offer Get 25% OFF
              </p>
            </div>
            <div class="image-3">
            <img src="<?php echo get_theme_file_uri('/images/Layer_25.png');?>"  height="400px" width="400px">
              <h6>Product Name</h6>
              <h7>AED XXX</h7>
              <p>
                Available in 3 colours
              </p>
            </div>
          </div>
        </div>
        <div class="product-add" >
          <h2>Your Comfort Is Our #1Priority</h2>
          <img src="<?php echo get_theme_file_uri('/images/Layer_6.png');?>"  width="100%">

          <div class="pro">
            <div class="product-details-1">
              <h5>Quality product </h5>
              <h>Lorem ipsum dolor sit amet,<br />
              consectetur adipisicing elit, sed do </p>
            </div>
            <div class="product-details-2">
              <h5>Lifetime Warranty</h5>
              <p>Lorem ipsum dolor sit amet,<br />
              consectetur adipisicing elit, sed do </p>
            </div>
            <div class="product-details-3">
              <h5>Stress-free Shopping </h5>
              <p>Lorem ipsum dolor sit amet,<br />
              consectetur adipisicing elit, sed do </p>
            </div>
            <div class="product-details-4">
              <h5>Fair Prices </h5>
              <p>Lorem ipsum dolor sit amet,<br />
              consectetur adipisicing elit, sed do </p>
            </div>
          </div>
        </div>
        <div class="stars">
        <img src="<?php echo get_theme_file_uri('/images/Layer_29.png');?>">

          <h2>"This is the best towel set I've ever had; it's cool,
            <br /> comfortable and aesthetically perfect."</h2>
          </div>
          <div class="last-section"> 
          <img src="<?php echo get_theme_file_uri('/images/Layer_300.png');?>"height="350" >
          <img src="<?php echo get_theme_file_uri('/images/Layer_31.png');?>"height="350">
          <img src="<?php echo get_theme_file_uri('/images/Layer_32.png');?>"height="350">
          <img src="<?php echo get_theme_file_uri('/images/Layer_33.png');?>"height="350">
        </div>
      </header>
      <main class="main-area">
      