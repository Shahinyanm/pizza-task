<template>
    <div class="px-3 py-2 order-item">
        <div class="order-item__title">
            <span>{{name}}</span>
            <a @click.prevent="remove">remove item</a>
        </div>
        <div class="order-item__content">
            <p>
                {{description}}
            </p>
            <div class="order-item__count">
                <b-form-spinbutton class="count" @change="addToCart" :value="count" inline size="sm" :repeat-interval='200'></b-form-spinbutton>
                <span>{{price | currency}}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'OrderItem',
    props: {
        id: {
            type: String,
            default: '',
        },
        name: {
            type: String,
            default: '',
        },
        description: {
            type: String,
            default: '',
        },
        price: {
            type: String,
            default: '',
        },
        count: {
            type: Number,
            default: 0,
        }
    },
    methods: {
        addToCart(value) {
            const { id } = this;
            this.$store.dispatch('addToCart', { id, count:value })
        },
        remove(value) {
            const { id } = this;
            this.$store.dispatch('removeFromCart', { id })
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
.order-item {
    .order-item__title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        span {
            color: $primary;
            font-size: 22px;
        }
        a {
            color: #007bff;
            cursor: pointer;
            &:hover {
                color: $primary;
            }
        }
    }
    .order-item__content {
        .order-item__count {
            display: flex;
            justify-content: space-between;
            align-items: center;
            span {
                color: black;
                font-size: 24px;
            }
        }
    }
}
</style>