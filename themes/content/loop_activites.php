<?php $args_blog = array(
      'post_type' => 'post',
      'posts_per_page' => 5
);
$req_blog = new WP_Query($args_blog); ?>

<?php if ($req_blog->have_posts()): ?>

<section class="grey">
   <div class="row justify-content-between mt-2">
            <?php while ($req_blog->have_posts()) : $req_blog->the_post(); ?>
            <div class="col-sm-10-g-1 col-md-6 col-lg-4 mb-4 overflow-hidden">
               <div class="card img-fluid" style="max-width: 30rem; height: 100%">
                     <?php  $image_id = get_field( 'img' );
                        if( $image_id ) {	
                           echo wp_get_attachment_image( $image_id, 'smartph' );
                        }; ?>
                  <div class="card-body">
                        <h6><a class='card-title'href="<?php the_permalink(); ?>"><?php the_field('nom'); ?></a></h6>
                        <p class="card-text mx-3 my-3 entete"><span id='or'>  <?php the_field('activites'); ?></span></p>
                        <p class="card-text mx-3 my-3"><?php the_field('date'); ?></p>
                        <p class="card-text"><?php echo get_post_meta(get_the_ID(), 'info', true); ?></p>
                  </div>
                     </br>
                                 <div class="row">
                                    <div class="col-6"></div>
                                    <div class="col-6 mt-4">
                                       <a href="#" class="btn1 btn-discover1">DECOUVREZ</a>
                                    </div>
                                 </div>
                  
                  </div><!--/card body-->
            </div><!--col-->
            <?php endwhile; ?>
   </div>
            <?php else : ?>
            <h1>Pas d'articles</h1>
         <?php endif; ?>

      </section>