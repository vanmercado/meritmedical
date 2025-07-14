<?php get_header(); ?>
<div class="sub_mv">
  <div class="container">
    <h1 class="sub_mv_title">お問い合わせ</h1>
  </div>
</div>

<div class="container">
  <div class="sub_breadcrumb">
    <?php custom_breadcrumb(); ?>
  </div>
</div>

<!-- html -->
<div class="container">
  <div class="contact_pages_nav">
    <button><a href="<?php echo home_url(); ?>/contact-us">お問い合わせ</a></button>
    <button><a href="<?php echo home_url(); ?>/contact-us-2">OEMお問い合わせ</a></button>
    <button><a href="<?php echo home_url();?>/contact-us-3">リードマネジメント製品<br>に関するお問い合わせ</a></button>
  </div>
</div>

<div class="container">
  <div class="contact_table_title">
    <h2>お問い合わせの前に</h2>
  </div>
  <p style="font-size: 16px;">お客様からのお問い合わせに対してメールで回答いたします。<br>必要な項目をご記入の上、送信ボタンを押してください。<br>お問い合わせフォームに記載いただいた個人情報取扱については、<a href="<?php echo home_url(); ?>/about-merit/privacy-policy">個人情報保護方針</a>をご覧ください。</p>
  <p style="font-size: 16px;">尚、緊急を要するご用件はお電話で対応いたしますので、下記にご連絡ください。<br>※営業時間：9:00〜17:30（土・日・祝日を除く）</p>
  <h3 style="font-size: 16px;">①代表電話 Tel.03-5989-0100<br>②製品関連のお問い合わせ：AZセンター Tel：03-5989-0201 Fax：03-5909-5402<br>③受注関連のお問い合わせ：カスタマーサービス Tel：03-5989-0200 Fax：03-5909-5851</h3>
  <table class="contact_table">
    <tr>
      <th>製品開発やビジネス連携のお問合せ</th>
      <td>
        <p>ページ下のお問い合わせフォームではなく、下記オレンジ部分をクリック頂き、メール送信をお願い致します。</p>
        <button><a href="mailto:Japan-BusinessPartner@merit.com">&gt; 製品開発やビジネス連携のお問い合わせ</a></button>
      </td>
    </tr>
    <tr>
      <th>製品関連について</th>
      <td>
        <p>『製品情報ページ』からカタログ/手順書をダウンロードいただけます。<br>それ以外のご質問は、下記『お問い合わせフォーム』よりご連絡ください。</p>
        <button><a href="<?php echo home_url(); ?>/product_item_cate">&gt; 製品情報</a></button>
        <div class="contact_table_az_center">
        </div>
      </td>
    </tr>
    <tr>
      <th>受注関連について</th>
      <td>
        <p>弊社の受注発注システムは、下記の通りです。ご質問は、下記『お問い合わせフォーム』よりご連絡ください。</p>
        <p class="contact_table_notification">15:00までのご注文を当日出荷致しますので、翌日にはお手元に届きます。<br>※一部地域ではお届け日が異なる場合があります。</p>
        <p class="contact_table_download_title">注文書ダウンロード</p>
        <ul class="contact_table_download_files">
          <li><a href="<?php echo home_url(); ?>/wmeritp/wp-content/uploads/2017/12/5e5ff7016d116c5c17bd0985bf336dea.pdf">&gt; 注文書フォーマット（PDF）</a></li>
          <li><a href="<?php echo home_url(); ?>/wmeritp/wp-content/uploads/2017/12/5e5ff7016d116c5c17bd0985bf336dea.xlsx">&gt; 注文書フォーマット（エクセル）</a></li>
          <li><a href="<?php echo home_url(); ?>/wmeritp/wp-content/uploads/2022/03/16784e4d5ae455241ee3e4784d94cf49.pdf">&gt; ヘパスフィア専用注文書（PDF）</a></li>
          <li><a href="<?php echo home_url(); ?>/wmeritp/wp-content/uploads/2022/03/80d4e98e8d9cb8747d87617900fecc44.pdf">&gt; エンボスフィア専用注文書（PDF）</a></li>
          <li><a href="<?php echo home_url(); ?>/wmeritp/wp-content/uploads/2022/03/3039cd3821341acb7ca32f1032fa8105.xlsx">&gt; エンボスフィア&amp;ヘパスフィア専用注文書（エクセル）</a></li>
        </ul>
      </td>
    </tr>
  </table>

</div>
<!-- /html -->

<!-- html -->
<div class="form_table_bg_container">
  <div class="container">
    <div class="form_table_title">
      <h2>お問い合わせ</h2>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="21563" title="お問い合わせ"]'); ?>
  </div>
</div>
<!-- /html -->
<?php get_footer(); ?>