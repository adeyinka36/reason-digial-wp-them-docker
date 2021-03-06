<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
</head>
<body>
 <header>
     <div class="top-header">
         <input type="text" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome" />
         <div>
             <span>Learn</span>
             <span>Donate</span>
         </div>
    </div>    
     <div class="bottom-header">
         <div class="logo-div">
            <span><i class="fas fa-fingerprint"></i></span>
            <div class="logo-title"><span>Good Things</span><span>Foundation</span></div>
         </div>
        <nav>
            <span><i class="fas fa-bars"></i></i></span>
            <ul>
                <li><a href="<?= get_home_url()?>">Home</a></li>
                <li>What we do</li>
                <li>The digital device</li>
                <li>Get involved</li>
                <li>Our network</li>
                <li><a href="<?= get_post_type_archive_link('event')?>">Events</a></li>
            </ul>   
        </nav>
     </div>
</header>
