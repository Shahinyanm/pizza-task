<template>
    <div class="menu">
        <section class="slider img">
            <div class="slider-item" :style="{ backgroundImage: 'url(/storage/images/bg_3.jpg)' }">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center">
    
                        <div class="col-md-7 col-sm-12 text-center ftco-animate">
                            <h1 class="mb-3 mt-5 bread">Our Menu</h1>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="menu-tabs mt-5 mb-5">
                <div class="tabs">
                    <b-nav pills class="mb-5 col-md-12 links justify-content-center">
                        <b-nav-item to="#" :active="$route.hash === '#' || $route.hash === ''">
                            Pizza
                        </b-nav-item>
                        <b-nav-item to="#drinks" :active="$route.hash === '#drinks'">
                            Drinks
                        </b-nav-item>
                        <b-nav-item to="#pasta" :active="$route.hash === '#pasta'">
                            Pasta
                        </b-nav-item>
                    </b-nav>
                    <div class="tab-content col-md-12 d-flex align-items-center row">
                        <div :class="['tab-pane', { 'active': $route.hash === '#' || $route.hash === '' }]" class="p-2 flex-wrap">
                            <MenuItem v-for="elem in normlizeFoods.pizza" :key="elem.id" v-bind="elem" />
                        </div>
                        <div :class="['tab-pane', { 'active': $route.hash === '#drinks' }]" class="p-2 flex-wrap">
                            <MenuItem v-for="elem in normlizeFoods.drinks" :key="elem.id" v-bind="elem" />
                        </div>
                        <div :class="['tab-pane', { 'active': $route.hash === '#pasta' }]" class="p-2 flex-wrap">
                            <MenuItem v-for="elem in normlizeFoods.pasta" :key="elem.id" v-bind="elem" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <Footer />
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Footer from '../components/Footer'
import MenuItem from '../components/MenuItem'
export default {
    components: {
        Footer,
        MenuItem
    },
    mounted() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    },
    computed: {
        ...mapGetters([
            'foods',
        ]),
        normlizeFoods () {
            return  this.foods.reduce((normlizeObj, e) => {
            !normlizeObj[e.type] && (normlizeObj[e.type] = []);
            normlizeObj[e.type].push(e);
            return normlizeObj;
         }, {});
        }
    }
}
</script>

<style lang="scss">
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
.menu {
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
    .menu-tabs {
        .links {
            padding-left: 15px !important;
            .nav-link {
                border-radius: 0;
                margin-bottom: 0;
                color: $primary;
                font-size: 18px;
                font-weight: 400;
                position: relative;
                display: inline-block;
                bordeR: 1px solid $primary;
                margin-left: 5px;
                margin-right: 5px;
                &.active,
                &:hover {
                    color: darken($primary, 70%);
                    @include transition(.3s);
                    background: $primary;
                    border: 1px solid transparent;
                    &:after {
                        opacity: 1;
                    }
                    @include media-breakpoint-down(sm) {
                        &:after {
                            opacity: 0;
                        }
                    }
                }
                @include media-breakpoint-down(sm) {
                    display: block;
                    width: 100%;
                    margin-bottom: 5px;
                }
            }
        }
        .tab-content {
            .active {
                width: 100%;
                display: flex;
            }
            .menu-wrap {
                .menu-img {
                    display: block;
                    width: 200px;
                    height: 200px;
                    margin: 0 auto;
                    @include border-radius(50%);
                }
                .text {
                    h3 {
                        font-size: 22px;
                        a {
                            color: $white;
                        }
                    }
                    .price {
                        font-size: 16px;
                        font-weight: 400;
                        span {
                            color: $primary;
                        }
                    }
                }
                .count {
                    margin-bottom: 16px;
                    background: transparent;
                    color: #fff;

                    &.focus {
                        border-color: $primary;
                    }

                    button {
                        color: #fff;
                    }
                }
            }
        }
    }
}
</style>