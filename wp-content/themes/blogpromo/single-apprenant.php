<?php get_header(); ?>
<div class="page-card">
    <div class="card">
        <div class="imgbox">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/peggy.jpg" width="" height="" alt="" />
        </div>
        <div class="details">
            <div class="content-card">
                <h2>dfdsfdsfsdf<br><span>dfgsfgdfgf</span></h2>
                <div class="social-icons">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/images/photoshop.png" width="30px" height="30px" alt="" />
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/images/photoshop.png" width="30px" height="30px" alt="" />
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/images/photoshop.png" width="30px" height="30px" alt="" />
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/images/photoshop.png" width="30px" height="30px" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
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