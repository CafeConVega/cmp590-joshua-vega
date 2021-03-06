<?php
/*
 Template Name: 360 Tech
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
<h1 class="tech-360h1">The Cast's Experience Filming in 360&deg;</h1>
<section class="tech-360">
    <div>
        <img src="http://calle8.com:8888/wp-content/uploads/2015/05/360Camera.jpg" width="50vw" height="auto" alt="360-camera" class="camera-360" />
    </div>
    <div class="cast-exp">
        <div class="carmen-360">
            <h2>Victoria Broche – <wbr>Carmen the Waitress</h2>
            <p>My experience with ’360 technology’ was innovative and exhilarating, it is a hybrid between TV and theatre. A hybrid because there are no cut-scenes, the scenes run straight through till the end, similar to a play but, filmed through a camera lens. The camera itself is similar to a disco ball with multiple camera lenses around it. Throughout the scenes, the actor’s space is on camera ‘360 degrees’, also similar to theatre.</p>
            <p>What I learned from working with ’360 Hero’ technology was that blocking was a bit trivial from standard film sets. There was also no cheating camera because everything was ‘open’ to the camera. Also, there was no playback so it was challenging in the sense that we did several takes and had to trust it completely. Filming with this technology, it feels almost as if everyone is playing for an audience that is standing in the middle of us. The viewers are literally watching all of us from the different angles. I find that the difficulty with this technology is finding the best way to block scenes so that the viewer can get the most from the story.</p>
            <p>It was exciting and original because there were moments where I wasn’t sure when I walked in and out of frame but, we were always in character nonetheless. Definitely an experience all actors should have.</p>
        </div>
        <div class="bradley-360">
            <h2>Richard Capalbo - <wbr>Bradley, The Lawyer</h2>
            <p>I really had fun shooting this film with 360 technology. The inability to cut scenes really added a different approach to everything. Additionally, the fact that each individual actor was being filmed at every second is interesting from the viewpoint of the actor and the audience. It had its extra challenges, but it reminded me of theatre and I really enjoyed it as it was my first experience with the technology. My advice to any actors working with this technology in the future is to treat it as if you are on stage and have fun with it.</p>
        </div>
        <div class="pablo-360">
            <h2>Henry Fonte – <wbr>Pablo Gonzalez</h2>
            <p>While I loved shooting CALLE OCHO with the 360 technology, it was also quite harrowing. I have been away from Acting as a regular activity for a while; and while I found that it was indeed, just like riding a bicycle, it was also frightening to have to attempt to shoot 12 minute takes when my character did all the talking! It was a great deal of fun though. And I think the learning curve for everyone is that a much larger proportion of rehearsal days to shooting days have to be scheduled. This is much closer to learning a play and delivering it live than the preparation needed to shoot a traditional film. Would love to do it again.</p>
        </div>
        <div class="moesha-360">
            <h2>Sabrina Mayfield - <wbr>The Nurse</h2>
            <p>Filming on this project using the 360 technology as an actor was very exciting. I found it to be very similar to stage acting were the actor is always on. So, you better know your lines and be ready to improv if needed. The only advice I have is to have fun.</p>
        </div>
        <div class="carlos-360">
            <h2>Neto Mendoza – <wbr>Carlos the Handyman</h2>
            <p>It was my best experience as an actor, I love technology, so I understood perfectly since the very 1st moment about the technology, I read a lot about 360 technology before the rehearsals, I feel honored for been invited to participate. It was a enormous challenge for me, first for the language and also because I was afraid to have a mistake at the end of the movie, causing a whole repetition of the scene. I will be happy to do another project with you Zulena, congratulations! You are a very professional director.</p>
        </div>
        <div class="pepe-360">
            <h2>Mario Nalini - <wbr>Pepe “The Scammer”</h2>
            <p>This was my first experience with 360 technology. It's very much like STAGE where you are "on" from begining to end, everything is captured so even if you are in the background you need to stay in character.</p>
            <p>My advice to actors and filmmakers thinking about working with 360&deg; technology is GO FOR IT! It's the future and who's to say that one day movie theaters will have 360&deg; screens where the viewer will dictate what they want to see. I dug it!! Great cast, great crew, great director!! I had a ball bringing PEPE to life. </p>
        </div>
        <div class="metermaid-360">
            <h2>Pilar Uribe - <wbr>Barbara The Meter Maid</h2>
            <p>It was interesting. The camera looked strange, sort of like a martian with a thousand eyes. Since it records every angle, it's important to be in character and in the present moment when the director yells 'action', regardless of how many lines you have. The camera will immediately pick up if you're not engaged in the scene.</p>
        </div>
        <div class="ticketguy-360">
            <h2>Raul Walder - <wbr>Ticket Guy</h2>
            <p>I personally had a great experience shooting this project with the 360 technology. I believe it's a new concept that requires specificity, but also allows for flexibility in your craft. Being a theatre trained actor, I loved how similar it was to the work that I'm used to for the stage, including rehearsing a lot prior to shooting, as well as being 100% present as your character in every take, at all times.</p>
        </div>
    </div>
</section>


<?php get_footer(); ?>