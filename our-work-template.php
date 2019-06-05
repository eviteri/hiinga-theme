<?php /* Template Name: Our Work */ ?>
<?php get_header(); ?>
    <main>
        <section class="our-work-page">

            <?php get_template_part( 'template-parts/ourwork/ourwork', 'hero' ); ?>
    
            <section class="ev-our-work-section-1 ev-show-on-scroll transition-on-scroll">
                <div class="ev-our-work-section-1-header">
                    According to the Small Enterprise Assistance Funds (SEAF) investment
                    management group, every $1 invested in a small-to-medium enterprise
                    generates, on average, an additional $13 for the local economy.
                </div>
                <div class="ev-our-work-section-1-sub-header">
                    - Stanford Social Innovation Review
                </div>
            </section>
    
            <section class="ev-our-work-section-2 ev-show-on-scroll transition-on-scroll">
                <div class="ev-our-work-section-2-header">
                    <h1>Meet Our Entrepreneurs</h1>
                </div>
                <div class="ev-our-work-section-2-body">
                    <p>
                        We catalyze efforts of entrepreneurs at the forefront of job creation; employing 10 to 200
                        people. Companies must be operational and growing, but just need affordable capital to
                        take them to the next stage.
                    </p>
                </div>
            </section>
    
            <section class="ev-our-work-carousel ev-show-on-scroll transition-on-scroll">
                <?php include_once './content-parts/our-work/carousel.php'; ?>
            </section>
    
            <section class="ev-our-work-section-3 ev-show-on-scroll transition-on-scroll">
                <div class="ev-our-work-section-3-header">
                    <h1>WE'RE ALL IN!</h1>
                </div>
                <div class="ev-our-work-section-3-body">
                    <p>Our board and other generous funders cover all of our USA operating costs.</p>
                </div>
                <div class="ev-our-work-section-3-gallery">
                    <div class="ev-our-work-section-3-gallery-wrapper">
                        <div class="ev-our-work-section-3-gallery-item">
                            <div class="ev-our-work-section-3-gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/svg/our-work/making-loan.svg" />
                            </div>
                            <div class="ev-our-work-section-3-gallery-caption">Making Loan</div>
                        </div>
                        <div class="ev-our-work-section-3-gallery-item">
                            <div class="ev-our-work-section-3-gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/svg/our-work/field-office.svg" />
                            </div>
                            <div class="ev-our-work-section-3-gallery-caption">Field Office</div>
                        </div>
                        <div class="ev-our-work-section-3-gallery-item">
                            <div class="ev-our-work-section-3-gallery-image"><img src="<?php echo get_template_directory_uri(); ?>/svg/our-work/re-inveated.svg" />
                            </div>
                            <div class="ev-our-work-section-3-gallery-caption">Re-inveated</div>
                        </div>
                    </div>
                </div>
                <div class="ev-our-work-section-3-footer">
                    <p>
                        100% of your donation goes towards making loans.<br />
                        100% sustainability for our field office in Uganda. <br />
                        100% of Fund is re-invested into making new loans. <br />
                    </p>
                </div>
                <div class="ev-our-work-section-3-button">
                    <a href="#">
                        <div class="ev-our-work-slider-button-wrapper">
                            <div class="ev-our-work-slider-button-caption">Donate</div>
                        </div>
                    </a>
                </div>
            </section>
    
            <section class="ev-our-work-section-4 ev-show-on-scroll transition-on-scroll">
                <div class="ev-our-work-section-4-header">
                    <h1>INVESTMENT FOCUS</h1>
                </div>
                <div class="ev-our-work-section-4-body">
                    <p>
                        Our impact investments generally target three critical sectors that will create the most
                        impact for the most people, to maximize the best impact return on your dollars.
                    </p>
                </div>
                <div class="ev-our-work-section-4-gallery">
    
                    <div class="ev-our-work-section-4-gallery-item">
                        <div class="ev-our-work-section-4-gallery-item-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/svg/our-work/leaf.svg" />
                        </div>
                        <div class="ev-our-work-section-4-gallery-item-header">AGRICULTURE</div>
                        <div class="ev-our-work-section-4-gallery-item-body">
                            Agriculture accounts for 32% of GDP and employs 65% of labor force in Africa.
                        </div>
                    </div>
    
                    <div class="ev-our-work-section-4-gallery-item">
                        <div class="ev-our-work-section-4-gallery-item-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/svg/our-work/grad-hat.svg" />
                        </div>
                        <div class="ev-our-work-section-4-gallery-item-header">EDUCATION</div>
                        <div class="ev-our-work-section-4-gallery-item-body">
                            In late primary school, less than 7% proficient are in reading against 14% in mathematics.
                        </div>
                    </div>
    
                    <div class="ev-our-work-section-4-gallery-item">
                        <div class="ev-our-work-section-4-gallery-item-image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/svg/our-work/cross.svg" />
                        </div>
                        <div class="ev-our-work-section-4-gallery-item-header">HEALTHCARE</div>
                        <div class="ev-our-work-section-4-gallery-item-body">
                            Everyday, 15 women die in Uganda from pregnancy, 94 babies stillborn, 81 newborn babies die.
                        </div>
                    </div>
    
                </div>
                <img class="ev-our-work-section-4-house-image" src="<?php echo get_template_directory_uri(); ?>/svg/our-work/house.svg" />
            </section>
    
        </section>
    </main>
<?php get_footer(); ?>