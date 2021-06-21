<?php get_header(); ?>
<div class="banner-img container-fluid">
    <img class="wide-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/womens-wide-banner.jpg" alt="">
</div>

<div class="about container">
  <div class="row">
  
    <div class="para col-md-6">
        <h1 class="headings px-10">About us</h1>
        <p>​Founded in 1928, Pascoe Vale Central Cricket Club (PVCCC) has a long and proud history of more than 90 years.​</p>
        <p>From our humble beginnings, we are now the largest and most successful club in the North 
            West Metropolitan Cricket Association (NWMCA), with seven senior sides, four junior sides and one women’s team.</p>
        <p>We have always been a family club with a strong social atmosphere – but that doesn’t stop us from being competitive on the field.</p>

        <img class="page-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/Womens2-cropped.jpg" alt="">
      <h1 class="headings">News</h1>     
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
			endwhile; endif;
			?>
    </div>
     
    
  	
  
  </div>
</div>
<div class="teams container">
    <h1 class="headings px-10">Teams</h1>
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm">
          <img class="team-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/example.png" alt="Snow">
          <figcaption>Women's'</figcaption>
        </div>
        <div class="col-sm">
          <img  class="team-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/example.png" alt="Forest" >
          <figcaption>Junior's</figcaption>
        </div>
        <div class="col-sm">
          <img class="team-img" src="<?php echo get_bloginfo('template_directory'); ?>/img/example.png" alt="Mountains" >
          <figcaption>Men's</figcaption>
        </div>
        </div>
      </div> 

</div>

<?php get_footer(); ?>