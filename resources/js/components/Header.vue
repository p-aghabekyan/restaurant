<template>
    <header class="header slider-fade small-height-align" data-scroll-index="0">

        <!-- start navbar -->
        <nav :class="{'nav-scroll': isTrue}" class="navbar navbar-expand-lg alt-font">
            <div class="container sm-padding-10px-tb sm-padding-15px-lr">

                <!-- start logo -->
                <a class="logo" href="javascript:void(0);" data-scroll-nav="0">
                    <img :src="logoSrc" alt="Cefrax - Restaurant and Cafe"
                         title="Cefrax - Restaurant and Cafe">
                </a>
                <!-- end Logo -->

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                </button>

                <!-- navbar links -->
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <router-link to="/home" class="nav-link">Home</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/about" class="nav-link">About</router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="2">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="3">Our Chef</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="5">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="6">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="7">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn theme small" href="javascript:void(0);" data-scroll-nav="4">Book a
                                Table</a>
                        </li>
                    </ul>
                </div>
                <!-- end navbar links -->

            </div>
            <a href="javascript:void(0)" @click="openSideBar" class="sidemenu_btn sm-display-none" id="sidebar_toggle">
                <span></span> <span></span> <span></span>
            </a>
        </nav>
        <!-- end navbar  -->

        <div class="container-fluid">
            <div class="row">
                <carousel style="width: 100%"
                          :items="1"
                          :autoplay="true"
                          :autoplaySpeed="800">
                    <div class="text-center item bg-img" style="background-image: url('/site/img/bg1.jpg')">
                        <div class="first-bg-fix"></div>
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="title-font text-theme-color font-size28 sm-font-size18 no-margin">Welcome
                                    to</h3>
                                <h1 class="banner-headline clip text-white">Restaurant &amp; Cafe</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom xs-display-none text-white">Tasty,
                                    delicious food ready in restaurant. We respect your test review.</p>
                                <a href="javascript:void(0);" data-scroll-nav="2" class="btn theme">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center item bg-img" style="background-image: url('/site/img/bg2.jpg')">
                        <div class="first-bg-fix"></div>
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="title-font text-theme-color font-size28 sm-font-size18 no-margin">Welcome
                                    to</h3>
                                <h1 class="banner-headline clip text-white">Restaurant &amp; Cafe</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom xs-display-none text-white">Tasty,
                                    delicious food ready in restaurant. We respect your test review.</p>
                                <a href="javascript:void(0);" data-scroll-nav="2" class="btn theme">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="text-center item bg-img" style="background-image: url('/site/img/bg3.jpg')">
                        <div class="first-bg-fix"></div>
                        <div class="absolute-middle-center caption">
                            <div class="overflow-hidden">
                                <h3 class="title-font text-theme-color font-size28 sm-font-size18 no-margin">Welcome
                                    to</h3>
                                <h1 class="banner-headline clip text-white">Restaurant &amp; Cafe</h1>
                                <p class="margin-30px-bottom sm-margin-20px-bottom xs-display-none text-white">Tasty,
                                    delicious food ready in restaurant. We respect your test review.</p>
                                <a href="javascript:void(0);" data-scroll-nav="2" class="btn theme">Learn More</a>
                            </div>
                        </div>
                    </div>
                </carousel>
            </div>
        </div>

        <!--<carousel :items="1">-->

            <!--<img src="https://placeimg.com/200/200/any?1">-->

            <!--<img src="https://placeimg.com/200/200/any?2">-->

            <!--<img src="https://placeimg.com/200/200/any?3">-->

            <!--<img src="https://placeimg.com/200/200/any?4">-->

        <!--</carousel>-->

        <!-- start sidemenu -->
        <div :class="{'side-menu-active': isActive}" class="side-menu black alt-font">
            <div class="inner-wrapper">
                <span class="btn-close" @click="openSideBar" id="btn_sidebar_colse"></span>
                <nav class="side-nav width-100">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0);" data-scroll-nav="0">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="1">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="2">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="3">Our Chef</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="5">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="6">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-scroll-nav="7">Contact</a>
                        </li>
                    </ul>
                </nav>

                <div class="side-footer width-100">
                    <div class="social-links">
                        <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                        <a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sidemenu -->

        <!-- close sidemenu -->
        <a id="close_sidebar" href="javascript:void(0);"></a>
        <!-- End Sidemenu -->

        <div class="arrow">
            <a href="javascript:void(0);" data-scroll-nav="1">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </header>
</template>

<script>
    import carousel from 'v-owl-carousel';
    import Vue from 'vue';
    Vue.component('carousel', carousel);
    Vue.use(carousel,{
        items: 1,
        margin: 1
    });
    export default {
        data: function() {
            return {
                isTrue: false,
                logoSrc: '/site/img/logo-light.png',
                isActive: false,
            }
        },
        methods: {
            toggleClass: function (){
                if(document.documentElement.scrollTop > 50){
                    this.isTrue = true;
                    this.logoSrc = '/site/img/logo-dark.png';
                }
                else{
                    this.isTrue = false;
                    this.logoSrc = '/site/img/logo-light.png'
                }
            },
            openSideBar: function() {
                this.isActive = !this.isActive;
            }

        },
        created () {
            window.addEventListener('scroll', this.toggleClass)
        }
    }
</script>
<style>
    .first-bg-fix{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #0e0d0d7d;
    }
</style>
