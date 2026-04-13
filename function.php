  <?php
  // CSS・JSの読み込み
  function grain_scripts() {
    wp_enqueue_style(
      'grain-style',
      get_template_directory_uri() . '/css/style.css',
      [],
      '1.0'
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

