<?php get_header(); ?>

<body class="main-layout">
      <!-- loader  -->
     
      <!-- end loader -->
      <!-- header -->
    
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="text-bg">
                     <h1>Power ful<br> Web Hosting</h1> 
                     <h1>
                     
                     <?php $slider_select = get_option_tree( 'daynamicdata', '', 'true' );  ?>

                     </h1>
                     <span>Landing Page 2019</span>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                     <a href="#">Get Started</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="text-img">
                     <figure><img src="<?php echo get_template_directory_uri().'/assets/images/img.png' ;?>" alt=""  class="img-fluid radius-image"  /></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- Hosting -->
      <div id="" class="hosting">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What’s New In Web Hosting</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="web_hosting">
                     <figure><img  src="<?php echo get_template_directory_uri().'/assets/images/web.jpg ' ;?>" alt=""  class="img-fluid radius-image" /></figure>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                     <a href="#">Read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Hosting -->
      <!-- Services  -->
    <!--  <div id="service" class="Services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Best Services</h2>
                     <p>Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad <br>
                        teimpor sittem elit inuning ut sed.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/service1.png';?>" alt=""  class="img-fluid radius-image" /></i>
                     <h3> Shared Hosting</h3>
                     <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/service2.png';?>" alt=""  class="img-fluid radius-image"  /></i>
                     <h3>Dedicated Hosting</h3>
                     <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/service3.png';?>" alt=""  class="img-fluid radius-image" /></i>
                     <h3>Domain Registration</h3>
                     <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/service4.png';?>" alt="" class="img-fluid radius-image"  /></i>
                     <h3>VPS Hosting</h3>
                     <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/service5.png';?>" alt="" class="img-fluid radius-image" /></i>
                     <h3>Cloud Hosting</h3>
                     <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/service6.png';?>" alt="" class="img-fluid radius-image" /></i>
                     <h3>Reseller Hosting</h3>
                     <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                  </div>
               </div>
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
       end Servicess -->

       <?php
       query_posts(array(
   'post_type' => 'service','order' => 'ASC','posts_per_page'=>'6'
   
));?>
<div id="service" class="Services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Best Services</h2>
                     <p>Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad <br>
                        teimpor sittem elit inuning ut sed.
                     </p>
                  </div>
               </div>
            </div>

            <div class="row">
<?php
while (have_posts()) : the_post(); ?>
         
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
<div class="Services-box">

<p><?php the_post_thumbnail();?></p>
<h2><h3 href="<?php echo the_permalink() ?>" target="_blank"><?php the_title(); ?></h3></h2>
<p><?php the_excerpt(); ?></p>
</div>
</div>

<?php endwhile;?>
</div> 
</div>
</div> 







      <!-- why -->
      <div id="why" class="why">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Why you should choose </h2>
                     <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div id="box_ho" class="why-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/why1.png';?>" alt="" class="img-fluid radius-image"/></i>
                     <h3>Powerful Features</h3>
                     <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still </p>
                  </div>
                  <a class="read_more bg" href="#">Read More</a>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="why-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/why2.png';?>" alt="" class="img-fluid radius-image" /></i>
                     <h3>Totaly Optimised</h3>
                     <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still </p>
                  </div>
                  <a class="read_more bg" href="#">Read More</a>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="why-box">
                     <i><img src="<?php echo get_template_directory_uri().'/assets/images/why3.png';?>" alt="" class="img-fluid radius-image" /></i>
                     <h3>Worldwide Support</h3>
                     <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still </p>
                  </div>
                  <a class="read_more bg" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div> 


      <!-- Out Custom Post Fetch  --> 

      <?php

query_posts(array(
   'post_type' => 'post','order' => 'DESC','posts_per_page'=>'3'
   
));



?>

 <div id="why" class="why">
 <div class="container">
      <div class="row"> 

      <?php
while (have_posts()) : the_post(); ?>
         
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

               <div id="box_ho" class="why-box">
<h2><h3 href="<?php echo the_permalink() ?>" target="_blank"><?php the_title(); ?></h3></h2>
<p><?php the_excerpt(); ?></p>
<a class="read_more bg" href="#">Read More</a>
</div>




</div> 


<?php endwhile;?>
</div> 
</div>
</div>
     



      <!-- contact 
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3 ">
                  <form class="main_form">
                     <div class="row">
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Name" type="text" name="Name">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Email" type="text" name=" Email">
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="Phone" type="text" name="Phone">
                        </div>
                        <div class="col-sm-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>-->




      <?php get_footer(); ?>

