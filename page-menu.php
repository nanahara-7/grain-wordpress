  <?php $page_description = 'GRAINのメニュー一覧。食パン・クロワッサン・コーヒーなどこだわりの商品をご紹介します。'; get_header(); ?>

  <!-- メニューFVセクション -->
  <section class="menu-fv">
    <div class="menu-fv__slides">
      <div class="menu-fv__slide menu-fv__slide--active">
        <img src="<?php echo get_template_directory_uri(); ?>/img/menu-fv-croissants.jpg" alt="" />
      </div>
      <div class="menu-fv__slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/menu-fv-breads.jpg" alt="" loading="lazy" />
      </div>
      <div class="menu-fv__slide">
        <img src="<?php echo get_template_directory_uri(); ?>/img/menu-fv-assorted.jpg" alt="" loading="lazy" />
      </div>
    </div>
    <div class="menu-fv__overlay"></div>
    <div class="menu-fv__inner">
      <p class="menu-fv__label">Menu</p>
      <h1 class="menu-fv__title">メニュー一覧</h1>
    </div>
  </section>

  <!-- メニューカタログセクション -->
  <section class="menu-catalog">
    <div class="menu-catalog__top">
      <div class="menu-catalog__inner">
        <div class="menu-catalog__tabs" role="tablist" aria-label="カテゴリー">
          <button class="menu-catalog__tab menu-catalog__tab--active" role="tab" aria-selected="true" data-category="all">すべて</button>
          <button class="menu-catalog__tab" role="tab" aria-selected="false" data-category="bread">パン</button>
          <button class="menu-catalog__tab" role="tab" aria-selected="false" data-category="drink">ドリンク</button>
          <button class="menu-catalog__tab" role="tab" aria-selected="false" data-category="sweets">スイーツ</button>
          <button class="menu-catalog__tab" role="tab" aria-selected="false" data-category="seasonal">季節限定</button>
        </div>
      </div>
    </div>

    <div class="menu-catalog__wave">
      <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Rectangle 7.svg" alt="" />
    </div>

    <div class="menu-catalog__bottom">
      <div class="menu-catalog__inner">
        <ul class="menu-catalog__grid">

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-croissant.jpg"
              data-modal-alt="焼きたてクロワッサン"
              data-modal-category="パン"
              data-modal-name="焼きたてクロワッサン"
              data-modal-desc="バターをたっぷり使った、外はサクサク、中はしっとりのクロワッサン。"
              data-modal-price="¥280">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-croissant.jpg" alt="焼きたてクロワッサン" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">焼きたてクロワッサン</h2>
                <p class="menu-card__desc">バターをたっぷり使った、外はサクサク、中はしっとりのクロワッサン。</p>
                <p class="menu-card__price">¥280</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="drink">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg"
              data-modal-alt="自家製カフェラテ"
              data-modal-category="ドリンク"
              data-modal-name="自家製カフェラテ"
              data-modal-desc="厳選したコーヒー豆と濃厚なミルクで仕上げた、まろやかなカフェラテ。"
              data-modal-price="¥480">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg" alt="自家製カフェラテ" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">ドリンク</span>
                <h2 class="menu-card__name">自家製カフェラテ</h2>
                <p class="menu-card__desc">厳選したコーヒー豆と濃厚なミルクで仕上げた、まろやかなカフェラテ。</p>
                <p class="menu-card__price">¥480</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-creampan.jpg"
              data-modal-alt="クリームパン"
              data-modal-category="パン"
              data-modal-name="クリームパン"
              data-modal-desc="自家製カスタードクリームをたっぷり詰め込んだ、やさしい甘さのクリームパン。"
              data-modal-price="¥320">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-creampan.jpg" alt="クリームパン" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">クリームパン</h2>
                <p class="menu-card__desc">自家製カスタードクリームをたっぷり詰め込んだ、やさしい甘さのクリームパン。</p>
                <p class="menu-card__price">¥320</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="seasonal">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/news-strawberry-croissant.jpg"
              data-modal-alt="いちごデニッシュ"
              data-modal-category="季節限定"
              data-modal-name="いちごデニッシュ"
              data-modal-desc="福岡県産あまおうを使った春限定のデニッシュ。甘酸っぱい味わいが絶品。"
              data-modal-price="¥380">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-strawberry-croissant.jpg" alt="いちごデニッシュ" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">季節限定</span>
                <h2 class="menu-card__name">いちごデニッシュ</h2>
                <p class="menu-card__desc">福岡県産あまおうを使った春限定のデニッシュ。甘酸っぱい味わいが絶品。</p>
                <p class="menu-card__price">¥380</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-shokupan.jpg"
              data-modal-alt="北海道産小麦の食パン"
              data-modal-category="パン"
              data-modal-name="北海道産小麦の食パン"
              data-modal-desc="北海道産小麦100%使用。毎朝焼き上げるふんわりもちもちの食パン。"
              data-modal-price="¥380">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-shokupan.jpg" alt="北海道産小麦の食パン" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">北海道産小麦の食パン</h2>
                <p class="menu-card__desc">北海道産小麦100%使用。毎朝焼き上げるふんわりもちもちの食パン。</p>
                <p class="menu-card__price">¥380</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="sweets">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg"
              data-modal-alt="ブルーベリーマフィン"
              data-modal-category="スイーツ"
              data-modal-name="ブルーベリーマフィン"
              data-modal-desc="ぷちぷちのブルーベリーをたっぷり入れた、しっとりやわらかなマフィン。"
              data-modal-price="¥220">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg" alt="ブルーベリーマフィン" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">スイーツ</span>
                <h2 class="menu-card__name">ブルーベリーマフィン</h2>
                <p class="menu-card__desc">ぷちぷちのブルーベリーをたっぷり入れた、しっとりやわらかなマフィン。</p>
                <p class="menu-card__price">¥220</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/news-matcha-anpan.jpg"
              data-modal-alt="抹茶あんぱん"
              data-modal-category="パン"
              data-modal-name="抹茶あんぱん"
              data-modal-desc="京都産宇治抹茶の風味豊かな餡を包んだ、ほんのり苦みとやさしい甘さのあんぱん。"
              data-modal-price="¥300">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-matcha-anpan.jpg" alt="抹茶あんぱん" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">抹茶あんぱん</h2>
                <p class="menu-card__desc">京都産宇治抹茶の風味豊かな餡を包んだ、ほんのり苦みとやさしい甘さのあんぱん。</p>
                <p class="menu-card__price">¥300</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="drink">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg"
              data-modal-alt="抹茶ラテ"
              data-modal-category="ドリンク"
              data-modal-name="抹茶ラテ"
              data-modal-desc="京都産宇治抹茶と濃厚なミルクで仕上げた、まろやかで香り高い抹茶ラテ。"
              data-modal-price="¥520">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg" alt="抹茶ラテ" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">ドリンク</span>
                <h2 class="menu-card__name">抹茶ラテ</h2>
                <p class="menu-card__desc">京都産宇治抹茶と濃厚なミルクで仕上げた、まろやかで香り高い抹茶ラテ。</p>
                <p class="menu-card__price">¥520</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="sweets">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/news-choco-danish.jpg"
              data-modal-alt="チョコデニッシュ"
              data-modal-category="スイーツ"
              data-modal-name="チョコデニッシュ"
              data-modal-desc="ベルギー産チョコレートをたっぷり使った、リッチな味わいのデニッシュ。"
              data-modal-price="¥350">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-choco-danish.jpg" alt="チョコデニッシュ" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">スイーツ</span>
                <h2 class="menu-card__name">チョコデニッシュ</h2>
                <p class="menu-card__desc">ベルギー産チョコレートをたっぷり使った、リッチな味わいのデニッシュ。</p>
                <p class="menu-card__price">¥350</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-croissant.jpg"
              data-modal-alt="メロンパン"
              data-modal-category="パン"
              data-modal-name="メロンパン"
              data-modal-desc="サクサクのクッキー生地とふんわりパン生地の組み合わせが絶妙なメロンパン。"
              data-modal-price="¥280">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-croissant.jpg" alt="メロンパン" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">メロンパン</h2>
                <p class="menu-card__desc">サクサクのクッキー生地とふんわりパン生地の組み合わせが絶妙なメロンパン。</p>
                <p class="menu-card__price">¥280</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="drink">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg"
              data-modal-alt="アイスコーヒー"
              data-modal-category="ドリンク"
              data-modal-name="アイスコーヒー"
              data-modal-desc="深煎りコーヒー豆をじっくり抽出した、コクと香りが際立つアイスコーヒー。"
              data-modal-price="¥420">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg" alt="アイスコーヒー" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">ドリンク</span>
                <h2 class="menu-card__name">アイスコーヒー</h2>
                <p class="menu-card__desc">深煎りコーヒー豆をじっくり抽出した、コクと香りが際立つアイスコーヒー。</p>
                <p class="menu-card__price">¥420</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-shokupan.jpg"
              data-modal-alt="バゲット"
              data-modal-category="パン"
              data-modal-name="バゲット"
              data-modal-desc="フランス産小麦を使用した、外はパリッと香ばしく、中はもっちりのバゲット。"
              data-modal-price="¥420">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-shokupan.jpg" alt="バゲット" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">バゲット</h2>
                <p class="menu-card__desc">フランス産小麦を使用した、外はパリッと香ばしく、中はもっちりのバゲット。</p>
                <p class="menu-card__price">¥420</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="sweets">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg"
              data-modal-alt="シナモンロール"
              data-modal-category="スイーツ"
              data-modal-name="シナモンロール"
              data-modal-desc="スウェーデン式のシナモンロール。シナモンの香りとやさしい甘さが特徴。"
              data-modal-price="¥380">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg" alt="シナモンロール" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">スイーツ</span>
                <h2 class="menu-card__name">シナモンロール</h2>
                <p class="menu-card__desc">スウェーデン式のシナモンロール。シナモンの香りとやさしい甘さが特徴。</p>
                <p class="menu-card__price">¥380</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="drink">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg"
              data-modal-alt="アールグレイティー"
              data-modal-category="ドリンク"
              data-modal-name="アールグレイティー"
              data-modal-desc="上品なベルガモットの香りが広がる、本格アールグレイティー。ホット・アイス選択可。"
              data-modal-price="¥380">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg" alt="アールグレイティー" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">ドリンク</span>
                <h2 class="menu-card__name">アールグレイティー</h2>
                <p class="menu-card__desc">上品なベルガモットの香りが広がる、本格アールグレイティー。ホット・アイス選択可。</p>
                <p class="menu-card__price">¥380</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-creampan.jpg"
              data-modal-alt="カレーパン"
              data-modal-category="パン"
              data-modal-name="カレーパン"
              data-modal-desc="スパイスが香る自家製カレーをパン生地で包み、揚げずにオーブンで焼き上げた。"
              data-modal-price="¥320">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-creampan.jpg" alt="カレーパン" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">カレーパン</h2>
                <p class="menu-card__desc">スパイスが香る自家製カレーをパン生地で包み、揚げずにオーブンで焼き上げた。</p>
                <p class="menu-card__price">¥320</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="sweets">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg"
              data-modal-alt="チーズケーキ"
              data-modal-category="スイーツ"
              data-modal-name="チーズケーキ"
              data-modal-desc="クリームチーズをたっぷり使った、濃厚でなめらかなニューヨークスタイルのチーズケーキ。"
              data-modal-price="¥400">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg" alt="チーズケーキ" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">スイーツ</span>
                <h2 class="menu-card__name">チーズケーキ</h2>
                <p class="menu-card__desc">クリームチーズをたっぷり使った、濃厚でなめらかなニューヨークスタイルのチーズケーキ。</p>
                <p class="menu-card__price">¥400</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="seasonal">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/news-apple-pie.jpg"
              data-modal-alt="シナモンアップルパン"
              data-modal-category="季節限定"
              data-modal-name="シナモンアップルパン"
              data-modal-desc="青森産りんごとシナモンを使った秋限定パン。温かいコーヒーとの相性が抜群。"
              data-modal-price="¥360">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-apple-pie.jpg" alt="シナモンアップルパン" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">季節限定</span>
                <h2 class="menu-card__name">シナモンアップルパン</h2>
                <p class="menu-card__desc">青森産りんごとシナモンを使った秋限定パン。温かいコーヒーとの相性が抜群。</p>
                <p class="menu-card__price">¥360</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-shokupan.jpg"
              data-modal-alt="チーズフランス"
              data-modal-category="パン"
              data-modal-name="チーズフランス"
              data-modal-desc="フランスパン生地にゴーダチーズをたっぷり練り込んだ、香ばしくて濃厚なパン。"
              data-modal-price="¥340">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-shokupan.jpg" alt="チーズフランス" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">チーズフランス</h2>
                <p class="menu-card__desc">フランスパン生地にゴーダチーズをたっぷり練り込んだ、香ばしくて濃厚なパン。</p>
                <p class="menu-card__price">¥340</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="drink">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg"
              data-modal-alt="ホットチョコレート"
              data-modal-category="ドリンク"
              data-modal-name="ホットチョコレート"
              data-modal-desc="ベルギー産チョコレートを使った、濃厚でまろやかなホットチョコレート。"
              data-modal-price="¥450">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg" alt="ホットチョコレート" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">ドリンク</span>
                <h2 class="menu-card__name">ホットチョコレート</h2>
                <p class="menu-card__desc">ベルギー産チョコレートを使った、濃厚でまろやかなホットチョコレート。</p>
                <p class="menu-card__price">¥450</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="sweets">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg"
              data-modal-alt="モンブラン"
              data-modal-category="スイーツ"
              data-modal-name="モンブラン"
              data-modal-desc="国産栗を使ったマロンクリームと軽いスポンジケーキの組み合わせが絶品のモンブラン。"
              data-modal-price="¥520">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg" alt="モンブラン" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">スイーツ</span>
                <h2 class="menu-card__name">モンブラン</h2>
                <p class="menu-card__desc">国産栗を使ったマロンクリームと軽いスポンジケーキの組み合わせが絶品のモンブラン。</p>
                <p class="menu-card__price">¥520</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="bread">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-croissant.jpg"
              data-modal-alt="フォカッチャ"
              data-modal-category="パン"
              data-modal-name="フォカッチャ"
              data-modal-desc="オリーブオイルとローズマリーが香る、イタリア風の平焼きパン。おつまみにも最適。"
              data-modal-price="¥380">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-croissant.jpg" alt="フォカッチャ" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">パン</span>
                <h2 class="menu-card__name">フォカッチャ</h2>
                <p class="menu-card__desc">オリーブオイルとローズマリーが香る、イタリア風の平焼きパン。おつまみにも最適。</p>
                <p class="menu-card__price">¥380</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="drink">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg"
              data-modal-alt="レモンスカッシュ"
              data-modal-category="ドリンク"
              data-modal-name="レモンスカッシュ"
              data-modal-desc="国産レモン果汁をたっぷり使ったさっぱりとしたレモンスカッシュ。暑い季節にぴったり。"
              data-modal-price="¥380">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg" alt="レモンスカッシュ" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">ドリンク</span>
                <h2 class="menu-card__name">レモンスカッシュ</h2>
                <p class="menu-card__desc">国産レモン果汁をたっぷり使ったさっぱりとしたレモンスカッシュ。暑い季節にぴったり。</p>
                <p class="menu-card__price">¥380</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="seasonal">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/news-christmas-gift.jpg"
              data-modal-alt="クリスマスケーキセット"
              data-modal-category="季節限定"
              data-modal-name="クリスマスケーキセット"
              data-modal-desc="クリスマス限定の特製ケーキセット。数量限定のため、お早めにご予約ください。"
              data-modal-price="¥1,200">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/news-christmas-gift.jpg" alt="クリスマスケーキセット" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">季節限定</span>
                <h2 class="menu-card__name">クリスマスケーキセット</h2>
                <p class="menu-card__desc">クリスマス限定の特製ケーキセット。数量限定のため、お早めにご予約ください。</p>
                <p class="menu-card__price">¥1,200</p>
              </div>
            </article>
          </li>

          <li class="menu-catalog__grid-item" data-category="sweets">
            <article class="menu-card"
              data-modal-img="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg"
              data-modal-alt="フルーツサンド"
              data-modal-category="スイーツ"
              data-modal-name="フルーツサンド"
              data-modal-desc="旬のフルーツと生クリームをサンドした、見た目も華やかなフルーツサンド。"
              data-modal-price="¥480">
              <div class="menu-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg" alt="フルーツサンド" loading="lazy" />
              </div>
              <div class="menu-card__body">
                <span class="menu-card__category">スイーツ</span>
                <h2 class="menu-card__name">フルーツサンド</h2>
                <p class="menu-card__desc">旬のフルーツと生クリームをサンドした、見た目も華やかなフルーツサンド。</p>
                <p class="menu-card__price">¥480</p>
              </div>
            </article>
          </li>

        </ul>

        <nav class="menu-catalog__pagination" aria-label="ページネーション">
          <ul class="menu-catalog__pagination-list">
            <li><a href="#" class="menu-catalog__pagination-btn menu-catalog__pagination-btn--active" aria-current="page" aria-label="1ページ目">1</a></li>
            <li><a href="#" class="menu-catalog__pagination-btn" aria-label="2ページ目">2</a></li>
            <li><a href="#" class="menu-catalog__pagination-btn" aria-label="3ページ目">3</a></li>
            <li><a href="#" class="menu-catalog__pagination-btn" aria-label="4ページ目">4</a></li>
          </ul>
        </nav>

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
        メニュー一覧
      </li>
    </ol>
  </nav>

  <!-- メニューモーダル -->
  <div class="menu-modal-overlay"></div>
  <div class="menu-modal" aria-hidden="true">
    <button class="menu-modal__close" aria-label="閉じる">×</button>
    <div class="menu-modal__img">
      <img src="" alt="" />
    </div>
    <div class="menu-modal__body">
      <span class="menu-modal__category"></span>
      <h2 class="menu-modal__name"></h2>
      <p class="menu-modal__desc"></p>
      <p class="menu-modal__price"></p>
    </div>
  </div>

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