<?php get_header(); ?>

    <main>
        <section class="ev-home-page">
            
            <?php get_template_part( 'template-parts/home/home', 'hero' ); ?>
    
            <section class="ev-home-section-1 ev-show-on-scroll transition-on-scroll">
                <div class="ev-home-section-1-content">
                    <div class="ev-home-section-1-header">
                        UNLOCKING OPPORTUNITY
                    </div>
                    <div class="ev-home-section-1-body">
                        Small and Medium Enterprises (SMEs) are the proven solution to the looming unemployment crisis in
                        Africa. Missional investors like you can create sustainable impact.
                    </div>
                </div>
                
            <?php get_template_part('template-parts/home/home', 'carousel' ); ?>
    
                <div class="ev-home-section-1-button">
                    <div class="ev-home-section-1-button-wrapper">
                        <div class="ev-home-section-1-button-caption">Donate Today</div>
                    </div>
                </div>
            </section>
    
            <section class="ev-home-section-2 ev-show-on-scroll transition-on-scroll">
                <div class="ev-home-section-2-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/home/town.svg" />
                </div>
                <div class="ev-home-section-2-right">
                    <div>84% of Small- and Medium-sized Enterprises (SMEs) in Africa are either unserved or underserved in
                        terms of access to capital.</div>
                    <div class="ev-text-right ev-mg-20">-Financial Times, 10/24/16</div>
                </div>
            </section>
    
            <section class="ev-home-section-3 ev-show-on-scroll transition-on-scroll">
                <div class="ev-home-section-3-wrapper">
                    <img class="ev-home-section-3-image" src="<?php echo get_template_directory_uri(); ?>/images/home/the-people-behind-our-success.jpg" />
                    <div class="ev-home-section-3-body">
                        <div class="ev-home-section-3-header">The People Behind<br /> our success</div>
                        <div class="ev-home-section-3-button">
                            <div class="ev-home-section-3-button-caption">DONATE TODAY</div>
                        </div>
                    </div>
                </div>
                <div class="ev-home-section-3-wrapper">
                    <img class="ev-home-section-3-image" src="<?php echo get_template_directory_uri(); ?>/images/home/ways-to-get-involved.jpg" />
                    <div class="ev-home-section-3-body">
                        <div class="ev-home-section-3-header">People who<br /> help others</div>
                        <div class="ev-home-section-3-button">
                            <div class="ev-home-section-3-button-caption">DONATE TODAY</div>
                        </div>
                    </div>
                </div>
                <div class="ev-home-section-3-wrapper">
                    <img class="ev-home-section-3-image" src="<?php echo get_template_directory_uri(); ?>/images/home/ways-to-get-involved.jpg" />
                    <div class="ev-home-section-3-body">
                        <div class="ev-home-section-3-header">Ways to<br /> get involved</div>
                        <div class="ev-home-section-3-button">
                            <div class="ev-home-section-3-button-caption">DONATE TODAY</div>
                        </div>
                    </div>
                </div>
                <div class="ev-home-section-3-wrapper">
                    <img class="ev-home-section-3-image" src="<?php echo get_template_directory_uri(); ?>/images/home/image-4.jpg" />
                    <div class="ev-home-section-3-body">
                        <div class="ev-home-section-3-header">LOREM IPSUM<br /> LOREM IPSUM</div>
                        <div class="ev-home-section-3-button">
                            <div class="ev-home-section-3-button-caption">DONATE TODAY</div>
                        </div>
                    </div>
                </div>
                <div class="ev-home-section-3-wrapper">
                    <img class="ev-home-section-3-image" src="<?php echo get_template_directory_uri(); ?>/images/home/meet-our-entrepreneurs.jpg" />
                    <div class="ev-home-section-3-body">
                        <div class="ev-home-section-3-header">MEET OUR<br /> ENTREPRENEURS</div>
                        <div class="ev-home-section-3-button">
                            <div class="ev-home-section-3-button-caption">DONATE TODAY</div>
                        </div>
                    </div>
    
                </div>
                <div class="ev-home-section-3-wrapper">
                    <img class="ev-home-section-3-image" src="<?php echo get_template_directory_uri(); ?>/images/home/support-an-entrepreneur.jpg" />
                    <div class="ev-home-section-3-body">
                        <div class="ev-home-section-3-header">SUPPORT AN<br /> our success</div>
                        <div class="ev-home-section-3-button">
                            <div class="ev-home-section-3-button-caption">DONATE TODAY</div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    
    </main>



<?php get_footer(); ?>