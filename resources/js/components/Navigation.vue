<template>
    <b-navbar toggleable="lg" type="dark" class="ftco-navbar-light" :class="{
        'scrolled': isScrolled,
        'awake': isAwake,
        'sleep': isSleep
    }">
        <b-container>
            <b-navbar-brand :to="{ name: 'home' }"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></b-navbar-brand>
            <b-navbar-toggle target="navbar-toggle-collapse">
                <vue-icon icon="bars" color="white" />
            </b-navbar-toggle>
            <b-collapse id="navbar-toggle-collapse" is-nav>
                <b-navbar-nav class="ml-auto">
                    <b-nav-item :to="{ name: 'home' }" exact exact-active-class="active">Home</b-nav-item>
                    <b-nav-item :to="{ name: 'menu' }" exact exact-active-class="active">Menu</b-nav-item>
                    <b-nav-item :to="{ name: 'about' }" exact exact-active-class="active">About</b-nav-item>
                    <b-button v-if="$route.name != 'checkout'" v-b-toggle.sidebar-right class="shopping-cart">
                        <vue-icon icon="shopping-cart" size="2x" /><span class="ml-3">{{orderItemsCount}}</span>
                    </b-button>
                </b-navbar-nav>
            </b-collapse>
        </b-container>
    </b-navbar>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
    name: 'Navigation',
    components: {},
    data() {
        return {
            isScrolled: false,
            isAwake: false,
            isSleep: false,
        }
    },
    created() {
        window.addEventListener('scroll', this.handleScroll);
    },
    destroyed() {
        window.removeEventListener('scroll', this.handleScroll);
    },
    methods: {
        handleScroll(e) {
            let scrollPos = window.scrollY;
            if (scrollPos > 150) {
                if (!this.isScrolled) {
                    this.isScrolled = true;
                }
            }
            if (scrollPos < 150) {
                if (this.isScrolled) {
                    this.isScrolled = false;
                    this.isSleep = false;
                }
            }
            if (scrollPos > 350) {
                if (!this.isAwake) {
                    this.isAwake = true;
                }
            }
            if (scrollPos < 350) {
                if (this.isAwake) {
                    this.isAwake = false;
                    this.isSleep = true;
                }
            }
        }
    },
    computed: {
        ...mapGetters([
            'currentOrder',
        ]),
        orderItemsCount() {
            return this.currentOrder.data ? Object.values(this.currentOrder.data).reduce((a, b) => a + b, 0) : 0
        }
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
.navbar-nav>li>a {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding-left: 20px !important;
    padding-right: 20px !important;
}

.navbar-brand {
    color: $white;
    font-family: $font-secondary;
    font-size: 24px;
    line-height: 1;
    @include media-breakpoint-up(md) {
        color: $white;
    }
    span {
        font-size: 24px;
        color: $primary;
    }
    small {
        text-transform: uppercase;
        font-size: 11px;
        display: block;
        text-align: center;
        color: $primary;
        letter-spacing: 4px;
    }
}

.ftco-navbar-light {
    background: #121618 !important;
    z-index: 3;
    .navbar-nav {
        >.nav-item {
            >.nav-link {
                font-size: 14px;
                padding-top: .9rem;
                padding-bottom: .9rem;
                padding-left: 0;
                padding-right: 0;
                color: rgba(255, 255, 255, .9);
                font-weight: 400;
                @include media-breakpoint-up(md) {
                    padding-top: 1.5rem;
                    padding-bottom: 1.5rem;
                    padding-left: 20px;
                    padding-right: 20px;
                    color: rgba(255, 255, 255, .7);
                }
                &:hover {
                    color: $primary;
                }
                &.active {
                    color: $primary;
                }
                opacity: 1 !important;
            }
            .dropdown-menu {
                border: none;
                background: $white;
                -webkit-box-shadow: 0px 10px 34px -20px rgba(0, 0, 0, 0.41);
                -moz-box-shadow: 0px 10px 34px -20px rgba(0, 0, 0, 0.41);
                box-shadow: 0px 10px 34px -20px rgba(0, 0, 0, 0.41);
            }
            &.ftco-seperator {
                position: relative;
                margin-left: 20px;
                padding-left: 20px;
                @include media-breakpoint-down(md) {
                    padding-left: 0;
                    margin-left: 0;
                }
                &:before {
                    position: absolute;
                    content: "";
                    top: 10px;
                    bottom: 10px;
                    left: 0;
                    width: 2px;
                    background: rgba($white, .05);
                    @include media-breakpoint-down(md) {
                        display: none;
                    }
                }
            }
            &.cta {
                @include media-breakpoint-down(sm) {
                    margin-bottom: 20px;
                }
                >a {
                    color: $white;
                    border: 1px solid $primary;
                    background: $primary;
                    padding-top: .5rem;
                    padding-bottom: .5rem;
                    padding-left: 20px;
                    padding-right: 20px;
                    margin-top: 4px;
                    @include border-radius(30px);
                    span {
                        display: inline-block;
                        color: $white;
                    }
                    &:hover {
                        background: $primary;
                        border: 1px solid $primary;
                    }
                }
                &.cta-colored {
                    span {
                        border-color: $primary;
                    }
                }
            }
            &.active {
                >a {
                    color: $primary;
                }
            }
        }
    }
    &.scrolled {
        position: fixed;
        right: 0;
        left: 0;
        top: 0;
        margin-top: -130px;
        background: $darken !important;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
        .nav-item {
            >.nav-link {
                color: $white !important;
            }
            &.active {
                >a {
                    color: $primary !important;
                }
            }
            &.cta {
                >a {
                    color: $white !important;
                    background: $primary;
                    border: none !important;
                    padding-top: .5rem !important;
                    padding-bottom: .5rem !important;
                    padding-left: 20px;
                    padding-right: 20px;
                    margin-top: 6px !important;
                    @include border-radius(30px);
                    span {
                        display: inline-block;
                        color: $white !important;
                    }
                }
                &.cta-colored {
                    span {
                        border-color: $primary;
                    }
                }
            }
        }
        .navbar-nav {
            @include media-breakpoint-down(md) {
                background: none;
                border-radius: 0px;
                padding-left: 0rem !important;
                padding-right: 0rem !important;
            }
        }
        .navbar-nav {
            @include media-breakpoint-down(sm) {
                background: none;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }
        .navbar-toggler {
            border: none;
            color: rgba(255, 255, 255, .8) !important;
            border-color: rgba(0, 0, 0, .5) !important;
            cursor: pointer;
            padding-right: 0;
            text-transform: uppercase;
            font-size: 16px;
            letter-spacing: .1em;
        }
        .nav-link {
            padding-top: .9rem !important;
            padding-bottom: .9rem !important;
            color: $black !important;
            &.active {
                color: $primary !important;
            }
        }
        &.awake {
            margin-top: 0px;
            transition: .3s all ease-out;
        }
        &.sleep {
            transition: .3s all ease-out;
        }
        .navbar-brand {
            color: $white;
        }
    }
    .shopping-cart {
        background: transparent;
        color: $white;
        border: none;
        span {
            color: $white;
            font-size: 20px;
        }
        &:hover {
            color: $primary;
            span {
                color: $primary;
            }
        }
    }
}
</style>