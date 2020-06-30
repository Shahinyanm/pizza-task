<template>
    <div class="col-md-4 text-center mb-4">
        <div class="menu-wrap">
            <div href="#" class="menu-img img mb-4" :style="{ backgroundImage: 'url(' + image + ')' }"></div>
            <div class="text">
                <h3><span href="#">{{name}}</span></h3>
                <p>{{description}}</p>
                <p class="price"><span>${{price}}</span></p>
                <b-form-spinbutton class="count" v-model="count" inline size="sm"></b-form-spinbutton>
                <p><a @click.prevent="addToCart" class="btn btn-white btn-outline-white">Add to cart</a></p>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
    name: 'MenuItem',
    data() {
        return {
            count: 1
        }
    },
    props: {
        id: {
            type: Number,
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
        image: {
            type: String,
            default: '',
        },
        price: {
            type: String,
            default: '',
        }
    },
    methods: {
        addToCart () {
            let {id, count} = this;

            this.currentOrder.data && this.currentOrder.data[id] && (count += this.currentOrder.data[id]);
            this.$store.dispatch('addToCart', {id, count})
        }
    },
    computed: {
        ...mapGetters([
            'currentOrder',
        ]),
    }
}
</script>

<style lang="scss">

</style>