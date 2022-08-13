<?php get_header(); ?>

<!-- head -->
<section class="lower_head">
  <div class="lower_head_container">
    <picture>
      <source media="(max-width:768px)" srcset="<?php echo esc_url(get_theme_file_uri('/images/contact/page-contact_top-sp.jpg')); ?>" />
      <img src="<?php echo esc_url(get_theme_file_uri('/images/contact/page-contact_top.jpg')); ?>" alt="mv" />
    </picture>
    <div class="lower_title_box">
      <h2 class="lower_title">お問い合わせ</h2>
      <p class="lower_sub_title">CONTACT</p>
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
<section class="contact">
  <div class="contact_inner">
    <div class="contact_container">
      <div class="contact_head">
        お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br />以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br />また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br /><span>※3営業日以内に当院からの返信がない場合には、お電話(TEL
          03-1234-5678)にてお問い合わせ下さい。</span>
      </div>
      <h2 class="section_title sec_contact">
        お問い合わせ<br class="u-mobile" />フォーム
      </h2>
      <div class="contact_form">
        <?php echo do_shortcode('[contact-form-7 id="159" title="contact"]'); ?>

        <div class="recaptcha">
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
