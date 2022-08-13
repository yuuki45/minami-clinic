<?php get_header(); ?>

<!-- head -->
<section class="lower_head">
  <div class="lower_head_container">
    <picture>
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/blog/archive_top-sp.jpg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/blog/archive_top.jpg')); ?>" alt="mv" />
    </picture>
    <div class="lower_title_box">
      <h2 class="lower_title">
        404
      </h2>
      <p class="lower_sub_title">not found</p>
    </div>
  </div>

  <!-- breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <div class="breadcrumbs">
      <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
      ?>
    </div>
  <?php endif; ?>

  <a href="<?php echo esc_url(home_url('/web')); ?>" class="reserve_button">
    <img src="<?php echo esc_url(get_theme_file_uri('images/common/icon-pc.svg')); ?>" alt="icon">
    <span>WEB予約はこちら</span>
  </a>
</section>

<section class="page404">
  申し訳ございません。コンテンツが存在しません。
</section>
<!-- footer -->
<?php get_footer(); ?>
