<?php
/*
Template Name: about

*/?>
<?php get_header();?>
    <section class="page_title">
      <h1>About</h1>
    </section>

    <section class="about_wrap wow fadeInUp">
      <p class="about_img"><img src="<?php echo get_template_directory_uri() ?>/img/about/about-img.png" alt="山口県宇部市を拠点にしたWeb制作「Fhase」の自己紹介ページの写真" /></p>
      <div>
        <p>山口県宇部市を拠点にWeb制作をしております。
          LP(ランディングページ)からCMS、動きのある
          リッチなサイトまでお客様の要望に沿ったサイトを構築致します。
          個人経営の店舗サイトから企業サイトまで、幅広い制作実績がございます。
        </p>
        <p>事業名称 : Fhase(フェーズ) <br />お問い合わせ :
          <a href="<?php echo esc_url(home_url('/')); ?>contact/">dafunafuna@icloud.com</a> <br />事業内容 :
          デザイン, HTML・CSSコーディング, CMS導入,動的サイト(Javascript)
        </p>
        <p>
          舟田 優太 FUNADA YUTA <br />Twitter :
          <a href="https://twitter.com/xa_5f">@xa_5f</a> <br />Facebook :
          <a href="https://facebook.com/funadakun">Yuta Funada</a>
        </p>
      </div>
    </section>
    <?php get_footer();?>