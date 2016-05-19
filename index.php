<?php

get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

      <article class="post">
        <h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>

        <p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?> "><?php the_author(); ?></a> | Posted In:
          <?php
          $categories = get_the_category();
          $separator = ", ";
          $output = ' ';

          if($categories){

            foreach ($categories as $category){
              //.= add on to variable

              $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $seperator;
            }
            echo trim($output, $separator);
          }

          ?>

        </p>

        <?php the_content(); ?>
      </article>

    <?php endwhile;

    else :
      echo '<p>No content found</p>';

    endif;

  get_footer();

?>
