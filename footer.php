        <div class="clearfix"></div>
        
        </div><!-- .page -->

        <div class="" id="connect">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3>Connect with us</h3>
                        <p>
                            4525 Grand Ave. Billings, MT 59106<br/>
                            (406) 656-4407 office@cornerstonebillings.org
                    </p>
                    </div>

                    <div class="col-12 col-md-6 margin-md-top">
                        <div class="row">
                            <div class="col-12 col-sm-8">
                                <a href="https://apps.apple.com/us/app/cornerstone-billings/id1449076522" target="_blank">
                                    <img class="padding-md-right" src="<?php echo get_template_directory_uri(); ?>/img/icons/apple-app-store.svg" alt="Download our app on Apple Store" title="Download our app on Apple Store" />
                                </a>

                                <a class="margin-md-left" href='https://play.google.com/store/apps/details?id=com.customchurchapps.appiqlytwfa&hl=en_US&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                                    <img src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png' height="58" alt='Get it on Google Play'/>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4 social-icons no-padding-left">
                                <a class="margin-md-left" href="https://www.facebook.com/cornerstonebillings/" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Check us out on Facebook" title="Check us out on Facebook" />
                                </a>

                                <a class="margin-md-left" href="https://www.youtube.com/channel/UC1Ynk4qAMEVc92G-t-RXmeg" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/youtube.svg" alt="Check us out on YouTube" title="Check us out on YouTube" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('menu.php'); ?>

        <div id="overlay"></div>

        <div id="preloader">
            <div class="row">
                    <div class="col animate-up"></div>
                </div>

            <div id="loader">
                <h1>
                    <span>C</span><span>C</span><span>C</span>
                </h1>
                
                <h5>Loading</h5>
            </div>
        </div>
    
        <div class="window-mobile"></div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>