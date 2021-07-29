<?php get_header(); ?>
<div class="page-card">
    <div class="card">
        <div class="imgbox">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/peggy.jpg" width="" height="" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/peggyhot.jfif" width="" height="" alt="" />
        </div>
        <div class="details">
            <div class="content-card">
                <h2>dfdsfdsfsdf</h2>
                <div class="descri-card">
                    <p><?php the_content(); ?>
                        
                    </p>
                </div>
                <div class="proj-card">
                    <a class="projet" href="<?php the_permalink(); ?>">
                        <div class="proj-descr">
                            <h4><?php the_title(); ?></h4>
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/Arrow.png" width="20px" height="30px"  />
                            <p>sdfgfg<br>hfdegfsdyfd</p>
                          
                        </div>                       
                    </a>
                    <a class="projet" href="<?php the_permalink(); ?>">
                        <div class="proj-descr">
                            <h4><?php the_title(); ?></h4>
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/Arrow.png" width="20px" height="30px"  />
                            <p>sdfgfg<br>hfdegfsdyfd</p>
                          
                        </div>                       
                    </a>
                    <a class="projet" href="<?php the_permalink(); ?>">
                        <div class="proj-descr">
                            <h4><?php the_title(); ?></h4>
                            <img src="<?php echo get_template_directory_uri(); ?>./assets/Arrow.png" width="20px" height="30px"  />
                            <p>sdfgfg<br>hfdegfsdyfd</p>
                          
                        </div>                       
                    </a>
                </div>
                <div class="social-icons">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/images/github-icon-38979.png" width="60px" height="60px" alt="" />
                    </a>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri(); ?>./assets/images/pngegg.png" width="60px" height="60px" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>