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

    <!-- フォームエリア -->
    <section class="contact-form">
      <div class="contact-form__inner">

        <form class="contact-form__form" action="<?php echo home_url('/thanks'); ?>" method="get" novalidate>

          <p class="contact-form__desc">ご予約やメニューに関するお問い合わせは、下記フォームよりお送りください。<br />内容を確認後、2〜3営業日以内にメールまたはお電話にてご連絡いたします。</p>

          <!-- お名前 -->
          <div class="contact-form__field">
            <label class="contact-form__label" for="name">
              お名前
              <span class="contact-form__required">必須</span>
            </label>
            <input class="contact-form__input" type="text" id="name" name="name" placeholder="例）山田 太郎" required />
          </div>

          <!-- フリガナ -->
          <div class="contact-form__field">
            <label class="contact-form__label" for="kana">
              フリガナ
              <span class="contact-form__required">必須</span>
            </label>
            <input class="contact-form__input" type="text" id="kana" name="kana" placeholder="例）ヤマダ　タロウ" required />
          </div>

          <!-- メールアドレス -->
          <div class="contact-form__field">
            <label class="contact-form__label" for="email">
              メールアドレス
              <span class="contact-form__required">必須</span>
            </label>
            <input class="contact-form__input" type="email" id="email" name="email" placeholder="例）info@example.com" required />
          </div>

          <!-- 連絡先電話番号 -->
          <div class="contact-form__field">
            <label class="contact-form__label" for="tel">
              連絡先電話番号
              <span class="contact-form__required">必須</span>
            </label>
            <input class="contact-form__input" type="tel" id="tel" name="tel" placeholder="例）000-0000-0000" required />
          </div>

          <!-- お問い合わせ種別 -->
          <div class="contact-form__field">
            <label class="contact-form__label" for="category">
              お問い合わせ種別
              <span class="contact-form__required">必須</span>
            </label>
            <div class="contact-form__select-wrap">
              <select class="contact-form__select" id="category" name="category" required>
                <option value="" disabled selected>種類を選択してください</option>
                <option value="reservation">ご予約について</option>
                <option value="menu">メニューについて</option>
                <option value="event">イベントについて</option>
                <option value="other">その他</option>
              </select>
            </div>
          </div>

          <!-- お問い合わせ内容 -->
          <div class="contact-form__field">
            <label class="contact-form__label" for="message">
              お問い合わせ内容
              <span class="contact-form__required">必須</span>
            </label>
            <textarea class="contact-form__textarea" id="message" name="message" placeholder="お問い合わせ内容をご記入ください。" rows="6" required></textarea>
          </div>

          <!-- 同意チェック -->
          <div class="contact-form__agree">
            <p class="contact-form__agree-question"><a href="<?php echo home_url('/privacy'); ?>" class="contact-form__agree-link" target="_blank">個人情報保護方針</a>に同意しますか？</p>
            <label class="contact-form__agree-label">
              <input class="contact-form__checkbox" type="checkbox" name="agree" required />
              <span class="contact-form__agree-text">同意する</span>
            </label>
          </div>

          <!-- 送信ボタン -->
          <div class="contact-form__submit-wrap">
            <button class="btn btn--primary contact-form__submit" type="submit">
              送信する <span class="btn__arrow">→</span>
            </button>
          </div>

        </form>
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
