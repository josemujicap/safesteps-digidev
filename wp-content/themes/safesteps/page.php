<?php
/**
 * Template Name: Landing Page
 *
 * @package WordPress
 * @subpackage safe_steps
 * @since Safe Steps 1.0
 */

get_header(); ?>
        <!-- FIRST -->

        <section class="grandient-yellow">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1"> 

        <!-- NAV -->

                        <nav class="navbar">
                            <ul>
                                <li><a class="scroll" href="#how-does-it-make-you-feel" title="how does it make you feel?">
                                    <img class="manu1" src="<?php bloginfo('template_directory'); ?>/img/menu/menu1.png" alt="how does it make you feel?"></a></li>
                                <li><a class="scroll" href="#getting-help" title="getting help">
                                    <img class="manu2" src="<?php bloginfo('template_directory'); ?>/img/menu/menu2.png" alt="getting help"></a></li>
                                <li><a class="scroll" href="#fiends" title="fiends">
                                    <img class="manu3" src="<?php bloginfo('template_directory'); ?>/img/menu/menu3.png" alt="fiends"></a></li>
                                <li><a class="scroll" href="#about-us" title="about us">
                                    <img class="manu4" src="<?php bloginfo('template_directory'); ?>/img/menu/menu4.png" alt="about us"></a></li>
                            </ul>
                        </nav>

        <!-- SILDER / CAROUSEL -->

                        <div class="owl-carousel">
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head1.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head2.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head3.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head4.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head5.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head6.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head1.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head2.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head3.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head4.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head5.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head6.png" class="img-circle"></div>
                        </div> 
 
<?php 

wp_reset_query();  // Restore global post data stomped by the_post().

$posts = get_posts(array(
    'posts_per_page'    => -1,
    'post_type'         => 'page'
));

if( $posts ):  ?>
     
        
<?php  setup_postdata( $posts ) ?> 

                        <div class="row background1">
                             <div class="col-md-6 content">
                                 <h3><?php the_field('first_headline'); ?> </h3>
                                 <p> 
                                     <?php the_field('first_description'); ?>
                                 </p>
                             </div> 
                        </div>                       
                    </div> 
                </div>
            </div>
            <div class="border-yellow"></div>
        </section>

        <!-- HOW DOES IT MAKE YOU FEEL -->

        <section id="how-does-it-make-you-feel" class="background-green">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <figure>
                            <img class="title1" src="<?php bloginfo('template_directory'); ?>/img/title1.png" title="how does it make you feel" />
                            <figcaption class="text-center">
                                <p>
                                    They might use excuses like ‘it’s your fault, you shouldn’t have done that’ or ‘you know I’m under a lot of pressure from work.” <br> There is no excuse for being violent – it is simply not okay.
                                </p> 
                            </figcaption> 
                        </figure>
                    </div>
                    <div class="col-md-7 text-left content">
                        <h3><?php the_field('second_headline'); ?></h3>
                        <p><?php the_field('second_description'); ?></p>    
                        <a class="btn btn-default scroll" href="#testimonials" role="button">View testimonials</a> 
                    </div> 
                </div> 
            </div> 
                    
            <div class="arrow">   
                <a class="scroll" href="#home">
                    <img src="<?php bloginfo('template_directory'); ?>/img/arrow_red.png" />
                </a>
            </div>
        </section>   
        <div class="border-yellow"></div>

        <!-- GETTING HELP -->

        <section id="getting-help" class="background-red">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <figure>
                            <img class="title3" src="<?php bloginfo('template_directory'); ?>/img/title2.png" title="how does it make you feel" /> 
                        </figure>
                    </div>
                    <div class="col-md-7 text-left content"> 
                        <h3><?php the_field('third_headline'); ?></h3>
                        <p><?php the_field('third_description'); ?></p>  
                        <hr>
                        <h3>How can you plan to stay safe?</h3>
                        <p>  
                            • Find a safe place in the house to go when the violence is happening.<br>
                            • Plan the best way to get out of the house quickly.<br>
                            • Ask a neighbour or friend who lives nearby to go to their house in an  <br>
                              emergency. Make a plan for how to get there.<br>
                            • Make a list of people to call in case of leaving home quickly. Make sure their <br>
                              telephone numbers are written down in a safe place or in a mobile. <br>
                        </p>  
                    </div> 
                </div> 
            </div> 
                    
            <div class="arrow">   
                <a class="scroll" href="#home">
                    <img src="<?php bloginfo('template_directory'); ?>/img/arrow_white.png" />
                </a>
            </div>
        </section>
        <div class="border-green"></div> 

        <!-- FRIENDS -->

        <section id="fiends" class="background-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <div class="row">
                            <div class="col-sm-6 col-md-12">
                                <figure>
                                    <img class="title3" src="<?php bloginfo('template_directory'); ?>/img/title3.png" title="how does it make you feel" />
                                </figure>
                            </div> 
                            <div class="col-sm-6 col-md-12">
                                 <figure>
                                    <img class="img" src="<?php bloginfo('template_directory'); ?>/img/section3.jpg" title="" /> 
                                </figure> 
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-7 text-left content">
                        
                        <h3><?php the_field('fourth_first_headline'); ?></h3>
                        <p><?php the_field('fourth_first_description'); ?></p> 
                        <hr> 
                        <h3><?php the_field('fourth_second_headline'); ?></h3>
                        <p><?php the_field('fourth_second_description'); ?></p> 
                    </div> 
                </div> 
            </div> 
                    
            <div class="arrow">   
                <a class="scroll" href="#home">
                    <img src="<?php bloginfo('template_directory'); ?>/img/arrow_red.png" />
                </a>
            </div>
        </section> 
        <div class="border-red"></div>

        <!-- ABOUT US -->

        <section id="about-us" class="background-purple">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <figure>
                            <img class="title4" src="<?php bloginfo('template_directory'); ?>/img/title4.png" title="how does it make you feel" /> 
                        </figure> 
                    </div>
                    <div class="col-md-7 text-left content"> 
                        <p> 
                            
                        <h3><?php the_field('fifth_headline'); ?></h3>
                        <p><?php the_field('fifth_description'); ?></p> 
                        </p> 
                        <div class="row">
                            <div class="col-md-7">
                                <img class="img-logo" src="<?php bloginfo('template_directory'); ?>/img/logo_safesteps_blank.jpg" title="safe steps"> 
                            </div>
                            <div class="col-md-5">
                                <a class="btn btn-default" href="http://www.safesteps.org.au/" role="button">Visit website</a> 
                            </div>
                        </div>
                    </div> 
                </div> 
            </div> 
                    
            <div class="arrow">   
                <a class="scroll" href="#home">
                    <img src="<?php bloginfo('template_directory'); ?>/img/arrow_white.png" />
                </a>
            </div>
        </section> 
        <div class="border-blue"></div>
    <?php wp_reset_postdata(); ?>

<?php endif; ?>   
        <!-- TESTIMONIALS -->

        <section id="testimonials" class="background-green">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <figure>
                            <img class="title5" src="<?php bloginfo('template_directory'); ?>/img/title5.png" title="how does it make you feel" /> 
                        </figure> 
                    </div>
                    <div class="col-md-7 text-left content"> 
<?php 

wp_reset_query();  // Restore global post data stomped by the_post().

$posts = get_posts(array(
    'posts_per_page'    => -1,
    'post_type'         => 'testimonial'
));

if( $posts ): 

$flag = count($posts);

foreach( $posts as $post ): 
        
setup_postdata( $post );

$flag--;

?>
                        <div class="media">
                          <div class="media-left media-top">
                            <a href="#">
                              <img class="media-object img-circle" src="<?php the_field('image'); ?>" alt="Lauren M.">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><?php the_field('name'); ?></h4>
                            <p>
                                <?php the_field('testimonial'); ?> 
                            </p>
                          </div>
                        </div>
 <?php if($flag >= 1) echo '<hr>'; ?>   

<?php endforeach; ?>

<?php wp_reset_postdata(); ?>

<?php endif; ?> 
                    </div> 
                </div> 
            </div> 
                    
            <div class="arrow">   
                <a class="scroll" href="#home">
                    <img src="<?php bloginfo('template_directory'); ?>/img/arrow_red.png" />
                </a>
            </div>
        </section> 
        <div class="border-purple"></div>
 
        <!-- SECOND SLIDE/CAROUSEL -->

        <section id="about-us" class="grandient-yellow">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-10 col-md-offset-1 content"> 
                        <div class="owl-carousel-2">
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head1.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head2.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head3.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head4.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head5.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head6.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head1.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head2.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head3.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head4.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head5.png" class="img-circle"></div>
                            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/head6.png" class="img-circle"></div>
                        </div> 
                    </div> 
                </div> 
            </div> 
        </section> 
<?php get_footer(); ?>        
