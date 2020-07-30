<footer id="footer" class="ft">
    <div class="container d-flex">
        <div class="ft-baiviet">
          <p class="ft-tit">Về chúng tôi</p> 
          <ul>
            <li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
            <?= _gioithieu ?></a>
            </li> 
            <li class="<?php if($com == 'lien-he') echo 'active'; ?>"><a href="lien-he.html">
              <?= _lienhe ?></a></li>
             <li class="<?php if($com=='tim-cua-hang') echo 'active'; ?>"><a href="tim-cua-hang.html">
             Tìm cửa hàng</a></li>
             <li class="<?php if($com=='truyen-thong') echo 'active'; ?>"><a href="truyen-thong.html">
             Truyền thông</a></li>
          </ul>
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit">các trang khác</p> 
          <ul>
            <?php foreach($trangkhac as $k=>$v) { ?>
            <li><a href="<?= $v["link"] ?>"><?= $v["ten"] ?></a></li>
          <?php } ?>
          </ul>
        </div>
        <div class="ft-info">
          <p class="ft-tit"><?= _lienhe ?></p> 
          <div class="content">
            <?=lay_text('footer');?>
          </div>
        </div>
        <div class="ft-ytuong">
          <p class="ft-tit">gửi ý tưởng của bạn</p> 
          <form action="">
            <input type="text" placeholder="<?= _hovaten ?>" name="" class="form-control placeholder-1">
            <input type="text" placeholder="<?= _noidung ?>" name="" class="form-control placeholder-1">
            <button type="submit" class="btn btn-primary readmore-btn readmore-btn--yellow">Gửi</button>
          </form>
        </div>

        
        <?php /* 
        <?php  //if($deviceType != "phone"){ ?>
          <div class="ft-fanpage">
            <p class="ft-tit">fanpage - Facebook</p> 
           <div class="fanpageplace">
            <div class="fb-page" data-href="<?=$company['fanpage']?>" data-width="470" data-height="380" 
              data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" 
              data-show-posts="false">
              <div class="fb-xfbml-parse-ignore">
                <blockquote cite="<?=$company['fanpage']?>">
                  <a href="<?=$company['fanpage']?>">Facebook</a>
                </blockquote>
              </div>
            </div>      <!-- end fb-page  -->
          </div>
        </div>
      <?php //} ?>   
         */?> 
    </div>
  
</footer>
<div class="ft-bot">
  <div class="container">
    <div class="ft-bot-logo d-flex justify-content-center align-items-center">
      <?php foreach($trangkhac as $k=>$v) {
        $img = _upload_hinhanh_l.$v["thumb"];
       ?>
      <a href="<?= $v["link"] ?>" class="ft-bot-logo__item">
        <img src="<?= $img ?>" alt="<?= $v["ten"] ?>" class="ft-bot-logo__img">
      </a>
      <?php } ?>
    </div>
    <div class="ft-bot-link d-flex justify-content-center ">
      <a href="chinh-sach.html" class="ft-bot-link-item">Chính sách</a>
      <a href="ho-tro.html" class="ft-bot-link-item">Hỗ trợ khách hàng</a>
      <a href="y-tuong.html" class="ft-bot-link-item">Ý tưởng</a>
    </div>
    <div class="mxh mxh--ft"><?= lay_mxh('mxhft') ?></div>
    <div class="copyright">
        <div class="ft-wrap">
          <p class="text">Copyright © 2020 <?= $company["ten"] ?>. Design by Nina</p>
            <?php /* 
          <ul class="ft-thongke">
            <li>Online: <span><?php $count=count_online(); echo $tong_xem=$count['dangxem'];?></span></li>
            <li><?=_thongkethang?>: <span><?=$trongthang;?></span></li>  
            <li><?=_tongtruycap?>: <span><?php $count=count_online(); echo $tong_xem=$count['daxem'];?></span></li>
          </ul>
            <li><?=_thongketuan?>: <span><?=$trongtuan;?></span></li>   
            <li><?=_ngayhomqua?>: <span><?=$homqua;?></span></li>    
            */?>
        </div>
    </div>
  </div>
</div>
          <?php /* <div class="codebando"><?= $company["bando"] ?></div>
            include _template."layout/dangkynhantin.php";<img src="http://placehold.it/600x520" 
            alt="" style="   -webkit-clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);
            clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);   "> 
            https://bennettfeely.com/clippy/ */?>