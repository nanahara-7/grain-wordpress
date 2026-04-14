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

        <div class="news-catalog__tabs" role="tablist" aria-label="カテゴリー">
          <button class="news-catalog__tab news-catalog__tab--active" role="tab" aria-selected="true" data-category="all">すべて</button>
          <button class="news-catalog__tab" role="tab" aria-selected="false" data-category="new-item">新商品</button>
          <button class="news-catalog__tab" role="tab" aria-selected="false" data-category="event">イベント</button>
          <button class="news-catalog__tab" role="tab" aria-selected="false" data-category="news">お知らせ</button>
          <button class="news-catalog__tab" role="tab" aria-selected="false" data-category="seasonal">季節限定</button>
        </div>

        <ul class="news-catalog__list">

          <li class="news-catalog__list-item" data-category="seasonal">
            <a href="<?php echo home_url('/news-post'); ?>" class="news-catalog__card">
              <div class="news-catalog__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-strawberry-croissant.jpg" alt="いちごデニッシュが新登場" loading="lazy" />
              </div>
              <div class="news-catalog__card-body">
                <div class="news-catalog__card-meta">
                  <span class="news-catalog__card-date">2026.03.27</span>
                  <ul class="news-catalog__card-tags">
                    <li class="news-catalog__card-tag news-catalog__card-tag--seasonal">季節限定</li>
                  </ul>
                </div>
                <p class="news-catalog__card-title">【春限定】いちごデニッシュが新登場しました</p>
                <p class="news-catalog__card-desc">福岡県産あまおうをたっぷり使った、春限定のいちごデニッシュが登場。甘酸っぱい味わいとサクサクの生地が絶品です。</p>
              </div>
            </a>
          </li>

          <li class="news-catalog__list-item" data-category="event">
            <a href="<?php echo home_url('/news-post'); ?>" class="news-catalog__card">
              <div class="news-catalog__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-bread-making.jpg" alt="パン作り体験ワークショップ" loading="lazy" />
              </div>
              <div class="news-catalog__card-body">
                <div class="news-catalog__card-meta">
                  <span class="news-catalog__card-date">2026.03.15</span>
                  <ul class="news-catalog__card-tags">
                    <li class="news-catalog__card-tag news-catalog__card-tag--event">イベント</li>
                  </ul>
                </div>
                <p class="news-catalog__card-title">パン作り体験ワークショップ開催決定！</p>
                <p class="news-catalog__card-desc">3月15日（土）にパン作り体験ワークショップを開催します。初心者の方でも気軽にご参加いただけます。定員10名・要予約。</p>
              </div>
            </a>
          </li>

          <li class="news-catalog__list-item" data-category="news">
            <a href="<?php echo home_url('/news-post'); ?>" class="news-catalog__card">
              <div class="news-catalog__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-store-closed.jpg" alt="ゴールデンウィーク営業時間" loading="lazy" />
              </div>
              <div class="news-catalog__card-body">
                <div class="news-catalog__card-meta">
                  <span class="news-catalog__card-date">2026.03.10</span>
                  <ul class="news-catalog__card-tags">
                    <li class="news-catalog__card-tag news-catalog__card-tag--news">お知らせ</li>
                  </ul>
                </div>
                <p class="news-catalog__card-title">ゴールデンウィーク期間中の営業時間のご案内</p>
                <p class="news-catalog__card-desc">2025年のゴールデンウィーク期間中（4/29〜5/5）は、通常と異なる営業時間となります。詳細はこちらをご確認ください。</p>
              </div>
            </a>
          </li>

          <li class="news-catalog__list-item" data-category="new-item">
            <a href="<?php echo home_url('/news-post'); ?>" class="news-catalog__card">
              <div class="news-catalog__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-matcha-anpan.jpg" alt="抹茶あんぱん新発売" loading="lazy" />
              </div>
              <div class="news-catalog__card-body">
                <div class="news-catalog__card-meta">
                  <span class="news-catalog__card-date">2026.03.08</span>
                  <ul class="news-catalog__card-tags">
                    <li class="news-catalog__card-tag news-catalog__card-tag--new">新商品</li>
                  </ul>
                </div>
                <p class="news-catalog__card-title">【新商品】抹茶あんぱんが新発売しました</p>
                <p class="news-catalog__card-desc">京都産宇治抹茶を使用した餡を包んだ、風味豊かな抹茶あんぱんが新登場。ほんのり苦みとやさしい甘さが絶妙な一品です。</p>
              </div>
            </a>
          </li>

          <li class="news-catalog__list-item" data-category="news">
            <a href="<?php echo home_url('/news-post'); ?>" class="news-catalog__card">
              <div class="news-catalog__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-closed.jpg" alt="臨時休業のお知らせ" loading="lazy" />
              </div>
              <div class="news-catalog__card-body">
                <div class="news-catalog__card-meta">
                  <span class="news-catalog__card-date">2026.02.23</span>
                  <ul class="news-catalog__card-tags">
                    <li class="news-catalog__card-tag news-catalog__card-tag--news">お知らせ</li>
                  </ul>
                </div>
                <p class="news-catalog__card-title">臨時休業のお知らせ（2月23日）</p>
                <p class="news-catalog__card-desc">設備メンテナンスのため2月23日は臨時休業とさせていただきます。</p>
              </div>
            </a>
          </li>

          <li class="news-catalog__list-item" data-category="seasonal">
            <a href="<?php echo home_url('/news-post'); ?>" class="news-catalog__card">
              <div class="news-catalog__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-choco-danish.jpg" alt="バレンタイン限定チョコデニッシュ" loading="lazy" />
              </div>
              <div class="news-catalog__card-body">
                <div class="news-catalog__card-meta">
                  <span class="news-catalog__card-date">2026.02.01</span>
                  <ul class="news-catalog__card-tags">
                    <li class="news-catalog__card-tag news-catalog__card-tag--seasonal">季節限定</li>
                  </ul>
                </div>
                <p class="news-catalog__card-title">バレンタイン限定チョコデニッシュ販売</p>
                <p class="news-catalog__card-desc">ベルギーチョコを使ったデニッシュを期間限定で販売します。ギフト包装も承ります。</p>
              </div>
            </a>
          </li>

          <li class="news-catalog__list-item" data-category="news">
            <a href="<?php echo home_url('/news-post'); ?>" class="news-catalog__card">
              <div class="news-catalog__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-closed-sign.jpg" alt="年末年始の営業時間" loading="lazy" />
              </div>
              <div class="news-catalog__card-body">
                <div class="news-catalog__card-meta">
                  <span class="news-catalog__card-date">2025.12.20</span>
                  <ul class="news-catalog__card-tags">
                    <li class="news-catalog__card-tag news-catalog__card-tag--news">お知らせ</li>
                  </ul>
                </div>
                <p class="news-catalog__card-title">年末年始の営業時間についてお知らせ</p>
                <p class="news-catalog__card-desc">2024年12月31日〜2025年1月3日は休業いたします。新年は1月4日（土）より通常営業いたします。</p>
              </div>
            </a>
          </li>

        </ul>

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

      </div>
    </div>
  </div>
</section>

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