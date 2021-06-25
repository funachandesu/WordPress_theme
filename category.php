<?php
/*
Template Name: archive

*/?>
<?php get_header();?>
<?php
        $category = get_the_category();
        $cat_name = $category[0]->cat_name;?>
    <section class="page_title">
      <h1><?php echo $cat_name; ?></h1>
    </section>
    <!--page_title-->


    <section class="blog_wrap wow fadeInUp">
    <section class="archive_part">
    <?php if(have_posts()):
        while(have_posts()):
        the_post(); ?>


        <div class="archive_part_wrap">
          <p class="archive_img">
          <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
            } else {
            // なければnoimage画像をデフォルトで表示
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/about/about-img.png" alt="記事画像">';
            }
            ?>

          </p>
          <?php
        $category = get_the_category();
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;?>
          <p class="archive_category"><a href="<?php echo esc_url(home_url('/')); ?>category/<?php echo $cat_slug; ?>/<?php foreach($category as $cat){if($cat->parent){echo $cat->slug;}};?>">
          <?php foreach($category as $cat){
            if($cat->parent){
              echo $cat->cat_name;
            }
          };?>
          </a></p>

          <p class="ymd"><a href="<?php echo esc_url(home_url('/')); ?>single/"><?php the_time('Y/n/j'); ?></a></p>
          <p class="archive_title">
            <a href="<?php the_permalink(); //記事のリンクを表示 ?>"><?php the_title(); //タイトルを表示 ?></a>
          </p>
<p class="blog_page_kiji">

        <?php
        //remove_filter('the_content','wpautop');
        echo the_excerpt();
        ?>
</p>
        </div>
        <?php
        endwhile;
        ?>
        <?php endif; ?>
      </section>

      <!--archive_part-->
    <?php get_sidebar();?>
    <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
<!-- pagenation -->
<div class="pagenation">
<?php
echo
paginate_links(
array(
'end_size' => 0,
'mid_size' => 1,
'prev_next' => true,
'prev_text' => '<i class="fas fa-angle-left"></i>',
'next_text' => '<i class="fas fa-angle-right"></i>',
)
);
?>
</div><!-- /pagenation -->
<?php endif; ?>
    <?php get_footer();?>
