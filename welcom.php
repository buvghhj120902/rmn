<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="RVMypham-logo1.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAMENNGON</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="overlay " data-overlay></div>

  <!-- Màn hình đăng ký -->

  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">
      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="logo copy.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">
        <form action="#">

          <div class="newsletter-header">
            <h3 class="newsletter-title">Mua sắm ngay</h3>
            <p class="newsletter-desc">
              Còn chần chừ gì nữa <b>RAMENNGON</b> luôn những sản phẩm mới nhất và nhiều ưu đãi khác
            </p>
          </div>
          <input type="email" name="email" class="email-field" placeholder="Số điện thoại" required>
          <button type="submit" class="btn-newsletter">LET'GO</button>
        </form>

      </div>

    </div>

  </div>



  <!-- Thông báo mua hàng trong shop -->

  <div class="notification-toast " data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="minimal-img-3.png" alt="Bò KOBE A1" width="80" height="70">
    </div>

    <div class="toast-detail">
      <p class="toast-message">
        Ai đó đã mua sản phẩm
      </p>

      <p class="toast-title">
        Bò KOBE A1
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 phút</time> trước
      </p>

    </div>



  </div>

<!-- Header -->
  <header>

    <!-- Liên hệ, free ship, loại tiền, ngôn ngữ -->
    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">
          <li> <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a></li>

          <li> <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a></li>

          <li> <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a></li>

          <li> <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
        </ul>

        <div class="header-alert-news">
          <p>
            <b>Miễn phí vận chuyển</b>
            cho đơn hàng trên 300.000<sup>đ</sup>
          </p>
        </div>

        <div class="header-top-action">

          <select name="currency">

            <option value="vnd">VND</option>
            <option value="vnd">USD</option>

          </select>

          <select name="language">

            <option value="es-VN">Vietnamese</option>
            <option value="es-US">English</option>
            <option value="es-CN">Chinese</option>
            <option value="es-KR">Korea</option>
            <option value="es-JP">Japanese</option>

          </select>

          <a class="lg" href="logout.php" style="color:hsl(0, 0%, 47%) ;font-size:15px;">ĐĂNG XUẤT</a>

        </div>

      </div>

    </div>

    <!-- Logo -->

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="RVMypham-logo1.png" alt="RVMypham's logo" width="100" height="100">
        </a>

        <div class="header-search-container">
          <input type="search" name="search" class="search-field" placeholder="Nhập tên sản phẩm...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>


      </div>

    </div>

    <!-- Menu danh mục -->

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <!-- Trang chủ -->

          <li class="menu-category">
            <a href="#" class="menu-title">Trang chủ</a>
          </li>

          <!-- Thể loại -->

          <li class="menu-category">
            <a href="#" class="menu-title">Thể loại</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Japanese Food >
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Mì Ramen</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Shushi</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Mì Udon</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Shashimi</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Cơm</a>
                </li>

                <li class="panel-list-item">
                  <a href="#"> <img src="jpf.png" alt="headphone collection" class="img1" width="250" 
                      height="119"> </a>
                </li>

              </ul>


              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Hải sản tươi sống ></a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Cua</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Cá</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Tôm</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Trứng cá</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Các loại khác</a>
                </li>

                <li class="panel-list-item">
                  <a href="#"> <img src="hs.png" alt="headphone collection" width="250"
                      height="119"> </a>
                </li>

              </ul>


              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Thịt > </a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Bò KOBE</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Bò Wayu</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Lươn</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Thịt lợn</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Thịt gà</a>
                </li>

                <li class="panel-list-item">
                  <a href="#"> <img src="kobe.png" alt="headphone collection" width="250"
                      height="119"> </a>
                </li>

              </ul>


              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Các lựa chọn khác ></a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Bánh truyền thống </a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Bánh ngọt</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Bánh mặn</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Đang cập nhật</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">>  Đang cập nhật</a>
                </li>

                <li class="panel-list-item">
                  <a href="#"> <img src="banh.png" alt="headphone collection" width="250"
                      height="119"> </a>
                </li>

              </ul>
            </div>

          </li>

          <!-- Danh mục 1-->
          <li class="menu-category">
            <a href="#" class="menu-title">Danh mục 1</a>

            <ul class="droppdown-list">

              <li class="droppdown-item">
                <a href="#">Loại 1</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 2</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 3</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 4</a>
              </li>

            </ul>

          </li>

          <!-- Danh mục 2-->
          <li class="menu-category">
            <a href="#" class="menu-title">Danh mục 2</a>

            <ul class="droppdown-list">

              <li class="droppdown-item">
                <a href="#">Loại 1</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 2</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 3</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 4</a>
              </li>

            </ul>

          </li>

          <!-- Danh mục 3-->
          <li class="menu-category">
            <a href="#" class="menu-title">Danh mục 3</a>

            <ul class="droppdown-list">

              <li class="droppdown-item">
                <a href="#">Loại 1</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 2</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 3</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 4</a>
              </li>

            </ul>

          </li>

          <!-- Danh mục 4-->
          <li class="menu-category">
            <a href="#" class="menu-title">Danh mục 4</a>

            <ul class="droppdown-list">

              <li class="droppdown-item">
                <a href="#">Loại 1</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 2</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 3</a>
              </li>

              <li class="droppdown-item">
                <a href="#">Loại 4</a>
              </li>

            </ul>

          </li>


          <!-- Blog -->

          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>


          <!-- Ưu đãi -->

          <li class="menu-category">
            <a href="#" class="menu-title">Ưu đãi</a>
          </li>


        </ul>

      </div>
    </nav>

    <!--Màn hình điện thoại  -->
    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>
        <span class="count">0</span>
      </button>

      <a href="index.html"><button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button></a>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>
        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>


    <nav class="mobile-navgation-menu has-scrollbar" data-mobile-menu>

      <div class="menu-top">

        <h2 class="menu-title">Danh mục</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>

      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Trang chủ</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Danh mục 1</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 1</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 2</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 3</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 4</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Danh mục 2</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 1</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 2</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 3</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 4</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Danh mục 3</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 1</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 2</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 3</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 4</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Danh mục 4</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>

          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 1</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 2</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 3</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Loại 4</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Ưu đãi</a>
        </li>


      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Ngôn ngữ</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Vietnamese</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Chinese</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Korea</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Japanese</a>
              </li>

            </ul>





          </li>

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Loại tiền</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">VND</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">USD</a>
              </li>

            </ul>





          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>







  <main>

   <!-- Banner -->

    <div class="banner">

      <div class="container">

       <div class="slider-container has-scrollbar">

        <div class="slider-item">

          <img src="banner1.png" alt="" class="banner-img">

          <div class="banner-content">

            <p class="banner-subtitle">Tiêu đề 1</p>

            <h2 class="banner-title">Đang nghĩ</h2>

            <p class="banner-text">
              Đang nghĩ
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>

        </div>

        <div class="slider-item">

          <img src="banner2.jpg" alt="" class="banner-img">

          <div class="banner-content">

            <p class="banner-subtitle">Tiêu đề 2</p>

            <h2 class="banner-title">Đang nghĩ</h2>

            <p class="banner-text">
              Đang nghĩ
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>

        </div>

        <div class="slider-item">

          <img src="banner3.jpg" alt="" class="banner-img">

          <div class="banner-content">

            <p class="banner-subtitle">Tiêu đề 3</p>

            <h2 class="banner-title">Đang nghĩ</h2>

            <p class="banner-text">
              Đang nghĩ
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>

        </div>

       </div>

      </div>

    </div>

 
   <!--Category -->
     
   <div class="category">

    <div class="container">

      <div class="category-item-container hasscrollbar">

        <div class="category-item">

          <div class="category-img-box">
            <img src="category-img-1.png" width="30" alt="">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Loại 1</h3>

              <p class="category-item-amount">(53)</p>

              
            </div>
            <a href="#" class="category-btn">Xem tất cả</a>
          </div>

        </div>

        <div class="category-item">

          <div class="category-img-box">
            <img src="category-img-2.png" width="30" alt="">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Loại 2</h3>

              <p class="category-item-amount">(22)</p>

             
            </div>
            <a href="#" class="category-btn">Xem tất cả</a>
          </div>

        </div>


        <div class="category-item">

          <div class="category-img-box">
            <img src="category-img-3.png" width="30" alt="">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Loại 3</h3>

              <p class="category-item-amount">(18)</p>

              
            </div>
            <a href="#" class="category-btn">Xem tất cả</a>
          </div>

        </div>


        <div class="category-item">

          <div class="category-img-box">
            <img src="category-img-4.png" width="30" alt="">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Loại 4</h3>

              <p class="category-item-amount">(28)</p>

             
            </div>
            <a href="#" class="category-btn">Xem tất cả</a>
          </div>

        </div>


        <div class="category-item">

          <div class="category-img-box">
            <img src="category-img-5.png" width="30" alt="">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Loại 5</h3>

              <p class="category-item-amount">(6)</p>

              
            </div>
            <a href="#" class="category-btn">Xem tất cả</a>
          </div>

        </div>


        <div class="category-item">

          <div class="category-img-box">
            <img src="category-img-6.png" width="30" alt="">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Loại 6</h3>

              <p class="category-item-amount">(12)</p>

              
            </div>
            <a href="#" class="category-btn">Xem tất cả</a>
          </div>

        </div>


        <div class="category-item">

          <div class="category-img-box">
            <img src="category-img-7.png" width="30" alt="">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Loại 7</h3>

              <p class="category-item-amount">(31)</p>

            
            </div>
            <a href="#" class="category-btn">Xem tất cả</a>
          </div>

        </div>


        <div class="category-item">

          <div class="category-img-box">
            <img src="category-img-8.png" width="30" alt="">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Loại 8</h3>

              <p class="category-item-amount">(43)</p>

              
            </div>
            <a href="#" class="category-btn">Xem tất cả</a>
          </div>

        </div>


      </div>

    </div>

   </div>


<!-- Product -->
       
     <div class="product-container">

      <div class="container">

         <div class="sidebar has-scrollbar" data-mobile-menu>

<!-- Thể loại -->
           <div class="sidebar-category"> 

            <div class="sidebar-top">
             <h2 class="sidebar-title">Thể loại</h2>

             <button class="sidebar-close-btn" data-mobile-menu-close-btn>
              <ion-icon name="close-outline"></ion-icon>
             </button>

            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="category-img-8.png" alt="" width="20" height="20" class="menu-title-img">
                    <p class="menu-title">Mục 1</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>
                <ul class="sidebar-submenu-category-list" data-accordion>
                  
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 1</p>
                      <data value="300" class="stock" title="Avaiable Stock">300</data>
                  
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 2</p>
                      <data value="300" class="stock" title="Avaiable Stock">100</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 3</p>
                      <data value="300" class="stock" title="Avaiable Stock">200</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 4</p>
                      <data value="300" class="stock" title="Avaiable Stock">150</data>
                  
                    </a>
                  </li>

                </ul>

              </li>


              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="category-img-7.png" alt="" width="20" height="20" class="menu-title-img">
                    <p class="menu-title">Mục 2</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>
                <ul class="sidebar-submenu-category-list" data-accordion>
                  
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 1</p>
                      <data value="300" class="stock" title="Avaiable Stock">300</data>
                  
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 2</p>
                      <data value="300" class="stock" title="Avaiable Stock">100</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 3</p>
                      <data value="300" class="stock" title="Avaiable Stock">200</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 4</p>
                      <data value="300" class="stock" title="Avaiable Stock">150</data>
                  
                    </a>
                  </li>

                </ul>

              </li>


              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="category-img-6.png" alt="" width="20" height="20" class="menu-title-img">
                    <p class="menu-title">Mục 3</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>
                <ul class="sidebar-submenu-category-list" data-accordion>
                  
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 1</p>
                      <data value="300" class="stock" title="Avaiable Stock">300</data>
                  
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 2</p>
                      <data value="300" class="stock" title="Avaiable Stock">100</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 3</p>
                      <data value="300" class="stock" title="Avaiable Stock">200</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 4</p>
                      <data value="300" class="stock" title="Avaiable Stock">150</data>
                  
                    </a>
                  </li>

                </ul>

              </li>
              

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="category-img-5.png" alt="" width="20" height="20" class="menu-title-img">
                    <p class="menu-title">Mục 4</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>
                <ul class="sidebar-submenu-category-list" data-accordion>
                  
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 1</p>
                      <data value="300" class="stock" title="Avaiable Stock">300</data>
                  
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 2</p>
                      <data value="300" class="stock" title="Avaiable Stock">100</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 3</p>
                      <data value="300" class="stock" title="Avaiable Stock">200</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 4</p>
                      <data value="300" class="stock" title="Avaiable Stock">150</data>
                  
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="category-img-4.png" alt="" width="20" height="20" class="menu-title-img">
                    <p class="menu-title">Mục 5</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>
                <ul class="sidebar-submenu-category-list" data-accordion>
                  
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 1</p>
                      <data value="300" class="stock" title="Avaiable Stock">300</data>
                  
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 2</p>
                      <data value="300" class="stock" title="Avaiable Stock">100</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 3</p>
                      <data value="300" class="stock" title="Avaiable Stock">200</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 4</p>
                      <data value="300" class="stock" title="Avaiable Stock">150</data>
                  
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="category-img-3.png" alt="" width="20" height="20" class="menu-title-img">
                    <p class="menu-title">Mục 6</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>
                <ul class="sidebar-submenu-category-list" data-accordion>
                  
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 1</p>
                      <data value="300" class="stock" title="Avaiable Stock">300</data>
                  
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 2</p>
                      <data value="300" class="stock" title="Avaiable Stock">100</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 3</p>
                      <data value="300" class="stock" title="Avaiable Stock">200</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 4</p>
                      <data value="300" class="stock" title="Avaiable Stock">150</data>
                  
                    </a>
                  </li>

                </ul>

              </li>


              <li class="sidebar-menu-category">  

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="category-img-2.png" alt="" width="20" height="20" class="menu-title-img">
                    <p class="menu-title">Mục 7</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>
                <ul class="sidebar-submenu-category-list" data-accordion>
                  
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 1</p>
                      <data value="300" class="stock" title="Avaiable Stock">300</data>
                  
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 2</p>
                      <data value="300" class="stock" title="Avaiable Stock">100</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 3</p>
                      <data value="300" class="stock" title="Avaiable Stock">200</data>
                  
                    </a>
                  </li>


                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Loại 4</p>
                      <data value="300" class="stock" title="Avaiable Stock">150</data>
                  
                    </a>
                  </li>

                </ul>

              </li>

            </ul>

           </div>


<!--Best sellers  -->
           <div class="product-showcase">

            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="bsl-img-1.jpg" width="75" height="75" alt="" class="showcase-img">
                  </a>

                  <div class="showccase-content">

                    <a href="#">
                      <h4 class="showcase-title">Tiêu đề</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                       <del>199k</del>
                       <p class="price">129k</p>
                    </div>

                  </div>

                </div>


                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="bsl-img-2.jpg" width="75" height="75" alt="" class="showcase-img">
                  </a>

                  <div class="showccase-content">

                    <a href="#">
                      <h4 class="showcase-title">Tiêu đề</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                       <del>459k</del>
                       <p class="price">299k</p>
                    </div>

                  </div>

                </div>


                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="bsl-img-3.jpg" width="75" height="75" alt="" class="showcase-img">
                  </a>

                  <div class="showccase-content">

                    <a href="#">
                      <h4 class="showcase-title">Tiêu đề</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                       <del>159k</del>
                       <p class="price">79k</p>
                    </div>

                  </div>

                </div>


                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="bsl-img-4.jpg" width="75" height="75" alt="" class="showcase-img">
                  </a>

                  <div class="showccase-content">

                    <a href="#">
                      <h4 class="showcase-title">Tiêu đề</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                       <del>179k</del>
                       <p class="price">99kk</p>
                    </div>

                  </div>

                </div>



              </div>

            </div>

           </div>

         </div>

         <div class="product-box">


<!-- product minimal -->

          <div class="product-minimal">


<!--Bò KOBE cao cấp  -->
            <div class="product-showcase">

              <h2 class="title">Bò KOBE cao cấp</h2>

               <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img-1.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 1</a>

                      <div class="price-box">
                        <p class="price">199k</p>
                        <del>79k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img-2.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 2</a>

                      <div class="price-box">
                        <p class="price">299k</p>
                        <del>129k</del>
                      </div>

                    </div>

                  </div>



                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img-3.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 3</a>

                      <div class="price-box">
                        <p class="price">279k</p>
                        <del>159k</del>
                      </div>

                    </div>

                  </div>



                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img-4.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 4</a>

                      <div class="price-box">
                        <p class="price">99k</p>
                        <del>59k</del>
                      </div>

                    </div>

                  </div>

                </div>


                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img-5.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 1</a>

                      <div class="price-box">
                        <p class="price">149k</p>
                        <del>89k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img-6.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 2</a>

                      <div class="price-box">
                        <p class="price">399k</p>
                        <del>229k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img-7.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 3</a>

                      <div class="price-box">
                        <p class="price">159k</p>
                        <del>79k</del>
                      </div>

                    </div>

                  </div>



                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img-8.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 4</a>

                      <div class="price-box">
                        <p class="price">159k</p>
                        <del>99k</del>
                      </div>

                    </div>

                  </div>




                </div>




               </div>

            </div>

<!-- Hải sản -->
            <div class="product-showcase">

              <h2 class="title">Hải sản tươi sống</h2>

               <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img1-1.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 1</a>

                      <div class="price-box">
                        <p class="price">199k</p>
                        <del>79k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img1-2.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 2</a>

                      <div class="price-box">
                        <p class="price">299k</p>
                        <del>129k</del>
                      </div>

                    </div>

                  </div>



                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img1-3.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 3</a>

                      <div class="price-box">
                        <p class="price">279k</p>
                        <del>159k</del>
                      </div>

                    </div>

                  </div>



                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img1-4.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 4</a>

                      <div class="price-box">
                        <p class="price">99k</p>
                        <del>59k</del>
                      </div>

                    </div>

                  </div>

                </div>


                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img1-5.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 1</a>

                      <div class="price-box">
                        <p class="price">149k</p>
                        <del>89k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img1-6.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 2</a>

                      <div class="price-box">
                        <p class="price">399k</p>
                        <del>229k</del>
                      </div>

                    </div>

                  </div>



                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img1-7.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 3</a>

                      <div class="price-box">
                        <p class="price">159k</p>
                        <del>79k</del>
                      </div>

                    </div>

                  </div>



                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img1-8.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 4</a>

                      <div class="price-box">
                        <p class="price">159k</p>
                        <del>99k</del>
                      </div>

                    </div>

                  </div>




                </div>




               </div>

            </div>


<!-- Bánh -->
            <div class="product-showcase">

              <h2 class="title">Bánh</h2>

               <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img2-1.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 1</a>

                      <div class="price-box">
                        <p class="price">199k</p>
                        <del>79k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img2-2.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 2</a>

                      <div class="price-box">
                        <p class="price">299k</p>
                        <del>129k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img2-3.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 3</a>

                      <div class="price-box">
                        <p class="price">279k</p>
                        <del>159k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img2-4.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 4</a>

                      <div class="price-box">
                        <p class="price">99k</p>
                        <del>59k</del>
                      </div>

                    </div>

                  </div>


                </div>


                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img2-5.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 1</a>

                      <div class="price-box">
                        <p class="price">149k</p>
                        <del>89k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img2-6.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 2</a>

                      <div class="price-box">
                        <p class="price">399k</p>
                        <del>229k</del>
                      </div>

                    </div>

                  </div>


                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img2-7.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 3</a>

                      <div class="price-box">
                        <p class="price">159k</p>
                        <del>79k</del>
                      </div>

                    </div>

                  </div>



                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="minimal-img2-8.png" width="70" alt="" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Đang nghĩ</h4>
                      </a>

                      <a href="#" class="showcase-category">Loại 4</a>

                      <div class="price-box">
                        <p class="price">159k</p>
                        <del>99k</del>
                      </div>

                    </div>

                  </div>




                </div>

               </div>

            </div>


          </div>



<!-- Product feature -->
 
           <div class="product-featured">

           <h2 class="title">Giảm giá</h2>

<!-- Giảm giá -->
             <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="feature-img-1.png"  alt="" class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, laudantium.
                    </p>

                    <div class="price-box">
                      <p class="price">599k</p>
                      <del>799k</del>
                    </div>

                    <button class="add-cart-btn">Thêm vào giỏ</button>
                    
                    <div class="showcase-status">
                      
                      <div class="wrapper">
                        <p>Đã bán: <b>20</b></p>
                        <p>Còn: <b>50</b></p>
                      </div>

                      <div class="showcase-status-bar"></div>
                      
                      <div class="countdown-box">

                        <p class="countdown-desc">
                          Hãy nhanh tay, ưu đãi sẽ kết thúc sau:
                        </p>

                        <div class="countdown">

                          <div class="countdown-content">
                            
                            <p class="display-number">3</p>

                            <p class="display-text">Days</p>

                          </div>

                          <div class="countdown-content">
                            
                            <p class="display-number">23</p>

                            <p class="display-text">Hours</p>

                          </div>

                          <div class="countdown-content">
                            
                            <p class="display-number">59</p>

                            <p class="display-text">Min</p>

                          </div>

                          <div class="countdown-content">
                            
                            <p class="display-number">59</p>

                            <p class="display-text">Sec</p>

                          </div>

                        </div>

                      </div>
                      
                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="feature-img-2.png"  alt="" class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, laudantium.
                    </p>

                    <div class="price-box">
                      <p class="price">799k</p>
                      <del>999k</del>
                    </div>

                    <button class="add-cart-btn">Thêm vào giỏ</button>
                    
                    <div class="showcase-status">
                      
                      <div class="wrapper">
                        <p>Đã bán: <b>10</b></p>
                        <p>Còn: <b>20</b></p>
                      </div>

                      <div class="showcase-status-bar"></div>
                      
                      <div class="countdown-box">

                        <p class="countdown-desc">
                          Hãy nhanh tay, ưu đãi sẽ kết thúc sau:
                        </p>

                        <div class="countdown">

                          <div class="countdown-content">
                            
                            <p class="display-number">1</p>

                            <p class="display-text">days</p>

                          </div>

                          <div class="countdown-content">
                            
                            <p class="display-number">22</p>

                            <p class="display-text">hours</p>

                          </div>

                          <div class="countdown-content">
                            
                            <p class="display-number">59</p>

                            <p class="display-text">min</p>

                          </div>

                          <div class="countdown-content">
                            
                            <p class="display-number">59</p>

                            <p class="display-text">sec</p>

                          </div>

                        </div>

                      </div>
                      
                    </div>

                  </div>

                </div>

              </div>

             </div>

           </div>


<!--product grid  -->


          <div class="product-main">

              <h2 class="title">Các món nổi bật</h2>

              <div class="product-grid">

                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-1.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-1.1.png" width="300" alt="" class="product-img hover">

                    <p class="showcase-badge">15%</p>

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 1</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">500K</p>
                      <del>700k</del>
                    </div>

                  </div>



                </div>


                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-2.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-2.2.png" width="300" alt="" class="product-img hover">

                    <p class="showcase-badge angle black">sale</p>

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 2</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">400K</p>
                      <del>600k</del>
                    </div>

                  </div>



                </div>


                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-3.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-3.3.png" width="300" alt="" class="product-img hover">

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 3</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">300K</p>
                      <del>500k</del>
                    </div>

                  </div>



                </div>



                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-4.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-4.4.png" width="300" alt="" class="product-img hover">

                    <p class="showcase-badge angle pink">new</p>

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 4</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">200K</p>
                      <del>800k</del>
                    </div>

                  </div>



                </div>



                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-5.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-5.5.png" width="300" alt="" class="product-img hover">

                   

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 5</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">100K</p>
                      <del>700k</del>
                    </div>

                  </div>



                </div>



                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-6.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-6.6.png" width="300" alt="" class="product-img hover">

                    <p class="showcase-badge angle black">new</p>

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 6</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">500K</p>
                      <del>800k</del>
                    </div>

                  </div>



                </div>


                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-7.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-7.7.png" width="300" alt="" class="product-img hover">

                   

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 7</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">990K</p>
                      <del>1290k</del>
                    </div>

                  </div>



                </div>


                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-8.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-8.8.png" width="300" alt="" class="product-img hover">

                    <p class="showcase-badge angle pink">sale</p>

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 8</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">600K</p>
                      <del>800k</del>
                    </div>

                  </div>



                </div>

                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-10.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-10.10.png" width="300" alt="" class="product-img hover">

                   

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 9</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">799K</p>
                      <del>999k</del>
                    </div>

                  </div>



                </div>



                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-9.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-9.9.png" width="300" alt="" class="product-img hover">

                   

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 10</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">599K</p>
                      <del>999k</del>
                    </div>

                  </div>



                </div>



                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-11.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-11.11.png" width="300" alt="" class="product-img hover">

                   

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 11</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">399K</p>
                      <del>799k</del>
                    </div>

                  </div>



                </div>



                <div class="showcase">

                  <div class="showcase-banner">

                    <img src="gr-img-12.png" width="300" alt="" class="product-img default">
                    <img src="gr-img-12.12.png" width="300" alt="" class="product-img hover">

                   

                    <div class="showcase-actions">

                      <button class="btn-action">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                      </button>

                      <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                      </button>

                    </div>

                  </div>


                  <div class="showcase-content">

                    <a href="#" class="showcase-category">Sản phẩm 12</a>

                    <a href="#">
                      <h3 class="showcase-title">Đang nghĩ</h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price">700K</p>
                      <del>1290k</del>
                    </div>

                  </div>



                </div>



              </div>

          </div>

      </div>

   </div>

</div>






     <div>
      <div class="container">

        <div class="testimonials-box">


<!-- Tác giả -->
          <div class="testimonial">

            <h2 class="title">Tác giả</h2>

            <div class="testimonial-card">


              <img src="testimonial-1.png" alt="" class="testimonial-banner">

              <p class="testimonial-name">Robert.D.Jr Tan</p>
              
             <p class="testimonial-title">CEO & Founder</p>

             <img src="icons/quotes.svg" class="quotation-img" width="26" alt="">

             <p class="testimonial-desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, obcaecati
             </p>
              
            </div>

          </div>


          <div class="cta-container">

            <img src="cta-bn.png" alt="" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">Giảm 25%</p>

              <h2 class="cta-title">Đang nghĩ</h2>

              <p class="cta-text">Cho những đơn hàng trên 500K</p>

              <button class="cta-btn">Mua ngay</button>

            </a>

          </div>




<!--Service  -->

          <div class="service">

            <h2 class="title">Dịch vụ</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Miễn phí vận chuyển</h3>
                  <p class="service-desc">Đơn hàng trên 500K</p>

                </div>

              </a>



              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Giao hàng trong ngày</h3>
                  <p class="service-desc">Nội thành Hà Nội</p>

                </div>

              </a>



              
              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Hỗ trợ</h3>
                  <p class="service-desc">8AM - 11PM</p>

                </div>

              </a>



              
              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Chính sách hoàn trả</h3>
                  <p class="service-desc">Đơn giản, miễn phí</p>

                </div>

              </a>
              

                 
              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Đang nghĩ</h3>
                  <p class="service-desc">Đang nghĩ</p>

                </div>

              </a>


            </div>

          </div>


        </div>
        
      </div>

    </div>



<!-- Blog -->

     <div class="blog">

      <div class="container">

        <div class="blog-container hasscrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="Layer 3.png" alt="" class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Tiêu đề</a>
              <a href="#">
                <h3 class="blog-title">Đang nghĩ</h3>

                <p class="blog-meta">
                  By <cite>Mr Tan</cite> / <time datetime="2022-08-27">Ngày 27 tháng 8 năm 2022</time>
                </p>
              </a>

            </div>

          </div>


          <div class="blog-card">

            <a href="#">
              <img src="Layer 1.png" alt="" class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Tiêu đề</a>
              <a href="#">
                <h3 class="blog-title">Đang nghĩ</h3>

                <p class="blog-meta">
                  By <cite>Mr Tan</cite> / <time datetime="2022-08-27">Ngày 27 tháng 8 năm 2022</time>
                </p>
              </a>

            </div>

          </div>


          <div class="blog-card">

            <a href="#">
              <img src="$ 3.59 copy.png" alt="" class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Tiêu đề</a>
              <a href="#">
                <h3 class="blog-title">Đang nghĩ</h3>

                <p class="blog-meta">
                  By <cite>Mr Tan</cite> / <time datetime="2022-08-27">Ngày 27 tháng 8 năm 2022</time>
                </p>
              </a>

            </div>

          </div>


          <div class="blog-card">

            <a href="#">
              <img src="TASTE OUR  SECRET RECIPE.png" alt="" class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Tiêu đề</a>
              <a href="#">
                <h3 class="blog-title">Đang nghĩ</h3>

                <p class="blog-meta">
                  By <cite>Mr Tan</cite> / <time datetime="2022-08-27">Ngày 27 tháng 8 năm 2022</time>
                </p>
              </a>

            </div>

          </div>

        </div>

      </div>

     </div>

    </main>



<!--Footer  -->
<footer>
      <div class="footer-category">

        <div class="container">

          <h2 class="footer-category-title">Từ khóa</h2>
          
          <div class="footer-category-box">

            <h3 class="category-box-title">Mục 1:</h3>

            <a href="#" class="footer-category-link">Loại a</a>
            <a href="#" class="footer-category-link">Loại b</a>
            <a href="#" class="footer-category-link">Loại c</a>
            <a href="#" class="footer-category-link">Loại d</a>
            <a href="#" class="footer-category-link">Loại e</a>
            <a href="#" class="footer-category-link">Loại f</a>
            <a href="#" class="footer-category-link">Loại g</a>
          </div>

          <div class="footer-category-box">

            <h3 class="category-box-title">Mục 2:</h3>

            <a href="#" class="footer-category-link">Loại a</a>
            <a href="#" class="footer-category-link">Loại b</a>
            <a href="#" class="footer-category-link">Loại c</a>
            <a href="#" class="footer-category-link">Loại d</a>
            <a href="#" class="footer-category-link">Loại e</a>
            <a href="#" class="footer-category-link">Loại f</a>
            <a href="#" class="footer-category-link">Loại g</a>
          </div>

          <div class="footer-category-box">

            <h3 class="category-box-title">Mục 3:</h3>

            <a href="#" class="footer-category-link">Loại a</a>
            <a href="#" class="footer-category-link">Loại b</a>
            <a href="#" class="footer-category-link">Loại c</a>
            <a href="#" class="footer-category-link">Loại d</a>
            <a href="#" class="footer-category-link">Loại e</a>
            <a href="#" class="footer-category-link">Loại f</a>
            <a href="#" class="footer-category-link">Loại g</a>
          </div>

          <div class="footer-category-box">

            <h3 class="category-box-title">Mục 4:</h3>

            <a href="#" class="footer-category-link">Loại a</a>
            <a href="#" class="footer-category-link">Loại b</a>
            <a href="#" class="footer-category-link">Loại c</a>
            <a href="#" class="footer-category-link">Loại d</a>
            <a href="#" class="footer-category-link">Loại e</a>
            <a href="#" class="footer-category-link">Loại f</a>
            <a href="#" class="footer-category-link">Loại g</a>
          </div>

        </div>

      </div>

      <div class="footer-nav">

        <div class="container">

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h2 class="nav-title">Danh mục</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Mục 1</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Mục 2</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Mục 3</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Mục 4</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Mục 5</a>
            </li>

          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h2 class="nav-title">Sản phẩm</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">SP 1</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">SP  2</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">SP  3</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">SP  4</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">SP 5</a>
            </li>

          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h2 class="nav-title">Về chúng tôi</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h2 class="nav-title">Dịch vụ</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Đang nghĩ</a>
            </li>

          </ul>
          
          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h2 class="nav-title">Liên hệ</h2>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <address class="content">
                79,Hồ Tùng Mậu
                Mai Dịch, Cầu Giấy, Hà Nội
              </address>

             </li>

             <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <a href="#" class="footer-nav-link">(+84) 672 530 72</a>
           
             </li>

             <li class="footer-nav-item flex">

              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <a href="#" class="footer-nav-link">buvghhj123@gmail.com</a>

             </li>     

          </ul>


          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h2 class="nav-title">Theo dõi chúng tôi</h2>
            </li>

            <li>
              <ul class="social-link">

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>

              </ul>


            </li>

          </ul>


          
        </div>

      </div>

      <div class="footer-bottom">

        <div class="container">

          <img src="/assets/images/payment.png" alt="" class="payment-img">

          <p class="copyright">
            Copyright &copy; <a href="#">RAMENNGON</a> all rights reserved
          </p>

        </div>

      </div>
 </footer>
   


  <script src="main.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>