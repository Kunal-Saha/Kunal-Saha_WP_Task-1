<?php get_header(); ?>
<section class="Hero">
                <div>
                    <h1 class="Hero__title">This website is about Travelling</h1>
                    <p class="Hero__text">
                        Traveling is important in life because it will open you up to a new way of living and being. 
                        You will experience new connections with people and places and immerse in different cultures, 
                        which can help widen your perspective. 
                        So much learning and personal growth can come from traveling.
                    </p>
                    <button class="Signup__button">Sign up</button>
                </div>
                <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/Image/1.jpeg"
                    alt="Hero__Image"
                />
            </section>
        <section class="Feature">
            <h2 class="Feature__header">Some Beautiful places to visit</h2>
            <div>
                <div class="Feature__item">
                    <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/Image/Hong Kong.jpeg"
                    alt=""
                    />
                    <figcaption>Hong Kong</figcaption>
                </div>
                <div class="Feature__item">
                    <img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/Image/Los Angeles.jpeg"
                        alt=""
                    />
                    <figcaption>Los Angeles</figcaption>
                </div>
                <div class="Feature__item">
                    <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/Image/Paris.jpeg"
                    alt=""
                    />
                    <figcaption>Paris</figcaption>
                </div>
                <div class="Feature__item">
                    <img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/Image/Switzerland.jpeg"
                    alt=""
                    />
                    <figcaption>   Switzerland</figcaption>
                </div>
            </div>
        </section>
        <blockquote class="quote">
            <p>
                Travel is fatal to prejudice, bigotry, and narrow-mindedness, and many of our people need it sorely on these accounts. 
                Broad, wholesome, charitable views of men and things cannot be acquired by vegetating in one 
                little corner of the earth all one's lifetime.
            </p>
            <cite> - Mark Twain, American writer</cite>
        </blockquote>
        <section class="SignUp">
            <div class="SignUp__callToAction" >
                <div>
                    <h2 class="SignUp__header">Call to action it's time!</h2>
                    <p class="SignUp__text">
                        Sign up for our tour packages by clicking that button right over
                        there!
                    </p>
                </div>
                <button class="Signup__button">Sign up</button>
            </div>
        </section>
        <?php get_footer(); ?>