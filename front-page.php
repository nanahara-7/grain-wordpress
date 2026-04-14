  <?php get_header(); ?>                                                                                                                                                        
                                                                                                                                                                                  
  <section class="hero">                                                                                                                                                          
    <div class="hero__inner">                                                                                                                                                     
      <div class="hero__content">                                                                                                                                                 
        <p class="hero__label">Bakery Cafe</p>                                                                                                                                    
        <h2 class="hero__title">毎朝焼きたて<br />少し特別なひととき</h2>                                                                                                         
        <p class="hero__desc">北海道産小麦にこだわったベーカリーカフェGRAINです。毎朝丁寧に焼き上げたパンをお届けします。</p>                                                   
        <a href="<?php echo home_url('/menu'); ?>" class="btn btn--primary hero__btn">メニューを見る <span class="btn__arrow">→</span></a>                                      
      </div>

      <div class="hero__image">
        <div class="hero__slide hero__slide--active">
          <img src="<?php echo get_template_directory_uri(); ?>/img/hero.jpg" alt="焼きたてのパンが並ぶベーカリーカフェの様子" />
        </div>
        <div class="hero__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/hero2.jpg" alt="ベーカリーカフェの店内の様子" loading="lazy" />
        </div>
        <div class="hero__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/hero3.jpg" alt="焼きたてのパン" loading="lazy" />
        </div>
      </div>
    </div>
  </section>

  <div class="hero__wave">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Rectangle 2.svg" alt="" />
  </div>

  <section class="feature">
    <div class="feature__inner">
      <h2 class="feature__title"><span class="feature__title-accent">素材</span>と<span class="feature__title-accent">焼きたて</span>に、こだわり続ける</h2>
      <ul class="feature__list">
        <li class="feature__item">
          <p class="feature__item-label">毎日の焼き上げ</p>
          <p class="feature__item-num"><span class="feature__item-num-text">5</span>回</p>
          <p class="feature__item-desc">朝から夕方まで、<br />焼き立てをお届けします。</p>
        </li>
        <li class="feature__item">
          <p class="feature__item-label">メニュー数</p>
          <p class="feature__item-num"><span class="feature__item-num-text">30</span>種類以上</p>
          <p class="feature__item-desc">定番から季節限定まで<br />豊富なラインナップ。</p>
        </li>
        <li class="feature__item">
          <p class="feature__item-label">無添加</p>
          <p class="feature__item-num"><span class="feature__item-num-text">0</span></p>
          <p class="feature__item-desc">保存料・着色料は<br />一切使用していません。</p>
        </li>
      </ul>
    </div>
  </section>

  <div class="menu__wave">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/Rectangle 6.svg" alt="" />
  </div>

  <section class="menu">
    <div class="menu__inner">
      <p class="menu__label">Menu</p>
      <h2 class="menu__title">こだわりのベーカリーメニュー</h2>
      <div class="menu__slider">
        <ul class="menu__track">
          <li class="menu__item">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-croissant.jpg" alt="焼きたてクロワッサン" loading="lazy" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">焼きたてクロワッサン</p>
                <p class="menu__card-price">¥280</p>
              </div>
            </a>
          </li>
          <li class="menu__item">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-shokupan.jpg" alt="北海道産小麦の食パン" loading="lazy" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">北海道産小麦の食パン</p>
                <p class="menu__card-price">¥380</p>
              </div>
            </a>
          </li>
          <li class="menu__item">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg" alt="ブルーベリーマフィン" loading="lazy" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">ブルーベリーマフィン</p>
                <p class="menu__card-price">¥220</p>
              </div>
            </a>
          </li>
          <li class="menu__item">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg" alt="自家製カフェラテ" loading="lazy" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">自家製カフェラテ</p>
                <p class="menu__card-price">¥480</p>
              </div>
            </a>
          </li>
          <li class="menu__item">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-creampan.jpg" alt="クリームパン" loading="lazy" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">クリームパン</p>
                <p class="menu__card-price">¥320</p>
              </div>
            </a>
          </li>
          <!-- 無限ループ用の複製 -->
          <li class="menu__item" aria-hidden="true">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-croissant.jpg" alt="" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">焼きたてクロワッサン</p>
                <p class="menu__card-price">¥280</p>
              </div>
            </a>
          </li>
          <li class="menu__item" aria-hidden="true">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-shokupan.jpg" alt="" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">北海道産小麦の食パン</p>
                <p class="menu__card-price">¥380</p>
              </div>
            </a>
          </li>
          <li class="menu__item" aria-hidden="true">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-muffin.jpg" alt="" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">ブルーベリーマフィン</p>
                <p class="menu__card-price">¥220</p>
              </div>
            </a>
          </li>
          <li class="menu__item" aria-hidden="true">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-latte.jpg" alt="" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">自家製カフェラテ</p>
                <p class="menu__card-price">¥480</p>
              </div>
            </a>
          </li>
          <li class="menu__item" aria-hidden="true">
            <a href="<?php echo home_url('/menu'); ?>" class="menu__card">
              <div class="menu__card-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu-creampan.jpg" alt="" />
              </div>
              <div class="menu__card-body">
                <p class="menu__card-name">クリームパン</p>
                <p class="menu__card-price">¥320</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="menu__btn-wrap">
        <a href="<?php echo home_url('/menu'); ?>" class="btn btn--primary">メニューをすべて見る <span class="btn__arrow">→</span></a>
      </div>
    </div>
  </section>

  <div class="story__wave">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/wave-story.svg" alt="" />
  </div>

  <section class="story">
    <div class="story__inner">
      <p class="story__label">Our Story</p>
      <h2 class="story__title">GRAINのこだわり</h2>
      <ul class="story__list">
        <li class="story__item">
          <div class="story__card">
            <p class="story__card-num"><span class="story__card-num-digit">01</span>.<span class="story__card-num-en">Ingredients</span></p>
            <h3 class="story__card-title">素材へのこだわり</h3>
            <p class="story__card-desc">北海道産の小麦粉を使用し、一つ一つ丁寧に仕込みます素材の味を最大限に活かしたシンプルで豊かな味わいをお届けします。</p>
          </div>
          <div class="story__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/story-1-ingredients.jpg" alt="小麦粉と麦の穂" loading="lazy" />
          </div>
        </li>
        <li class="story__item story__item--reverse">
          <div class="story__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/story-2-baking.jpg" alt="オーブンで焼かれるパン" loading="lazy" />
          </div>
          <div class="story__card">
            <p class="story__card-num"><span class="story__card-num-digit">02</span>.<span class="story__card-num-en">Baking</span></p>
            <h3 class="story__card-title">焼きたてへのこだわり</h3>
            <p class="story__card-desc">毎日5回の焼き上げで常に焼きたてをお届けします。店内に漂うパンの香りとサクサクの食感をお楽しみください。</p>
          </div>
        </li>
        <li class="story__item">
          <div class="story__card">
            <p class="story__card-num"><span class="story__card-num-digit">03</span>.<span class="story__card-num-en">Space</span></p>
            <h3 class="story__card-title">空間へのこだわり</h3>
            <p class="story__card-desc">日常の中に少し特別なひとときを木のぬくもりと自然光を活かした落ち着いた空間でゆっくりとお過ごしください。</p>
          </div>
          <div class="story__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/story-3-space.jpg" alt="カフェの内観" loading="lazy" />
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div class="about__wave">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/wave-about.svg" alt="" />
  </div>

  <section class="about">
    <div class="about__inner">
      <div class="about__content">
        <div class="about__heading">
          <p class="about__label">Story</p>
          <h2 class="about__title">「毎日の食卓に、豊かさをお届けしたい」</h2>
        </div>
        <p class="about__desc">「GRAINは、北海道産の小麦へのこだわりから生まれました。毎朝丁寧に仕込み、焼き上げるパンには素材本来の味を大切にする私たちの想いが込められています。
  日常の中に少し特別なひとときをお届けしたい。その想いを胸に今日も焼き続けています。」</p>
      </div>
      <div class="about__img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="GRAINのパン職人" loading="lazy" />
      </div>
    </div>
  </section>

  <div class="news__wave">
    <img src="<?php echo get_template_directory_uri(); ?>/img/svg/wave-news.svg" alt="" />
  </div>

  <section class="news">
    <div class="news__inner">
      <div class="news__heading">
        <p class="news__label">News</p>
        <h2 class="news__title">お知らせ</h2>
      </div>
      <ul class="news__list">
        <li class="news__item">
          <a href="<?php echo home_url('/news'); ?>" class="news__card">
            <div class="news__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/news-strawberry-croissant.jpg" alt="春限定いちごデニッシュ" loading="lazy" />
            </div>
            <div class="news__card-body">
              <p class="news__card-title">「【春限定】いちごデニッシュが登場しました。」</p>
              <p class="news__card-desc">「今年も大好評の春限定メニューが登場。福岡県産あまおうをたっぷり使ったいちごデニッシュをぜひお試しください。」</p>
              <div class="news__card-meta">
                <time class="news__card-date" datetime="2026-03-27">2026.03.27</time>
                <ul class="news__card-tags">
                  <li class="news__card-tag news__card-tag--primary">新商品</li>
                </ul>
              </div>
            </div>
          </a>
        </li>
        <li class="news__item">
          <a href="<?php echo home_url('/news'); ?>" class="news__card">
            <div class="news__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/news-bread-making.jpg" alt="パン作り体験ワークショップ" loading="lazy" />
            </div>
            <div class="news__card-body">
              <p class="news__card-title">「パン作り体験ワークショップ開催決定！」</p>
              <p class="news__card-desc">「4月の毎週土曜日にパン作り体験を開催します。初心者の方でもお気軽にご参加いただけます。定員各回8名・要予約。」</p>
              <div class="news__card-meta">
                <time class="news__card-date" datetime="2026-03-15">2026.03.15</time>
                <ul class="news__card-tags">
                  <li class="news__card-tag news__card-tag--primary">イベント</li>
                </ul>
              </div>
            </div>
          </a>
        </li>
        <li class="news__item">
          <a href="<?php echo home_url('/news'); ?>" class="news__card">
            <div class="news__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/news-store-closed.jpg" alt="ゴールデンウィーク営業時間のお知らせ" loading="lazy" />
            </div>
            <div class="news__card-body">
              <p class="news__card-title">「ゴールデンウィーク期間中の営業時間についてお知らせ」</p>
              <p class="news__card-desc">「4月29日〜5月6日のゴールデンウィーク期間中は営業時間を変更いたします。詳細はお知らせページをご確認ください。」</p>
              <div class="news__card-meta">
                <time class="news__card-date" datetime="2026-03-10">2026.03.10</time>
                <ul class="news__card-tags">
                  <li class="news__card-tag news__card-tag--primary">お知らせ</li>
                </ul>
              </div>
            </div>
          </a>
        </li>
      </ul>
      <div class="news__btn-wrap">
        <a href="<?php echo home_url('/news'); ?>" class="btn btn--primary">すべてのお知らせを見る <span class="btn__arrow">→</span></a>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="contact__inner">
      <p class="contact__label">Contact</p>
      <h2 class="contact__title">お気軽にお問い合わせください</h2>
      <p class="contact__desc">ご予約・メニューに関するご質問など<br />お気軽にお問い合わせください。</p>
      <a href="<?php echo home_url('/contact'); ?>" class="btn btn--primary">お問い合わせする <span class="btn__arrow">→</span></a>
    </div>
  </section>

  <?php get_footer(); ?>