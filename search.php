<?php get_header(); ?>

<div class="search-results-area">

  <div class="search-results-list">
    <?php $search_count = 0; ?>
    <?php $search = new WP_Query("s=$s & showposts=-1"); ?>
    <?php if($search->have_posts()) : ?>
    <h2>
       <?php
       $mySearch = new WP_Query("s=$s & showposts=-1");
       $num = $mySearch->post_count;
       echo $num . ' ';
      ?>
      <?php printf( __( 'leitarniðurstöður fyrir: %s', 'shape' ), '<span><i>' . get_search_query() . '</i></span>' ); ?>
    </h2>
      <ul class="search-results-flex-container">
        <!-- <?php include('swimmer.php'); ?> -->
      <?php while($search->have_posts()) : $search->the_post(); ?>
      <?php

        echo '<li class="search-results-flex-item lighter-box-shadow">';
          echo '<a href="';
            the_permalink();
          echo '">';
          echo '<div>';
            echo '<h1 class="latest-post-title">';
              echo get_the_title();
            echo '</h1>';
            echo '<div class="latest-post-excerpt">';
            $excerpt = wp_trim_words( get_field('field_57f409fefd4fc' ), $num_words = 40, $more = ' [...]' );
            echo '<p>' . $excerpt . '</p>';
              //echo the_excerpt();
            echo '</div>';
            echo '<i class="latest-post-date">';
              echo get_the_date('d/m/Y');
            echo '</i>';
          echo '</div>';
        // echo substr(get_the_excerpt(), 0,150);
        // echo '<br>';
        // echo '<span id="dummy-link">';
        // the_permalink();
        // echo '</span>';
        echo '</a></li>';

      ?>
      <?php $search_count++; ?>
      <?php endwhile; else: ?>

          <?php echo '<h2>Leitin að&nbsp;<i>' . get_search_query() . '</i>&nbsp;skilaði engu.</h2>'; ?>
            <p>Vinsamlegast athugaðu hvort þú hafir slegið rétt inn. Einnig getur þú prófað að leita eftir öðrum leitarskilyrðum.</p>

      <?php endif; ?>
    </ul>
  </div>
</div>
<?php get_footer(); ?>
