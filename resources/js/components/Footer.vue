<template>
    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate">
                                <a href="https://twitter.com/pizzahut" target="blank">
                                    <vue-icon :icon="['fab', 'twitter']" />
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href='https://www.facebook.com/PizzaHutFrance/?brand_redir=123405267836136' target="blank">
                                    <vue-icon :icon="['fab', 'facebook']" />
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.instagram.com/pizzahutfr" target="blank">
                                    <vue-icon :icon="['fab', 'instagram']" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><span class="py-2 d-block">Cooked</span></li>
                            <li><span class="py-2 d-block">Deliver</span></li>
                            <li><span class="py-2 d-block">Quality Foods</span></li>
                            <li><span class="py-2 d-block">Mixed</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li>
                                    <vue-icon icon="map-marker-alt" /><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                <li>
                                    <vue-icon icon="phone-alt" /><span class="text">+2 392 3929 210</span></li>
                                <li>
                                    <vue-icon icon="envelope" /><span class="text">info@yourdomain.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
    
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; All rights reserved All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {

}
</script>

<style lang="scss">
@import 'bootstrap/scss/_functions.scss';
@import 'bootstrap/scss/_variables.scss';
@import 'bootstrap/scss/_mixins.scss';
$white: #fff;
$black: #000;
$darken: #121618;
$primary: #fac564;
$secondary: #f8b500;
.ftco-footer {
    font-size: 16px;
    padding: 7em 0;
    background: darken($darken, 1%);
    .ftco-footer-logo {
        text-transform: uppercase;
        letter-spacing: .1em;
    }
    .ftco-footer-widget {
        h2 {
            font-weight: normal;
            color: $white;
            margin-bottom: 40px;
            font-size: 16px;
            font-weight: 400;
            position: relative;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        ul {
            li {
                a {
                    span {
                        color: $white;
                    }
                }
            }
        }
        .btn-primary {
            background: $white !important;
            border: 2px solid $white !important;
            &:hover {
                background: $white;
                border: 2px solid $white !important;
            }
        }
    }
    p {
        color: rgba($white, .7);
    }
    a {
        color: rgba($white, .7);
        &:hover {
            color: $white;
        }
    }
    .ftco-heading-2 {
        font-size: 17px;
        font-weight: 400;
        color: $black;
    }
    .block-21 {
        .text {
            .heading {
                font-size: 16px;
                font-weight: 300;
                a {
                    color: rgba(255, 255, 255, .9);
                    &:hover,
                    &:active,
                    &:focus {
                        color: $primary;
                    }
                }
            }
            .meta {
                >div {
                    display: inline-block;
                    font-size: 12px;
                    margin-right: 5px;
                    a {
                        color: lighten($black, 50%);
                    }
                }
            }
        }
    }
    .ftco-footer-social {
        li {
            list-style: none;
            margin: 0 10px 0 0;
            display: inline-block;
            a {
                height: 50px;
                width: 50px;
                display: block;
                float: left;
                background: rgba($white, .05);
                border-radius: 50%;
                position: relative;
                color: $white;
                svg {
                    position: absolute;
                    font-size: 26px;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }
            }
        }
    }
    .block-23 {
        ul {
            padding: 0;
            li {
                display: table;
                line-height: 1.5;
                margin-bottom: 15px;
                svg {
                    color: rgba($white, .7);
                    display: table-cell;
                    vertical-align: top;
                    width: 40px;
                    font-size: 18px;
                    padding-top: 2px;
                    color: rgba($white, 1);
                }
                .text {
                    display: table-cell;
                    vertical-align: top;
                }
            }
        }
    }
}
</style>