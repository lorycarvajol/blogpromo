<?php get_header(); ?>
<?php
$args = array(
'post_type' => 'apprenant',
);
$wp_query = new WP_Query($args);
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<h1> <?php the_title(); ?> </h1>
<p> <?php the_content(); ?> </p>
<a href="<?php the_permalink(); ?>">Lire la suite...</a>
<?php endwhile; ?>
<div class="promo">
<section>
    <div class="promo-container">
        <div class="container">
            <div class="carousel">
                <input type="radio" name="slides" checked="checked" id="slide-1">
                <input type="radio" name="slides" id="slide-2">
                <input type="radio" name="slides" id="slide-3">
                <input type="radio" name="slides" id="slide-4">
                <input type="radio" name="slides" id="slide-5">
                <input type="radio" name="slides" id="slide-6">
                <ul class="carousel__slides">
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="" alt="">
                            </div>
                            <figcaption>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <span class="credit">Photo: Tim Marshall</span>
                            </figcaption>
                            <h3><?php the_title(); ?></h3>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="https://picsum.photos/id/1043/800/450" alt="">
                            </div>
                            <figcaption>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <span class="credit">Photo: Christian Joudrey</span>
                            </figcaption>
                            <h3><?php the_title(); ?></h3>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="https://picsum.photos/id/1044/800/450" alt="">
                            </div>
                            <figcaption>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <span class="credit">Photo: Steve Carter</span>
                            </figcaption>
                            <h3><?php the_title(); ?></h3>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="https://picsum.photos/id/1045/800/450" alt="">
                            </div>
                            <figcaption>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <span class="credit">Photo: Aleksandra Boguslawska</span>
                            </figcaption>
                            <h3><?php the_title(); ?></h3>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="https://picsum.photos/id/1049/800/450" alt="">
                            </div>
                            <figcaption>
                                
                            <h3><?php the_title(); ?></h3>
                                <span class="credit">Photo: Rosan Harmens</span>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="carousel__slide">
                        <figure>
                            <div>
                                <img src="https://picsum.photos/id/1052/800/450" alt="">
                            </div>
                            <figcaption>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <span class="credit">Photo: Annie Spratt</span>
                            </figcaption>
                            <h3><?php the_title(); ?></h3>
                        </figure>
                    </li>
                </ul>
                <ul class="carousel__thumbnails">
                    <li>
                        <label for="slide-1"><?php the_post_thumbnail(); ?></label>
                    </li>
                    <li>
                        <label for="slide-2"><img src="https://picsum.photos/id/1043/150/150" alt=""></label>
                    </li>
                    <li>
                        <label for="slide-3"><img src="https://picsum.photos/id/1044/150/150" alt=""></label>
                    </li>
                    <li>
                        <label for="slide-4"><img src="https://picsum.photos/id/1045/150/150" alt=""></label>
                    </li>
                    <li>
                        <label for="slide-5"><img src="https://picsum.photos/id/1049/150/150" alt=""></label>
                    </li>
                    <li>
                        <label for="slide-6"><img src="https://picsum.photos/id/1052/150/150" alt=""></label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
</div>

wp_reset_query();
?>

<?php get_footer(); ?>