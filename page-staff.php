<?php get_header(); ?>

<!-- head -->
<section class="lower_head">
  <div class="lower_head_container lower_head_container_staff">
    <picture>
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/staff/page-staff_top-sp.jpg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/staff/page-staff_top.jpg')); ?>" alt="mv" />
    </picture>
    <div class="lower_title_box">
      <h2 class="lower_title">スタッフ紹介</h2>
      <p class="lower_sub_title">STAFF</p>
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

<!-- 院長の挨拶 -->
<section class="director" id="director">
  <div class="director_inner">
    <div class="director_container">
      <h2 class="section_title sec_director">院長のあいさつ</h2>
      <div class="director_contents">
        <div class="director_contents_left">
          <h3 class="director_contents_head">
            気軽に相談できる<br />街の歯医者さんでありたい。
          </h3>
          <div class="director_contents_text">
            当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。
            <br /><br />「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
          </div>
          <div class="director_contents_name">
            みなみ歯科クリニック<br />院長&nbsp;&nbsp;&nbsp;南 俊雄
          </div>
          <div class="director_contents_bottom">
            <h4 class="director_contents_title">経歴</h4>
            <dl class="director_contents_career">
              <div class="director_contents_career_list">
                <dt>2004年</dt>
                <dd>東京医科歯科大学歯学部 卒業</dd>
              </div>
              <div class="director_contents_career_list">
                <dt>2008年</dt>
                <dd>
                  東京歯科大学歯学研究科大学院修了<br />博士(歯学)取得 卒業
                </dd>
              </div>
              <div class="director_contents_career_list">
                <dt>2012年</dt>
                <dd>みなみ歯科クリニック 開院 卒業</dd>
              </div>
            </dl>
            <h4 class="director_contents_title directory_contents_title_skill">
              資格
            </h4>
            <ul class="director_contents_skill">
              <li>歯科医師臨床研修指導歯科医</li>
              <li>博士(歯学)</li>
              <li>衛生検査技師</li>
            </ul>
          </div>
        </div>
        <div class="director_contents_right">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/staff/staff1.jpg')); ?>" alt="staff1" />
        </div>
      </div>

      <div class="director_contents_bottom_sp">
        <h4 class="director_contents_title">経歴</h4>
        <dl class="director_contents_career">
          <div class="director_contents_career_list">
            <dt>2004年</dt>
            <dd>東京医科歯科大学歯学部 卒業</dd>
          </div>
          <div class="director_contents_career_list">
            <dt>2008年</dt>
            <dd>東京歯科大学歯学研究科大学院修了<br />博士(歯学)取得</dd>
          </div>
          <div class="director_contents_career_list">
            <dt>2012年</dt>
            <dd>みなみ歯科クリニック 開院</dd>
          </div>
        </dl>
        <h4 class="director_contents_title directory_contents_title_skill">
          資格
        </h4>
        <ul class="director_contents_skill">
          <li>歯科医師臨床研修指導歯科医</li>
          <li>博士(歯学)</li>
          <li>衛生検査技師</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- スライダー -->
<section class="staff_slider">
  <div class="staff_slider_inner">
    <div class="staff_slider_container">
      <div class="slider_staff">
        <div class="slider_staff_img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/staff/staff-slider1.jpg')); ?>" alt="slide1" />
        </div>
        <div class="slider_staff_img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/staff/staff-slider1-1.jpg')); ?>" alt="slide2" />
        </div>
        <div class="slider_staff_img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/staff/staff-slider1-2.jpg')); ?>" alt="slide3" />
        </div>
        <div class="slider_staff_img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/staff/staff-slider1-3.jpg')); ?>" alt="slide4" />
        </div>
        <div class="slider_staff_img">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/staff/staff-slider1-4.jpg')); ?>" alt="slide5" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- スタッフ紹介 -->
<section class="staff_introduction" id="staff_introduction">
  <div class="staff_introduction_inner">
    <div class="staff_introduction_container">
      <h2 class="section_title sec_staff">スタッフ紹介</h2>
      <div class="staff_introduction_contents">
        <h3 class="staff_introduction_job">歯科助手</h3>
        <div class="staff_introduction_box">

          <?php
          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'staff_list'
          );
          $my_posts = get_posts($args);
          foreach ($my_posts as $post) : setup_postdata($post); ?>
            <?php if (is_object_in_term($post->ID, 'staff_category', 'dental_assistant')) : //条件 
            ?>

              <div class="staff_card">
                <div class="staff_card_img">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
                  <?php endif; ?>
                </div>
                <div class="staff_card_head">
                  <div class="staff_card_job">歯科助手</div>
                  <div class="staff_card_name"><?php the_title(); ?></div>
                </div>
                <dl class="staff_card_profile">
                  <div class="staff_card_profile_list">
                    <dt>出身地</dt>
                    <dd><?php the_field('birth_place'); ?></dd>
                  </div>
                  <div class="staff_card_profile_list">
                    <dt>趣味</dt>
                    <dd><?php the_field('hobby'); ?></dd>
                  </div>
                  <div class="staff_card_profile_list">
                    <dt>好きな食べ物</dt>
                    <dd><?php the_field('favorite_food'); ?></dd>
                  </div>
                </dl>
              </div>

            <?php endif; ?>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>

        </div>
      </div>

      <div class="staff_introduction_contents staff_introduction_contents_02">
        <h3 class="staff_introduction_job">歯科衛生士</h3>
        <div class="staff_introduction_box">

          <?php
          $args = array(
            'posts_per_page' => -1,
            'post_type' => 'staff_list'
          );
          $my_posts = get_posts($args);
          foreach ($my_posts as $post) : setup_postdata($post); ?>
            <?php if (is_object_in_term($post->ID, 'staff_category', 'dental_hygienist')) : //条件 
            ?>

              <div class="staff_card">
                <div class="staff_card_img">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="thumbnail" />
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/noimage.jpg" alt="thumbnail" />
                  <?php endif; ?>
                </div>
                <div class="staff_card_head">
                  <div class="staff_card_job">歯科衛生士</div>
                  <div class="staff_card_name"><?php the_title(); ?></div>
                </div>
                <dl class="staff_card_profile">
                  <div class="staff_card_profile_list">
                    <dt>出身地</dt>
                    <dd><?php the_field('birth_place'); ?></dd>
                  </div>
                  <div class="staff_card_profile_list">
                    <dt>趣味</dt>
                    <dd><?php the_field('hobby'); ?></dd>
                  </div>
                  <div class="staff_card_profile_list">
                    <dt>好きな食べ物</dt>
                    <dd><?php the_field('favorite_food'); ?></dd>
                  </div>
                </dl>
              </div>

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

<!-- footer -->
<?php get_footer(); ?>
