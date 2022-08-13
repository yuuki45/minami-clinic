<?php get_header(); ?>

<!-- head -->
<section class="lower_head">
  <div class="lower_head_container">
    <picture>
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/contact/page-contact_top-sp.jpg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/contact/page-contact_top.jpg')); ?>" alt="mv" />
    </picture>
    <div class="lower_title_box">
      <h2 class="lower_title">WEB予約</h2>
      <p class="lower_sub_title">RESERVE</p>
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

<!-- お問い合わせ -->
<section class="contact contact_web">
  <div class="contact_inner">
    <div class="contact_container">
      <div class="web_contact_content_wrap">
        <h2 class="web_contact_title">お電話でのご予約/ご相談</h2>
        <div class="header_nav_tel web_contact_tel">03-1234-5678</div>
        <span>(年中無休 AM9:00〜PM22:00)</span>
        <div class="contact_head web_contact_head">
          お急ぎの方は電話での連絡がスムーズです。<br />混雑状況によっては当日受診をご利用いただけない場合がございます。<br />あらかじめご了承ください。
        </div>
      </div>
      <div class="web_contact_content_wrap">
        <h2 class="web_contact_title">メールでのご予約/ご相談</h2>
        <div class="contact_head web_contact_head">
          【ご予約に関しての注意点】<br />メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br />※24時間以内に当院からの返信がない場合には、お電話(TEL
          03-1234-5678)にてお問い合わせ下さい。
        </div>
      </div>
      <h2 class="section_title sec_contact_web">予約フォーム</h2>
      <div class="contact_form">
        <?php echo do_shortcode('[contact-form-7 id="164" title="contact-web"]'); ?>
        <div class="recaptcha_web">
          This site is protected by reCAPTCHA and the Google<br>
          <a href="https://policies.google.com/privacy">Privacy Policy</a> and<br>
          <a href="https://policies.google.com/terms">Terms of Service</a> apply.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<?php get_footer(); ?>
