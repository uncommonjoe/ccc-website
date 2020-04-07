<?php
/* Template Name: Growth Group */

get_header();
?>

    <div class="page-header">
        <div class="section-content">
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>

                    <?php endwhile; else : ?>
                    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                    <?php endif;?>
                </div>
            </div>

            <div class="row row-eq-height margin-lg-top">
                <div class="col-12 margin-lg-bottom margin-lg-top">
                    <h1>Sunday Growth Groups</h1>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase font-700 no-margin-bottom">Jake & Alicia Schreibeis Home</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">When</h6>
                                <h5 class="serif italic font-color-darker">Sunday, 3:30&nbsp;PM</h5>
                            </div>

                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Led by</h6>
                                <h5 class="serif italic font-color-darker">David Kelly</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Notes</h6>
                                <h5 class="serif italic font-color-darker">Kid Friendly</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <a href="mailto:exegete215@gmail.com" target="_blank"  class="btn btn-primary btn-block margin-md-top">Email David</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase font-700 no-margin-bottom">Clark & Erika Schreibeis Home</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">When</h6>

                                <h5 class="serif italic font-color-darker">Sunday 6:00&nbsp;PM</h5>
                            </div>

                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Led by</h6>

                                <h5 class="serif italic font-color-darker">Clark Schreibeis</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Notes</h6>
                                <h5 class="serif italic font-color-darker">Great for singles and couples</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <a href="mailto:clark@clarkschreibeis.com" target="_blank" class="btn btn-primary btn-block margin-md-top">Email Clark</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase font-700 no-margin-bottom">Seth & Endreah Burnham Home</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">When</h6>
                                <h5 class="serif italic font-color-darker">Sunday, 6:00&nbsp;PM</h5>
                            </div>

                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Led by</h6>
                                <h5 class="serif italic font-color-darker">Seth Burnham</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Notes</h6>
                                <h5 class="serif italic font-color-darker">Kid Friendly</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <a href="mailto:barret223@hotmail.com" target="_blank" class="btn btn-primary btn-block margin-md-top">Email Seth</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Monday Growth Group</h1>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase font-700 no-margin-bottom">Jon & Joyce Hayter Home</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">When</h6>
                                <h5 class="serif italic font-color-darker">Monday, 6:30&nbsp;PM</h5>
                            </div>

                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Led by</h6>
                                <h5 class="serif italic font-color-darker">Jon Hartzler</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Notes</h6>
                                <h5 class="serif italic font-color-darker">Kid Friendly</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <a href="mailto:jah3681@hotmail.com" target="_blank" class="btn btn-primary btn-block margin-md-top">Email Jon</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Tuesday Growth Group</h1>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase font-700 no-margin-bottom">Men's Morning Group @ Cornerstone</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-4 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">When</h6>
                                <h5 class="serif italic font-color-darker">Tuesday, 6:30&nbsp;AM</h5>
                            </div>

                            <div class="col-6 col-md-4 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Led by</h6>
                                <h5 class="serif italic font-color-darker">Pastor Rick Haluszka</h5>
                            </div>

                            <div class="col-12 col-md-4 margin-md-top">
                                <a href="mailto:rick.haluszka@gmail.com" target="_blank" class="btn btn-primary btn-block margin-md-top">Email Rick</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Wednesday Growth Group</h1>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase font-700 no-margin-bottom">Ken & Corlette Sande Home</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-4 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">When</h6>
                                <h5 class="serif italic font-color-darker">Wednesday, 6:30&nbsp;PM</h5>
                            </div>

                            <div class="col-6 col-md-4 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Led by</h6>
                                <h5 class="serif italic font-color-darker">Andy Metroka</h5>
                            </div>

                            <div class="col-12 col-md-4 margin-md-top">
                                <a href="mailto:metroka@mt.net" target="_blank" class="btn btn-primary btn-block margin-md-top">Email Andy</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase font-700 no-margin-bottom">Weston & Rachel Kimm Home</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-4 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">When</h6>
                                <h5 class="serif italic font-color-darker">Wednesday, 6:00&nbsp;PM</h5>
                            </div>

                            <div class="col-6 col-md-4 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Led by</h6>
                                <h5 class="serif italic font-color-darker">Weston Kimm</h5>
                            </div>

                            <div class="col-12 col-md-4 margin-md-top">
                                <a href="mailto:weskimm@gmail.com" target="_blank" class="btn btn-primary btn-block margin-md-top">Email Weston</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 margin-lg-bottom margin-xl-top">
                    <h1>Thursday Growth Group</h1>
                </div>

                <div class="col-12">
                    <div class="gg-container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase font-700 no-margin-bottom">Cornerstone Community Church</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">When</h6>
                                <h5 class="serif italic font-color-darker">Thursday, 6:30&nbsp;PM</h5>
                            </div>

                            <div class="col-6 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Led by</h6>
                                <h5 class="serif italic font-color-darker">David Kelly</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <h6 class="serif font-spaced font-size-sm text-uppercase font-color-gray">Notes</h6>
                                <h5 class="serif italic font-color-darker">Great for singles and couples or for those who have kids in Youth Group.</h5>
                            </div>

                            <div class="col-12 col-md-3 margin-md-top">
                                <a href="mailto:exegete215@gmail.com" target="_blank" class="btn btn-primary btn-block margin-md-top">Email David</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <?php get_footer(); ?>