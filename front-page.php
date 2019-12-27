<!-- As this stands this will be main page -->
<?php get_header() ?>
<div class="page-wrap">
    <!---<div class="container-fluid"--->
    <section class="page-wrap">
        <div class="page-banner" style="">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ai-background-sample.jpg') ?>);"></div>
            <div class="page-banner__content container t-center c-white" style="">
                <h2 class="headline headline--large">Welcome to Blue Orb AI!</h2>
                <h2 class="headline headline--medium"> Come back soon; we are developing... </h2>
                <h3 class="headline headline--small">Will embark on this journey with Blue Orb?</h3>
                <a href="#" class="btn btn--large btn--blue">Take a multimedia Tour</a>
            </div>
        </div>
        <!--</div>--->
        <div class="container-fluid">
            <div class="full-width-split group">
                <div class="full-width-split__one">
                    <div class="full-width-split__inner">
                        <h2 class="headline headline--small-plus t-center">Projects</h2>

                        <div class="event-summary">
                            <a class="event-summary__date t-center" href="#">

                                <span class="event-summary__month">Feb</span>
                                <span class="event-summary__day">20</span>
                                <span class="event-summary__year">2019</span>
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny"><a href="#">Economic Value & AI </a></h5>
                                <p> This project will provide practical AI approaches to EV analysis...<a href="#" class="nu gray">Learn more</a></p>
                            </div>
                        </div>
                        <div class="event-summary">
                            <a class="event-summary__date t-center" href="#">
                                <span class="event-summary__month">May</span>
                                <span class="event-summary__day">07</span>
                                <span class="event-summary__year">2019</span>
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny"><a href="#">Automated Financial Analysts &trade; - AI in Action</a></h5>
                                <p> It is time to free the finance professional from all mundane tasks and a lot of the current non-mundane ... <a href="#" class="nu gray">Learn more</a></p>
                            </div>
                        </div>

                        <p class="t-center no-margin"><a href="<?php echo site_url('/projects') ?>" class="btn btn--blue">View All Projects</a></p>

                    </div>
                </div>
                <div class="full-width-split__two">
                    <div class="full-width-split__inner">
                        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

                        <div class="event-summary">
                            <a class="event-summary__date event-summary__date--beige t-center" href="#">
                                <span class="event-summary__month">Nov</span>
                                <span class="event-summary__day">20</span>
                                <span class="event-summary__year">2019</span>
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny"><a href="#">The Future of Work </a></h5>
                                <p> The big data revolution is arguably the current revolution preceeding the internet revolution. Based on the advances in technology, is there a dramatic change in the nature of work that will impact more of the so-called 'whit-color' workforce, probably mirroring the impact of the industrial revolution ...<a href="#" class="nu gray">Read more</a></p>
                            </div>
                        </div>
                        <div class="event-summary">
                            <a class="event-summary__date event-summary__date--beige t-center" href="#">
                                <span class="event-summary__month">Dec</span>
                                <span class="event-summary__day">02</span>
                                <span class="event-summary__year">2019</span>
                            </a>
                            <div class="event-summary__content">
                                <h5 class="event-summary__title headline headline--tiny"><a href="#">First Month as a Professor</a></h5>
                                <p> I have always found the idea of teaching fulfulling and having started.... <a href="#" class="nu gray">Read more</a></p>
                            </div>
                        </div>

                        <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
                    </div>
                </div>
            </div>
    </section>
</div>
</div>
<!---
<div class="hero-slider">
    <div class="hero-slider__slide" style="background-image: url(images/bus.jpg);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
    </div>
    <div class="hero-slider__slide" style="background-image: url(images/apples.jpg);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
    </div>
    <div class="hero-slider__slide" style="background-image: url(images/bread.jpg);">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
    </div>
</div> -->


<?php get_footer() ?>