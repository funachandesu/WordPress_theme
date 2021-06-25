<div id="loader-bg">
<div id="loading">
<?php require ("img/top/loader.php");?>
</div>
</div>


<div id="main-contents">


<?php get_header();?>


    <section class="top_wrap">
      <section class="top_img">
		  <h1 style="display:none;">山口県宇部市を拠点にWeb制作を行なっております「Fhase」です</h1>
        <p class="wow bounce" data-wow-iteration="10" data-wow-duration="7s" >Web制作を行なっております<br />「Fhase」です</p>
        <!--<img src="<?php echo get_template_directory_uri() ?>/img/top/top_haikei.svg" alt="" />-->
      </section>
      <!--top_img-->

      <div class="nami_anime">
        <div class="container"></div>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
          <path id="wave" d="" />
        </svg>
      </div>

      <section class="top_service">
        <h1>Service</h1>
        <div class="top_service_all">
          <div class="top_service_design top_service_wrap wow fadeInUp" data-wow-delay="3s">
            <h2>Design</h2>
            <img src="<?php echo get_template_directory_uri() ?>/img/top/service1.svg" alt="山口県宇部市を拠点にしたWeb制作「Fhase」の制作内容説明" />
            <p>
              ヒアリングに基づき、ご要望に沿ったデザインに仕上げます。納期やご予算等様々な条件を考慮し、オリジナル、または数多くあるテンプレートからのお選びも可能です。
            </p>
          </div>
          <div class="top_service_Coding top_service_wrap wow fadeInUp" data-wow-delay="3s">
            <h2>Coding</h2>
            <img src="<?php echo get_template_directory_uri() ?>/img/top/service2.svg" alt="山口県宇部市を拠点にしたWeb制作「Fhase」の制作内容説明" />
            <p>
              デザインに基づきコーディングを行います。クロスブラウザ対応、レスポンシブ対応で作成可能です。静的サイトはもちろんアニメーションの凝った動的サイトまで作成可能です。
            </p>
          </div>
          <div class="top_service_cms top_service_wrap wow fadeInUp" data-wow-delay="3s">
            <h2>CMS</h2>
            <img src="<?php echo get_template_directory_uri() ?>/img/top/service3.svg" alt="山口県宇部市を拠点にしたWeb制作「Fhase」の制作内容説明" />
            <p>
              WordPressを用いた更新性の高いサイトも構築可能です。お客様自身で更新していくことが可能になります。営業情報からブログ記事まで様々なニーズに対応しています。
            </p>
          </div>
        </div>
        <a
          href="<?php echo esc_url(home_url('/')); ?>info/"
          class="contact_btn sumafo_only"
          ontouchstart=""
        >
          <p>お問い合わせはこちら</p>
        </a>
        <!--スマホのみ-->
      </section>
      <!--top_service-->

      <section class="pc_only_menu">
        <a class="border_1" href="<?php echo esc_url(home_url('/')); ?>about/">About</a>
        <a class="border_2" href="<?php echo esc_url(home_url('/')); ?>ports/">Portfolio</a>
        <a class="border_3" href="<?php echo esc_url(home_url('/')); ?>category/itiran/">Blog</a>
        <a class="border_4" href="<?php echo esc_url(home_url('/')); ?>info/">Contact</a>
      </section>

      <section class="sumafo_only_menu sumafo_only">
        <a href="<?php echo esc_url(home_url('/')); ?>about/" class="menu1"
          ><img src="<?php echo get_template_directory_uri() ?>/img/top/menu1.jpg" alt="山口県宇部市を拠点にしたWeb制作「Fhase」の自己紹介ページ"
        /></a>
        <a href="<?php echo esc_url(home_url('/')); ?>ports/" class="menu2"
          ><img src="<?php echo get_template_directory_uri() ?>/img/top/menu2.jpg" alt="山口県宇部市を拠点にしたWeb制作「Fhase」の制作実績ページ"
        /></a>
        <a href="<?php echo esc_url(home_url('/')); ?>category/itiran/" class="menu3"
          ><img src="<?php echo get_template_directory_uri() ?>/img/top/menu3.jpg" alt="山口県宇部市を拠点にしたWeb制作「Fhase」のブログ記事"
        /></a>
      </section>
      <!--botttom_menu-->
    </section>
    <!--top_wrap-->


    <?php get_footer();?>

    </div>