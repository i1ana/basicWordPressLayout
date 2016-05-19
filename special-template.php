<?php

/*Template Name: Special Layout */

/*Template selector seems to be missing*/

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

  <article class="post page">
    <h2><?php the_title(); ?></h2>

    <div class="info-box">
        <h4>Disclaimer Title</h4>
        <p> Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
    </div><!--/info-box-->

    <?php the_content(); ?>
  </article>

  <?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;

get_footer();

 ?>
