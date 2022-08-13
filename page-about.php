<?php get_header(); ?>

<!-- head -->
<section class="lower_head">
      <div class="lower_head_container">
        <picture>
          <source
            media="(max-width:768px)"
            srcset="<?php echo esc_url(get_theme_file_uri('/images/about/page-about_top-sp.jpg')); ?>"
          />
          <img src="<?php echo esc_url(get_theme_file_uri('/images/about/lower_about_top.png')); ?>" alt="mv" />
        </picture>
        <div class="lower_title_box">
          <h2 class="lower_title">当院について</h2>
          <p class="lower_sub_title">ABOUT OUR CLINIC</p>
        </div>
      </div>
      <!-- breadcrumb -->
  <?php if (function_exists('bcn_display')) : ?>
    <div class="breadcrumbs">
      <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
      ?>
    </div>
  <?php endif; ?>
      <a href="web.html" class="reserve_button">
        <img src="<?php echo esc_url(get_theme_file_uri('images/common/icon-pc.svg')); ?>" alt="icon" />
        <span>WEB予約はこちら</span>
      </a>
    </section>

    <!-- about -->
    <section class="policy" id="policy">
      <h2 class="section_title sec_policy">ポリシーと特徴</h2>
      <div class="about_bg lower_about_bg">
        <div class="about_inner">
          <div class="about_container lower_about_container">
            <div class="about_img lower_about_img">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/about//feature_1.png')); ?>" alt="image" />
            </div>
            <div class="about_content lower_about_content">
              <span>POLICY</span>
              <h2 class="about_heading">
                コミュニケーションから始まる最適な医療提供
              </h2>
              <p class="about_text">
                当院ではまず患者様から詳しくお話を伺います。<br />難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。<br /><br />「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- feature -->
    <section class="feature">
      <div class="feature_inner">
        <div class="feature_container">
          <div class="about_container lower_about_container feature_container">
            <div class="about_img feature_img lower_about_img">
              <img src="<?php echo esc_url(get_theme_file_uri('/images/about//feature_2.png')); ?>" alt="image" />
            </div>
            <div class="about_content feature_content">
              <span>FEATURE</span>
              <h2 class="about_heading">
                「医療技術の追求」と<br />「通いやすさ」
              </h2>
              <p class="about_text">
                歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。
                <br
                  class="u-mobile"
                />また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。<br /><br />朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 院内の様子 -->
    <section class="gallery" id="gallery">
      <div class="gallery_inner">
        <h2 class="section_title sec_gallery">院内の様子</h2>
        <div class="gallery_container">
          <div class="gallery_card">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/about//about_1.png')); ?>" alt="image1" />
          </div>
          <div class="gallery_card">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/about//about_2.png')); ?>" alt="image2" />
          </div>
          <div class="gallery_card">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/about//about_3.png')); ?>" alt="image3" />
          </div>
          <div class="gallery_card">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/about//about_4.png')); ?>" alt="image4" />
          </div>
          <div class="gallery_card">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/about//about_5.png')); ?>" alt="image5" />
          </div>
          <div class="gallery_card">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/about//about_6.png')); ?>" alt="image6" />
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
