<template>
    <section data-scroll-index="1" data-overlay-dark="0" data-background="/site/img/bg-section.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="callto-action-imgbox md-margin-30px-right">

                        <!-- start play button -->
                        <div class="play-button-wrapper story-video">
                            <a href="video/pasta-burrata.mp4" class="btn-play video">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <!-- end play button -->

                        <img :src="'/site/img/about-story.jpg'" alt="about story" class="border border-width-8 width-100 border-color-light-black" />
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 offset-xl-1 offset-lg-0">

                    <div class="section-heading left half xs-margin-20px-bottom">
                        <div class="title-font">Unique story</div>
                        <h4>About us</h4>
                    </div>

                    <p class="width-90 xs-width-100">Restaurant food dolor sit amet, consectetur adipisicing elit, sed do eiusmod eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Duis aute irure dolor in reprehenderit in voluptate.</p>
                    <p class="width-90 xs-width-100">Cafe ut perspiciatis unde omnis iste natus error sit voluptatem totam rem aperiam, eaque ipsa quae ab illo inventore veritatis dicta sunt explicabo.</p>

                    <a href="javascript:void(0);" data-scroll-nav="4" class="btn">Book Now</a>

                </div>
            </div>
        </div>
        <div class="corner-img about-corner wow fadeInRight" data-wow-duration="0.8s">
            <img :src="'/site/img/about-bg.png'" alt="" />
        </div>
    </section>
</template>

<script>
    export default {

        created() {

        }
    }
</script>

<style scoped>

</style>
