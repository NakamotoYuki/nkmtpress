<?php

// jsの読み込み
add_action( 'wp_enqueue_scripts', function() {
wp_enqueue_script( 'nkmtjs', get_template_directory_uri().'/dist/main.js');
});
// 目次機能の追加
 function add_toc ( $content ) {
   $toc = "<div class='toc-area'><p class='toc-title'><span>目次</span></p><ul class='toc-items'>";
    if (is_single () ) {

        $toc_num = 1;
        preg_match_all('/<h[0-9]>(.*?)<\/h[0-9]>/', $content , $heads);
        foreach($heads[1] as $head){
          $head_link_pattern = ">".$head;
          $content = preg_replace("/$head_link_pattern/", " id = ".$toc_num.">".$head, $content);
          $toc .= "<li class = 'toc-item'>".$toc_num.".  <a class = 'toc-text' href=\"#".$toc_num."\">".$head."</a></li>";
          $toc_num ++;
        }
        $toc .= "</ul></div>";
        $content = $toc . $content;
    }
    return $content;

}

add_filter ( 'the_content', 'add_toc' );

register_sidebar(
array(
    'id' => 'sidebar-1',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>',
    'before_widget' => '<div class="list-group list-group-flush right-cate">',
    'after_widget'  => '</div>',
)
);
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_filter('widget_title', 'remove_widget_title_all');
function remove_widget_title_all($widget_title)
{
    return;
}

function index($index){
  $index = $index.split(",");
  $index_template = "<div class = mokujiy>";
  $index_template .= "<ul>";
  foreach ($index as $value) {
    $index_template .= "<li>".$value."</li>";
  }
  $index_tmplate .= "</ul>";
  $index_template .="</div>";
}

// ページネーション機能
function paginations($paged='')
{
  ($paged)? '': $paged++;
    $category = get_the_category();
    $cat_name = (is_home() || is_front_page())? "" : get_queried_object()->slug;
    $cat_link = ($cat_name)? "/category/".$cat_name : "";
    $args = array(
    "posts_per_page" => 10,
    "category_name" => $cat_name
    );
    $query = new WP_Query($args);
    $total_page = $query->found_posts;
    $per_page = $query->post_count;
    $paginate_pages = (int) ceil($total_page/$per_page);
  
    // ページ件数が1ページのみならページングを表示しない
    if($paginate_pages == 1){
      return;
    }
    $back_num = abs($paged-1);
    $next_num = ($paged < $paginate_pages)? $paged+1 : $paged;
    $pagination_template = '<nav class="mt-20"><ul class="pagination">';

    if($back_num > 0){
      $pagination_template .= '<li class="page-item page-link"><a href="'.$cat_link.'/page/'.$back_num.'">戻る</a></li>';
    }
    for ($i=1; $i <= $paginate_pages ; $i++) {
        if ($i == $paged) {
            $pagination_template .= '<li class="page-item page-link text-muted">'.$i.'</li>';
        } else {
            $pagination_template .= '<li class="page-item page-link"><a href="'.$cat_link.'/page/'.$i.'">'.$i.'</a></li>';
        }
    }
    if($paged < $paginate_pages){
      $pagination_template .= '<li class="page-item page-link"><a href="'.$cat_link.'/page/'.$next_num.'">進む</a></li>';
    }
    $pagination_template .= '</nav>';

    echo $pagination_template;
}

add_filter( 'wp_calculate_image_srcset', '__return_false' );
