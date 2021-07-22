<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="apprenant">
            <?php the_post_thumbnail(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="apprenant__meta">
                <p>
                    Publié le <?php the_date(); ?>
                    par <?php the_author(); ?>
                    Dans la catégorie <?php the_category(); ?>
                    Avec les étiquettes <?php the_tags(); ?>
                </p>
            </div>
            <div class="apprenant__content">
                <?php the_content(); ?>
                <p>
                    <?php function getReview(){
                       $note = get_field('note');
                       $avis = get_field('avis');
                       return array($note, $avis);
                    }
                    ?></p>
            </div>
        </article>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>