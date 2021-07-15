<template>
    <div>
        <toolbar></toolbar>
        <app-footer></app-footer>
        <forum></forum>
    </div>
</template>

<script>
import Toolbar from './Toolbar'
import AppFooter from './AppFooter'
import Forum from './forum/forum'


export default {
    name: "AppHome",
    components: {Forum, Toolbar, AppFooter}
}
</script>

<style scoped>

</style>
