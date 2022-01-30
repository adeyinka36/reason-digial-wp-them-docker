
<?php
 get_header();
?>
<main>
    <div class="top-background">
        <?php
         while(have_posts()) :
            the_post();  ?>
                <h2><?php the_title() ?> in <?php the_field('event_location') ?></h2>
                <p><?php the_field('description');?></p>
                <span>Donate</span>
    </div>
    <div class="bottom-background">
        <div class="left">
        </div>
        <div class="right top-background">
            <h2><?= the_field('goal')?></h2>
            <p><?= the_field('description')?></p>
            <span>RSPV for this event!</span>
            <i class="fas fa-fingerprint"></i>
        </div>    
    </div>    
</main>
<section>
    <h2>Email us for enquires about this event</h2>
    <p>Lorem ipsum dolor sit,  soluta nesciunt magni velit deleniti doloribus at veniam.</p>
    <span>I am <input type="dropdown" placeholder="select &#xF078;" style="font-family:Arial, FontAwesome" /> and I want <input type="dropdwon" placeholder="select &#xF078;" style="font-family:Arial, FontAwesome" /> <button>start now</button></span>
</section>
 <?php
    endwhile;
 get_footer();
 ?>
