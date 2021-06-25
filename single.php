
<?php get_header();?>
<?php
        //記事があればentriesブロック以下を表示
        if (have_posts() ) : ?>
        <?php
        //記事数ぶんループ
        while ( have_posts() ) :
        the_post(); ?>
    <section class="page_title">
      <h1><?php the_title(); //タイトルを表示 ?></h1>
      <!--ここをタイトルにする！-->
    </section>
    <!--page_title-->

    <section class="blog_wrap">
      <section class="blog_page">
        <p class="blog_time"><a href=""><?php the_time('Y/n/j'); ?></a></p>

        <?php
        $category = get_the_category();
        $cat_name = $category[0]->cat_name;
        $cat_slug = $category[0]->category_nicename;?>
        <p class="blog_cate"><a href="<?php echo esc_url(home_url('/')); ?>category/<?php echo $cat_slug; ?>/<?php foreach($category as $cat){if($cat->parent){echo $cat->slug;}};?>">
        <?php foreach($category as $cat){
            if($cat->parent){
              echo $cat->cat_name;
            }
          };?>
        </a></p>

        <p class="blog_page_img">
        <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
            } else {
            // なければnoimage画像をデフォルトで表示
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/about/about-img.png" alt="記事画像">';
            }
            ?>        </p>


<p class="blog_page_kiji">
        <?php //remove_filter('the_content','wpautop');?>
        <?php
        echo the_content();
        ?>
</p>
      </section>
      <?php
        endwhile;
        ?>
        <?php endif; ?>
      <!--blog_page-->
      <?php get_sidebar();?>
    <!--blog_wrap-->

    <?php get_footer();?>
