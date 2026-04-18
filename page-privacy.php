<?php $page_description = 'GRAINの個人情報保護方針についてご説明します。'; get_header(); ?>

    <!-- FV -->
    <section class="contact-fv">
      <div class="contact-fv__inner">
        <p class="contact-fv__label">Privacy Policy</p>
        <h1 class="contact-fv__title">個人情報保護方針</h1>
      </div>
      <div class="contact-fv__wave">
        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Rectangle 7.svg" alt="" />
      </div>
    </section>

    <!-- 本文エリア -->
    <section class="privacy">
      <div class="privacy__inner">
        <div class="privacy__card">

          <div class="privacy__block">
            <p class="privacy__text">GRAIN（以下「当店」）は、お客様の個人情報の保護を重要な責務と考え、以下の方針に基づき個人情報の適切な取り扱いに努めます。</p>
          </div>

          <div class="privacy__block">
            <h2 class="privacy__heading">1. 個人情報の収集について</h2>
            <p class="privacy__text">当店は、お問い合わせ・ご予約の際に、お名前・メールアドレス・電話番号等の個人情報をご提供いただく場合があります。</p>
          </div>

          <div class="privacy__block">
            <h2 class="privacy__heading">2. 個人情報の利用目的</h2>
            <p class="privacy__text">収集した個人情報は、以下の目的のためにのみ使用いたします。</p>
            <ul class="privacy__list">
              <li>お問い合わせ・ご予約への対応</li>
              <li>当店からのご連絡・情報提供</li>
              <li>サービス向上のための分析</li>
            </ul>
          </div>

          <div class="privacy__block">
            <h2 class="privacy__heading">3. 個人情報の第三者提供</h2>
            <p class="privacy__text">当店は、法令に基づく場合を除き、お客様の同意なく第三者に個人情報を提供することはありません。</p>
          </div>

          <div class="privacy__block">
            <h2 class="privacy__heading">4. 個人情報の管理</h2>
            <p class="privacy__text">当店は、個人情報の漏洩・紛失・不正アクセス等を防止するため、適切な安全管理措置を講じます。</p>
          </div>

          <div class="privacy__block">
            <h2 class="privacy__heading">5. お問い合わせ</h2>
            <p class="privacy__text">個人情報の取り扱いに関するお問い合わせは、<a href="<?php echo home_url('/contact'); ?>" class="privacy__link">お問い合わせフォーム</a>よりご連絡ください。</p>
          </div>

        </div>
      </div>
    </section>

    <!-- パンくずリスト -->
    <nav class="contact-breadcrumb" aria-label="パンくずリスト">
      <ol class="contact-breadcrumb__list">
        <li class="contact-breadcrumb__item">
          <a href="<?php echo home_url('/'); ?>" class="contact-breadcrumb__link">ホーム</a>
        </li>
        <li class="contact-breadcrumb__item contact-breadcrumb__item--current" aria-current="page">
          個人情報保護方針
        </li>
      </ol>
    </nav>

<?php get_footer(); ?>
