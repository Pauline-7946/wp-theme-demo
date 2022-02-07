<?php get_heder(); ?>

<?php if(have_posts()): ?>

<?php while(have_posts(  )) : the_posts( );?>

<article class="flex post">

    <div class="quart">
    <?php if(has_post_thumbnail(  )) : ?>

        <?php the_post_thumbnail('small', ['class' => 'fluide'] ); ?>


         <?php endif; ?>

         <div class="texte-article trois-quart">

                            <h3><?php the_title(  ); ?></h3>
                            <p><?php the_excerpt(  ); ?><a href="<php the_permalik( )?php>"> En savoir plus...</a></p>

                        </div>

    </div>



</article>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer( )>