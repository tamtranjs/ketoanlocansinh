<?php include_once 'data/services.php'; ?>

<!-- Footer Widget-->
<div class="footer-widget section-pad-md">
  <div class="container">
    <div class="row">

      <div class="widget-row row">
        <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
          <!-- Each Widget -->
          <div class="wgs wgs-footer wgs-text">
            <div class="wgs-content">
              <p><img style="max-width: 50%" src="image/common/logo3.png" alt=""></p>
              <p>Hãy liên hệ với Công ty Kế toán – Thuế Lộc An Sinh để được tư vấn chi tiết và cùng chúng tôi xây dựng
                giải pháp tài chính an toàn, minh bạch và bền vững cho doanh nghiệp của bạn.</p>
            </div>
          </div>
          <!-- End Widget -->
        </div>
        <div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
          <!-- Each Widget -->
          <div class="wgs wgs-footer wgs-menu">
            <h5 class="wgs-title">Our Services</h5>
            <div class="wgs-content">
              <ul class="menu">
                <?php foreach ($services as $service): ?>
                  <li>
                    <a href="<?= $service['slug'] ?>">
                      <?= $service['title'] ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <!-- End Widget -->
        </div>
        <div class="footer-col col-md-2 col-sm-6 res-m-bttm">
          <!-- Each Widget -->
          <div class="wgs wgs-footer wgs-menu">
            <h5 class="wgs-title">Liên kết nhanh</h5>
            <div class="wgs-content">
              <ul class="menu">
                <li><a href="/">Trang Chủ</a></li>
                <li><a href="/ve-chung-toi">Về Chúng Tôi</a></li>
                <li><a href="/dich-vu">Dịch Vụ</a></li>
                <li><a href="/lien-he">Liên Hệ</a></li>

              </ul>
            </div>
          </div>
          <!-- End Widget -->
        </div>

        <div class="footer-col col-md-3 col-sm-6">
          <!-- Each Widget -->
          <div class="wgs wgs-footer">
            <h5 class="wgs-title">Liên hệ qua</h5>
            <div class="wgs-content">
              <p>
                Quốc Lộ N2, Ấp Tân Bình,
                <br>
                Xã Hoà Khánh, Tỉnh Tây Ninh.
              </p>
              <p><span>Sđt1</span>: 0982.000.748<br>
                <span>Sđt2</span>: 0983.567.805
              </p>
              <!-- <ul class="social">
                <li><a href="#"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                <li><a href="#"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
                <li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
              </ul> -->
            </div>
          </div>
          <!-- End Widget -->
        </div>

      </div><!-- Widget Row -->

    </div>
  </div>
</div>
<!-- End Footer Widget -->

<!-- Copyright -->
<div class="copyright">
  <div class="container">
    <div class="row">

      <div class="row">
        <div class="site-copy col-sm-7">
          <!-- <p>&copy; 2017 Finance Corp. <a href="#">Policy</a></p> -->
          <p>&copy; <?= date('Y') ?> Kế Toán & Thuế
            <!-- <a href="#">Policy</a> -->
          </p>
        </div>
        <div class="site-by col-sm-5 al-right">
          <p>Công Ty <a href="http://ketoanlocansinh.com/" target="_blank">Lộc An Sinh.</a></p>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- End Copyright -->