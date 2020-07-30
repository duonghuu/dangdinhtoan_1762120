<?php /* <div class="tieude_giua"><div><?=$title_cat?></div></div> */?>
<div class="box_container">
  <?php if($com != "tim-kiem"){ ?>
  <div class="product-danhmuc-links">
    <?php foreach($product_danhmuc as $k=>$v) {
      $link1 = get_url($v,$v["type"],1);
     ?>
    <a href="<?= $link1 ?>" class="product-danhmuc-link <?= ($id_danhmuc == $v["id"])?'active':'' ?>"><?= $v["ten"] ?></a>
    <?php } ?>
  </div>
<?php } ?>
  <?php 
  if($source != "index") {
      echo $bread->display();
  }
   ?>
  <div class="product-grid" id="content_sp_return">
    <?php foreach ($product as $k => $v) { 
      showProduct($v);
    } ?>
  </div>
  <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div>

