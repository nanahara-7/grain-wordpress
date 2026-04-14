<?php get_header(); ?>

    <!-- FV -->
    <section class="contact-fv">
      <div class="contact-fv__inner">
        <p class="contact-fv__label">Contact</p>
        <h1 class="contact-fv__title">お問い合わせ</h1>
      </div>
      <div class="contact-fv__wave">
        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Rectangle 7.svg" alt="" />
      </div>
    </section>

    <!-- 送信完了エリア -->
    <section class="thanks">
      <div class="thanks__inner">
        <div class="thanks__card">
          <div class="thanks__text-group">
            <p class="thanks__heading">Thank you!</p>
            <p class="thanks__text">お問い合わせありがとうございました。<br />2〜3営業日以内に、担当よりメールにて返信いたしますので、<br />しばらくお待ちください。</p>
          </div>
          <a href="<?php echo home_url('/'); ?>" class="btn btn--primary thanks__btn">ホームへ戻る</a>
        </div>
      </div>
    </section>

    <!-- パンくずリスト -->
    <nav class="contact-breadcrumb" aria-label="パンくずリスト">
      <ol class="contact-breadcrumb__list">
        <li class="contact-breadcrumb__item">
          <a href="<?php echo home_url('/'); ?>" class="contact-breadcrumb__link">ホーム</a>
        </li>
        <li class="contact-breadcrumb__item">
          <a href="<?php echo home_url('/contact'); ?>" class="contact-breadcrumb__link">お問い合わせ</a>
        </li>
        <li class="contact-breadcrumb__item contact-breadcrumb__item--current" aria-current="page">
          送信完了
        </li>
      </ol>
    </nav>

<?php get_footer(); ?>
