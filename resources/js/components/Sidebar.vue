<template>
    <b-sidebar id="sidebar-right" sidebar-class='cart' title="My Cart" body-class='hide-scrollbar' right shadow backdrop-variant="dark" backdrop>
        <div v-if="currentOrder.data">
            <OrderItem v-for="item in orderItems" :key="item.id" v-bind="item" />
            <div class="footer">
                <div class="summary">
                    <span>Total</span>
                    <span class="total">{{currentOrder.total | currency}}/ <small>{{currentOrder.total * 0.89 | euro}}</small></span>
                </div>
                <div class="action">
                    <button @click="$router.push('checkout')">Checkout</button>
                </div>
            </div>
        </div>
        <NoItems v-else />
    </b-sidebar>
</template>

<script>
import { mapGetters } from 'vuex'
import OrderItem from './OrderItem'
import NoItems from './NoItems'
export default {
    components: {
        OrderItem,
        NoItems
    },
    computed: {
        ...mapGetters([
            'foods',
            'currentOrder'
        ]),
        orderItems() {
            return Object.keys(this.currentOrder.data).reduce((arr, elem) => {
                const food = this.foods.find(e => e.id == elem);

                let obj = {
                    id: elem,
                    count: this.currentOrder.data[elem],
                    price: food.price,
                    name: food.name,
                    description: food.description
                }

                arr.push(obj);
                return arr;
            }, [])
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
.cart {
    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 999;
        display: flex;
        flex-direction: column;
        .summary {
            display: flex;
            justify-content: space-between;
            padding: 1rem;
            background: #f8f9fa;
            span {
                font-size: 24px;
                color: $primary;
                font-weight: bold;
            }
        }
        .action {
            button {
                width: 100%;
                border: none;
                background: $secondary;
                outline: none;
                padding: 15px 0;
                font-size: 18px;
                color: white;
            }
        }
    }
}

</style>