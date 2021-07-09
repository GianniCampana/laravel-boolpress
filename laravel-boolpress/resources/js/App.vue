<template>
<div>
    <Header />
    <main class="container">
        app vue
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
