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
    <img src="<?php echo esc_url(get_theme_file_uri('images/common/icon-pc.svg')); ?>" alt="icon">
    <span>WEB予約はこちら</span>
  </a>
</section>

<!-- 記事 -->
<section class="blog lower_blog">
  <div class="lower_blog_inner">
    <div class="lower_blog_container single_blog_container">
      <main class="blog_contents single_blog_contents">
        <div class="blog_box lower_blog_box">
          <h1 class="single_blog_title"><?php the_title(); ?></h1>
          <div class="single_blog_meta">
            <div class="single_blog_time"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time></div>
            <div class="blog_category lower_blog_category single_blog_category">
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
          </div>
          <div class="single_blog_content">
            <?php the_content(); ?>
          </div>
          <h2 class="single_blog_content_2">見出し2見出し2見出し2見出し2</h2>
          <div class="single_blog_img">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
            <?php else : ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
            <?php endif; ?>
          </div>
          <h3 class="single_blog_content_3">見出し3見出し3見出し3見出し3</h3>
          <div class="single_blog_content_3_text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <h4 class="single_blog_content_4">見出し4見出し4見出し4見出し4</h4>
          <div class="single_blog_content_4_text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </div>
          <ol class="single_blog_content_4_list">
            <li>リスト1</li>
            <li>リスト1</li>
            <li>リスト1</li>
          </ol>
        </div>
        <!-- pagination -->
        <ul class="single_pagination">
          <li class="pagination_prev"><?php previous_post_link('%link', '前の記事'); ?></li>
          <li class="pagination_archive"><a href="<?php echo esc_url(home_url('/all-news')); ?>">記事一覧</a></li>
          <li class="pagination_next"><?php next_post_link('%link', '次の記事'); ?></li>
        </ul>
      </main>

      <!-- サイドバー -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>

<!-- footer -->
<?php get_footer(); ?>
