<?php
/*
 Template Name: Cast Gallery
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>


<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <?php endwhile; else : ?>

    <article id="post-not-found" class="hentry cf">
        <header class="article-header">
            <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
        </header>
        <section class="entry-content">
            <p>
                <?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
            </p>
        </section>
        
        
        <footer class="article-footer">
            <p>
                <?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?>
            </p>
        </footer>
    </article>

    <?php endif; ?>

    </main>

</div>

</div>

 <section class="Collage effect-parent effect-duration-5">
      <div class="Image_Wrapper effect-duration-5" data-caption="The Cast & Crew">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_1.jpg" width="600px" height="400px" alt ="group_photo"/>
            </a>
        </div>
       <div class="Image_Wrapper effect-duration-5" data-caption="Pablo telling it how it is.">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_2.jpg" width="790px" height="400px" alt="pablo_storytelling"/>
            </a>
        </div>
     <div class="Image_Wrapper effect-duration-5" data-caption="Moesha - The Home Care Nurse">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_3.jpg" width="267px" height="400px" alt="moesha"/>
            </a>
        </div>
 <div class="Image_Wrapper effect-duration-5" data-caption="Deep in thought">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_4.jpg" width="699px" height="400px" alt="group_on_counter"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Barbara, the meter maid, giving the ticket guy a hard time.">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_25.jpg" width="600px" height="400px" alt="barbara_ticket_guy"/>
            </a>
        </div>
 <div class="Image_Wrapper effect-duration-5" data-caption="Pepe - The Scammer">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_5.jpg" width="413px" height="400px" alt="pepe"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Carmen - The Waitress">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_11.jpg" width="295px" height="400px" alt="carmen"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Bradley, the lawyer, trying to get something out of Carmen...Moesha's not buying it.">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_6.jpg" width="563px" height="400px" alt="bradley_and_carmen"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Pablo being Pablo">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_7.jpg" width="562px" height="400px" alt="bradley_and_pablo"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Pepe with his best friend">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_8.jpg" width="347px" height="400px" alt="pepe_smoking_a_cigar"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Don't mess with Pablo">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_9.jpg" width="642px" height="400px" alt="pablo_pointing_umbrella"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Carlos - The Handyman">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_24.jpg" width="279px" height="400px" alt="carlos"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Bradley getting on Moesha's bad side">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_10.jpg" width="594px" height="400px" alt="moesha_and_bradley"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Story Time">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_12.jpg" width="627px" height="400px" alt="pablo_pointing"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Moesha's first ever smile">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_13.jpg" width="337px" height="400px" alt="moesha_smiling"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Pablo giving Bradley a piece of his mind">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_14.jpg" width="512px" height="400px" alt="pablo_bradly_talking"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Bradley digging his grave">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_15.jpg" width="600px" height="400px" alt="carmen_stare_bradley"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Bradley gazing (probably at Carmen)">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_16.jpg" width="267px" height="400px" alt="bradley_gazing"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Always the center of attention">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_18.jpg" width="588px" height="400px" alt="pablo_attention"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Pablo & Carmen teaming up against Bradley">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_19.jpg" width="679px" height="400px" alt="pablo_carmen_resisting"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Carmen taking an order from Barbara, the meter maid">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_20.jpg" width="275px" height="400px" alt="carmen_barbara_order"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="The Entertainer">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_21.jpg" width="773px" height="400px" alt="pablo_storytelling"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="Pepe">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_22.jpg" width="279px" height="400px" alt="pepe_cuban_flag"/>
            </a>
        </div>
<div class="Image_Wrapper effect-duration-5" data-caption="The cast & crew being silly">
            <a><img src="http://calle8.com:8888/wp-content/uploads/2015/04/collage_23.jpg" width="600px" height="400px" alt="cast_crew_funny"/>
            </a>
        </div>
</div>
    </section>


<?php get_footer(); ?>