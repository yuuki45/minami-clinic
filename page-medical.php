<?php get_header(); ?>
<!-- head -->
<section class="lower_head">
  <div class="lower_head_container lower_head_medical">
    <picture>
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/medical/page-medical_top-sp.jpg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/medical/page-medical_top.jpg')); ?>" alt="mv" />
    </picture>
    <div class="lower_title_box">
      <h2 class="lower_title">診療案内</h2>
      <p class="lower_sub_title">MEDICAL</p>
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
    <img src="<?php echo esc_url(get_theme_file_uri('images/common/icon-pc.svg')); ?>" alt="icon" />
    <span>WEB予約はこちら</span>
  </a>
</section>

<!-- 診療コース -->
<section class="medical lower_medical">
  <div class="lower_medical_inner">
    <div class="lower_medical_container">
      <div class="lower_medical_box">
        <h2 class="medical_course medical_course_general">一般診療</h2>
        <div class="medical_tag_wrap">

          <?php
          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'plan'
          );
          $my_posts = get_posts($args);
          foreach ($my_posts as $post) : setup_postdata($post); ?>
            <?php if (is_object_in_term($post->ID, 'plan_category', 'general')) : //条件 
            ?>
              <div class="medical_tag"><a href="#<?php the_ID(); ?>"><?php the_title(); ?></a></div>
            <?php endif; ?>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>

        </div>
      </div>
      <div class="lower_medical_box">
        <h2 class="medical_course medical_course_special">特殊診療</h2>
        <div class="medical_tag_wrap">

          <?php
          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'plan'
          );
          $my_posts = get_posts($args);
          foreach ($my_posts as $post) : setup_postdata($post); ?>
            <?php if (is_object_in_term($post->ID, 'plan_category', 'special')) : //条件 
            ?>
              <div class="medical_tag"><a href="#<?php the_ID(); ?>"><?php the_title(); ?></a></div>
            <?php endif; ?>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- 一般診療 -->
<section class="general">
  <div class="medical_bg_top">
    <picture>
      <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/bg-top-sp.svg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common/bg-top.svg')); ?>" alt="bg-top" />
    </picture>
  </div>
  <div class="general_inner">
    <div class="general_container">
      <h2 class="section_title sec_general" id="medical_general">一般診療</h2>

      <?php
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'plan'
      );
      $my_posts = get_posts($args);
      foreach ($my_posts as $post) : setup_postdata($post); ?>
        <?php if (is_object_in_term($post->ID, 'plan_category', 'general')) : //条件 
        ?>
          <div class="general_box" id="<?php the_ID(); ?>">
            <div class="general_title_wrap">
              <h3 class="general_box_title"><?php the_title(); ?></h3>
              <span class="general_sub_title"><?php the_field('worries'); ?></span>
            </div>
            <div class="general_contents">
              <div class="general_text">
                <?php echo nl2br(get_post_meta($post->ID, 'overview', true)); ?>
              </div>
              <div class="general_img">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
                <?php else : ?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php
      endforeach;
      wp_reset_postdata();
      ?>


    </div>
  </div>
  <div class="medical_bg_bottom">
    <picture>
      <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/bottom-bg.svg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common/bg-bottom.svg')); ?>" alt="top_text" />
    </picture>
  </div>
</section>

<!-- 特殊診療 -->
<section class="general special">
  <div class="medical_bg_top">
    <picture>
      <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/bg-top-sp.svg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common/bg-top.svg')); ?>" alt="bg-top" />
    </picture>
  </div>
  <div class="general_inner">
    <div class="general_container">
      <h2 class="section_title sec_general" id="medical_special">特殊診療</h2>

      <?php
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'plan'
      );
      $my_posts = get_posts($args);
      foreach ($my_posts as $post) : setup_postdata($post); ?>
        <?php if (is_object_in_term($post->ID, 'plan_category', 'special')) : //条件 
        ?>
          <div class="general_box special_box" id="<?php the_ID(); ?>">
            <div class="general_title_wrap">
              <h3 class="general_box_title"><?php the_title(); ?></h3>
              <span class="general_sub_title"><?php the_field('worries'); ?></span>
            </div>
            <div class="general_contents">
              <div class="general_text">
                <?php echo nl2br(get_post_meta($post->ID, 'overview', true)); ?>
              </div>
              <div class="general_img">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
                <?php else : ?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php
      endforeach;
      wp_reset_postdata();
      ?>

    </div>
  </div>
  <div class="medical_bg_bottom">
    <picture>
      <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/bottom-bg.svg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common/bg-bottom.svg')); ?>" alt="top_text" />
    </picture>
  </div>
</section>

<!-- footer -->
<?php get_footer(); ?>
