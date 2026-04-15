<?php get_header(); ?>

<!-- ニュースFVセクション -->
<section class="news-fv">
  <div class="news-fv__inner">
    <p class="news-fv__label">News</p>
    <h1 class="news-fv__title">お知らせ</h1>
  </div>
</section>

<!-- ニュースカタログセクション -->
<section class="news-catalog">
  <div class="news-catalog__wave">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Rectangle 7.svg" alt="" />
  </div>

  <div class="news-catalog__body">
    <div class="news-catalog__inner">
      <div class="news-catalog__panel">
        <p class="news-catalog__section-heading">すべての記事</p>

        <!-- カテゴリータブ（WordPressのカテゴリーから動的生成） -->
        <div class="news-catalog__tabs" role="tablist" aria-label="カテゴリー">
          <button class="news-catalog__tab news-catalog__tab--active" role="tab" aria-selected="true" data-category="all">すべて</button>
          <?php
          $categories = get_categories(['hide_empty' => true]);
          foreach ($categories as $cat) :
            if ($cat->slug === 'uncategorized') continue;
          ?>
          <button class="news-catalog__tab" role="tab" aria-selected="false" data-category="<?php echo esc_attr($cat->slug); ?>"><?php echo esc_html($cat->name); ?></button>
          <?php endforeach; ?>
        </div>

        <!-- 記事一覧（WordPressの投稿から動的生成） -->
        <?php
        $paged = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
        $news_query = new WP_Query([
          'post_type'      => 'post',
          'posts_per_page' => 6,
          'post_status'    => 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC',
          'paged'          => $paged,
        ]);
        ?>

        <ul class="news-catalog__list">
          <?php if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post(); ?>

          <?php
          $cats = get_the_category();
          $cat_slug = (!empty($cats)) ? $cats[0]->slug : 'uncategorized';
          $cat_name = (!empty($cats)) ? $cats[0]->name : '';
          ?>

          <li class="news-catalog__list-item" data-category="<?php echo esc_attr($cat_slug); ?>">
            <a href="<?php the_permalink(); ?>" class="news-catalog__card">
              <div class="news-catalog__card-img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large', ['alt' => get_the_title(), 'loading' => 'lazy']); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.jpg" alt="" loading="lazy" />
                <?php endif; ?>
              </div>
              <div class="news-catalog__card-body">
                <div class="news-catalog__card-meta">
                  <span class="news-catalog__card-date"><?php echo get_the_date('Y.m.d'); ?></span>
                  <?php if ($cat_name) : ?>
                  <ul class="news-catalog__card-tags">
                    <li class="news-catalog__card-tag news-catalog__card-tag--<?php echo esc_attr($cat_slug); ?>"><?php echo esc_html($cat_name); ?></li>
                  </ul>
                  <?php endif; ?>
                </div>
                <p class="news-catalog__card-title"><?php the_title(); ?></p>
                <p class="news-catalog__card-desc"><?php echo wp_trim_words(get_the_excerpt(), 40, '…'); ?></p>
              </div>
            </a>
          </li>

          <?php endwhile; wp_reset_postdata(); endif; ?>
        </ul>

        <!-- ページネーション -->
        <?php if ($news_query->max_num_pages > 1) : ?>
        <nav class="news-pagination" aria-label="ページナビゲーション">
          <?php echo paginate_links([
            'base'      => trailingslashit(get_permalink()) . '%_%',
            'format'    => 'page/%#%/',
            'total'     => $news_query->max_num_pages,
            'current'   => $paged,
            'prev_next' => false,
          ]); ?>
        </nav>
        <?php endif; ?>

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
      お知らせ
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

<?php get_footer(); ?>
