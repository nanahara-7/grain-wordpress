<?php $page_description = 'お探しのページは見つかりませんでした。'; get_header(); ?>

    <!-- FV -->
    <section class="contact-fv">
      <div class="contact-fv__inner">
        <p class="contact-fv__label">404</p>
        <h1 class="contact-fv__title">ページが見つかりません</h1>
      </div>
      <div class="contact-fv__wave">
        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Rectangle 7.svg" alt="" />
      </div>
    </section>

    <!-- 404エリア -->
    <section class="thanks">
      <div class="thanks__inner">
        <div class="thanks__card">
          <div class="thanks__text-group">
            <p class="thanks__heading">404</p>
            <p class="thanks__text">お探しのページは見つかりませんでした。<br />URLが変更・削除されたか、一時的にアクセスできない可能性があります。</p>
          </div>
          <a href="<?php echo home_url('/'); ?>" class="btn btn--primary thanks__btn">ホームへ戻る</a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
