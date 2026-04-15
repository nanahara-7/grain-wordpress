# GRAIN - ベーカリーカフェ WordPress テーマ

大阪のベーカリーカフェ「GRAIN」のオリジナル WordPress テーマです。  
静的サイト（HTML/SCSS/JS）をベースに WordPress テーマとして移行・開発しました。

## 静的サイト

静的サイトのリポジトリは別途管理しています。  
→ [GRAIN 静的サイト](https://github.com/nanahara-7/GRAIN)

## 使用技術

- PHP（WordPress テーマ開発）
- HTML / SCSS / CSS
- JavaScript
- GSAP（アニメーション）
- Local by Flywheel（ローカル開発環境）
- Git / GitHub（バージョン管理）

## ページ構成

| テンプレートファイル | ページ |
|---|---|
| `front-page.php` | トップページ |
| `page-menu.php` | メニュー |
| `page-news.php` | お知らせ一覧 |
| `page-contact.php` | お問い合わせ |
| `page-thanks.php` | 送信完了 |
| `page-privacy.php` | プライバシーポリシー |
| `single.php` | お知らせ個別記事 |
| `404.php` | 404ページ |

## 主な実装内容

- オリジナル WordPress テーマのゼロからの開発
- WP_Query を使ったお知らせ一覧の動的生成
- カテゴリーフィルター（GSAP アニメーション付き）
- ページネーション
- GSAP を使ったローディング・スクロールアニメーション
- ドロワーメニュー・モーダルなどの UI 実装
- レスポンシブデザイン対応
