<?php get_header(); ?>
    
<div id="main">
  <div class="container">

    <section class="content-area">
      <h1 class="content-title">Recent Blog Posts</h1>
      <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
      
      <?php while (have_posts()) : the_post(); ?>
        <div class="post-excerpt">
          <h2 class="excerpt-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <div class="excerpt-post-date"><?php the_time('F j, Y'); ?></div>
          <div class="excerpt-body"><?php the_excerpt(); ?></div>
        </div>

      <?php endwhile; ?>
      <div class="navigation">
        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
      </div><!-- /.navigation -->
      
      <?php wp_reset_query(); ?>
    </section>
    
    <?php get_sidebar('main'); ?>
    
    <div class="clearfix"></div>

  </div><!-- /.container -->
</div><!-- /#main -->

<?php get_footer(); ?>
