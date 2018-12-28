<template>
    <section class="blog" data-scroll-index="6" data-overlay-dark="0" data-background="/site/img/bg-section.jpg">
        <div class="container">
            <div class="section-heading">
                <div class="title-font font-size22 text-theme-color">Latest news</div>
                <h3>Our Blog</h3>
            </div>
            <div class="row">

                <!-- start blog -->
                <div class="col-lg-4 sm-margin-20px-bottom">
                    <div class="item text-center">
                        <div class="post-img">
                            <img :src="'/site/img/blog/3.jpg'" alt="">
                        </div>
                        <div class="content sm-padding-20px-all">
                            <h6 class="font-size16 sm-font-size15 xs-font-size14"><a href="blog.html">Best foods for you</a></h6>
                            <div class="author">
                                <span class="font-size12 display-inline-block">by <a href="javascript:void(0);">Jaydev makhansra</a>&nbsp;&nbsp;|&nbsp;&nbsp;02 May 2018</span>
                            </div>
                            <p class="margin-20px-tb sm-margin-15px-tb xs-margin-10px-tb">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
                            <a href="single-post.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- end blog -->

                <!-- start blog -->
                <div class="col-lg-4 sm-margin-20px-bottom">
                    <div class="item text-center">
                        <div class="post-img">
                            <img :src="'/site/img/blog/2.jpg'" alt="">
                        </div>
                        <div class="content sm-padding-20px-all">

                            <h6 class="font-size16 sm-font-size15 xs-font-size14"><a href="blog.html">Couple having dinner</a></h6>
                            <div class="author">
                                <span class="font-size12 display-inline-block">by <a href="javascript:void(0);">John kairliya</a>&nbsp;&nbsp;|&nbsp;&nbsp;11 April 2018</span>
                            </div>

                            <p class="margin-20px-tb sm-margin-15px-tb xs-margin-10px-tb">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <a href="single-post.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- end blog -->

                <!-- start blog -->
                <div class="col-lg-4">
                    <div class="item text-center">
                        <div class="post-img">
                            <img :src="'/site/img/blog/1.jpg'" alt="">
                        </div>
                        <div class="content sm-padding-20px-all">
                            <h6 class="font-size16 sm-font-size15 xs-font-size14"><a href="blog.html">Working in the kitchen</a></h6>
                            <div class="author">
                                <span class="font-size12 display-inline-block">by <a href="javascript:void(0);">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;04 March 2018</span>
                            </div>
                            <p class="margin-20px-tb sm-margin-15px-tb xs-margin-10px-tb">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <a href="single-post.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- end blog -->

            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted')
        }
    }
</script>
