<?php /* <div class="tieude_giua"><div><?=$title_cat?></div></div> */?>
<div class="box_container">
  <?php if(empty($product) && $com == "tim-kiem"){ ?>
    <h2 class="text-center text-danger">KHÔNG CÓ KẾT QUẢ TÌM KIẾM NÀO PHÙ HỢP</h2>
  <?php }else{ ?>
    <div class="product-grid" id="content_sp_return">
        <?php foreach ($product as $k => $v) { 
                showProduct($v);
        } ?>
    </div>
    <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>

  <?php } ?>
</div>

