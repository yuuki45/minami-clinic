<?php get_header(); ?>
<!-- MainVisual -->
<section class="main_visual">
  <div class="main_visual_container">
    <div class="slider">
      <div>
        <picture>
          <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/top-01-sp@2x.png')); ?>" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/common/top-01.png')); ?>" alt="mv" />
        </picture>
      </div>
      <div>
        <picture>
          <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/top-02-sp@2x.png')); ?>" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/common/top-02.png')); ?>" alt="mv" />
        </picture>
      </div>
      <div>
        <picture>
          <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/top-03-sp@2x.png')); ?>" />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/common/top-03.png')); ?>" alt="mv" />
        </picture>
      </div>
    </div>
    <a href="<?php echo esc_url(home_url('/web')); ?>" class="reserve_button">
      <img src="<?php echo esc_url(get_theme_file_uri('images/common/icon-pc.svg')); ?>" alt="icon" />
      <span>WEB予約はこちら</span>
    </a>
    <h2 class="main_visual_top_text">
      <picture>
        <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/top-text-sp.svg')); ?>" />
        <img src="<?php echo esc_url(get_theme_file_uri('/images/common/top-text.svg')); ?>" alt="top_text" />
      </picture>
    </h2>
  </div>
</section>

<!-- NEWS -->
<section class="news">
  <div class="news_inner">
    <div class="news_container">
      <div class="news_head_wrap">
        <h2 class="news_head">お知らせ</h2>
        <a href="<?php echo esc_url(home_url('/all-news')); ?>" class="news_link">過去のお知らせはこちら</a>
      </div>
      <?php
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 1
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="news_box">
            <div class="news_date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time></div>
            <div class="news_title"><?php the_title(); ?></div>
            <div class="news_more"></div>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    </div>
    <div class="time_table">
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common/medical-time-pc@2x.png')); ?>" alt="timetable" />
    </div>
  </div>
</section>

<!-- about -->
<section class="about">
  <div class="about_bg">
    <div class="about_inner">
      <div class="about_container">
        <div class="about_img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/common/concept-img1.png')); ?>" alt="image" />
        </div>
        <div class="about_content">
          <span>CONCEPT</span>
          <h2 class="about_heading">
            健康的で素敵な笑顔あふれる<br class="u-desktop1236 u-mobile" />街づくりを目指して
          </h2>
          <p class="about_text">
            私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br />お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
          </p>
          <div class="about_button">
            <a href="<?php echo esc_url(home_url('/about')); ?>">当院について</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- recommend -->
<section class="recommend">
  <div class="recommend_inner">
    <div class="recommend_container">
      <h2 class="section_title">当院の3つのおすすめ</h2>
      <div class="recommend_contents">
        <div class="recommend_box">
          <div class="recommend_number">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/recommend-1.svg')); ?>" alt="icon" />
          </div>
          <div class="recommend_img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/recommend-img-01.svg')); ?>" alt="icon" />
          </div>
          <div class="recommend_text">
            歯の治療において、小さな違和感は大きなストレスにつながります。<br />私たちは常に快適な歯科医療技術の研究を行っております。
          </div>
        </div>
        <div class="recommend_box">
          <div class="recommend_number">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/recommend-2.svg')); ?>" alt="icon" />
          </div>
          <div class="recommend_img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/recommend-img-02.svg')); ?>" alt="icon" />
          </div>
          <div class="recommend_text">
            「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
          </div>
        </div>
        <div class="recommend_box">
          <div class="recommend_number">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/recommend-3.svg')); ?>" alt="icon" />
          </div>
          <div class="recommend_img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/common/recommend-img-03.svg')); ?>" alt="icon" />
          </div>
          <div class="recommend_text">
            朝から夜までお仕事をされている方のために、診療時間を見直しました。<br /><span>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- medical -->
<section class="medical">
  <div class="medical_bg_top">
    <picture>
      <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/bg-top-sp.svg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common/bg-top.svg')); ?>" alt="bg-top" />
    </picture>
  </div>
  <div class="medical_inner">
    <div class="medical_container">
      <h2 class="section_title sec_medical">診療案内</h2>
      <div class="medical_contents">
        <div class="medical_wrap">
          <a href="<?php echo esc_url(home_url('/medical#medical_general')); ?>" class="medical_box medical_img_01">
            <div class="medical_line">
              <div class="medical_center medical_center_01">
                <div class="medical_title">一般診療</div>
                <div class="medical_text">虫歯・入れ歯・小児歯科</div>
              </div>
            </div>
          </a>
        </div>
        <div class="medical_wrap">
          <a href="<?php echo esc_url(home_url('/medical#medical_special')); ?>" class="medical_box medical_img_02">
            <div class="medical_line">
              <div class="medical_center medical_center_02">
                <div class="medical_title">特殊診療</div>
                <div class="medical_text">
                  インプラント・ホワイトニング 予防歯科・口腔外科・審美歯科
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="medical_message">
        当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br />痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br /><span>※特殊性の高い矯正治療などは保険の適応外となります。
          これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
      </div>
    </div>
  </div>
  <div class="medical_bg_bottom">
    <picture>
      <source media="(max-width:600px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/common/bottom-bg.svg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/common/bg-bottom.svg')); ?>" alt="top_text" />
    </picture>
  </div>
</section>

<!-- blog -->
<section class="blog">
  <div class="blog_inner">
    <div class="blog_container">
      <h2 class="section_title sec_blog">スタッフブログ</h2>
      <div class="blog_box">
        <?php
        $args = [
          'post_type' => 'blog',
          'posts_per_page' => 6,
        ];
        $my_query = new WP_Query($args);
        ?>
        <?php if ($my_query->have_posts()) : ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <article class="blog_card">
              <?php
              $days = 3;
              $today = date_i18n('U');
              $entry_day = get_the_time('U');
              $keika = date('U', ($today - $entry_day)) / 86400;
              if ($days > $keika) :
                echo '<span class="blog_card_new">NEW</span>';
              endif;
              ?>
              <a href="<?php the_permalink(); ?>" class="blog_head">
                <div class="blog_img">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
                  <?php endif; ?>
                </div>
                <div class="blog_body">
                  <div class="blog_category">
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
                  <div class="blog_title">
                    <?php the_title(); ?>
                  </div>
                  <div class="blog_date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time></div>
                </div>
              </a>
            </article>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

      </div>
      <div class="blog_button">
        <a href="<?php echo esc_url(home_url('/blog')); ?>"> スタッフブログ一覧はこちら </a>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
