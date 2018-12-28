<template>
    <footer class="bg-black" data-scroll-index="7" data-overlay-dark="0" data-background="/site/img/black_twill.png">

        <div class="footer-top text-center text-extra-light-gray padding-90px-tb md-padding-70px-tb sm-padding-50px-tb">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 xs-margin-20px-bottom">
                        <h4 class="text-white font-size18 xs-font-size16 no-margin opacity9">Address</h4>
                        <div class="separator-line-verticle-small-thick bg-theme center-col margin-10px-top margin-20px-bottom xs-margin-15px-bottom width-15"></div>
                        <p class="no-margin-bottom width-45 md-width-65 xs-width-100 text-center center-col">74 Norava Street, 542B Town 51 MT.</p>
                    </div>

                    <div class="col-md-4 xs-margin-20px-bottom">
                        <h4 class="text-white font-size18 xs-font-size16 no-margin opacity9">Timing</h4>
                        <div class="separator-line-verticle-small-thick bg-theme center-col margin-10px-top margin-20px-bottom xs-margin-15px-bottom width-15"></div>
                        <p class="no-margin-bottom width-85 md-width-100 text-center center-col"><strong>Monday - Thursday</strong> 10:00 AM - 7:00 PM</p>
                        <p class="no-margin-bottom width-85 md-width-100 text-center center-col"><strong>Friday - Saturday</strong> 10:00 AM - 3:00 PM</p>
                    </div>

                    <div class="col-md-4">
                        <h4 class="text-white font-size18 xs-font-size16 no-margin opacity9">Contact</h4>
                        <div class="separator-line-verticle-small-thick bg-theme center-col margin-10px-top margin-20px-bottom xs-margin-15px-bottom width-15"></div>
                        <p class="no-margin-bottom">(+44) 123 456 789</p>
                        <p class="no-margin-bottom">addyour@emailhere</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom padding-20px-tb sm-padding-15px-tb bg-black border-top border-color-light-white">
            <div class="container">
                <div class="row">

                    <!-- start copyright link -->
                    <div class="col-md-6 xs-text-center xs-margin-10px-bottom">
                        <span class="font-size12 letter-spacing-1 text-uppercase text-extra-light-gray">© 2018 Cefrax is Powered by Chitrakoot Web</span>
                    </div>
                    <!-- end copyright link -->

                    <!-- start social media link -->
                    <div class="col-md-6 text-right xs-text-center">
                        <div class="footer-social">
                            <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-dribbble"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-youtube"></i></a>
                            <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <!-- end social media link -->

                </div>
            </div>
        </div>

        <div id="back-to-top" v-scroll-to="'header'" v-if="show" class="back-to-top reveal">
            <i class="fa fa-angle-up"></i>
        </div>

    </footer>
</template>

<script>
    export default {
        data: function() {
            return {
                show: true
            }

        },
        methods: {
            fadeButton: function() {
                document.documentElement.scrollTop > 200 ? this.show = true : this.show = false;
            }
        },
        created () {
            window.addEventListener('scroll', this.fadeButton);
            window.addEventListener('onLoad', this.fadeButton);
        },
    }
</script>
