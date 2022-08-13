<?php get_header(); ?>

<!-- head -->
<section class="lower_head">
  <div class="lower_head_container">
    <picture>
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/blog/archive_top-sp.jpg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/blog/archive_top.jpg')); ?>" alt="mv" />
    </picture>
    <div class="lower_title_box">
      <h2 class="lower_title">スタッフブログ</h2>
      <p class="lower_sub_title">BLOG</p>
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
    <img src="<?php echo esc_url(get_theme_file_uri('/images/common/icon-pc.svg')); ?>" alt="icon" />
    <span>WEB予約はこちら</span>
  </a>
</section>

<!-- ブログ一覧 -->
<section class="blog lower_blog">
  <div class="lower_blog_inner">
    <div class="lower_blog_container">
      <main class="blog_contents">
        <div class="blog_box lower_blog_box">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article class="blog_card lower_blog_card">
                <?php
                $days = 3;
                $today = date_i18n('U');
                $entry_day = get_the_time('U');
                $keika = date('U', ($today - $entry_day)) / 86400;
                if ($days > $keika) :
                  echo '<span class="blog_card_new lower_blog_card_new">NEW</span>';
                endif;
                ?>
                <a href="<?php the_permalink(); ?>" class="blog_head lower_blog_head">
                  <div class="blog_img lower_blog_img">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
                    <?php endif; ?>
                  </div>
                  <div class="blog_body lower_blog_body">
                    <div class="blog_category lower_blog_category">
                      <?php // 投稿に紐づくタームの一覧を表示
                      $taxonomy_slug = 'blog_category'; // 任意のタクソノミースラッグを指定
                      $category_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タームの情報を取得
                      if (!empty($category_terms)) { // 変数が空でなければ true
                        if (!is_wp_error($category_terms)) { // 変数が WordPress Error でなければ true

                          foreach ($category_terms as $category_term) { // タームのループを開始
                            echo $category_term->name; // ターム名を表示
                          } // ループの終了

                        }
                      }
                      ?>
                    </div>
                    <div class="blog_title lower_blog_title">
                      <?php the_title(); ?>
                    </div>
                    <div class="blog_date lower_blog_date">
                      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                    </div>
                  </div>
                </a>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <!-- pagination -->
        <?php the_posts_pagination(); ?>
      </main>

      <!-- サイドバー -->
      <?php get_sidebar(); ?>

      <!-- footer -->
      <?php get_footer(); ?>
