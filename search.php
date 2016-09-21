<?php get_header(); ?>

<?php $search_count = 0; ?>
<?php $search = new WP_Query("s=$s & showposts=-1"); ?>
     <?php if($search->have_posts()) : ?>
     <h4>
       <?php
       $mySearch = new WP_Query("s=$s & showposts=-1");
       $num = $mySearch->post_count;
       echo $num . ' ';
      ?>
      <?php printf( __( 'leitarniðurstöður fyrir: %s', 'shape' ), '<span><i>' . get_search_query() . '</i></span>' ); ?>
        </h4>
        <ul>
        <?php while($search->have_posts()) : $search->the_post(); ?>
        <?php
        echo '<a href="';
        the_permalink();
        echo '"><li>';
        echo substr(get_the_excerpt(), 0,150);
        echo '<br>';
        echo '<span id="dummy-link">';
        the_permalink();
        echo '</span>';
        echo '</li></a>';
        ?>
        <?php $search_count++; ?>
        <?php endwhile; else: ?>
        <?php echo '<h4>Leitin að&nbsp;<i>' . get_search_query() . '</i>&nbsp;skilaði engu.</h4>'; ?>
            <p>Vinsamlegast athugaðu hvort þú hafir slegið rétt inn. Einnig getur þú prófað að leita eftir öðrum leitarskilyrðum.</p>
        <?php endif; ?>
<?php get_footer(); ?>
