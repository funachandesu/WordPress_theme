<?php
/*
Template Name: page

*/?>
<?php get_header();?>

    <section class="page_title">
      <h1>Blog</h1>
    </section>
    <!--page_title-->





    <section class="blog_wrap">
    <?php if(have_posts()):
        while(have_posts()):
        the_post(); ?>
      <section class="archive_part">

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
        $cat_name = $category[0]->cat_name;?>
          <p class="archive_category"><a href="<?php echo esc_url(home_url('/')); ?>single/"><?php echo $cat_name; ?></a></p>

          <p class="ymd"><a href="<?php echo esc_url(home_url('/')); ?>single/">xxxx/xx/xx</a></p>
          <p class="archive_title">
            <a href="<?php the_permalink(); //記事のリンクを表示 ?>"><?php the_title(); //タイトルを表示 ?></a>
          </p>
          <p class="archive_kiji_wrap">
          <?php remove_filter('the_content','wpautop');?>
        <?php
        echo the_content();
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
    <?php get_footer();?>
