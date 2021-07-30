<?php get_header(); ?>
<div class="singpost-container">
    
            <article class="post">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="title-post"><?php the_title(); ?></h1>
                <div class="post__meta">
                    <div class="blocdesc">
                        <p>Par <?php the_author(); ?></p>
                    </div>
                    <div class="blocdesc">
                        <p>Publié le : <?php the_date(); ?></p>
                    </div>
                    <div class="blocdesc">
                        <p>Dans la catégorie : <?php $categories = get_the_category();
                                                $category = $categories[0]->cat_name;
                                                echo $category; ?></p>
                    </div>
                </div>
                <div class="blocPost">
                    <p><?php the_post_thumbnail('medium'); ?></p>
                    <div class="post__content">
                        <?php the_content(); ?>
                    </div>
                    <?php the_meta(); ?>
                </div>
                <?php endwhile;
    endif; ?>
            </article>
   
</div>
<p class="single-post-footer"><?php get_footer(); ?></p>