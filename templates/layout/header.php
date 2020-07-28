<header class="header" >
  <div class="header-top">
    <div class="container">
      <div class="header-top__wrap">
        <div class="header-slogan"><?= $company["ten"] ?></div>
        <div class="header-nav">
          <a href="tin-tuc.html" class="header-nav-item"><?= _tintuc ?></a>
          <a href="huong-dan-mua-hang.html" class="header-nav-item">Hướng dẫn mua hàng</a>
          <a href="lien-he.html" class="header-nav-item"><?= _lienhe ?></a>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bot">
    <div class="container">
      <div class="header-bot__wrap">
        <a href="" class="header__logo">
          <img class="header__logo-img" src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo">
        </a>
        <div class="header__hotline">
          <img class="header__hotline-img" src="images/hd-hotline.jpg" 
          alt="hotline">
          <span class="header__hotline-desc">Hotline:</span>
          <span class="header__hotline-number"><?= $company["dienthoai"] ?></span>
        </div>
      </div>
    </div>
  </div>
</header>