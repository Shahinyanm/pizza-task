<template>
    <div class="checkout">
        <section class="ftco-section">
            <div class="container">
                <div v-if="currentOrder.data" class="row">
                    <div class="col-md-6 mb-5 checkout__column d-flex flex-column">
                        <div class="title">
                            <h2>REVIEW YOUR ORDER</h2>
                        </div>
                        <div class="checkout__review">
                            <b-table :items="orderItems" :fields="tableFields" />
                        </div>
                        <div class="additional mt-auto">
                            <div class="d-flex justify-content-between align-items-center mt-3 pr-4">
                                <span>Subtotal:</span>
                                <span>{{currentOrder.total | currency}}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pr-4">
                                <span>Shipping:</span>
                                <span>{{5 | currency}}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pr-4">
                                <span>Grand Total:</span>
                                <span>{{grandTotal.usd | currency}} / {{grandTotal.euro | euro}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5 checkout__column">
                        <div class="title">
                            <h2>NAME & ADDRESS</h2>
                        </div>
                        <b-form @submit.prevent="onSubmit">
                            <b-form-group id="input-group-1" label="Email address:" label-for="email" description="We'll never share your email with anyone else.">
                                <b-form-input id="email" v-model="form.email" type="email" required placeholder="Enter email"></b-form-input>
                            </b-form-group>
    
                            <b-form-group id="input-group-2" label="Your Name:" label-for="name">
                                <b-form-input id="name" v-model="form.name" required placeholder="Enter name"></b-form-input>
                            </b-form-group>
    
                            <b-form-group id="input-group-2" label="Your Surname:" label-for="surname">
                                <b-form-input id="surname" v-model="form.surname" required placeholder="Enter surname"></b-form-input>
                            </b-form-group>
    
                            <b-form-group id="input-group-2" label="Your Address:" label-for="address" description="Please write correct address">
                                <b-form-input id="address" v-model="form.address" required placeholder="Enter address"></b-form-input>
                            </b-form-group>
    
                            <b-form-group id="input-group-2" label="Your Phone:" label-for="phone">
                                <b-form-input id="phone" v-model="form.phone" required placeholder="Enter phone"></b-form-input>
                            </b-form-group>
    
                            <b-button type="submit" variant="primary" size="lg" block>Order Now</b-button>
                        </b-form>
                    </div>
                </div>
                <NoItems v-else />
            </div>
        </section>
        <Footer />
        <b-modal id="thanks" centered title="Thank You" title-class='thank-you__title' hide-footer hide-header-close no-close-on-backdrop no-close-on-esc>
            <div v-if="orderId" class="thank-you">
                <h1>Your order has been received.</h1>
                <h2>THANK YOU FOR YOUR PURCHASE!</h2>
                <p>Your order # is: {{orderId}}</p>
                <p>You will receive an order confirmation email with details of your order and a link to track its progress.</p>
                <b-button variant="primary" size="lg" block @click="finish">Continue Shopping</b-button>
            </div>
        </b-modal>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Footer from '../components/Footer'
import NoItems from '../components/NoItems'
export default {
    data() {
        return {
            form: {
                email: '',
                name: '',
                surname: '',
                address: '',
                phone: '',
            },
            tableFields: ['name', 'count', 'price'],
            orderId: null
        }
    },
    components: {
        Footer,
        NoItems
    },
    mounted() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
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
                    name: food.name,
                    count: this.currentOrder.data[elem],
                    price: food.price,
                }

                arr.push(obj);
                return arr;
            }, [])
        },
        grandTotal() {
            const grantTotal = Number(this.currentOrder.total) + 5
            return {
                usd: grantTotal,
                euro: grantTotal * 1.2
            };
        }
    },
    methods: {
        async onSubmit() {
            this.orderId = await this.$store.dispatch('submitOrder', { data: this.form });
            this.$bvModal.show('thanks')
        },
        finish() {
            this.$store.dispatch('finishOrder');
            this.$router.push('menu')
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
.checkout {
    .ftco-section:first-child {
        background: #f8f9fa;
        .checkout__column {
            .checkout__review {
                padding: 0 24px;
                font-size: 18px;
            }
            .additional {
                padding: 0 24px;
                span {
                    color: black;
                }
                div:last-of-type {
                    @media (max-width: 1024px) {
                        font-size: 18px;
                    }
                    font-size: 24px;
                    font-weight: bold;
                }
            }
            .title {
                border-bottom: 1px solid #cccccc !important;
                margin: 0 0 30px !important;
                display: flex;
                flex-direction: column;
                align-items: center;
                h2 {
                    color: black;
                    font-weight: bold;
                    margin-bottom: 40px;
                    font-size: 16px;
                    font-weight: 400;
                    position: relative;
                    text-transform: uppercase;
                    letter-spacing: 1px;
                }
            }
            form {
                padding: 0 24px;
            }
            button {
                font-size: 20px;
            }
        }
    }
}

.thank-you__title {
    color: black !important;
}

.thank-you {
    text-align: center;
    h1,
    h2 {
        color: black;
    }
}
</style>