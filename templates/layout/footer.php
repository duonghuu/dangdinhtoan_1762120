<footer id="footer" class="ft">
    <div class="container d-flex">
        <div class="ft-baiviet">
          <p class="ft-tit">Về chúng tôi</p> 
          <?= for1('news','chinh-sach','chinh-sach','.html')?>
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit">các trang khác</p> 
          <?= for1('news','chinh-sach','chinh-sach','.html')?>
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit"><?= _lienhe ?></p> 
          <?= for1('news','chinh-sach','chinh-sach','.html')?>
        </div>
        <div class="ft-ytuong">
          <p class="ft-tit">gửi ý tưởng của bạn</p> 
          <form action="">
            <input type="text" placeholder="<?= _hovaten ?>" name="" class="form-control">
            <input type="text" placeholder="<?= _noidung ?>" name="" class="form-control">
            <button type="submit" class="btn btn-primary">Gửi</button>
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
  <div class="copyright">
    <div class="container">
      <div class="ft-wrap">
        <p class="text">Copyright © 2020 <?= $company["ten"] ?>. Design by Nina</p>
        <ul class="ft-thongke">
          <li>Online: <span><?php $count=count_online(); echo $tong_xem=$count['dangxem'];?></span></li>
          <li><?=_thongkethang?>: <span><?=$trongthang;?></span></li>  
          <li><?=_tongtruycap?>: <span><?php $count=count_online(); echo $tong_xem=$count['daxem'];?></span></li>
        </ul>
          <?php /* 
          <li><?=_thongketuan?>: <span><?=$trongtuan;?></span></li>   
          <li><?=_ngayhomqua?>: <span><?=$homqua;?></span></li>    
          */?>
      </div>
    </div>
  </div>
</footer>
          <?php /* <div class="codebando"><?= $company["bando"] ?></div>
            include _template."layout/dangkynhantin.php";<img src="http://placehold.it/600x520" 
            alt="" style="   -webkit-clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);
            clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);   "> 
            https://bennettfeely.com/clippy/ */?>