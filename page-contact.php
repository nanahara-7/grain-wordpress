<?php $page_description = 'GRAINへのお問い合わせ。ご予約やメニューに関するお問い合わせはこちらからどうぞ。'; get_header(); ?>

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

    <!-- フォームエリア -->
    <section class="contact-form">
      <div class="contact-form__inner">
        <div class="contact-form__card">
          <p class="contact-form__desc">ご予約やメニューに関するお問い合わせは、下記フォームよりお送りください。<br />内容を確認後、2〜3営業日以内にメールまたはお電話にてご連絡いたします。</p>
          <?php echo do_shortcode('[contact-form-7 id="e56976b" title="コンタクトフォーム 1"]'); ?>
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
          お問い合わせ
        </li>
      </ol>
    </nav>

<?php get_footer(); ?>
