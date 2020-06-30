<template>
	<section class="intro">
		<div class="container-wrap">
			<div class="wrap d-md-flex">
				<div class="info">
					<div class="row no-gutters">
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon">
								<vue-icon icon="phone-alt" />
							</div>
							<div class="text">
								<h3>000 (123) 456 7890</h3>
								<p>A small river named Duden flows</p>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon">
								<vue-icon icon="map-marker-alt" />
							</div>
							<div class="text">
								<h3>198 West 21th Street</h3>
								<p>Suite 721 New York NY 10016</p>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon">
								<vue-icon icon="clock" />
							</div>
							<div class="text">
								<h3>Open Monday-Friday</h3>
								<p>8:00am - 9:00pm</p>
							</div>
						</div>
					</div>
				</div>
				<div class="social d-md-flex pl-md-5 p-4 align-items-center">
					<ul class="social-icon">
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
.intro {
	.wrap {
		width: 100%;
		.info {
			background: $black;
			padding: 30px;
			@include media-breakpoint-up(xl) {
				width: calc(100% - 35%);
				padding: 2% 5% 2% 12%;
			}
			@include media-breakpoint-down(sm) {
				width: 100%;
			}
			p {
				margin-bottom: 0;
			}
		}
		.social {
			width: 35%;
			background: $primary;
			@include media-breakpoint-down(sm) {
				width: 100%;
			}
			.social-icon {
				margin: 0;
				padding: 0;
				li {
					list-style: none;
					display: inline-block;
					line-height: 0;
					padding: 0 10px;
					a {
						display: block;
						margin: 0;
						padding: 0;
						svg {
							color: $white;
							font-size: 20px;
						}
					}
				}
			}
		}
		h3 {
			font-size: 16px;
		}
		.text {
			width: calc(100% - 40px);
		}
		.icon {
			width: 40px;
			svg {
				color: $primary;
				font-size: 20px;
			}
		}
	}
}
</style>