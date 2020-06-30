<template>
    <section class="home">
        <carousel :per-page="1" class="slider" paginationPosition="bottom-overlay" :paginationSize="15" paginationColor="rgba(255, 255, 255, 0.5)" loop autoplay :autoplayTimeout="3000" :style="{ backgroundImage: 'url(/storage/images/bg_1.jpg)' }">
            <slide class="slider-item">
                <div class="overlay"></div>
                <b-container>
                    <div class="row slider-text align-items-center" data-scrollax-parent="true">
                        <div class="col-md-6 col-sm-12">
                            <span class="subheading">Delicious</span>
                            <h1 class="mb-4">Italian Cuizine</h1>
                            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p>
                                <a @click="$router.push('menu')" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                                <a @click="$router.push('menu')" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
                            </p>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <img src="/storage/images/bg_1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </b-container>
            </slide>
            <slide class="slider-item">
                <div class="overlay"></div>
                <b-container>
                    <div class="row slider-text align-items-center" data-scrollax-parent="true">
    
                        <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                            <span class="subheading">Crunchy</span>
                            <h1 class="mb-4">Italian Pizza</h1>
                            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a @click="$router.push('menu')" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a @click="$router.push('menu')" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <img src="/storage/images/bg_2.png" class="img-fluid" alt="">
                        </div>
    
                    </div>
                </b-container>
            </slide>
            <slide class="slider-item" :style="{ backgroundImage: 'url(/storage/images/bg_3.jpg)' }">
                <div class="overlay"></div>
                <b-container>
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
    
                        <div class="col-md-7 col-sm-12 text-center ftco-animate">
                            <span class="subheading">Welcome</span>
                            <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
                            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <p><a @click="$router.push('menu')" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a @click="$router.push('menu')" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
                        </div>
    
                    </div>
                </b-container>
            </slide>
        </carousel>
    </section>
</template>

<script>
export default {
    name: 'Carusel',
    components: {

    }
}
</script>

<style lang="scss" scoped>
@import 'bootstrap/scss/_functions.scss';
@import 'bootstrap/scss/_variables.scss';
@import 'bootstrap/scss/_mixins.scss';
$font-primary: 'Poppins',
Arial,
sans-serif;
$font-secondary: 'Josefin Sans',
Arial,
sans-serif;
$font-tertiary: 'Nothing You Could Do',
cursive;
$white: #fff;
$black: #000;
$darken: #121618;
$primary: #fac564;
$secondary: #f8b500;
@mixin border-radius($radius) {
    -webkit-border-radius: $radius;
    -moz-border-radius: $radius;
    -ms-border-radius: $radius;
    border-radius: $radius;
}

@mixin transition($transition) {
    -moz-transition: all $transition ease;
    -o-transition: all $transition ease;
    -webkit-transition: all $transition ease;
    -ms-transition: all $transition ease;
    transition: all $transition ease;
}

.slider {
    position: relative;
    height: 750px;
    z-index: 0;
    .slider-item {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 750px;
        position: relative;
        z-index: 0;
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #000;
            opacity: .5;
        }
        .slider-text {
            color: #fff;
            height: 750px;
            text-align: right;
            @include media-breakpoint-up(lg) {
                .order-md-last {
                    text-align: left !important;
                }
            }
            @include media-breakpoint-down(sm) {
                text-align: center;
            }
            .subheading {
                font-family: 'Nothing You Could Do', cursive;
                font-size: 30px;
                color: $primary;
            }
            h1 {
                // font-family: $font-secondary;
                text-transform: uppercase;
                font-size: 40px;
                color: $white;
                line-height: 1.5;
                font-weight: normal; // font-family: $font-secondary;
                letter-spacing: 1px;
                strong {
                    color: #fff;
                    font-family: 'Josefin Sans', Arial, sans-serif;
                    font-size: 50px; // text-transform: uppercase;
                }
                @include media-breakpoint-down(md) {
                    font-size: 30px;
                }
            }
            p {
                font-size: 18px;
                line-height: 1.5;
                font-weight: 300;
                color: rgba(255, 255, 255, 1);
                &.sub-p {
                    font-weight: 400;
                }
                strong {
                    font-weight: 700;
                    a {
                        color: $white;
                    }
                }
            }
            .unstyled-list {
                width: 50%;
                padding: 0;
                li {
                    list-style: none;
                }
            } //BREADCRUBS
            .breadcrumbs {
                text-transform: uppercase;
                font-size: 13px;
                letter-spacing: 1px;
                span {
                    border-bottom: 2px solid rgba(255, 255, 255, .1);
                    a {
                        color: #fff;
                    }
                }
            }
        }
    }
}
</style>