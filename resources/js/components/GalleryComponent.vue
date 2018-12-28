<template>
    <section class="portfolio" data-scroll-index="5">
        <div class="container-fluid padding-7px-lr">

            <div class="section-heading">
                <div class="title-font font-size22 text-theme-color">Discover our popular dishes</div>
                <h3>Food Gallery</h3>
            </div>

            <!-- gallery -->
            <div class="row half-gutter xs-default-gutter gallery text-center width-100">

                <!-- start gallery item -->
                <div class="col-lg-3 col-md-4 col-sm-6 items">
                    <div class="item-img">
                        <img :src="'/site/img/portfolio/1.jpg'" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info width-100 vertical-center">
                                <a @click="showLightbox('/site/img/portfolio/1.jpg')" href="javascript:void(0)" class="popimg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <h6>Roasted Chicken</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end gallery item -->

                <!-- start gallery item -->
                <div class="col-lg-3 col-md-4 col-sm-6 items">
                    <div class="item-img">
                        <img :src="'/site/img/portfolio/2.jpg'" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info width-100 vertical-center">
                                <a @click="showLightbox('/site/img/portfolio/2.jpg')" href="javascript:void(0)" class="popimg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <h6>Fusilli Pasta Salad</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end gallery item -->

                <!-- start gallery item -->
                <div class="col-lg-3 col-md-4 col-sm-6 items">
                    <div class="item-img">
                        <img :src="'/site/img/portfolio/3.jpg'" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info width-100 vertical-center">
                                <a @click="showLightbox('/site/img/portfolio/3.jpg')" href="javascript:void(0)" class="popimg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <h6>Delicious Pastry</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end gallery item -->

                <!-- start gallery item -->
                <div class="col-lg-3 col-md-4 col-sm-6 items">
                    <div class="item-img">
                        <img :src="'/site/img/portfolio/4.jpg'" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info width-100 vertical-center">
                                <a @click="showLightbox('/site/img/portfolio/4.jpg')" href="javascript:void(0)" class="popimg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <h6>Slice Toast Bread</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end gallery item -->

                <!-- start gallery item -->
                <div class="col-lg-3 col-md-4 col-sm-6 items">
                    <div class="item-img">
                        <img :src="'/site/img/portfolio/5.jpg'" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info width-100 vertical-center">
                                <a @click="showLightbox('/site/img/portfolio/5.jpg')" href="javascript:void(0)" class="popimg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <h6>Tuna Salad</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end gallery item -->

                <!-- start gallery item -->
                <div class="col-lg-3 col-md-4 col-sm-6 items">
                    <div class="item-img">
                        <img :src="'/site/img/portfolio/6.jpg'" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info width-100 vertical-center">
                                <a @click="showLightbox('/site/img/portfolio/6.jpg')" href="javascript:void(0)" class="popimg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <h6>Grilles Chicken</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end gallery item -->

                <!-- start gallery item -->
                <div class="col-lg-3 col-md-4 col-sm-6 items">
                    <div class="item-img">
                        <img :src="'/site/img/portfolio/7.jpg'" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info width-100 vertical-center">
                                <a @click="showLightbox('/site/img/portfolio/7.jpg')" href="javascript:void(0)" class="popimg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <h6>Fried Egg</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end gallery item -->

                <!-- start gallery item -->
                <div class="col-lg-3 col-md-4 col-sm-6 items">
                    <div class="item-img">
                        <img :src="'/site/img/portfolio/8.jpg'" alt="image">
                        <div class="item-img-overlay valign">
                            <div class="overlay-info width-100 vertical-center">
                                <a @click="showLightbox('/site/img/portfolio/8.jpg')" href="javascript:void(0)" class="popimg">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <h6>Fresh Drink</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end gallery item -->

                <div class="clear-fix"></div>

            </div>

        </div>
        <lightbox id="mylightbox"
                  ref="lightbox"
                  :images="[{name: '/site/img/portfolio/1.jpg'},
                            {name: '/site/img/portfolio/2.jpg'},
                            {name: '/site/img/portfolio/3.jpg'},
                            {name: '/site/img/portfolio/4.jpg'},
                            {name: '/site/img/portfolio/5.jpg'},
                            {name: '/site/img/portfolio/6.jpg'},
                            {name: '/site/img/portfolio/7.jpg'},
                            {name: '/site/img/portfolio/8.jpg'},
                            ]"
                  :timeoutDuration="5000"
        ></lightbox>

    </section>
</template>

<script>
    import Lightbox from 'vue-my-photos';
    import Vue from 'vue';
    Vue.component('lightbox', Lightbox);
    Vue.use(Lightbox);

    export default {
        mounted() {
            console.log('Component mounted')
        },
        methods: {
            showLightbox: function(imageName) {
                this.$refs.lightbox.show(imageName);
            }
        }
    }
</script>
