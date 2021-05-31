<template>
    <star-rating :read-only="true" :star-size="20" :increment=0.5 :rating="rat"></star-rating>
</template>

<script>
import StarRating from 'vue-star-rating'
    export default {
        components: {
            StarRating
        },
        props:['rating'],
        data(){
            return {
              rat:this.rating  
            }  
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
