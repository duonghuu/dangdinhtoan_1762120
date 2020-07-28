<?php 
if($source=="index"){
  $tieuchi = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo from #_news
  where type='tieu-chi' and hienthi>0 order by stt asc");
  $product_danhmucnb = get_result("select id,ten$lang as ten,tenkhongdau,type,thumb,photo from #_product_danhmuc
   where type='san-pham' and noibat>0 and hienthi>0 order by stt");
  $quangcao = get_result("select ten$lang as ten,photo,thumb,link from #_slider 
   where hienthi=1 and type='quang-cao' order by stt");
  $tinnb = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao,type from #_news
   where type='tin-tuc' and noibat>0 and hienthi>0 order by stt limit 0,6");
  // $video=get_result("select id,ten$lang as ten,tenkhongdau,link,thumb,photo
  //  from #_video where hienthi=1 and type='video' order by stt");
}
$product_danhmuc = get_result("select id,ten$lang as ten,tenkhongdau,type from #_product_danhmuc
 where type='san-pham' and hienthi>0 order by stt");
  
$logolang = get_fetch("select photo$lang as photo from #_background where type='logo'");
// $bannerlang = get_fetch("select photo as photo from #_background where type='banner'");

// $ftlogo=get_fetch("select photo from #_about where type='footer' ");
// $bgbnlang = get_fetch("select photo as photo,thumb as thumb from #_background where type='bgbn'");
// $tutags = get_result("select id,ten$lang as ten,link from #_news where type='tags'
//  and hienthi=1 order by stt asc");
// $hotline = get_result("select id,ten$lang as ten,chucvu,link from #_news where
//  type='hotline' and hienthi=1 order by stt asc");
// $diachi = get_result("select id,ten$lang as ten,ten2$lang as diachi,mota as iframe,chucvu as email,
//  link as dienthoai,photo,thumb from #_news where type='diachi' and hienthi=1 order by stt asc");
// $yahoo = get_result("select * from #_yahoo where type='yahoo' and hienthi=1 order by stt asc");
// $lkweb = get_result("select link,ten from #_lkweb where type='lkweb' and hienthi=1 order by stt asc");


