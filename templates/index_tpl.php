<div class="tieuchi">
  <div class="container">
    <div class="tieuchi-main">
      <?php foreach($tieuchi as $k=>$v) {
        $img = _upload_tintuc_l.$v["thumb"];
        $link = get_url($v,$v["type"]);
       ?>
        <div class="tieuchi-item">
          <a href="<?= $link ?>" class="tieuchi-item__url">
            <div class="tieuchi-item__image">
              <figure class="tieuchi-item__figure" style="background-image: url('<?= $img ?>')"></figure>
            </div>
            <div class="tieuchi-item__info">
              <p class="tieuchi-item__info-text">
                <strong class="tieuchi-item__info-text tieuchi-item__info-text--big"><?= $v["link"] ?></strong>
              </p>
              <p class="tieuchi-item__info-text"><?= $v["ten"] ?></p>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="danhmuc-sanpham">
  <div class="container">
    <div class="main-title text-center text-uppercase"><span>Sản phẩm của Cena</span></div>
    <div class="danhmuc-sanpham-list">
      <?php foreach($product_danhmuc as $k=>$v) { 
        $img = _upload_sanpham_l.$v["thumb"];
        $link = get_url($v,$v["type"],1);
        $cls = (($k+1) % 2 == 0)?'even':'odd';
        ?>
        <div class="danhmuc-sanpham-item danhmuc-sanpham-item--<?= $cls ?>">
          <a href="<?= $link ?>" class="danhmuc-sanpham-item__image">
            <figure class="danhmuc-sanpham-item__figure" style="background-image: url('<?= $img ?>')"></figure>
          </a>
          <div class="danhmuc-sanpham-item__info">
            <div class="danhmuc-sanpham-item__info--inner">
              <h2 class="danhmuc-sanpham-item__name">
                <a href="<?= $link ?>" class="danhmuc-sanpham-item__name-url"><?= $v["ten"] ?></a>
              </h2>
              <p class="danhmuc-sanpham-item__desc"><?= $v["mota"] ?></p>
              <a href="<?= $link ?>" class="readmore-btn">Xem thêm <i class="fas fa-home"></i></a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php if(!empty($quangcao)){ ?>
<div class="quangcao-main">
  <?php foreach($quangcao as $k=>$v) { 
    $img = _upload_hinhanh_l.$v["thumb"];
    ?>
  <div class="quangcao-item">
    <a href="<?= $v["link"] ?>" class="quangcao-item__url">
      <figure class="quangcao-item__figure" style="background-image: url('<?= $img ?>')"></figure>
      <div class="quangcao-item__info">
        <div class="quangcao-item__info--inner">
          <h3 class="quangcao-item__name"><?= $v["ten"] ?></h3>
          <p class="quangcao-item__desc"><?= $v["mota"] ?></p>
          <span class="readmore-btn">Xem thêm <i class="fas fa-home"></i></span>
        </div>
      </div>
    </a>
  </div>
  <?php } ?>
</div>
<?php } ?>

<div class="ytuong">
  <div class="container d-flex">
    <div class="ytuong-head">
    <div class="ytuong-head__box" style="background-image: url('images/ytuong.jpg')">
      <div class="ytuong-head--inner" >
        <div class="ytuong-head__name text-uppercase">ý tưởng sử dụng sơn cena</div>
        <?php if(count($ytuong)>6){ ?>
        <a href="y-tuong.html" class="ytuong-head__readmore">Xem thêm</a>
        <?php } ?>
      </div>
    </div>
    </div>
    <div class="ytuong-list">
      <?php foreach($ytuong as $k=>$v) { 
        $img = _upload_tintuc_l.$v["thumb"];
        $link = get_url($v,$v["type"]);
        if($k>5) break;
        ?>
      <div class="ytuong-item">
        <a href="<?= $link ?>" class="ytuong-item__url">
          <figure class="ytuong-item__figure" style="background-image: url('<?= $img ?>')"></figure>
          <div class="ytuong-item__info">
            <h3 class="ytuong-item__name"><?= $v["ten"] ?></h3>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="truyenthong lazy" data-bg="url(images/truyenthong.jpg)">
  <div class="container">
    <div class="truyenthong-left">
      <div class="main-title text-center text-uppercase main-title--white"><span>Truyền thông</span></div>
      <?php if(!empty($tinnb)){
        $v = $tinnb[0];
        $img = _upload_tintuc_l.$v["thumb"];
        $link = get_url($v,$v["type"]);
       ?>
      <a href="<?= $link ?>" class="first-news">
        <h5 class="first-news__name"><?= $v["ten"] ?></h5>
        <p class="first-news__desc"><?= $v["mota"] ?></p>
        <figure class="first-news__figure" style="background-image: url('<?= $img ?>')"></figure>
        <span class="readmore-btn readmore-btn--yellow mt-1">Xem thêm <i class="fas fa-home"></i></span>
      </a>
      <?php } ?>
    </div>
    <?php if(!empty($tinnb)){ ?>
      <div class="truyenthong-right">
        <div class="tinmoi-container">
          <ul>
            <?php foreach($tinnb as $k=>$v) { 
              $link = get_url($v,$v["type"]);
              ?>
            <li>
              <a href="<?= $link ?>" class="truyenthong-right-item">
                <h5 class="truyenthong-right-item__name"><?= $v["ten"] ?></h5>
                <p class="truyenthong-right-item__desc"><?= $v["mota"] ?></p>
              </a>
            </li>
          <?php } ?>
          </ul>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<div class="dongsonkhac">
  <div class="container">
    <div class="main-title text-center text-uppercase"><span>Những dòng sơn khác</span></div>
    <div class="dongsonkhac-main">
      <?php foreach($dongsonkhac as $k=>$v) {
        $img = _upload_tintuc_l.$v["thumb"];
       ?>
        <div class="dongsonkhac-item text-center">
          <a href="<?= $v["link"] ?>" class="dongsonkhac-item__url">
            <figure class="dongsonkhac-item__figure" style="background-image: url('<?= $img ?>')"></figure>
            <h5 class="dongsonkhac-item__name"><?= $v["ten"] ?></h5>
            <p class="dongsonkhac-item__desc"><?= $v["mota"] ?></p>
            <span class="readmore-btn">Xem thêm <i class="fas fa-home"></i></span>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="newsletter-chungnhan">
  <div class="newsletter lazy" data-bg="url(images/newsletter.jpg)">
    <div class="main-title main-title--white text-center text-uppercase"><span><?= _dangkynhantin ?></span></div>
    <?php include _template."layout/dangkynhantin.php"; ?>
  </div>
  <div class="chungnhan lazy" data-bg="url(images/chungnhan.jpg)">
    <div class="main-title main-title--black text-center text-uppercase"><span>Chứng nhận</span></div>
    <div class="quangcao2-main">
      <?php foreach($quangcao2 as $k=>$v) {
        $img = _upload_hinhanh_l.$v["thumb"];
       ?>
      <a href="<?= $v["link"] ?>" class="quangcao-item" style="background-image: url('<?= $img ?>')"></a>
      <?php } ?>
    </div>
  </div>
</div>