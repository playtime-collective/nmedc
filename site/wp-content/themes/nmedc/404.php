<?php get_header(); ?>
    
<div id="main">
  <div class="container">

    <section class="content-area">
        <h1 class="content-title">404 - Not Found</h1>
        <div class="content-body">
          <p>This is not the page you are looking for.</p>
          <p><strong>Search for your interests:</strong></p>
          <?php get_search_form(); ?>
        </div>
    </section>
    
    <?php get_sidebar('main'); ?>
    
    <div class="clearfix"></div>

  </div><!-- /.container -->
</div><!-- /#main -->

<?php get_footer(); ?>