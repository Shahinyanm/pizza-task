<template>
    <section class="d-md-flex about">
        <div class="one-half img" :style="{ backgroundImage: url('storage/images/about.jpg') }"></div>
        <div class="one-half">
            <div class="heading-section">
                <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Pizza</span> A Restaurant</h2>
            </div>
            <div>
                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn
                    around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency,
                    where they abused her for their.</p>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'About'
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
.about {
    .one-half {
        width: 100%;
        padding: 30px 15px;
        @include media-breakpoint-up(md) {
            padding: 5%;
            width: 50%;
        }
        &.img {
            display: block;
            @include media-breakpoint-down(sm) {
                height: 300px;
            }
        }
        h2 {
            span {
                color: $primary;
            }
        }
    }
}
</style>