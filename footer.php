      <!-- フッター -->
      <footer class="footer">
        <div class="footer__inner">
          <div class="footer__info">
            <p class="footer__logo">GRAIN</p>
            <p class="footer__address">〒000-0000 大阪府xxxyyy1-1-1 xxxxxxxxx 3F</p>
            <p class="footer__hours">営業 8:00〜18:00</p>
            <p class="footer__holiday">定休日：火曜日</p>
          </div>
          <nav class="footer__nav-wrap">
            <ul class="footer__nav-col">
              <li><a href="<?php echo home_url('/'); ?>" class="footer__nav-item">ホーム</a></li>
              <li><a href="<?php echo home_url('/menu'); ?>" class="footer__nav-item">メニュー</a></li>
              <li><a href="<?php echo home_url('/news'); ?>" class="footer__nav-item">お知らせ</a></li>
            </ul>
            <ul class="footer__nav-col">
              <li><a href="<?php echo home_url('/contact'); ?>" class="footer__nav-item">お問い合わせ</a></li>
              <li><a href="<?php echo home_url('/privacy'); ?>" class="footer__nav-item">プライバシーポリシー</a></li>
            </ul>
          </nav>
        </div>
        <p class="footer__copyright">© GRAIN. All Rights Reserved.</p>
      </footer>

      <button class="page-top" aria-label="ページトップへ戻る"></button>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
      <?php wp_footer(); ?>
    </body>
  </html>