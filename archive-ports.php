<?php
/*
Template Name: archive2

*/?>
<?php get_header();?>

<section class="page_title">
      <h1>Portfolio</h1>
    </section>
    <!--page_title-->


    <section class="page_second page_port wow fadeInUp">
    <?php if(have_posts()):
        while(have_posts()):
        the_post(); ?>

<section class="portfolio">
      <div class="portfolio_title">
      <h2><?php the_title(); //タイトルを表示 ?></h2>
      <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('small');
            } else {
            // なければnoimage画像をデフォルトで表示
            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/about/about-img.png" alt="記事画像">';
            }
            ?>
      </div>
      <div class="portfolio_setumei">
      <p><?php
        echo the_content();
        ?>
      </p>
      <a href="<?php the_field('portfolios') ?>">ホームページへアクセス</a>
      </div>
      </section><!--portfolio-->
        <?php
        endwhile;
        ?>
        <?php endif; ?>
      </section>
      <!--archive_part-->

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
