<template>
    <div>
        <Carusel />
        <Intro />
        <AboutSection />
        <ServicesSection />
        <MealsSection />
        <Blog />
        <Footer />
    </div>
</template>

<script>
import Carusel from '../components/Carusel'
import Intro from '../components/Intro'
import AboutSection from '../components/AboutSection'
import ServicesSection from '../components/ServicesSection'
import MealsSection from '../components/MealsSection'
import Blog from '../components/Blog'
import Footer from '../components/Footer'

export default {
    components: {
        Carusel,
        Intro,
        AboutSection,
        ServicesSection,
        MealsSection,
        Blog,
        Footer
    },
    mounted() {
        window.scrollTo({top: 0, behavior: 'smooth'});
    }
}
</script>

<style lang="scss" scoped>

</style>