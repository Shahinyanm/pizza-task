<template>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Hot Pizza Meals</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div v-for="elem in normlizeFoods.pizza.slice(0, 3)" :key="elem.id" class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <div class="img" :style="{ backgroundImage: 'url(' + elem.image + ')' }"></div>
                        <div class="text p-4">
                            <h3>{{elem.name}}</h3>
                            <p>{{elem.description}}</p>
                            <p class="price"><span>{{elem.price | currency}}</span> <a @click="$router.push('menu')" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div v-for="elem in normlizeFoods.pizza.slice(3, 6)" :key="elem.id" class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <div class="img order-lg-last" :style="{ backgroundImage: 'url(' + elem.image + ')' }"></div>
                        <div class="text p-4">
                            <h3>{{elem.name}}</h3>
                            <p>{{elem.description}}</p>
                            <p class="price"><span>{{elem.price | currency}}</span> <a @click="$router.push('menu')" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Menu Pricing</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
                    <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div v-for="elem in normlizeFoods.pizza.slice(0, 4)" :key="elem.id" class="pricing-entry d-flex ftco-animate">
                        <div class="img" :style="{ backgroundImage: 'url(' + elem.image + ')' }"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{elem.name}}</span></h3>
                                <span class="price">{{elem.price | currency}}</span>
                            </div>
                            <div class="d-block">
                                <p>{{elem.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div v-for="elem in normlizeFoods.pizza.slice(4)" :key="elem.id" class="pricing-entry d-flex ftco-animate">
                        <div class="img" :style="{ backgroundImage: 'url(' + elem.image + ')' }"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{elem.name}}</span></h3>
                                <span class="price">{{elem.price | currency}}</span>
                            </div>
                            <div class="d-block">
                                <p>{{elem.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
    computed: {
        ...mapGetters([
            'foods',
        ]),
        normlizeFoods() {
            return this.foods.reduce((normlizeObj, e) => {
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
$white: #fff;
$black: #000;
$darken: #121618;
$primary: #fac564;
$secondary: #f8b500;
.services-wrap {
    width: 100%;
    display: block;
    @include media-breakpoint-down(md) {
        margin-bottom: 30px;
    }
    .img,
    .text {
        width: 50%;
    }
    .img {
        display: block;
    }
    .text {
        background: rgba(0, 0, 0, .2);
        position: relative;
        h3 {
            font-size: 20px;
        }
        .price {
            font-size: 16px;
            margin-bottom: 0;
            span {
                color: $primary;
            }
        }
    }
}

//PRICING
.pricing-entry {
    width: 100%;
    display: block;
    margin-bottom: 30px;
    .img {
        width: 60px;
        height: 60px;
        @include border-radius(50%);
    }
    .desc {
        width: calc(100% - 60px);
        p {
            margin-bottom: 0;
        }
    }
    .text {
        width: 100%;
        display: block;
        position: relative;
        z-index: 0;
        &:after {
            position: absolute;
            bottom: 35%;
            left: 0;
            right: 0;
            content: '';
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed darken($primary, 30%);
            z-index: -1;
        }
        h3 {
            width: calc(100% - 80px);
            font-size: 18px;
            span {
                background: $darken;
                background: url('/images/bg_4.jpg') no-repeat fixed;
                padding-right: 20px;
            }
        }
        .price {
            width: 80px;
            color: $primary;
            text-align: right;
            background: $darken;
            background: url('/images/bg_4.jpg') no-repeat fixed;
            font-size: 16px;
        }
    }
}
</style>