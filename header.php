  <!doctype html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div class="loader">
      <p class="loader__logo">GRAIN</p>
    </div>

    <header class="header">
      <div class="header__inner">
        <a href="<?php echo home_url('/'); ?>" class="header__logo">GRAIN</a>

        <nav class="header__nav">
          <ul class="header__nav-list">
            <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
            <li><a href="<?php echo home_url('/menu'); ?>">メニュー</a></li>
            <li><a href="<?php echo home_url('/news'); ?>">お知らせ</a></li>
          </ul>
          <a href="<?php echo home_url('/contact'); ?>" class="btn btn--primary header__contact-btn">お問い合わせ</a>
        </nav>

        <button class="header__hamburger" type="button" aria-label="メニューを開く" aria-expanded="false">
          <span class="header__hamburger-line"></span>
          <span class="header__hamburger-line"></span>
          <span class="header__hamburger-line"></span>
        </button>
      </div>
    </header>

    <div class="drawer">
      <button class="drawer__close" type="button" aria-label="メニューを閉じる">×</button>
      <p class="drawer__logo">GRAIN</p>
      <nav class="drawer__nav">
        <ul class="drawer__nav-list">
          <li><a href="<?php echo home_url('/'); ?>" class="drawer__nav-item">ホーム</a></li>
          <li><a href="<?php echo home_url('/menu'); ?>" class="drawer__nav-item">メニュー</a></li>
          <li><a href="<?php echo home_url('/news'); ?>" class="drawer__nav-item">お知らせ</a></li>
        </ul>
      </nav>
      <a href="<?php echo home_url('/contact'); ?>" class="drawer__contact-btn">お問い合わせ <span>→</span></a>
    </div>

    <div class="overlay"></div>