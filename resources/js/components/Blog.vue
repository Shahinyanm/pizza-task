<template>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Recent from blog</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="https://blog.leadformance.com/fr/pizza-hut-foodtech-web-to-store" target="blank" class="block-20" :style="{ backgroundImage: 'url(' + require('../../../storage/app/public/images/image_1.jpg') + ')' }">
                  </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">8, février 2017</a></div>
                                <div><a href="#">Andrea</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">PIZZA HUT - Foodtech</a></h3>
                            <p>Être présent là où le client est présent.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="http://blog.pizzahut.com/pizza-hut-proves-bigger-is-better-with-the-colossal-classic-big-dipper-pizza" target="blank" class="block-20" :style="{ backgroundImage: 'url(' + require('../../../storage/app/public/images/image_2.jpg') + ')' }">
                  </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">Sept 10, 2018</a></div>
                                <div><a href="#">Brett LeVecchio,</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">PIZZA HUT PROVES BIGGER IS BETTER</a></h3>
                            <p>The return of the Big Dipper™ kicks off a series of fan-favorite comebacks from the Hut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="http://blog.pizzahut.com/live-blog-pizza-hut-community-health-safety" target="blank" class="block-20" :style="{ backgroundImage: 'url(' + require('../../../storage/app/public/images/image_3.jpg') + ')' }">
                  </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <div><a href="#">april 4, 2020</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">LIVE BLOG: PIZZA HUT</a></h3>
                            <p>Expanded safety measures also include pre-shift temperature checks and front counter shields.</p>
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

<style lang="scss">
@import 'bootstrap/scss/_functions.scss';
@import 'bootstrap/scss/_variables.scss';
@import 'bootstrap/scss/_mixins.scss';
$white: #fff;
$black: #000;
$darken: #121618;
$primary: #fac564;
$secondary: #f8b500;

.block-20 {
	overflow: hidden;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
	position: relative;
	display: block;
	width: 100%;
	height: 270px;
}
.blog-entry{
	overflow: hidden;
	@include media-breakpoint-up(md){
		margin-bottom: 30px;
	}
	@include media-breakpoint-down(sm){
		margin-bottom: 30px;
	}
	.text {
		position: relative;
		.heading {
			font-size: 18px;
			margin-bottom: 16px;
			font-weight: 400;
			a {
				color: $white;
				&:hover, &:focus, &:active {
					color: $primary;
				}
			}
		}
	}
	.meta {
		> div {
			display: inline-block;
			margin-right: 5px;
			margin-bottom: 0;
			font-size: 14px;
			a {
				color: lighten($black, 50%);
				font-size: 15px;
				&:hover {
					color: lighten($black, 40%);
				}
			}
		}
	}
}
</style>