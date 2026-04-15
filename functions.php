  <?php
  // CSS・JSの読み込み
  function grain_scripts()
  {
    wp_enqueue_style(
      'grain-reset',
      get_template_directory_uri() . '/reset.css',
      [],
      '1.0'
    );

    wp_enqueue_style(
      'grain-style',
      get_template_directory_uri() . '/css/style.css',
      ['grain-reset'],
      '1.0'
    );

    wp_enqueue_script(
      'grain-animation',
      get_template_directory_uri() . '/animation.js',
      [],
      '1.0',
      true
    );

    wp_enqueue_script(
      'grain-script',
      get_template_directory_uri() . '/script.js',
      [],
      '1.0',
      true
    );
  }
  add_action('wp_enqueue_scripts', 'grain_scripts');

// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

// 固定ページのページネーションを有効化
add_action('pre_get_posts', function ($query) {
  if (!is_admin() && $query->is_main_query() && is_page('news')) {
    $query->set('posts_per_page', 6);
  }
});

// 管理バーを非表示
add_filter('show_admin_bar', '__return_false');

// WordPressデフォルトスタイルを削除
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('global-styles');
  wp_dequeue_style('classic-theme-styles');
}, 20);

