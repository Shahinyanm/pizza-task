<template>
    <section class="ftco-section services-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Services</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Healthy Foods</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-bicycle"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Fastest Delivery</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Original Recipes</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
@import 'bootstrap/scss/_functions.scss';
@import 'bootstrap/scss/_variables.scss';
@import 'bootstrap/scss/_mixins.scss';
$white: #fff;
$black: #000;
$darken: #121618;
$primary: #fac564;
$secondary: #f8b500;
.services-section {
    background: url('../../../storage/app/public/images/food.png') repeat;
    color: #5c3d03;
    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        content: '';
        background: $primary;
        opacity: 0;
    }
    .heading-section {
        h2 {
            color: darken($primary, 70%);
        }
    }
    h3 {
        font-size: 18px;
        margin-bottom: 20px;
        color: black;
        text-transform: uppercase;
    }
}

.services {
    .icon {
        width: 100px;
        height: 100px;
        margin: 0 auto;
        position: relative;
        z-index: 0;
        &:after {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            bordeR: 1px solid darken($primary, 30%);
            z-index: -1;
            @include transition(.3s);
        }
        span {
            font-size: 60px;
            color: darken($primary, 50%);
            z-index: 1;
        }
    }
    h3 {
        font-size: 18px;
        margin-bottom: 20px;
        color: darken($primary, 70%);
        text-transform: uppercase;
    }
    .media-body {
        color: darken($primary, 50%);
    }
    &:hover {
        .icon {
            span {
                // color: darken($primary,90%);
                color: $white;
            }
            &:after {
                border: none;
                transform: rotate(135deg);
                background: $secondary;
            }
        }
    }
}
</style>