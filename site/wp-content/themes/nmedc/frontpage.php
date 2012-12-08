<?php
/*
Template Name: Front page
*/
?>
<?php get_header(); ?>
    
<div id="main">
  <div class="container">

    <section class="content-area">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </section>
    
    
    
    <?php get_sidebar('main'); ?>
    
    <div class="home-teasers">
      <div class="home-teaser">
        <h5 class="green-bg">Advocacy & Support</h5>
        <p>Starting point for new and existing businesses who need guidance and support.</p>
        <a href="/business-advocacy/" class="read-more">Read More</a>
      </div>
    
      <div class="home-teaser">
        <h5 class="green-bg">Promotion of the Region</h5>
        <p>Creating awareness of New Milford's vibrant economic and cultural community.</p>
        <a href="/important-resources/" class="read-more">Read More</a>
      </div>
    
      <div class="home-teaser">
        <h5 class="green-bg">Financial Assistance</h5>
        <p>Development, underwriting, and disbursement of financial assistance to local businesses.</p>
        <a href="/financial-assistance/" class="read-more">Read More</a>
      </div>
    
      <div class="home-teaser">
        <h5 class="green-bg">Why New Milford?</h5>
        <p>Learn about why you should choose New Milford as a place to build your business.</p>
        <a href="/why-new-milford/" class="read-more">Read More</a>
      </div>
    </div>
    
    <div class="ad-space">
      <?php dynamic_sidebar ('ad-space'); ?>
    </div>
    
    
    <div class="clearfix"></div>

  </div><!-- /.container -->
</div><!-- /#main -->

<?php get_footer(); ?>