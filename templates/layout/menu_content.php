<li class="<?php if($source=='index') echo 'active'; ?>"><a href=""><i class="fas fa-home"></i></a></li>
<li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
Về Cena</a>
<?= for1('news','gioi-thieu','gioi-thieu','.html')?>
</li> 
<?php /* 
<li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
<?= _gioithieu ?></a></li> 

 */?> 
 <li class="<?php if($com=='san-pham') echo 'active'; ?>"><a href="san-pham.html">
 <?= _sanpham ?></a>
 <?= for1('product_danhmuc','san-pham','san-pham','')?>
<?php /* 
 <?= for2cap('product_danhmuc','product_list','san-pham','san-pham','','/')?>  
*/?>
 </li> 
 <li class="<?php if($com=='y-tuong') echo 'active'; ?>"><a href="y-tuong.html">
 Ý tưởng</a></li>
 <li class="<?php if($com=='truyen-thong') echo 'active'; ?>"><a href="truyen-thong.html">
 Truyền thông</a></li>
 <li class="<?php if($com=='tim-cua-hang') echo 'active'; ?>"><a href="tim-cua-hang.html">
 Tìm cửa hàng</a></li>
<li class="<?php if($com == 'lien-he') echo 'active'; ?>"><a href="lien-he.html">
  <?= _lienhe ?></a></li>
<?php /* 
<?= for1('news_danhmuc','nang-luc','nang-luc','')?>
  */?>