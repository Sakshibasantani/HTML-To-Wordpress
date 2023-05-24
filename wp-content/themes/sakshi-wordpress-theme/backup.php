 <div id="post" class="post">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  

<?php

query_posts(array(
   'post_type' => 'post'
)); ?>



               
<?php
while (have_posts()) : the_post(); ?>
 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div id="box_hi" class="why-box1">
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p><?php the_excerpt(); ?></p>
<?php endwhile;?>
</div>
</div>

</div>
</div>

</div>
</div>