


<footer>
    <h2> What we do </h2>
    <p> Here is a list of some of our events </p>
    <div class="events-con">
        <?php 
         $events =  new WP_Query([
             'posts_per_page' => -1,
             'post_type' => 'event'
         ]);
         if ( $events->have_posts() ) {
         while($events->have_posts()) :
             $events->the_post();  ?>
            <div class="events">
                <h3><?php the_title() ?> </h3>
                <p><?php the_field('event_location') ?> </p>
                <p class="date"><?php the_field('event_date');?></p>
                <span><a href="<?php the_permalink() ?> ">Read more</a></span>
            </div>
         <?php 
         endwhile;
        }
         ?>
    </div>
    <span>More about what we do </span>    
</footer>
</body>
</html>

<style>
    
</style>

<?php 
 wp_footer(); ?>
