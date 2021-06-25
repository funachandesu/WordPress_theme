<section class="sidebar_part">
        <!--<div class="sidebar_cate">
          <div><a href="">Categorry</a></div>
          <ul>
          <li><a href="">Web制作</a></li>
          <li><a href="">本</a></li>
          <li><a href="">雑記</a></li>
          <li><a href="">未分類</a></li>
          </ul>
        </div>-->
        <!--sidebar_cate-->
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
<?php dynamic_sidebar( 'sidebar' ); ?>
<?php endif; ?>
      </section>
    </section>
    <!--blog_wrap-->