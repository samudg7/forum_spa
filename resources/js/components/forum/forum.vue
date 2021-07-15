<template>
<v-container fluid grid-list-md>
    <v-layout row wrap>
        <v-flex xs8>
        <post></post>
        </v-flex>
        sidebar
    </v-layout>
</v-container>

</template>

<script>
import Post from './post'
export default {
    name: "forum",
    data(){
        return{
            posts:{}
        }
    },
    components:{Post},
    created(){
        axios.get('/api/post')
        .then(res => this.posts = res.data.data)
        .catch(error => console.log(error.response.data))
    }
}
</script>

<style scoped>

</style>
