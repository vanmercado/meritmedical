<?php get_header(); ?>

  <section class="common__header">
    <div class="common__ttlCont">
      <h2 class="common__ttl">よくあるご質問</h2>
    </div>
  </section>

  <div class="container">
        <div class="sub_breadcrumb">
          <?php custom_breadcrumb(); ?>
        </div>
  </div>

  <section class="careerSec__faq u-faqPage">
    <div class="careerSec__faqCont">
      <div class="careerSec__faqWrap">
        <ul class="careerSec__faqList">
          <?php if( have_rows('accordion') ): ?>
            <?php while( have_rows('accordion') ): the_row();
              $question = get_sub_field('question');
              $answer = get_sub_field('answer');
            ?>
              <li class="careerSec__faqItem">
                <button class="careerSec__faqQstn"><?php echo esc_html($question); ?></button>
                <p class="careerSec__faqAns"><?php echo wp_kses_post($answer); ?></p>
              </li>
            <?php endwhile; ?>
          <?php else: ?>
            <li class="careerSec__faqItem">
              <p class="careerSec__faqAns">現在、よくある質問がありません。</p>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
