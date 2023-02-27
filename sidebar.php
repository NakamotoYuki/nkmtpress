<div class="col-md-4 order-md-2 mb-4">
<div class="prof-block bg-white mb-40 pr-3 pl-3">
  <figure class="text-center">
    <img class="w-50" src="/wp-content/themes/nkmtpress/img/prof.png" alt="プロフィール">
  </figure>
  <h4 class="text-center">nkmt</h4>
  <p>趣味でシステム開発をしています。日常の記録です。</p>
  
  <!-- githubへのリンク -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <a class="github-button" href="https://github.com/NakamotoYuki" aria-label="Follow @NakamotoYuki on GitHub">Follow @NakamotoYuki</a>

  <!--はてブシェアボタン -->
  <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/v4/public/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

  <!--LINEシェアボタン -->
  <div class="line-it-button" data-lang="ja" data-type="like" data-url="https://nkmt.info/" style="display: none;"></div>
  <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>

  <!--facebookシェアボタン -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2"></script>
  <div class="fb-share-button" data-href="https://nkmt.info/" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnkmt.info%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>
  </div>

  <!-- カテゴリエリア-->
  <div class="cate-block pd-10 mb-40">
    <h4>インフラ系カテゴリ</h4>
    <ul class="list-group bg-white">
    <?php
      $categories = get_categories(array('parent' => 11));
      foreach($categories  as $cate){
        echo "<li class="."list-group-item"."><a href=".$cate->slug.">".$cate->name."</a></li>";
      }
  ?>
    </ul>
  </div>

<!-- カテゴリエリア-->
<div class="cate-block pd-10 mb-40">
  <h4>プログラミング系カテゴリ</h4>
  <ul class="list-group bg-white">
  <?php
    $categories = get_categories(array('parent' => 3));
    foreach($categories  as $cate){
      echo "<li class="."list-group-item"."><a href=".$cate->slug.">".$cate->name."</a></li>";
    }
?>
  </ul>
</div>

<!-- 最新の投稿エリア-->
  <div class="recent-post">
    <h3>最新の投稿</h3>
    <ul class="list-group">
      <?php 
        $posts = get_posts('numberposts=5&orderby=post_date&order=DESC');
        foreach($posts as $post){
        echo '<li class="list-group-item text-dark"><a href="'.get_permalink( $post->id ).'">'.$post->post_title.'</a></li>';
      }
      ?>
    </ul>
  </div>
</div>
