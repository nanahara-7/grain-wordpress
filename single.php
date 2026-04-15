<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- FV -->
    <section class="post-fv">
      <div class="post-fv__inner">
        <p class="post-fv__label">News</p>
        <p class="post-fv__eyecatch"><?php the_title(); ?></p>
      </div>
      <div class="post-fv__wave">
        <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Rectangle 7.svg" alt="" />
      </div>
    </section>

    <!-- 記事本文エリア -->
    <div class="post-body">
      <div class="post-body__inner">

        <article class="post-article">

          <!-- メタ情報（日付・タグ） -->
          <div class="post-article__meta">
            <time class="post-article__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
            <?php $categories = get_the_category(); if ($categories) : ?>
            <ul class="post-article__tags">
              <?php foreach ($categories as $cat) : ?>
              <li class="post-article__tag"><?php echo esc_html($cat->name); ?></li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>

          <!-- 記事タイトル -->
          <h1 class="post-article__title"><?php the_title(); ?></h1>

          <hr class="post-article__divider" />

          <!-- アイキャッチ画像 -->
          <?php if (has_post_thumbnail()) : ?>
          <figure class="post-article__img">
            <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
          </figure>
          <?php endif; ?>

          <!-- 本文 -->
          <div class="post-article__content">
            <?php the_content(); ?>
          </div>

          <?php
          $categories = get_the_category();
          $cat_name   = (!empty($categories)) ? $categories[0]->name : '';
          ?>

          <?php if ($cat_name === '新商品' || $cat_name === '季節限定') : ?>
          <!-- 商品情報ボックス（新商品・季節限定） -->
          <?php
          $sale_period = get_field('sale_period');
          $price       = get_field('price');
          $quantity    = get_field('quantity');
          if ($sale_period || $price || $quantity) :
          ?>
          <div class="post-article__info-box">
            <p class="post-article__info-heading">商品情報</p>
            <dl class="post-article__info-list">
              <?php if ($sale_period) : ?>
              <div class="post-article__info-row">
                <dt class="post-article__info-term">販売期間</dt>
                <dd class="post-article__info-desc"><?php echo esc_html($sale_period); ?></dd>
              </div>
              <?php endif; ?>
              <?php if ($price) : ?>
              <div class="post-article__info-row">
                <dt class="post-article__info-term">価格</dt>
                <dd class="post-article__info-desc"><?php echo esc_html($price); ?></dd>
              </div>
              <?php endif; ?>
              <?php if ($quantity) : ?>
              <div class="post-article__info-row">
                <dt class="post-article__info-term">数量</dt>
                <dd class="post-article__info-desc"><?php echo esc_html($quantity); ?></dd>
              </div>
              <?php endif; ?>
            </dl>
          </div>
          <?php endif; ?>

          <?php elseif ($cat_name === 'イベント') : ?>
          <!-- 開催情報ボックス（イベント） -->
          <?php
          $event_date     = get_field('event_date_');
          $event_place    = get_field('event_place_');
          $event_capacity = get_field('event_capacity_');
          if ($event_date || $event_place || $event_capacity) :
          ?>
          <div class="post-article__info-box">
            <p class="post-article__info-heading">開催情報</p>
            <dl class="post-article__info-list">
              <?php if ($event_date) : ?>
              <div class="post-article__info-row">
                <dt class="post-article__info-term">開催日時</dt>
                <dd class="post-article__info-desc"><?php echo esc_html($event_date); ?></dd>
              </div>
              <?php endif; ?>
              <?php if ($event_place) : ?>
              <div class="post-article__info-row">
                <dt class="post-article__info-term">開催場所</dt>
                <dd class="post-article__info-desc"><?php echo esc_html($event_place); ?></dd>
              </div>
              <?php endif; ?>
              <?php if ($event_capacity) : ?>
              <div class="post-article__info-row">
                <dt class="post-article__info-term">定員</dt>
                <dd class="post-article__info-desc"><?php echo esc_html($event_capacity); ?></dd>
              </div>
              <?php endif; ?>
            </dl>
          </div>
          <?php endif; ?>

          <?php endif; ?>

          <!-- 締めのテキスト（カスタムフィールド） -->
          <?php $closing_text = get_field('closing_text'); if ($closing_text) : ?>
          <p class="post-article__text"><?php echo esc_html($closing_text); ?></p>
          <?php endif; ?>

          <hr class="post-article__divider" />

          <!-- 前後記事ナビゲーション -->
          <nav class="post-nav" aria-label="記事ナビゲーション">
            <?php $prev = get_previous_post(); $next = get_next_post(); ?>
            <?php if ($prev) : ?>
            <a href="<?php echo get_permalink($prev); ?>" class="post-nav__prev">← 前の記事</a>
            <?php else : ?>
            <span class="post-nav__prev post-nav__prev--disabled">← 前の記事</span>
            <?php endif; ?>
            <a href="<?php echo home_url('/news'); ?>" class="post-nav__list">お知らせ一覧へ戻る</a>
            <?php if ($next) : ?>
            <a href="<?php echo get_permalink($next); ?>" class="post-nav__next">次の記事 →</a>
            <?php else : ?>
            <span class="post-nav__next post-nav__next--disabled">次の記事 →</span>
            <?php endif; ?>
          </nav>

        </article>
      </div>
    </div>

    <!-- パンくずリスト -->
    <nav class="post-breadcrumb" aria-label="パンくずリスト">
      <ol class="post-breadcrumb__list">
        <li class="post-breadcrumb__item">
          <a href="<?php echo home_url('/'); ?>" class="post-breadcrumb__link">ホーム</a>
        </li>
        <li class="post-breadcrumb__item">
          <a href="<?php echo home_url('/news'); ?>" class="post-breadcrumb__link">お知らせ</a>
        </li>
        <li class="post-breadcrumb__item post-breadcrumb__item--current" aria-current="page">
          <?php the_title(); ?>
        </li>
      </ol>
    </nav>

    <!-- contactセクション -->
    <section class="contact">
      <div class="contact__inner">
        <p class="contact__label">Contact</p>
        <h2 class="contact__title">お気軽にお問い合わせください</h2>
        <p class="contact__desc">ご予約・メニューに関するご質問など<br />お気軽にお問い合わせください。</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn--primary">お問い合わせする <span class="btn__arrow">→</span></a>
      </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
