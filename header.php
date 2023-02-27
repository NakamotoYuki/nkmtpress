<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>
<header>
  <link rel="shortcut icon" href="あなたのファビコン画像のURL">
  <div class="jumbotron d-flex justify-content-left mb-0 pb-0">
  <div class="container">
    <h4 class="text-white"><?php bloginfo()?></h4>
    <h5 class="text-white"><?php bloginfo('description'); ?></h5>
  </div>
  </div>
</header>
<nav class="navbar navbar-dark bg-dark mb-40">
 <div class="container justify-content-start">
  <a class="nav-item nav-link" href="/">ホーム</a>
  <a class="nav-item nav-link" href="/category/infra/">インフラ</a>
  <a class="nav-item nav-link" href="/category/programming">プログラミング</a>
  <a class="nav-item nav-link" href="/category/gourmet">グルメ</a>
  <a class="nav-item nav-link" href="/category/travel">旅行</a>
  <a class="nav-item nav-link" href="/category/books">書評</a>
  <a class="nav-item nav-link" href="/contact">お問い合わせ</a>
 </div>
</nav>
