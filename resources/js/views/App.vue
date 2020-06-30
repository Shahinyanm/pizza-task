<template>
    <div v-if="!loading">
        <Navigation />
        <div>
            <router-view></router-view>
        </div>
        <Sidebar />
    </div>
</template>

<script>
import Navigation from '../components/Navigation'
import Sidebar from '../components/Sidebar'
export default {
    name: 'app',
    data() {
       return {
         loading: true  
       }  
    },
    components: {
        Navigation,
        Sidebar
    },
    async created() {
       await this.fetchData();
       this.loading = false;
    },
    methods: {
        async fetchData() {
            await this.$store.dispatch('getFoods')
            await this.$store.dispatch('getOrder')
        }
    }
}
</script>

<style lang="scss" scoped>

</style>