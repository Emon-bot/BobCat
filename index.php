
<?php get_header(); ?>


  <section id="body_area">
    <div class="container">
      <div class="row">

        <div class="col-md-9">
          <?php get_template_part('Template_part/blog_setup'); ?>
         </div>

        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>

 </div>

        <div id="pagination">
              <?php if('bobcat_pagination') {bobcat_pagination(); } else{ ?>
              <?php next_post_link(); ?>
              <?php previous_post_link(); ?>
            <?php } ?> 
            </div> 

 

    </div>
  </section>

  <?php get_footer(); ?>


  