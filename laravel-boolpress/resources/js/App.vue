<template>
<div>
    <Header />
    <main class="container">

   <!--    questo è un tag vue che riceve i componenti ignettati dal router!! -->
        <router-view></router-view>


    </main>
</div>
</template>

<script>
import Header from './components/Header.vue'
export default {
    name: 'App',
    components: {
        Header
    }

}
</script>

<style lang="scss">

@import '../sass/frontoffice/global';

</style>
