<?php
/*
Template Name: info

*/?>
<?php get_header();?>
    <section class="page_title">
      <h1>Contact</h1>
    </section>
    <!--page_title-->

    <section class="page_second wow fadeInUp">
      <p>
        制作のお問い合わせはこちらからお願いします。
        <a href="https://twitter.com/xa_5f/">Twitter</a>,
        <a href="https://facebook.com/funadakun"> Facebook</a>
        でも承っております。
      </p>
    </section>
    <?php echo do_shortcode('[contact-form-7 id="18" title="コンタクトフォーム 1"]'); ?>
    <?php get_footer();?>