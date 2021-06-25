<footer>
      <div class="btn_group">
        <a href="https://twitter.com/xa_5f/" class="footer_1"
          ><img src="<?php echo get_template_directory_uri() ?>/img/footer/footer_1.svg" alt="Web制作「Fhase」のtwitterアカウント@xa_5f"
        /></a>
        <a href="https://facebook.com/funadakun" class="footer_2"
          ><img src="<?php echo get_template_directory_uri() ?>/img/footer/footer_2.svg" alt="Web制作「Fhase」のFacebookアカウント"
        /></a>
        <a href="<?php echo esc_url(home_url('/')); ?>info/" class="footer_3"
          ><img src="<?php echo get_template_directory_uri() ?>/img/footer/footer_3.svg" alt="Web制作「Fhase」のお問い合わせページ"
        /></a>
      </div>
      <p class="copy_rights">Yuta Funada All rights reserved.</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/jquery.wavify.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/wave.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <?php wp_footer();?>
  </body>
</html>