<?php
/*
 Template Name: Cast
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
<!--<h1 class="tech-360h1">The Cast</h1>-->
<section class="bios-sect">
    <div class="bios">
        <h2 class="bio-h2">Mario Nalini - <wbr>Pepe “The Scammer”</h2>
        <img src="http://calle8.com:8888/wp-content/uploads/2015/05/MarioProfile.jpg" width="450" height="450" alt="mario" class="bio-pic" />
        <p>Currently living in Lake Worth , Florida and Arcadia California, Mario Nalini is an actor born in Brooklyn, New York who works in TV, film and stage. He also holds a professional culinary degree from the culinary academy of long island in New York. Mario's process begins with the script, then after developing the exterior and interior of the character he throws away the script &amp; lives the role giving him freedom to become lost in the moment. For Mario it is all about the work, it is about helping a story come to life. </p>
        <p>Known for his chameleon-like way of changing his appearance for the role, he is most often cast in playing a wide variety of characters from all walks of life. </p>
    </div>
 <div class="bios">
        <h2 class="bio-h2">Richard Capalbo - <wbr>Bradley, The Lawyer</h2>
        <img src="http://calle8.com:8888/wp-content/uploads/2015/05/RichardProfile.jpg" width="450" height="450" alt="mario" class="bio-pic" />
        <p>From Fort Lauderdale, Florida,  28 years old Richard Capalbo is in his final semester at FAU, pursuing his MBA. He recently opened his music lesson business in South Florida, YouPickMusic. Over the past few years, he has been training at Acting School of South Florida.  Richard is an active commercial, film, and theatrical actor. Over the past year, Richard played Larry in a play called Little Piggies and Bert in It’s a Wonderful Life, at local venues. He also participated in a few short films, such as Ruby, Tomorrow Never Comes and Victim.  Richard really enjoys acting and plans on continually pursuing the craft. He was very excited to take on the role of Brad in Calle Ocho!</p>
    </div>
 <div class="bios">
        <h2 class="bio-h2">Raul Walder - <wbr>Ticket Guy</h2>
        <img src="http://calle8.com:8888/wp-content/uploads/2015/05/RaulProfile.jpg" width="450" height="450" alt="mario" class="bio-pic" />
        <p>Raul Walder is a recent graduate from the University of Miami Theatre Department, holding a BA in Theatre Arts and Advertising. He's originally from Caracas, Venezuela. His previous stage shows include the world debut of "Carmen, a new afro-cuban musical" (Ensemble), directed by Tony Award winner Moises Kaufman and Grammy Award winner Arturo O'Farrill, "Chaplin, el musical" (Charlie Chaplin) and "Rescatando La Navidad" (Lauro). His screen work includes the TV series "Tukiti, creci de una!" (Bernardo), the film "Sr. Presidente" (Prisoner), as well as being the image for several international brands, such as Ford, Sony, ESPN, BlackBerry, among others.</p>
    </div>
<div class="bios">
        <h2 class="bio-h2">Sabrina Mayfield - <wbr>The Nurse</h2>
        <img src="http://calle8.com:8888/wp-content/uploads/2015/05/SabrinaProfile.jpg" width="450" height="450" alt="mario" class="bio-pic" />
        <p>Sabrina is a stage and film actress seen most recently on CW networks season 5 of Vampire Dairies and Michael Bay's film Pain and Gain. Former student of Dillard HS of performing arts and The Lee Strasberg Institute.</p>
    </div>
<div class="bios">
        <h2 class="bio-h2">Pilar Uribe - <wbr>Barbara The Meter Maid</h2>
        <img src="http://calle8.com:8888/wp-content/uploads/2015/05/PilarProfile.jpg" width="450" height="450" alt="mario" class="bio-pic" />
        <p>Born and bred in NYC, Pilar went on vacation for 3 weeks to Colombia, South America, her parents' country of origin. She ended up living in Bogota for 9 years where she worked in television, film, theatre, and even had a band that produced her own music. In telenovelas she has played a variety of 'bad' girls, including a happy-go-lucky plastic surgery fan on ‘Yo Soy Betty La Fea’ which years later, metamorphosed into ‘Ugly Betty’ in the United States. Pilar currently resides in Miami acting in commercials, doing voiceovers and narrating audiobooks.</p>
    </div>
</section>


<?php get_footer(); ?>