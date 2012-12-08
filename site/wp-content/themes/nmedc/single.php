<?php get_header(); ?>
    
<div id="main">
  <div class="container">

    <section class="content-area">
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="content-title"><?php the_title(); ?></h1>
        <div class="content-body"><?php the_content(); ?></div>
      <?php endwhile; ?>
    </section>
    
    <?php get_sidebar('main'); ?>
    
    <div class="clearfix"></div>

  </div><!-- /.container -->
</div><!-- /#main -->

<?php get_footer(); ?>
