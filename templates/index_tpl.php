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
              <p><strong><?= $v["link"] ?></strong></p>
              <p><?= $v["ten"] ?></p>
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