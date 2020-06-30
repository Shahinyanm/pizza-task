<template>
    <div>
        <section class="slider img">
    
            <div class="slider-item" :style="{ backgroundImage: url('storage/images/bg_3.jpg') }">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center">
    
                        <div class="col-md-7 col-sm-12 text-center ftco-animate">
                            <h1 class="mb-3 mt-5 bread">About us</h1>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
        <Intro />
        <AboutSection />
        <Footer />
    </div>
</template>

<script>
import Carusel from '../components/Carusel'
import Intro from '../components/Intro'
import AboutSection from '../components/AboutSection'
import Footer from '../components/Footer'

export default {
    components: {
        Carusel,
        Intro,
        AboutSection,
        Footer
    },
    mounted() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
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
        }
    }
}
</style>